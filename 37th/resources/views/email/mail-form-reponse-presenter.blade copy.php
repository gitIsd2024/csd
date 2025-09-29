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

        <p>This is to confirm your {{$type}} submission for the upcoming Ugnay Palay: The 35th National Rice R4D Conference, scheduled to be held on November 29 to December 1, 2023. Your contribution plays a crucial role in making our conference a platform for valuable insights and innovative research.</p>

        <p>Here are the details of your submission:</p>
        <p>Title: {{$title}}</p> 
        <p>Submission Type: {{$type}} </p>
        <p>Submission Date: {{$dateInserted}}</p>
        <p>Tracking Number: {{{$type}}}-000{{$tracking}}</p>
        
        <p>Our team of reviewers and experts will now begin the evaluation process. You can expect to receive feedback on your submission by 1st week of October. In the meantime, if you have any questions or need to make any updates to your <p>submission, please feel free to contact us at our email: ricesecretariat@gmail.com.</p>
        
        <p>We appreciate your dedication to contributing to the 35th Rice R4D Conference and look forward to the possibility of showcasing your work during our event. Thank you for being a part of this exciting journey.</p>

        <br>
        <p>Sincerely,</p>
        Conference Secretariat
        <span style="opacity: 0"> {{ $dateNow }} </span>
    </body>
</html>