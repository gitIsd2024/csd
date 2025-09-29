<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use Yajra\Datatables\Facades\Datatables;

class exportController extends Controller
{
    public function index(){
        return view('presentation.presentationDetails');
    }

    public function exportPresenter(){
        return $presentation = DB::table('csd37th.tbl_presenterprofile')->get();
    }
    public function getPresenterInfo(Request $request){
        return $presentation = DB::table('csd37th.tbl_presenterprofile')->where('id',$request->id)->get();
    }
    public function getPresentationData(){
        $presentation = DB::table('csd37th.tbl_presenterprofile')
        ->select(
            DB::raw("CONCAT(lastNamePresenter, ', ',firstNamePresenter,' ',midNamePresenter) as 'fullName'"),
            'presentationType',
            'thematicArea',
            'endorsement_letter',
            'emailPresenter',
            'presentationTitle',
            'trackingNumber',
            'dateSubmitted',
            "id"
        )
        ->get();

        $presentation = collect($presentation);

        return Datatables::of($presentation)
        ->addColumn('actions', function ($presentation) {
            $href = '<a href="#" data-id="'.$presentation->id.'" class="btn btn-sm btn-danger btn-export"><i class="glyphicon glyphicon-trash"></i> Export</a>';                           
            return $href;
       })
        ->make(true);
    }

    public function view($filename)
    {

        $filePath = public_path('endorsement_letter/'. $filename);

        if (!file_exists($filePath)) {
            abort(404);
        }

        return response()->file($filePath);
    }



}
