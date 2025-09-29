<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use Yajra\Datatables\Facades\Datatables;
use Excel;

class exportParticipantsController extends Controller
{
    public function index(){
        return view('participants.participantDetails');
    }

    public function qrGenerator(){
        
         
        //$qr_code ="http://ugnaypalay.philrice.gov.ph:1053/csd/37th/registration-form/". "qazwsxedc";

        $qr_code ="https://ugnaypalay.philrice.gov.ph:441/csd/37th/registration-form/qazwsxedc";

        return  view('qr.qr', compact('qr_code'));
    }

    public function gnerateqr($code){

        $participants = DB::table('csd37th.tbl_participants')
        ->select('id','invitationCode', 'email',
            DB::raw("CONCAT(lastName, ', ',firstName,' ',midName,' ', extName) as 'fullName'"),        
            'philriceName',  
            'philriceStation',  
            'philriceUnit',  
            'affiliationName'   
        )->where('qrdata',$code)
        ->first();
        
        $p3 =  $participants->philriceName;
        if(!empty($participants->philriceStation)){
            $p3 .= ', '.  $participants->philriceStation;
        }
        if(!empty($participants->philriceUnit)){
            $p3 .= ', '.  $participants->philriceUnit;
        }
        if($p3 == "" || $p3 == null || $p3 == NULL){
            $p3 .= $participants->affiliationName;
        }
    
       
       // === Path to QR Code ===
         $qrFilePath = public_path("python\\qrcodes\\$code.png");

        if (!file_exists($qrFilePath)) {
            // Escape arguments
            $escaped1 = escapeshellarg($code);
            $escaped2 = escapeshellarg($participants->fullName);
            $escaped3 = escapeshellarg($p3);

            $pythonPath = "C:\\Users\\Administrator\\AppData\\Local\\Programs\\Python\\Python310\\python.exe";
            $scriptPath = "C:\\xampp3\\htdocs\\csd\\37th\\public\\python\\qr.py";

            $command = "$pythonPath $scriptPath $escaped1 $escaped2 $escaped3 2>&1";
            $output = shell_exec($command);
        }
    

        $qr_code =$code;
        return  view('qr.qr2', compact('qr_code'));
    }

    public function getParticipantsData(){
        $participants = DB::table('csd37th.tbl_participants')
        ->select('id','invitationCode', 'email',
            DB::raw("CONCAT(lastName, ', ',firstName,' ',midName,' ', extName) as 'fullName'"),
            'sex',
            'ageBracket',
            'contactNo',
            'philriceStation',
            'affiliationName',
            'isPhilriceEmp',
            'philriceUnit',
            'contactNo'
        )
        ->get();

        $participants = collect($participants);

        return Datatables::of($participants)
        ->make(true);
    }


    public function getParticipantsDataEdit($id){
    
        $participants = DB::table('csd37th.tbl_participants')->where('id', $id)->first();
        
        return response()->json($participants);
    }

    public function updateParticipant(Request $request){
        
        // Get the current timestamp
        //$currentTimestamp = Carbon::now('Asia/Manila'); 

        // Perform the update directly using query builder
        $updated = DB::table('csd37th.tbl_participants')
                    ->where('id', $request->id)
                    ->update([
                        'firstName' => $request->firstName,
                        'midName' => $request->middleName,
                        'lastName' => $request->lastName,
                        'philriceStation' => $request->station,
                        'affiliationName' => $request->affiliation
                    ]);

        if ($updated) {
            return response()->json(['success' => true, 'message' => 'Updated successfully.']);
        } else {
            return response()->json(['success' => false, 'message' => 'Update failed.']);
        }
    }


    public function deleteParticipant($id)
    {
        //$comment = DB::table('csd37th.tbl_participants')->findOrFail($id); 
        DB::table('csd37th.tbl_participants')->where('id', $id)->delete(); 

        return response()->json(['success' => true, 'message' => 'Your comment deleted successfully.']);
    }

