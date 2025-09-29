<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Storage;
use DB;
use Mail;
use Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Artisan;



class registrationController extends Controller
{

    public function send_MailComments(Request $request){
        $fullName =  $request->name;
        $comments = $request->comments;
        $rate = $request->rating;
        $datenow = date("Y-m-d H:i:s");
        $firstName ="Gabriel";
        $midName ="A.";
        $lastName ="Mariano";
        $extName ="";
        // $email = "ricesecretariat@gmail.com";
        $email = "gbrlmariano9@gmail.com";
        $datenowInserted = date("F j, Y");
        
        $data = ["fullName"=>($fullName), "dateNow"=> $datenow, "comments"=>($comments), "rate"=>($rate), ];
        Mail::send('email.mail-form-comment',$data, function($message) use ($email){          
            $message->to($email);
            $message->subject('37th Ugnay Palay National Rice R4D Conference Comments and Suggestions');
        });

        $status ="error";
        if (count(Mail::failures()) > 0) {
           // save error      
        }else{
           return "sent";
        }
    }

    public function uploadfilee(Request $request){

        



        DB::beginTransaction();    
        try {
            // Get the current date and time in a safe format for filenames
            $currentDateTime = date('Y-m-d_H-i-s');
            
            // Retrieve the file from the request
            $file = $request->File('file');
            
            // Get the original filename and extension
            $filenamewithextension = $file->getClientOriginalName();
            $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);
            $extension = $file->getClientOriginalExtension();

            if ($extension !== 'pdf') {
                return response()->json(['status' => 'error', 'message' => 'Only PDF files are allowed.'], 400);
            }
            


            $filenameText = $request->input('filenameText');
            if($filenameText!=""){
                $attachment = DB::table('table_endorsement_letter')->where('file_name', $filenameText)->first();
                if(isset($attachment)){
                    if(unlink($attachment->file_path)){
                        DB::table('table_endorsement_letter')->where('file_name',$filenameText)->delete();
                    }
                }
                
            }

                
            $dir="public/endorsement_letter/";
            if (!File::exists($dir)) {
                File::makeDirectory($dir, 0777, true, true);
            }   


            // Construct the new filename with the date and time
            $newFilename = $filename . '_' . $currentDateTime . '.' . $extension;

            //save details to db
            DB::table('table_endorsement_letter')
            ->insert([
                'file_name'=> $newFilename, 
                'file_path'=> $dir.$newFilename 
            ]);


            $file->move($dir, $newFilename);
            DB::commit();
            return [
                'filename' => $filename.".".$extension,
                'newFilename' => $newFilename,
                'status' => 'uploaded',
            ];
        } 
        catch (Exception $e) {
            DB::rollback();
             return response()->json([
                'message'=>$e->getMessage()
            ],500);
        }
    }



    public function index($invitationCode){
        
       // if($invitationCode == "ABCDefgHI"){
            $checkCode = DB::table('csd37th.tbl_transaction')
            ->where('code', 'LIKE', $invitationCode)
            ->get();
                
            $getUnits = DB::table('csd37th.lib_units')
            ->select('unit_name')
            ->orderBy('unit_name', 'asc')
            ->groupBy('unit_name')
            ->get();

            $getOffices = DB::table('csd37th.lib_offices')
            ->select('office_name')
            ->where('office_name','!=','Internal Audit Unit')
            ->orderBy('office_name', 'asc')
            ->groupBy('office_name')
            ->get();

            $getDivisions = DB::table('csd37th.lib_divisions')
            ->select('division_name')
            ->where('division_name','!=','Development Division')
            ->where('division_name','!=','Research Division')
            ->where('division_name','NOT LIKE','%RCEF%')
            ->orderBy('division_name', 'asc')
            ->groupBy('division_name')
            ->get();

            // dd($getDivisions);

            $getPositions = DB::table('csd37th.lib_positions')
            ->select('position_name')
            ->orderBy('position_name', 'asc')
            ->groupBy('position_name')
            ->get();      

            $emails = DB::table('csd37th.tbl_participants')
            ->select('email')
            ->get();      


            if (!$checkCode) {
                //return view('forms.codeNotFound', compact('invitationCode'));
            } else {
                return view('forms.registration-form', compact('invitationCode','getUnits','getOffices','getDivisions','getPositions','emails'));
            }
       //}
       //else{
       //    return view('forms.codeNotFound', compact('invitationCode'));
       //}

        

    }
    public function generate_qr($code,$fullName,$p3){
         // Escape arguments
         $escaped1 = escapeshellarg($code);
         $escaped2 = escapeshellarg($fullName);
         $escaped3 = escapeshellarg($p3);

         $pythonPath = "C:\\Users\\Administrator\\AppData\\Local\\Programs\\Python\\Python310\\python.exe";
         $scriptPath = "C:\\xampp3\\htdocs\\csd\\37th\\public\\python\\qr.py";

         $command = "$pythonPath $scriptPath $escaped1 $escaped2 $escaped3 2>&1";
         $output = shell_exec($command);
    }

    public function saveParticipantProfile(Request $request)
    {
        $state = 0;
        $uniqueCode = "";

        while ($state == 0) {
            $uniqueCode = date('YmdHis') . strtoupper(substr(md5(uniqid()), 0, 6));
            
            $count = DB::table('csd37th.tbl_participants')->where('qrdata', $uniqueCode)->count();
            
            if ($count == 0) {
                $state = 1;
                break;
            }
        }
        
        
        DB::beginTransaction();
        try {
           $returnData = DB::table('csd37th.tbl_participants')
            ->insert([
            "invitationCode"=> $request->invitationCode,
            "email"=> $request->email,
            "qrdata" => $uniqueCode,
            "is_tour"=> $request->tour,
            "isPhilriceEmp"=> $request->philrice,
            "participantType"=> $request->participantType,
            "firstName"=> $request->firstName,
            "midName"=> $request->midName,
            "lastName"=> $request->lastName,
            "extName"=> $request->extName,
            "sex"=> $request->sex,
            "ageBracket"=> $request->ageBracket,
            "isIndigenous"=> $request->isIndigenous,
            "indigenousGroup"=> $request->indigenousGroup,
            "withDisability"=> $request->withDisability,
            "disability"=> $request->disability,
            "contactNo"=> $request->contactNo,
            "philriceName"=> $request->philriceName,
            "philriceStation"=> $request->philriceStation,
            "affiliationCategory"=> $request->affiliationCategory,
            "philriceUnit"=> $request->philriceUnit,
            "philricePosition"=> $request->philricePosition,
            "affiliationName"=> $request->affiliationName,
            "affiliationAddress"=> $request->affiliationAddress,
            "affiliationRegion"=> $request->affiliationRegion,
            "affiliationPosition"=> $request->affiliationPosition,
            "affiliationEmail"=> $request->affiliationEmail,
            "affiliationContactNo"=> $request->affiliationContactNo,
            "workNature"=> $request->workNature,
            "specialization"=> $request->specialization,
            "regNo"=> $request->regNo,
            "licenseNo"=> $request->licenseNo,
            "licenseExpiry"=> $request->licenseExpiry,
            "arrivalTime"=> $request->arrivalTime,
            "arrivalDate"=> $request->arrivalDate,
            "departureTime"=> $request->departureTime,
            "departureDate"=> $request->departureDate,
            "dietRestrictions"=> $request->dietRestrictions,
            "otherDiet"=> $request->otherDiet
        ]);
            
        
            if($returnData){
              
                $datenow = date("Y-m-d H:i:s");
                $fullName = strtoupper($request->firstName." ".$request->midName." ".$request->lastName." ".$request->extName);

                $theme ="40 Years of Rice Innovations: Sowing Progress, Harvesting Prosperity";
                $expectedData ="November 25-27, 2025";



                $data = ["fullName"=>($fullName),"dateNow"=> $datenow,"theme"=> $theme,"expectedData"=> $expectedData, 'qrdata'=> $uniqueCode];

                Mail::send('email.mail-form-reponse',$data, function($message) use ($request){
                    $message->to($request->email);
                    $message->subject('37th Ugnay Palay National Rice R4D Conference Registration');
                });
                
                $status ="error";
                if (count(Mail::failures()) > 0) {
                   // save error
                   DB::rollback();  
                }else{
                    $this->logs("Participant Send Mail","this mail sent to ".$request->email.".");

                    $p3 =   $request->philriceName;
                    if(!empty($request->philriceStation)){
                        $p3 .= ', '.  $request->philriceStation;
                    }
                    if(!empty($request->philriceUnit)){
                        $p3 .= ', '.  $request->philriceUnit;
                    }
                    
                    if($request->philrice == "external"){
                        $p3 = $request->affiliationName;
                    }

                    $this->generate_qr($uniqueCode,$fullName,$p3);

                    DB::commit(); 
                  return  $status ="sent";
                    //save transaction success
                }

            }

        } catch (\Throwable $th) {
             DB::rollback();   
            // Log the error or handle it as needed
            return response()->json([
                'message' => 'An error occurred while saving the participant profile.',
                'error' => $th->getMessage()], 500);
             // throw $th;
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

    public function savePresenterProfile(Request $request)
    {

        $state = 0;
        $uniqueCode = "";

        while ($state == 0) {
            $uniqueCode = date('YmdHis') . strtoupper(substr(md5(uniqid()), 0, 6));
            
            $count = DB::table('csd37th.tbl_participants')->where('qrdata', $uniqueCode)->count();
            
            if ($count == 0) {
                $state = 1;
                break;
            }
        }
        
        DB::beginTransaction();
        
        try {
        

        $returnResponse1 = DB::table('csd37th.tbl_participants')
        ->insert([
            "invitationCode"=> $request->invitationCode,
            "email"=> $request->email,
            "is_tour"=> $request->tour,
            "qrdata" => $uniqueCode,
            "isPhilriceEmp"=> $request->philrice,
            "participantType"=> $request->participantType,
            "firstName"=> $request->firstName,
            "midName"=> $request->midName,
            "lastName"=> $request->lastName,
            "extName"=> $request->extName,
            "sex"=> $request->sex,
            "ageBracket"=> $request->ageBracket,
            "isIndigenous"=> $request->isIndigenous,
            "indigenousGroup"=> $request->indigenousGroup,
            "affiliationCategory"=> $request->affiliationCategory,
            "withDisability"=> $request->withDisability,
            "disability"=> $request->disability,
            "contactNo"=> $request->contactNo,
            "philriceName"=> $request->philriceName,
            "philriceStation"=> $request->philriceStation,
            "philriceUnit"=> $request->philriceUnit,
            "philricePosition"=> $request->philricePosition,
            "affiliationName"=> $request->affiliationName,
            "affiliationAddress"=> $request->affiliationAddress,
            "affiliationRegion"=> $request->affiliationRegion,
            "affiliationPosition"=> $request->affiliationPosition, 
            "affiliationEmail"=> $request->affiliationEmail,
            "affiliationContactNo"=> $request->affiliationContactNo,
            "workNature"=> $request->workNature,
            "specialization"=> $request->specialization,
            "regNo"=> $request->regNo,
            "licenseNo"=> $request->licenseNo,
            "licenseExpiry"=> $request->licenseExpiry,
            "arrivalTime"=> $request->arrivalTime,
            "arrivalDate"=> $request->arrivalDate,
            "departureTime"=> $request->departureTime,
            "departureDate"=> $request->departureDate,
            "dietRestrictions"=> $request->dietRestrictions,
            "otherDiet"=> $request->otherDiet
        ]);

        


        if($returnResponse1){

            $datenow = date("Y-m-d H:i:s");
            $datenowInserted = date("F j, Y");
            $fullName = strtoupper($request->firstName." ".$request->midName." ".$request->lastName." ".$request->extName);
            

            $jsonData = $request->database_presenter;
            
            // Decode JSON data into PHP array
            $dataArray = json_decode($jsonData, true);
            
            // Initialize the data array
            $data = []; 

            // Loop through each item in the array
            foreach ($dataArray as $item) {
                // Extract and transform relevant fields
                $data[] = [
                    'firstNamePresenter' => $item['firstNamePresenter'],
                    'presentationTitle' => $item['presentationTitle'],
                    'thematicArea' => $item['thematicArea'],
                    'presentationType' => $item['presentationType'],
                    'dateSubmitted' => $item['dateSubmitted'],
                    'trackingNumber' => $item['trackingNumber'],
                ];
            }
            $theme ="40 Years of Rice Innovations: Sowing Progress, Harvesting Prosperity";
            $expectedData ="November 25-27, 2025";
            $feedbackData ="4th week of October 2025";

            Mail::send('email.mail-form-reponse-presenter', ['data' => $data, 'fullName' => $fullName, 'theme' => $theme, 'expectedData' => $expectedData, 'feedbackData' => $feedbackData,'qrdata'=> $uniqueCode ], function($message) use ($request) {
                $message->to($request->email);
                $message->subject('37th Ugnay Palay National Rice R4D Conference Paper/Poster Entry Form');
            });

            $status ="error";
            if (count(Mail::failures()) > 0) {
               // save error
               DB::rollback();  
            }else{
                $this->logs("Presenter Send Mail","this mail sent to ".$request->email.".");

                $p3 =   $request->philriceName;
                if(!empty($request->philriceStation)){
                    $p3 .= ', '.  $request->philriceStation;
                }
                if(!empty($request->philriceUnit)){
                    $p3 .= ', '.  $request->philriceUnit;
                }
                if($p3 == "" || $p3 == null || $p3 == NULL){
                    $p3 .= $request->affiliationName;
                }

                $this->generate_qr($uniqueCode,$fullName,$p3);
                
                DB::commit(); 
             return $status ="sent";
                   //save transaction success
            }
        }
       
    } catch (\Throwable $th) {
         DB::rollback();   
        //throw $th;
    }
    }



    public function savePresenterProfile1(Request $request)
    {
        DB::beginTransaction();
        
        try {
            $tableData = $request->tableData;

            foreach ($tableData as $row) {

                $presentationTypeCount = DB::table('tbl_presenterprofile')->where('presentationType',$row['presentationType'])->count();
                $presentationTypeCountData = $presentationTypeCount+1;  


                $returnResponse2 = DB::table('csd37th.tbl_presenterprofile')
                ->insert([
                    "invitationCode" => $request->invitationCode,
                    'trackingNumber'=>   $row['presentationType'] . "-000" . $presentationTypeCountData,
                    "presentationType" =>  $row['presentationType'],
                    "thematicArea" => $row['thematicArea'],
                    "presentationTitle" => $row['presentationTitle'],
                    "authors" => $row['authors'],
                    "abstract" => $row['abstract'],
                    "keywords" => $row['keywords'],
                    "endorsement_letter" => $request->endorsement_letter,
                    "firstNamePresenter" => $request->firstNamePresenter,
                    "midNamePresenter" => $request->midNamePresenter,
                    "lastNamePresenter" => $request->lastNamePresenter,
                    "current_address" => $request->current_address,
                    "mobileNumber_presenter" => $request->mobileNumber_presenter,
                    "emailPresenter" => $request->email_presenter
                ]);
            }   

            DB::commit(); 

            $data = DB::table('tbl_presenterprofile')->where('emailPresenter', $request->email_presenter)->get();
            $status = "inserted";
            
            return [
                'status' => $status,
                'data' => $data,
            ];

           
            } catch (\Throwable $th) {
                 DB::rollback();   
                //throw $th;
            }
    }


}
