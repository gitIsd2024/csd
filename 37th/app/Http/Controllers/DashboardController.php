<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Yajra\Datatables\Datatables;
use DB;


use Auth;

class DashboardController extends Controller {


    public function index() {
        return view('dashboard.index');
    }

    public function dashboard(){
        $url = "https://philricescannerapp-default-rtdb.firebaseio.com/users.json?auth=AIzaSyC1id1bulVq3lLUJhkzaNBKH363gp4WqEc";
        $content = file_get_contents($url);

      $data = json_decode($content);
      $data = json_decode(json_encode($data), true);
      DB::table('tbl_monitoring')->truncate();
      foreach ($data as $key => $value) {
          DB::table('tbl_monitoring')->insert($value);
      }
      

      $result = DB::table('tbl_monitoring')
      ->selectRaw("
          COUNT(CASE 
              WHEN `day1timeAttended` IS NOT NULL 
              AND `day1timeAttended` != '' 
              AND `day1timeAttended` NOT IN ('Not Attended', 'n/a', 'NA') THEN 1 
          END) AS day1,
          COUNT(CASE 
              WHEN `day2timeAttended` IS NOT NULL 
              AND `day2timeAttended` != '' 
              AND `day2timeAttended` NOT IN ('Not Attended', 'n/a', 'NA') THEN 1 
          END) AS day2,
          COUNT(CASE 
              WHEN `day3timeAttended` IS NOT NULL 
              AND `day3timeAttended` != '' 
              AND `day3timeAttended` NOT IN ('Not Attended', 'n/a', 'NA') THEN 1 
          END) AS day3,
          COUNT(CASE 
              WHEN `day4timeAttended` IS NOT NULL 
              AND `day4timeAttended` != '' 
              AND `day4timeAttended` NOT IN ('Not Attended', 'n/a', 'NA') THEN 1 
          END) AS day4
      ")->first();
  

    

    return view('dashboard.index2',compact('result'));
       
    }
}
