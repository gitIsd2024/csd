<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="utf-8">
        <style type="text/css">
         
        </style>

    </head>
    <span style="opacity: 0"> {{ $dateNow }} </span>
    <body>
        
        Dear {{trim($fullName)}},
        <br>

        <p>Mabuhay!</p>

        <p>Thank you for registering for the <strong> 37th Ugnay Palay National Rice Research for Development (R4D) Conference, themed “{{$theme}}”</strong>, on {{$expectedData}} at the DA-CBC Plenary Hall, DA-PhilRice, Nueva Ecija.</p>

        <p>We look forward to your participation in this three-day event, where the rice science community and its stakeholders across the Philippines will gather for knowledge-sharing and networking. </p>

        <br>
        <p>Kindly ensure the following:</p>
        <p>1.   <a href="https://drive.google.com/file/d/1YT9Fxvh2aWCW0V7YuIHfnifdW5DKsUSO/view?usp=sharing">Review the program of activities</a>;</p> 
        <p>2.   Bring a blazer, jacket, shawl, or similar item for layering as the venue may be chilly; </p>
        <p>3.   Confirm your travel arrangements and <a href="https://drive.google.com/file/d/1KqZ_LsNMYnD539U6AUAx-nW5ffgLDOsf/view?usp=sharing">accommodation</a>, if needed; and</p>
        <p>4. Download and present your QR code: <br>
            Please <strong>download your QR code from the link provided here</strong> 
            (<a href="https://ugnaypalay.philrice.gov.ph:441/csd/37th/generate-qr/{{$qrdata}}">Generate QR</a>), 
            and <strong>present it upon entry</strong> as it will serve as your proof of attendance.
            </p>
        <br>
        <p>Should you have any queries or require further information, contact us at ricesecretariat@gmail.com. </p>
        
        <p>Thank you very much and we look forward to welcoming you at DA-PhilRice.</p>
        <br>
        <p>Sincerely,</p>
        Conference Secretariat

        <span style="opacity: 0"> {{ $dateNow }} </span>
    </body>
</html>