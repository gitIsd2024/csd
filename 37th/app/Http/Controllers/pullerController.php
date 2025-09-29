<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class pullerController extends Controller
{
     public function gitPull(){
	   
      
	   $taskName = 'gitPullAdmin'; // Replace with the name you gave to your task
       exec("schtasks /run /tn \"$taskName\"", $output, $returnVar);
       // Output the result (if needed)
       echo "<pre>$returnVar\n" . implode("\n", $output) . "</pre>";
      
   }
}
