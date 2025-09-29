<?php



namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Yajra\Datatables\Datatables;
use DB;
use Excel;

use Auth;



class r4dController extends Controller {


    public function index() {
        return view('r4d_conference.index');
    }

    public function strat() {
        return view('strat-plan.index');
    }

    public function r4d() {
        return view('r4d_conference.app');
    }
    


    
    public function participants() {

        $participants_array = [];
        $participants = DB::table('csd37th.tbl_participants')
        ->get();

        foreach($participants as $participant){

            array_push($participants_array, array(
                'ID' => $participant->id,
                'Email Address' => $participant->email,
                'PhilRice Employee?'=>$participant->isPhilriceEmp,
                'Participant Type'=>$participant->participantType,
                'First Name'=>$participant->firstName,
                'Middle Name'=>$participant->midName,
                'Last Name'=>$participant->lastName,
                'Ext. Name'=>$participant->extName,
                'PhilRice Name'=>$participant->philriceName,
                'PhilRice Station'=>$participant->philriceStation,
                'PhilRice Unit'=>$participant->philriceUnit,
                'PhilRice Position'=>$participant->philricePosition,
                'Affiliation Name'=>$participant->affiliationName,
                'Affiliation Address'=>$participant->affiliationAddress,
                'Affiliation Region'=>$participant->affiliationRegion  
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

