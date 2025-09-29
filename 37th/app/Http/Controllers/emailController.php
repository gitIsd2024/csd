<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Mail;
use Auth;
use DB;
use Illuminate\Support\Facades\File;
use Yajra\Datatables\Facades\Datatables;
use Illuminate\Support\Facades\Artisan;

class emailController extends Controller
{

    public function clear_cache(){
        Artisan::call('config:clear');
        Artisan::call('cache:clear');

        return "cleared";
    }


    public function send_MailTest(Request $request){
        $datenow = date("Y-m-d H:i:s");
        $firstName ="joe";
        $midName ="c";
        $lastName ="irinco";
        $extName ="";
        $email = "gbrlmariano9@gmail.com";
        $datenowInserted = date("F j, Y");
        $fullName = strtoupper($firstName." ".$midName." ".$lastName." ".$extName);
        $data = ["fullName"=>($fullName),"dateNow"=> $datenow ];
        Mail::send('email.mail-form-reponse-presenter',$data, function($message) use ($email){          
            $message->to($email);
            $message->subject('Ugnay Palay: The 37th National Rice R4D Conference Entry Form');
        });
        $status ="error";
        if (count(Mail::failures()) > 0) {
           // save error
           DB::rollback();  
        }else{
            $this->logs("test Presenter Send Mail","this mail sent to ".$email.".");
            DB::commit(); 
          
            //save transaction success
        }



        $datenow = date("Y-m-d H:i:s");
        $fullName = strtoupper($firstName." ".$midName." ".$lastName." ".$extName);
        $data = ["fullName"=>($fullName),"dateNow"=> $datenow];
        Mail::send('email.mail-form-reponse',$data, function($message) use ($email){
            $message->to($email);
            $message->subject('Ugnay Palay: The 37th National Rice R4D Conference Registration 2');
        });
        $status ="error";
        if (count(Mail::failures()) > 0) {
           // save error
           DB::rollback();  
        }else{
            $this->logs("test Participant Send Mail","this mail sent to ".$email.".");
            DB::commit(); 
          return  $status ="sent";
            //save transaction success
        }
    }
    
    private function logs($transaction,$remarks){
        $userName= "Not login";
        if(isset(Auth::user()->username)){
            $userName = Auth::user()->username;
        }
        
        DB::table('csd37th.logs')->insert([
            'transaction'=>$transaction,
            'remarks' => $remarks
        ]);
    }

