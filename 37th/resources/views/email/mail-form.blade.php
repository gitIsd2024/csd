<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="utf-8">
        <style type="text/css">
            body{
                font-family: Arial;
            }
            a{
                text-decoration: none;
            }
            .orange-text{
                color: #6134f3 !important;
            }
            .orange-background{
                background: #6134f3 !important;
                color: #fff !important;
                padding: 1px 25px;
                border:1px solid #d5d5d5;

            }
            .tic-logo{
                margin-bottom: 25px;
            }
            .img-logo{
                max-width: 400px;
                margin:auto;
            }
            .signature{
                font-weight: bold;
            }
            .signature-logo{
                max-width: 250px;
            }
            .text-center{
                text-align:center;
            }
            .link-btn{
                padding: 10px;
                background: #3cb5d0;
                color: #fff !important;
                text-decoration: none;
                border-radius: 5px;
                border:1px solid #3cb5d0;
            }
            .panel-body{
                border:1px solid #d5d5d5;
                padding: 25px;
            }
        </style>


    </head>
    <body>

        <div class="container">
            <div class="col-md-12">
                <div class="panel panel-default">
                  <div class="panel-heading orange-background" style="border-radius: 10px 10px 0px 0px;">
                </div>
                  <div class="panel-body">

                    <p>{!!$messageData!!} 

                    <p>Please see this link for the registration form <a href="https://ugnaypalay.philrice.gov.ph:441/csd/37th/registration-form/{{$codeData}}"> Register Now</a></p>              
                    <!-- this ensures Gmail doesn't trim the email -->
                    <span style="opacity: 0"> {{ $dateNow }} </span>


                   
                  </div>
                </div>
            </div>
        </div>
    </body>
</html>