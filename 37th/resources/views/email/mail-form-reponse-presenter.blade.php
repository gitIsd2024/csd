<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="utf-8">
        <style type="text/css">
         
        </style>


    </head>

    <body>
        
        Dear {{trim($fullName)}},
        <br>
        <h4><strong> Mabuhay! </strong></h4>
        

        <p>Thank you for submitting your Paper/Poster for the <strong> 37th Ugnay Palay National Rice Research for Development (R4D) Conference, themed “{{$theme}}”</strong>,on 
        {{$expectedData}} at the DA-CBC Plenary Hall, DA-PhilRice, Nueva Ecija.</p>
        <br>
        <p>Your submission is key to enriching the conference’s discourse on rice R4DE innovations. Below are the details of your entry:</p>
        
        @if(!empty($data))
            @foreach ($data as $entry)
                <p><strong> Title: </strong>{{ $entry['presentationTitle'] }}</p>
                <p><strong> Thematic Area: </strong>{{ $entry['thematicArea'] }}</p>
                <p><strong> Submission Type: </strong>{{ $entry['presentationType'] }}</p>
                <p><strong> Submission Date: </strong>{{ $entry['dateSubmitted'] }}</p>
                <p><strong> Tracking Number: </strong>{{ $entry['trackingNumber'] }}</p>

                <hr>
            @endforeach
        @endif
        

        <br><br>
        <p>Our Technical Reviewers will evaluate your submission, and you will receive feedback by the {{$feedbackData}}. If you have any questions or need to update your submission, contact us at ricesecretariat@gmail.com.</p>
        <br>
        <p>In addition, please remember to:</p>
        <p>1.   <a href="https://drive.google.com/file/d/1YT9Fxvh2aWCW0V7YuIHfnifdW5DKsUSO/view?usp=sharing">Review the program of activities</a>;</p> 
        <p>2.   Bring suitable layers, as the venue may be cool; </p>
        <p>3.   Confirm your travel arrangements and <a href="https://drive.google.com/file/d/1KqZ_LsNMYnD539U6AUAx-nW5ffgLDOsf/view?usp=sharing">accommodation</a>, if needed; and</p>
        <p>4. Download and present your QR code: <br>
            Please <strong>download your QR code from the link provided here</strong> 
            (<a href="https://ugnaypalay.philrice.gov.ph:441/csd/37th/generate-qr/{{$qrdata}}">Generate QR</a>), 
            and <strong>present it upon entry</strong> as it will serve as your proof of attendance.
            </p>

        <br>
        <p>We appreciate your contribution and look forward to showcasing your work.</p>

        <br>
        <p>Sincerely,</p>
        Conference Secretariat


    </body>
</html>