    public function index(){
        $userName = Auth::user()->username;
        $attachment =  DB::table('tbl_attachements')->where('uploaded_by_usernarme',$userName)->orderBy('date_created', "DESC")->first();

        $receipients =  DB::table('tbl_receipients')           
        ->get();
        $receipients_type =  DB::table('tbl_receipients')
        ->select('type')
        ->groupBy('type')      
        ->get();
        $mails = array();
        foreach ($receipients as $key => $value) {
            $tmpMail = str_replace(' ', '',$value->email);
            $emails = explode(";", $tmpMail);
          
            foreach ($emails as  $value2) {
                if($value2!=""){
                    array_push($mails, trim($value2));
                }
               
            }
        }       
        if(!isset( $attachment)){
            $attachment="N/A";
        }
        return view('email.index',compact('attachment','mails','receipients_type'));
    }
    public function mailBox(){
        return view('email.mail-box');
    }
    public function send_Mail(Request $request){
        $mailsData = array();
        $code= $request->code;


        foreach ( $request->mail as  $value) {

           if($value == "allParticipant" || $value == "allPresenter" || $value == "irincomanuel1@gmail.com" || $value == "j.arang@mail.philrice.gov.ph"){
            if(!isset($request->code) || $request->code==""){
                return "noCOde";
            }

                if($value == "allParticipant"){

                    $tbl_participants =  DB::table('tbl_participants')->select("email","lastName","firstName")->groupBy('email')->get();
                        foreach ($tbl_participants as $participant) {
                            $tmpMail  = $participant->email;
                            $fullName = $participant->firstName." ". $participant->lastName;
                            $returnData = $this->mailSender2($tmpMail,$request->message,$fullName,$code); 
                            if( $returnData == "already"){
                                continue;
                           }
                            
                        }
                }

                if($value == "allPresenter"){
                    
                    $tbl_presenterprofile =  DB::table('tbl_presenterprofile')->select("emailPresenter","lastNamePresenter","firstNamePresenter")->groupBy('emailPresenter')->get();
                        foreach ($tbl_presenterprofile as $presenterprofile) {
                            $tmpMail  = $presenterprofile->emailPresenter;
                            $fullName = $presenterprofile->firstNamePresenter." ". $presenterprofile->lastNamePresenter;
                            $returnData = $this->mailSender2($tmpMail,$request->message,$fullName,$code); 
                            if( $returnData == "already"){
                                continue;
                           }
                        }
                }

                if($value == "irincomanuel1@gmail.com" || $value == "j.arang@mail.philrice.gov.ph"){
                     $tbl_participants =  DB::table('tbl_participants')->select("email","lastName","firstName")->where('email',"j.arang@mail.philrice.gov.ph")->groupBy('email')->get();
                    $tmpMail  = $value;
                    foreach ($tbl_participants as $participant) {
                            $tmpMail  = $participant->email;
                            $fullName = $participant->firstName." ". $participant->lastName;
                            $returnData = $this->mailSender2($tmpMail,$request->message,$fullName,$code); 
                            if( $returnData == "already"){
                                continue;
                           }
                            
                    }

                }
                
           }else{
                if($value == "All"){
                    $receipients = DB::table('tbl_receipients')->get();            
                }else {
                   
                    $receipients =  DB::table('tbl_receipients')
                    ->where('type',$value)              
                    ->get();

                }
              
                if(count($receipients)>0){
                    foreach ($receipients as $key => $value) {
                        $tmpMail = str_replace(' ', '',$value->email);
                        $emails = explode(";", $tmpMail);
                    
                        foreach ($emails as  $value2) {
                            if($value2!=""){
                                array_push($mailsData, trim($value2));
                            }
                        
                        }

                    }  
                }else{
                    array_push($mailsData, $value);
                }

/*                 return  $mailsData;
                dd("joe");
 */
                }

                if(count($mailsData)>0){
                    foreach ($mailsData as $tmpMail) {
                        if($tmpMail =="" ){
                            continue;
                        } 
                   
                     /*    if($tmpMail == "bryan.s.delos.santos@gmail.com" || $tmpMail == "irincomanuel1@gmail.com" || $tmpMail ==  "ricesecretariat@gmail.com"){ */

                        $transactionData = DB::table('tbl_transaction')->where('email',$tmpMail)->whereDate('date_created', '=' ,date("Y-m-d"))->first();                        
                        if(isset($transactionData)){
                            continue;                            
                        }
                        
                       $returnData = $this->mailSender($tmpMail,$request->message); 

                        if($returnData == "no file"){
                            return "no file";
                        }   

                      /*   } */
                         
                    }
                }
                return "sent";
           }
           
       
    }
    private function mailSender($email,$message){
            $a = 0;
            $randomString = "";

            
            $emailChecker =  DB::table('tbl_receipients')->where('email','like','%'.$email.'%')->count();
            
            if($emailChecker == 0){
				
				DB::table('tbl_receipients')->insert([
                'email'=> $email,
                'type' =>  "additional"
            ]);
			
                $randomString ="VJBmOCD1vil";
            }
            else{
                while ($a == 0) {
                    $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
                    $charactersLength = strlen($characters);
                    $randomString = '';
                    for ($i = 0; $i < 10; $i++) {
                        $randomString .= $characters[random_int(0, $charactersLength - 1)];
                    }
                    $datacount = DB::table('tbl_transaction')->where('code',$randomString)->count();
                    if($datacount == 0){
                        $a = 1;
                    }
                }
            }
            
             
        
            $userName = Auth::user()->username;
            $messageData = $message;
            $datenow = date("Y-m-d H:i:s");
            
            $data = ['messageData' => nl2br($messageData,false),"codeData"=>$randomString,"dateNow"=> $datenow];
        
            $attachment =  DB::table('tbl_attachements')->where('uploaded_by_usernarme',$userName)->orderBy('date_created', "DESC")->first();
        
            $files = public_path('attachment/'. $attachment->file_name);        
            if(file_exists($files) == false){
                return "no file";
            }
        
            Mail::send('email.mail-form',$data, function($message) use ($data,$files,$email ){
                $message->to($email);
                //$message->cc('j.arang@mail.philrice.gov.ph');
                $message->subject('Rescheduling of the 37th Ugnay Palay National Rice Research for Development (R4D) Conference');
                $message->attach($files);
            });

            $userName = Auth::user()->username;
            $status ="error";
            if (count(Mail::failures()) > 0) {
               // save error
            }else{
                $status ="sent";
                //save transaction success
            }
            

            DB::table('tbl_transaction')->insert([
                'username'=>$userName ,
                'email'=> $email,
                'message'=> $messageData,
                'status'=>$status,
                'code' =>  $randomString
            ]);
           
    }


