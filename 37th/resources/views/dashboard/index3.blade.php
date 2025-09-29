<!DOCTYPE html>
<html lang="en">
  
<style>

.loader{
  position: fixed;
  left: 0px;
  top: 0px;
  width: 100%;
  height: 100%;
  z-index: 9999;
  background: url('//upload.wikimedia.org/wikipedia/commons/thumb/e/e5/Phi_fenomeni.gif/50px-Phi_fenomeni.gif') 
              50% 50% no-repeat rgb(249,249,249);
              
} 

.loader2{
  position: fixed;
  left: 0px;
  opacity: 50%;
  top: 0px;
  width: 100%;
  height: 100%;
  z-index: 9999;
  background: url('//upload.wikimedia.org/wikipedia/commons/thumb/e/e5/Phi_fenomeni.gif/50px-Phi_fenomeni.gif') 
              50% 50% no-repeat rgb(255, 255, 255);
              
}


  

  /* Safari */
  @-webkit-keyframes spin {
    0% { -webkit-transform: rotate(0deg); }
    100% { -webkit-transform: rotate(360deg); }
  }
  
  @keyframes spin {
    0% { transform: rotate(0deg); }
    100% { transform: rotate(360deg); }
  }

    .rectangle {
            width: 400px; /* Width of the rectangle */
            height: 200px; /* Height of the rectangle */
            background-color: #dd75ff; /* For browsers that do not support gradients */
            background-image: linear-gradient(#dd75ff, #f3edf5);
            border: 1px solid #000; /* Optional border */
            border-radius: 25px;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 50px;
            
        } 

        .rectangle:hover {
  background-color: yellow;
  font-size: 18px;
}
  </style>


<head>

    @extends('header.css')
    <meta name="csrf-token" content="{{ csrf_token() }}">
  </head>
  <body>
    <div class="loader" ></div>
    <div class="loader2" style="display: none"></div>


  
      <div class="content-body">
        @yield('content')

      </div><!-- content-body -->

    @extends('layouts.js')
  </body>


</html>