    public function exportPresenterProfile(){
        $participants_array = [];
        $presenters = DB::table('csd37th.tbl_presenterprofile')
        ->get();

        foreach($presenters as $presenter){
            array_push($participants_array, array(
                'FirstName Presenter'=>$presenter->firstNamePresenter,
                'MidName Presenter'=>$presenter->midNamePresenter,
                'LastName Presenter'=>$presenter->lastNamePresenter,
                'Email Presenter'=>$presenter->emailPresenter,
                'Address Presenter'=>$presenter->current_address,
                'Contact No. Presenter'=>$presenter->mobileNumber_presenter,
                'Date Register'=>$presenter->dateSubmitted
            ));

        }


        $excel_data = json_decode(json_encode($participants_array), true);
                        $filename = 'Presenter Profile List';
                        return Excel::create($filename, function($excel) use ($excel_data) {
                            $excel->sheet("Profile List", function($sheet) use ($excel_data) {
                                $sheet->fromArray($excel_data);
                                $sheet->getStyle('A1:Y1')->getFill()->setFillType(\PHPExcel_Style_Fill::FILL_SOLID)->getStartColor()->setARGB('00B53F');
                                $border_style = array(
                                    'borders' => array(
                                        'allborders' => array(
                                            'style' => \PHPExcel_Style_Border::BORDER_THIN,
                                            'color' => array('argb' => '000000'),
                                        ),
                                    ),
                                );
                                $sheet->getStyle('A1:' . $sheet->getHighestColumn() . $sheet->getHighestRow())->applyFromArray($border_style);
                            });
                        })->setActiveSheetIndex(0)->download('xlsx');
    }

    
    public function exportParticipants(){
        $participants_array = [];
        $participants = DB::table('csd37th.tbl_participants')
        ->get();

        foreach($participants as $participant){

            array_push($participants_array, array(
                'Invitation Code' => $participant->invitationCode,
                'Email Address' => $participant->email,
                'PhilRice Employee?'=>$participant->isPhilriceEmp,
                'Participant Type'=>$participant->participantType,
                'First Name'=>$participant->firstName,
                'Middle Name'=>$participant->midName,
                'Last Name'=>$participant->lastName,
                'Ext. Name'=>$participant->extName,
                'Sex'=>$participant->sex,
                'Age Bracket'=>$participant->ageBracket,
                'Indigenous?'=>$participant->isIndigenous,
                'Indigenous Group'=>$participant->indigenousGroup,
                'With Disability?'=>$participant->withDisability,
                'Disability'=>$participant->disability,
                'Contact Number'=>$participant->contactNo,
                'PhilRice Name'=>$participant->philriceName,
                'PhilRice Station'=>$participant->philriceStation,
                'PhilRice Unit'=>$participant->philriceUnit,
                'PhilRice Position'=>$participant->philricePosition,
                'Affiliation Name'=>$participant->affiliationName,
                'Affiliation Address'=>$participant->affiliationAddress,
                'Affiliation Region'=>$participant->affiliationRegion,
                'Affiliation Position'=>$participant->affiliationPosition,
                'Affiliation Email'=>$participant->affiliationEmail,
                'Affiliation Contact No'=>$participant->affiliationContactNo,
                'Work Nature'=>$participant->workNature,
                'Specialization'=>$participant->specialization,
                'Reg No'=>$participant->regNo,
                'License No'=>$participant->licenseNo,
                'License Expiry'=>$participant->licenseExpiry,
                'Arrival Time'=>$participant->arrivalTime,
                'Arrival Date'=>$participant->arrivalDate,
                'Departure Time'=>$participant->departureTime,
                'Departure Date'=>$participant->departureDate,
                'Diet Restrictions'=>$participant->dietRestrictions,
                'Other'=>$participant->otherDiet   
            ));

        }


        $excel_data = json_decode(json_encode($participants_array), true);
                        $filename = 'Participants List';
                        return Excel::create($filename, function($excel) use ($excel_data) {
                            $excel->sheet("Participants List", function($sheet) use ($excel_data) {
                                $sheet->fromArray($excel_data);
                                $sheet->getStyle('A1:AJ1')->getFill()->setFillType(\PHPExcel_Style_Fill::FILL_SOLID)->getStartColor()->setARGB('00B53F');
                                $border_style = array(
                                    'borders' => array(
                                        'allborders' => array(
                                            'style' => \PHPExcel_Style_Border::BORDER_THIN,
                                            'color' => array('argb' => '000000'),
                                        ),
                                    ),
                                );
                                $sheet->getStyle('A1:' . $sheet->getHighestColumn() . $sheet->getHighestRow())->applyFromArray($border_style);
                            });
                        })->setActiveSheetIndex(0)->download('xlsx');
    }



    

}