    private function mailSender2($email,$message,$fullName,$code){
        $a = 0;
        $randomString = "";
        $randomString = $code;
        
        // $emailChecker =  DB::table('tbl_transaction')->where('email','like','%'.$email.'%')->where('code',$randomString)->count();
        // if($emailChecker > 0){
        //     return "already";
        // }

        
        $userName = Auth::user()->username;
        $messageData = $message;
        $datenow = date("Y-m-d H:i:s");

        $files = public_path('attachment/Provisional_Program_37th_Ugnay_Palay.pdf');        
        if(file_exists($files) == false){
            return "no file";
        }

        
        $data = ['messageData' => nl2br($messageData,false),"dateNow"=> $datenow,"fullName"=>$fullName];
    
        Mail::send('email.mail-form-remainder',$data, function($message) use ($data,$email,$files ){
            $message->to($email);
            //$message->cc('j.arang@mail.philrice.gov.ph');
            $message->subject('Reminders for the 37th Ugnay Palay National Rice R4D Conference');
            $message->attach($files);
        });
        $userName = Auth::user()->username;
        $status ="error";
        if (count(Mail::failures()) > 0) {
           // save error
        }else{
            $status = "reminders";
            //save transaction success
        }

        DB::table('tbl_transaction')->insert([
            'username'=>$userName ,
            'email'=> $email,
            'message'=> $messageData,
            'status'=>$status,
            'code' =>  $randomString
        ]);
       
}
    public function uploadfile(Request $request){

        DB::beginTransaction();    
        try {

            $userName = Auth::user()->username;
            
            $file = $request->File('file');
            $filename =  $file->getClientOriginalName();
            $filenamewithextension = $file->getClientOriginalName();
            $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);
            $extension = $file->getClientOriginalExtension();
            
            $attachment =  DB::table('tbl_attachements')->where('uploaded_by_usernarme',$userName)->orderBy('date_created', "DESC")->first();

            if(isset( $attachment)){                
                if(unlink( $attachment->file_path)){
                    DB::table('tbl_attachements')->where('uploaded_by_usernarme',$userName)->delete();
                }
            }
            
            $dir="public/attachment/";
            //move the files to the correct folder
            if (!File::exists($dir)) {
                File::makeDirectory($dir, 0777, true, true);
            }
            
            //save details to db
            DB::table('tbl_attachements')
            ->insert([
                'file_name'=> $filename.'.'.$extension,
                'file_path'=> $dir.$filename.'.'.$extension,
                'file_size'=> $file->getSize(),
                'status'=>0,
                'uploaded_by_usernarme' =>$userName
            ]);

            $file->move($dir,$filename.'.'.$extension);
            DB::commit();
            return "uploaded";
            return response()->json([
                'message' => 'OK',
            ],200);
            } catch (Exception $e) {
                DB::rollback();
                 return response()->json([
                    'message'=>$e->getMessage()
                ],500);
            }
    }

    public function getFile(){
        $userName = Auth::user()->username;
        $attachment =  DB::table('tbl_attachements')->where('uploaded_by_usernarme',$userName)->orderBy('date_created', "DESC")->first();
        return compact('attachment');
    }

    public function getTransactionData()
    {
        $transaction = DB::table('csd37th.tbl_transaction')
        ->get();

        $transaction = collect($transaction);

        return Datatables::of($transaction)
        ->make(true);
    }

    public function functionGab()
    {
        
        // DB::table('tbl_transaction')->truncate();
        // echo "successfully deleted\n";

        // DB::table('tbl_transaction')
        // ->insert([
        //     'username'=> "gab",
        //     'email'=> "gabzmariano9@gmail.com",
        //     'message'=> "test",
        //     'status'=> "initial",
        //     'code'=> "qazwsxedc",
        //     'date_created'=> "2024-12-02 13:10:45",
        //     'date_updated'=> "2024-12-02 13:31:43"
        // ]);
        // echo "Insert operation completed successfully the qazwsxedc.";



        // //0
        // DB::table('tbl_receipients')
        // ->insert([
        //     'region'=> "",
        //     'province'=> "",
        //     'acronym'=> "",
        //     'agencyOrCooperative'=> "",
        //     'officeAddress'=> "",
        //     'headOrChair'=> "",
        //     'contactNo'=> "",
        //     'email'=> "calijohnbrian@gmail.com",
        //     'type' =>"additional"
        // ]);

        // //1
        // DB::table('tbl_receipients')
        // ->insert([
        //     'region'=> "",
        //     'province'=> "",
        //     'acronym'=> "",
        //     'agencyOrCooperative'=> "",
        //     'officeAddress'=> "",
        //     'headOrChair'=> "",
        //     'contactNo'=> "",
        //     'email'=> "gbrlmariano9@gmail.com;calijohnbrian@gmail.com",
        //     'type' =>"Attached Agencies"
        // ]);
        // //2
        // DB::table('tbl_receipients')
        // ->insert([
        //     'region'=> "",
        //     'province'=> "",
        //     'acronym'=> "",
        //     'agencyOrCooperative'=> "",
        //     'officeAddress'=> "",
        //     'headOrChair'=> "",
        //     'contactNo'=> "",
        //     'email'=> "gbrlmariano9@gmail.com;calijohnbrian@gmail.com",
        //     'type' =>"Bureaus"
        // ]);
        // //3
        // DB::table('tbl_receipients')
        // ->insert([
        //     'region'=> "",
        //     'province'=> "",
        //     'acronym'=> "",
        //     'agencyOrCooperative'=> "",
        //     'officeAddress'=> "",
        //     'headOrChair'=> "",
        //     'contactNo'=> "",
        //     'email'=> "gbrlmariano9@gmail.com;calijohnbrian@gmail.com",
        //     'type' =>"DA-Regional Offices"
        // ]);
        // //4
        // DB::table('tbl_receipients')
        // ->insert([
        //     'region'=> "",
        //     'province'=> "",
        //     'acronym'=> "",
        //     'agencyOrCooperative'=> "",
        //     'officeAddress'=> "",
        //     'headOrChair'=> "",
        //     'contactNo'=> "",
        //     'email'=> "gbrlmariano9@gmail.com;calijohnbrian@gmail.com",
        //     'type' =>"Farmer Partners"
        // ]);
        // //5
        // DB::table('tbl_receipients')
        // ->insert([
        //     'region'=> "",
        //     'province'=> "",
        //     'acronym'=> "",
        //     'agencyOrCooperative'=> "",
        //     'officeAddress'=> "",
        //     'headOrChair'=> "",
        //     'contactNo'=> "",
        //     'email'=> "gbrlmariano9@gmail.com;calijohnbrian@gmail.com",
        //     'type' =>"LGUs"
        // ]);
        // //6
        // DB::table('tbl_receipients')
        // ->insert([
        //     'region'=> "",
        //     'province'=> "",
        //     'acronym'=> "",
        //     'agencyOrCooperative'=> "",
        //     'officeAddress'=> "",
        //     'headOrChair'=> "",
        //     'contactNo'=> "",
        //     'email'=> "gbrlmariano9@gmail.com;calijohnbrian@gmail.com",
        //     'type' =>"Non-Government Organizations"
        // ]);
        // //7
        // DB::table('tbl_receipients')
        // ->insert([
        //     'region'=> "",
        //     'province'=> "",
        //     'acronym'=> "",
        //     'agencyOrCooperative'=> "",
        //     'officeAddress'=> "",
        //     'headOrChair'=> "",
        //     'contactNo'=> "",
        //     'email'=> "gbrlmariano9@gmail.com;calijohnbrian@gmail.com",
        //     'type' =>"Private Companies/Organizations"
        // ]);
        // //8
        // DB::table('tbl_receipients')
        // ->insert([
        //     'region'=> "6",
        //     'province'=> "",
        //     'acronym'=> "RAFC",
        //     'agencyOrCooperative'=> "",
        //     'officeAddress'=> "",
        //     'headOrChair'=> "Buen S. Mondejar",
        //     'contactNo'=> "9998803022",
        //     'email'=> "rafc6@yahoo.com; popa.cooperative@gmail.com",
        //     'type' =>"Regional AFCs"
        // ]);
        // //9
        // DB::table('tbl_receipients')
        // ->insert([
        //     'region'=> "",
        //     'province'=> "",
        //     'acronym'=> "",
        //     'agencyOrCooperative'=> "",
        //     'officeAddress'=> "",
        //     'headOrChair'=> "",
        //     'contactNo'=> "",
        //     'email'=> "gbrlmariano9@gmail.com;calijohnbrian@gmail.com",
        //     'type' =>"Regional Consortia"
        // ]);
        // //10
        // DB::table('tbl_receipients')
        // ->insert([
        //     'region'=> "",
        //     'province'=> "",
        //     'acronym'=> "",
        //     'agencyOrCooperative'=> "",
        //     'officeAddress'=> "",
        //     'headOrChair'=> "",
        //     'contactNo'=> "",
        //     'email'=> "gbrlmariano9@gmail.com;calijohnbrian@gmail.com",
        //     'type' =>"Science City Community"
        // ]);
        // //11
        // DB::table('tbl_receipients')
        // ->insert([
        //     'region'=> "1",
        //     'province'=> "La Union",
        //     'acronym'=> "",
        //     'agencyOrCooperative'=> "",
        //     'officeAddress'=> "",
        //     'headOrChair'=> "Gov. RAPHAELLE VERONICA A. ORTEGA-DAVID",
        //     'contactNo'=> "Tel: (072) 888-3608; 888-6035; (072) 242-5550; 888-6035; 888-3608; 888-4453",
        //     'email'=> "opaglaunion@yahoo.com; govpacoy@launion.gov.ph; info@launion.gov.ph; pglu_opag@launion.gov.ph",
        //     'type' =>"LGUs"
        // ]);

        // DB::table('tbl_receipients')
        // ->insert([
        //     'region'=> "2",
        //     'province'=> "Cagayan",
        //     'acronym'=> "",
        //     'agencyOrCooperative'=> "",
        //     'officeAddress'=> "",
        //     'headOrChair'=> "Gov. Manuel N. Mamba, M.D.",
        //     'contactNo'=> "Tel: (078) 304-0083; 377-0949; (078) 304-4048; (078) 304-4048",
        //     'email'=> "gov.mamba@gmail.com; ppmiucagayan@gmail.com; 2025cagayanpio@gmail.com; OPACAGAYAN02@gmail.com;gov.mamba@cagayan.gov.ph",
        //     'type' =>"LGUs"
        // ]);
        // DB::table('tbl_receipients')
        // ->insert([
        //     'region'=> "6",
        //     'province'=> "Iloilo",
        //     'acronym'=> "",
        //     'agencyOrCooperative'=> "",
        //     'officeAddress'=> "",
        //     'headOrChair'=> "Gov. ARTHUR R. DEFENSOR, JR.",
        //     'contactNo'=> "Tel: (033) 337-1739; 336-8151 Fax: (033) 337-4230; 336-3669 OPAg: (033) 328-7930/7900, local 130; telefax (033) 337-3062 ",
        //     'email'=> "art_defensor@yahoo.com; governor@iloilo.gov.ph; toto.defensor@iloilo.gov.ph; ilo_agriculture@yahoo.com.ph; agriculture@iloilo.gov.ph",
        //     'type' =>"LGUs"
        // ]);
        
        // echo "Insert operation completed successfully. gbrlmariano9@gmail.com;calijohnbrian@gmail.com";
        
        // echo "Insert operation completed successfully";


        // DB::table('tbl_receipients')
        // ->insert([
        //     'region'=> "",
        //     'province'=> "",
        //     'acronym'=> "",
        //     'agencyOrCooperative'=> "",
        //     'officeAddress'=> "",
        //     'headOrChair'=> "",
        //     'contactNo'=> "",
        //     'email'=> "gbrlmariano9@gmail.com;gabzmariano@gmail.com",
        //     'type' =>"Regional Consortia"
        // ]);


        // DB::table('tbl_receipients')
        // ->insert([
        //     'region'=> "",
        //     'province'=> "",
        //     'acronym'=> "",
        //     'agencyOrCooperative'=> "",
        //     'officeAddress'=> "",
        //     'headOrChair'=> "",
        //     'contactNo'=> "",
        //     'email'=> "calijohnbrian@gmail.com",
        //     'type' =>"additional"
        // ]);

        // DB::table('tbl_receipients')
        // ->insert([
        //     'region'=> "",
        //     'province'=> "",
        //     'acronym'=> "",
        //     'agencyOrCooperative'=> "",
        //     'officeAddress'=> "",
        //     'headOrChair'=> "",
        //     'contactNo'=> "",
        //     'email'=> "alrosas.csd@gmail.com",
        //     'type' =>"additional"
        // ]);
        
        // echo "Insert operation completed successfully.\n";

        // DB::table('tbl_receipients')->where('email','LIKE', '%'."Provincial Administrator:".'%')->delete();
        // echo "delete\n";

        

        // DB::table('tbl_receipients')->where('email','LIKE', '%'."gov.mamba@gmail.com".'%')->delete();
        // echo "delete\n";



        // DB::table('tbl_receipients')->where('email', 'LIKE', '%'."caarcilla@pnri.dost.gov.ph".'%')->delete();
        // echo "delete\n";

        // DB::table('tbl_receipients')
        // ->insert([
        //     'region'=> "NCR",
        //     'province'=> "Quezon City",
        //     'acronym'=> "PNRI-DOST",
        //     'agencyOrCooperative'=> "Philippine Nuclear Research Institute",
        //     'officeAddress'=> "Commonwealth Avenue, Diliman, Quezon City",
        //     'headOrChair'=> "DIRECTOR CARLO A. ARCILLA, PhD",
        //     'contactNo'=> "Trunkline: (02) 8929-6010 to 19 Tel.: Secretary, OD - (02) 8929-6011, local 287 Direct Line: (02) 8920-8738 Main Fax No.: (02) 8920-1646",
        //     'email'=> "gpespina@pnri.dost.gov.ph",
        //     'type' =>"Attached Agencies"
        // ]);

        //$transactions = DB::table('tbl_receipients')->where('type',"Attached Agencies")->get();
        //dd($transactions);

        
        //echo "test";


        // $count = tbl_receipients::count();
        // echo $count;

        // DB::statement("ALTER TABLE tbl_presenterprofile CHANGE emailPresenter1 emailPresenter VARCHAR(255)");
        // echo "renamed";




        //echo "no query";

    }


}
