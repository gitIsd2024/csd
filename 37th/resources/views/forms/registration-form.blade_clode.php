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


  
  /* Safari */
  @-webkit-keyframes spin {
    0% { -webkit-transform: rotate(0deg); }
    100% { -webkit-transform: rotate(360deg); }
  }
  
  @keyframes spin {
    0% { transform: rotate(0deg); }
    100% { transform: rotate(360deg); }
  }

  .icon-box {
  display: inline-block;
  border: 1px solid #000;
  padding: 5px;
}

  .header{
    /* position: relative; */
  }

  .banner{
    border-radius: 1em;
    /* padding: 2em; */
    position: relative;
    background: white;
    /* background: linear-gradient(90deg, rgba(105,0,179,1) 0%, rgba(38,0,156,1) 70%, rgba(139,0,143,1) 100%); */
    background-image: url('../resources/bg/banner11.png');
    width: 100%;
    height: 100%;
    padding-bottom: 15em;
  }

  .banner ._banner_content{
    width: 60%;
    padding: 1em 2em;
    z-index: 1;
  }

  .banner ._banner_title{
    color: rgba(201,192,0,1);
    font-weight: 900;
  }

  ._icon{
    color: #c0a8d1;
  }

  .animatedFadeIn{
    animation: fadeIn 0.4s ease-in-out forwards;
  }

  .scale-up-center {
	  -webkit-animation: scale-up-center 0.4s cubic-bezier(0.230, 1.000, 0.320, 1.000) forwards;
    animation: scale-up-center 0.4s cubic-bezier(0.230, 1.000, 0.320, 1.000) forwards;
  }

  body {
    background-image: url('../resources/bg/bg.jpg');
    background-size: cover;
    border: none;
  }

  .logos{
    position: absolute;
    right: 3%;
    height: 30%;
    transform: translateY(20%);
    max-height: 135px;
    z-index: 1;
  }

  .ugnaypalay{
    width: 50%;
  }

  #registrationForm{
    transform: translateY(-5em);
  }

  #regForm, #classify{
    transform: translateY(1em);
  }
  
  .philriceBanner{
    position: absolute;
    bottom: -2.5%;
    left: 0;
    right: 0;
    z-index: 0;
    width: 100%;
  }

    @media screen and (max-width: 500px) {


      #registrationForm{
      transform: translateY(0em);
      }


      #regForm, #classify{
        transform: translateY(0em);
      }
      .banner{
        padding-bottom: 8em;
      }

      .ugnaypalay{
      width: 100%;
      }
      .banner ._banner_content{
        width: 100%;
        padding: 1em 2em;
        z-index: 1;
      }
      .logos{
        position: absolute;
        bottom: 8%;
        left: 50%;
        height: 20vw;
        transform: translateX(-50%);
        max-height: 135px;
      }

      #abstract{
        resize: none;
      }
    }


    @-webkit-keyframes scale-up-center {
      0% {
        -webkit-transform: scale(0.5);
                transform: scale(0.5);
      }
      100% {
        -webkit-transform: scale(1);
                transform: scale(1);
      }
    }

    @keyframes scale-up-center {
      0% {
        -webkit-transform: scale(0.5);
                transform: scale(0.5);
      }
      100% {
        -webkit-transform: scale(1);
                transform: scale(1);
      }
    }

    @keyframes fadeIn {
      0%{
        opacity: 0;
        transform: translateX(1em);
      }
      100%{
        opacity: 1;
        transform: translateX(0);
      }
    }

    body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            color: #333;
            margin: 20px;
        }

        .container {
            max-width: 600px;
            margin: auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        h1 {
            color: #009688;
        }

        p {
            line-height: 1.6;
        }

        a {
            color: #009688;
            text-decoration: none;
            font-weight: bold;
        }

        a:hover {
            text-decoration: underline;
        }


  </style>
<head>
 
    @extends('header.css')
  </head>
  <body>
    <div class="loader"></div>

    <div>
      <div class="header" style="height: auto;">
        <div> </div>
        <div>
          <picture>
            <source media="(min-width: 700px)" srcset="../resources/bg/Banner.png">
            <img src="../resources/bg/Banner_mobile.png" height="100%" width="100%" alt="">
          </picture>
          
          <p id="invCode" style="display:none">{{ $invitationCode }}</p>
        </div>      
      </div>

      <div class="content-body" >
        <br>
        <center>
        <p style="font-size:1vw;text-align: justify;">The registration link for the Ugnay Palay: 35th National Rice R4DE Conference is now <strong> closed. </strong><br>

        We sincerely appreciate the overwhelming response and enthusiasm from all those who successfully registered.<br>

        If you missed the registration deadline, you can still participate the abovementioned conference by joining us through our facebook page: DA-PhilRice. <br>

        For any queries or further information, please feel free to contact us at ricesecretariat@gmail.com.<br>

        Thank you for your understanding.<p>
        </center> 
   
    </div>
    <br>
<!-- <div class="container">
    <h1>Ugnay Palay: 35th National Rice R4DE Conference</h1>
    <p>The registration link for the Ugnay Palay: 35th National Rice R4DE Conference is now closed. We sincerely appreciate the overwhelming response and enthusiasm from all those who successfully registered.</p>
    <p>If you missed the registration deadline, you can still participate in the above-mentioned conference by joining us through our <a href="#" target="_blank">Facebook page: DA-PhilRice</a>.</p>
    <p>For any queries or further information, please feel free to contact us at <a href="mailto:ricesecretariat@gmail.com">ricesecretariat@gmail.com</a>.</p>
    <p>Thank you for your understanding.</p>
</div> -->

    @extends('layouts.js')
  </body>


  <script src="/csd/public/lib/jquery2/jquery.min.js"></script>
  <script src="/csd/public/lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="/csd/public/lib/feather-icons/feather.min.js"></script>
  <script src="/csd/public/lib/perfect-scrollbar/perfect-scrollbar.min.js"></script>
  <script src="/csd/public/lib/prismjs/prism.js"></script>
  <script src="/csd/public/lib/parsleyjs/parsley.min.js"></script>
  <script src="/csd/public/lib/jquery-steps/build/jquery.steps.min.js"></script>
  <script src="/csd/public/lib/js-cookie/js.cookie.js"></script>
  <script src="{{ asset('lib/cdn/sweetalert.mini.js')}}"></script>
  <script src="{{ asset('lib/cdn/sweetalert.mini2.js')}}"></script>
  <script src=" {{ asset('public/js/select2.min.js') }} "></script>


  
<script>

function checkWordLimit() {
            const textarea = document.getElementById('abstract');
            const wordCountDisplay = document.getElementById('wordCount');
            const words = textarea.value.trim().split(/\s+/);
            const wordCount = words.length;

            if (wordCount > 300) {
                // Limit the content to 300 words
                const limitedContent = words.slice(0, 300).join(' ');
                textarea.value = limitedContent;
            }

            wordCountDisplay.textContent = `Word count: ${Math.min(wordCount, 300)}/300`;
        }

const arrivalDateInput = document.getElementById('arrivalDate');
  const departureDateInput = document.getElementById('departureDate');

  // Set the minimum value of arrivalDate to the current date
  const currentDate = new Date().toISOString().split('T')[0];
  arrivalDateInput.min = currentDate;

  // Update the minimum value of departureDate when arrivalDate changes
  arrivalDateInput.addEventListener('change', () => {
    departureDateInput.min = arrivalDateInput.value;
  });

$('#arrivalDate').on('change', () => {
  $('#arrivalTime').prop('disabled', false);
});

$('#arrivalTime').on('change', () => {
  $('#departureDate').prop('disabled', false);
});

$('#departureDate').on('change', () => {
  $('#departureTime').prop('disabled', false);
});

$(document).ready(function() {
  var invCode = $('#invCode').text();
  console.log(invCode);

  var framData =0;
        $('body').on('click', '.clone-btn', function() {
            var tmpFromData =  framData;
            framData++;
                 
                 $('.dynamicFormInput').append(
                    '<div class="dynamicFormInputRatio'+framData+' scale-up-center">'+
                    '  <div class="row form-group">'+
                    '    <div class="form-group col-sm-3">'+
                    '      <input type="text" class="form-control authorsName" placeholder="Author" id="authorsName'+framData+'">'+
                    '    </div>'+
                    '    <div class="form-group col-sm-3 d-flex align-items-end">'+
                    '      <input type="text" class="form-control authorsPosition" placeholder="Position" id="authorsPosition'+framData+'">'+
                    '    </div>'+
                    '    <div class="form-group col-sm-3 d-flex align-items-end">'+
                    '      <input type="text" class="form-control authorsAgency" placeholder="Agency" id="authorsAgency'+framData+'">'+
                    '    </div>'+
                    '    <div class="form-group col-sm-3 d-flex align-items-end">'+
                    // '      <a href="#" class="clone-btn"><div class="icon-box"><i class="fa fa-plus text-success"></i></div></a>'+
                    '      <a class="delete-clone-btn" data-id="'+framData+'"><div class="icon-box"><i class="fa fa-remove text-danger"></i></div></a>'+
                    '    </div>'+
                    '  </div>'+
                    '</div>'
             );
             $('#coAuthorsLabel').show();
         });


         $('body').on('click', '.delete-clone-btn', function() {
           
           var dataF = $(this).attr("data-id");
       
           Swal.fire({
               title: 'Are you sure?',
               text: "You won't be able to revert this!",
               icon: 'info',
               showCancelButton: true,
               confirmButtonColor: '#3085d6',
               cancelButtonColor: '#d33',
               confirmButtonText: 'Yes, submit it!'
           }).then((result) => {
               if (result.isConfirmed) {
                   var token = $('#_token').val();
                   var rmvData = dataF;
                   $(this).closest('.dynamicFormInputRatio' + dataF + '').remove();                                    
                   framData--;
                   console.log(framData);
                   if(framData==0)
                   {
                    $('#coAuthorsLabel').hide();
                   }
               }
           });



       });


  var phil = $("#philrice").val();
  var participant = $("#participantType").val();

  $('#philrice').on('change', () => {
    var phil = $("#philrice").val();
    var participant = $("#participantType").val();
    if (phil !== 'default' && participant !== 'default') {
      $('#submit').prop('disabled', false);
    } else {
      $('#submit').prop('disabled', true);
    }
  });

  $('#participantType').on('change', () => {
    var phil = $("#philrice").val();
    var participant = $("#participantType").val();
    if (phil !== 'default' && participant !== 'default') {
      $('#submit').prop('disabled', false);
    } else {
      $('#submit').prop('disabled', true);
    }
  });

  $('#dietRestrictions').on('change',() => {
    var diet = $("#dietRestrictions").val();
    console.log(diet);
    if(diet=='Other')
    {
      $('#otherDietForm').show();
    }
    else
    {
      $('#otherDietForm').hide();
    }
  });

  $('#isIndigenous').on('change',() => {
    var ind = $("#isIndigenous").val();
    if(ind=='Yes')
    {
      $('#indigenousSpecify').show();
    }
    else
    {
      $('#indigenousSpecify').hide();
    }
  });
  
  $('#withDisability').on('change',() => {
    var dis = $("#withDisability").val();
    if(dis=='Yes')
    {
      $('#disabilitySpecify').show();
    }
    else
    {
      $('#disabilitySpecify').hide();
    }
  });
  
  $('#affiliation').on('change', () => {
    var aff = $("#affiliation").val();
    if(aff!=='')
    {
      $('#affiliationDetails').show();
    }

  });

  $("#submitEmail").on("click", function (e) {
    e.preventDefault();
    var email = $("#email").val();

    var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

    if (!emailPattern.test(email)) {
      $('#emailError').show();
      
    } else {
      $('#emailForm').hide();
      $('#classify').show();
      $('#emailError').hide();
      // 
    }
  });

  $("#submit").on("click", function (e) {
    $('#regForm').show();
    $('#emailForm').hide();
    $('#classify').hide();
    e.preventDefault();
    var phil = $("#philrice").val();
    var participant = $("#participantType").val();

    if(participant==='presenter')
    {
      $('#toPresenterForm').show();
      $('#submitParticipant').hide();
      // $('#backButton').show();
    }
    else if(participant==='participant')
    {
      $('#toPresenterForm').hide();
      $('#submitParticipant').show();
      // $('#backButton').show();
    }

    if(phil==='external')
    {
      $('#affiliationDetails').show();
      $('#philriceDetails').hide();
      $('#professionalDetails').show();
      $('#accommodationDetails').show();
    }
    else if(phil==='philrice')
    {
      $('#philriceDetails').show();
      $('#affiliationDetails').hide();
      $('#professionalDetails').show();
      $('#accommodationDetails').show();
    }

  });


  $("#backButton").on("click", function (e) {
    $('#regForm').hide();
    $('#emailForm').show();
    $('#classify').show();
  });

  $("#toPresenterForm").on("click", function (e) {
    $('#regForm').hide();
    $('#entryForm').show();
    // var philriceValue = $("#philrice").val();
    // // $("#sample").val(philriceValue);

  });

  $("#backToRegForm").on("click", function (e) {
    $('#regForm').show();
    $('#entryForm').hide();
    // var philriceValue = $("#philrice").val();
    // // $("#sample").val(philriceValue);

  });


  $('#firstName, #midName, #lastName, #extName, #sex, #ageBracket, #contactNo, #isIndigenous, #indigenousGroup, #withDisability, #disability, #philriceName, #philriceStation, #philriceUnit, #philricePosition, #affiliationName, #affiliationAddress, #affiliationRegion, #workNature, #affiliationPosition, #affiliationEmail, #affiliationContactNo, #specialization, #regNo, #licenseNo, #licenseExpiry, #arrivalTime, #arrivalDate, #departureTime, #departureDate, #dietRestrictions, #otherDiet').on('change', () => {
    console.log($('#philrice').val(),$('#participantType').val());
    if($('#philrice').val()=='philrice')
    {
      if($('#firstName').val() !== '' &&
        $('#lastName').val() !== '' &&
        $('#sex').val() !== null &&
        $('#ageBracket').val() !== null &&
        $('#contactNo').val() !== '' &&
        $('#isIndigenous').val() !== null &&
        $('#withDisability').val() !== null &&
        $('#philriceName').val() !== '' &&
        $('#philriceStation').val() !== null &&
        $('#philriceUnit').val() !== '' &&
        $('#philricePosition').val() !== '' &&
        $('#arrivalTime').val() !== '' &&
        $('#arrivalDate').val() !== '' &&
        $('#departureTime').val() !== '' &&
        $('#departureDate').val() !== '' &&
        $('#dietRestrictions').val() !== null)
        {
          $('#toPresenterForm').prop('disabled', false);
          $('#submitParticipant').prop('disabled', false);
        }
        else{
          $('#toPresenterForm').prop('disabled', true);
          $('#submitParticipant').prop('disabled', true);
        }

    }
    else if($('#philrice').val()=='external')
    {
      if($('#firstName').val() !== '' &&
        $('#lastName').val() !== '' &&
        $('#sex').val() !== null &&
        $('#ageBracket').val() !== null &&
        $('#contactNo').val() !== '' &&
        $('#isIndigenous').val() !== null &&
        $('#withDisability').val() !== null &&
        $('#affiliationName').val() !== '' &&
        $('#affiliationAddress').val() !== '' &&
        $('#affiliationRegion').val() !== null &&
        $('#workNature').val() !== '' &&
        $('#affiliationPosition').val() !== '' &&
        $('#affiliationEmail').val() !== '' &&
        $('#affiliationContactNo').val() !== '' &&
        $('#arrivalTime').val() !== '' &&
        $('#arrivalDate').val() !== '' &&
        $('#departureTime').val() !== '' &&
        $('#departureDate').val() !== '' &&
        $('#dietRestrictions').val() !== null)
        {
          $('#toPresenterForm').prop('disabled', false);
          $('#submitParticipant').prop('disabled', false);
        }
        else{
          $('#toPresenterForm').prop('disabled', true);
          $('#submitParticipant').prop('disabled', true);
        }
    }
    
  });

  $('#presentationType, #presentationTitle, #authorsName0, #authorsPosition0, #authorsAgency0, #abstract, #keywords, #firstNamePresenter, #midNamePresenter, #lastNamePresenter, #extNamePresenter, #positionPresenter, #agencyPresenter, #addressPresenter, #emailPresenter, #contactNoPresenter, #bachelorsDegree, #bachelorsUniversity, #bachelorsYear, #mastersDegree, #mastersUniversity, #mastersYear, #doctorateDegree, #doctorateUniversity, #doctorateYear, #presenterSpecialization, #research, #awards, #scholarships, #publications, #researchGrants').on('change', () => {
    if($('#presentationType').val() !== null &&
      $('#presentationTitle').val() !== '' &&
      $('#authorsName0').val() !== '' &&
      $('#authorsPosition0').val() !== '' &&
      $('#authorsAgency0').val() !== '' &&
      $('#abstract').val() !== '' &&
      $('#keywords').val() !== '' &&
      $('#firstNamePresenter').val() !== '' &&
      $('#lastNamePresenter').val() !== '' &&
      $('#positionPresenter').val() !== '' &&
      $('#agencyPresenter').val() !== '' &&
      $('#addressPresenter').val() !== '' &&
      $('#emailPresenter').val() !== '' &&
      $('#contactNoPresenter').val() !== '' &&
      $('#bachelorsDegree').val() !== null &&
      $('#bachelorsUniversity').val() !== '' &&
      $('#bachelorsYear').val() !== '' &&
      $('#mastersDegree').val() !== null &&
      $('#mastersUniversity').val() !== '' &&
      $('#mastersYear').val() !== '' &&
      $('#doctorateDegree').val() !== null &&
      $('#doctorateUniversity').val() !== '' &&
      $('#doctorateYear').val() !== '' &&
      $('#presenterSpecialization').val() !== '' &&
      $('#research').val() !== '' &&
      $('#awards').val() !== '' &&
      $('#scholarships').val() !== '' &&
      $('#publications').val() !== '' &&
      $('#researchGrants').val() !== '')
      {
        $('#submitPresenter').prop('disabled', false);
      }
      else{
        $('#submitPresenter').prop('disabled', true);
      }
  });


  $('#submitParticipant').on("click", function (e) {
    $invitationCode = $('#invCode').text();;
    $email = $('#email').val();
    $philrice = $('#philrice').val();
    $participantType = $('#participantType').val();
    $firstName = $('#firstName').val();
    $midName = $('#midName').val();
    $lastName = $('#lastName').val();
    $extName = $('#extName').val();
    $sex = $('#sex').val();
    $ageBracket = $('#ageBracket').val();
    $contactNo = $('#contactNo').val();
    $isIndigenous = $('#isIndigenous').val();
    $indigenousGroup = $('#indigenousGroup').val();
    $withDisability = $('#withDisability').val();
    $disability = $('#disability').val();
    $philriceName = $('#philriceName').val();
    $philriceStation = $('#philriceStation').val();
    $philriceUnit = $('#philriceUnit').val();
    $philricePosition = $('#philricePosition').val();
    $affiliationName = $('#affiliationName').val();
    $affiliationAddress = $('#affiliationAddress').val();
    $affiliationRegion = $('#affiliationRegion').val();
    $workNature = $('#workNature').val();
    $affiliationPosition = $('#affiliationPosition').val();
    $affiliationEmail = $('#affiliationEmail').val();
    $affiliationContactNo = $('#affiliationContactNo').val();
    $specialization = $('#specialization').val();
    $regNo = $('#regNo').val();
    $licenseNo = $('#licenseNo').val();
    $licenseExpiry = $('#licenseExpiry').val();
    $arrivalTime = $('#arrivalTime').val();
    $arrivalDate = $('#arrivalDate').val();
    $departureTime = $('#departureTime').val();
    $departureDate = $('#departureDate').val();
    $dietRestrictions = $('#dietRestrictions').val();
    $otherDiet = $('#otherDiet').val();

    $.ajax({ 
                type: 'POST',
                url: "{{ route('saveParticipantProfile') }}",
                data: {
                    _token: "{{ csrf_token() }}",
                    invitationCode: $invitationCode,
                    email: $email,
                    philrice: $philrice,
                    participantType: $participantType,
                    firstName: $firstName,
                    midName: $midName,
                    lastName: $lastName,
                    extName: $extName,
                    sex: $sex,
                    ageBracket: $ageBracket,
                    contactNo: $contactNo,
                    isIndigenous: $isIndigenous,
                    indigenousGroup: $indigenousGroup,
                    withDisability: $withDisability,
                    disability: $disability,
                    philriceName: $philriceName,
                    philriceStation: $philriceStation,
                    philriceUnit: $philriceUnit,
                    philricePosition: $philricePosition,
                    affiliationName: $affiliationName,
                    affiliationAddress: $affiliationAddress,
                    affiliationRegion: $affiliationRegion,
                    workNature: $workNature,
                    affiliationPosition: $affiliationPosition,
                    affiliationEmail: $affiliationEmail,
                    affiliationContactNo: $affiliationContactNo,
                    specialization: $specialization,
                    regNo: $regNo,
                    licenseNo: $licenseNo,
                    licenseExpiry: $licenseExpiry,
                    arrivalTime: $arrivalTime,
                    arrivalDate: $arrivalDate,
                    departureTime: $departureTime,
                    departureDate: $departureDate,
                    dietRestrictions: $dietRestrictions,
                    otherDiet: $otherDiet
                },
                success: function(data){
                  // location.reload();
                  if(data == "sent"){
                    $('#registrationSubmitted').show();
                  $('#regForm').hide();
                  $('#entryForm').hide();
                  $('#emailForm').hide();
                  $('#classify').hide();
                  }
                }
            });
  });

  $('#submitPresenter').on("click", function (e) {
    var authorArray = [];
    var authorDetails = [];
    // console.log(framData);
    for(i=0; i<=framData; i++)
    {
      var authName = $('#authorsName'+i+'').val(); 
      var authPosition = $('#authorsPosition'+i+'').val();
      var authAgency = $('#authorsAgency'+i+'').val();
      console.log(authName, authPosition, authAgency);
      var authorDetails = {
            "authName": authName,
            "authPosition": authPosition,
            "authAgency": authAgency
        };
      authorArray.push(authorDetails);
    }
    console.log(JSON.stringify(authorArray));


    $invitationCode = $('#invCode').text();;
    $email = $('#email').val();
    $philrice = $('#philrice').val();
    $participantType = $('#participantType').val();
    $firstName = $('#firstName').val();
    $midName = $('#midName').val();
    $lastName = $('#lastName').val();
    $extName = $('#extName').val();
    $sex = $('#sex').val();
    $ageBracket = $('#ageBracket').val();
    $contactNo = $('#contactNo').val();
    $isIndigenous = $('#isIndigenous').val();
    $indigenousGroup = $('#indigenousGroup').val();
    $withDisability = $('#withDisability').val();
    $disability = $('#disability').val();
    $philriceName = $('#philriceName').val();
    $philriceStation = $('#philriceStation').val();
    $philriceUnit = $('#philriceUnit').val();
    $philricePosition = $('#philricePosition').val();
    $affiliationName = $('#affiliationName').val();
    $affiliationAddress = $('#affiliationAddress').val();
    $affiliationRegion = $('#affiliationRegion').val();
    $workNature = $('#workNature').val();
    $affiliationPosition = $('#affiliationPosition').val();
    $affiliationEmail = $('#affiliationEmail').val();
    $affiliationContactNo = $('#affiliationContactNo').val();
    $specialization = $('#specialization').val();
    $regNo = $('#regNo').val();
    $licenseNo = $('#licenseNo').val();
    $licenseExpiry = $('#licenseExpiry').val();
    $arrivalTime = $('#arrivalTime').val();
    $arrivalDate = $('#arrivalDate').val();
    $departureTime = $('#departureTime').val();
    $departureDate = $('#departureDate').val();
    $dietRestrictions = $('#dietRestrictions').val();
    $otherDiet = $('#otherDiet').val();

    $invitationCode = $('#invCode').text();;
    $presentationType = $('#presentationType').val();
    $presentationTitle = $('#presentationTitle').val();
    $authors = JSON.stringify(authorArray);
    $abstract = $('#abstract').val();
    $keywords = $('#keywords').val();
    $firstNamePresenter = $('#firstNamePresenter').val();
    $midNamePresenter = $('#midNamePresenter').val();
    $lastNamePresenter = $('#lastNamePresenter').val();
    $extNamePresenter = $('#extNamePresenter').val();
    $positionPresenter = $('#positionPresenter').val();
    $agencyPresenter = $('#agencyPresenter').val();
    $addressPresenter = $('#addressPresenter').val();
    $emailPresenter = $('#emailPresenter').val();
    $contactNoPresenter = $('#contactNoPresenter').val();
    $bachelorsDegree = $('#bachelorsDegree').val();
    $bachelorsUniversity = $('#bachelorsUniversity').val();
    $bachelorsYear = $('#bachelorsYear').val();
    $mastersDegree = $('#mastersDegree').val();
    $mastersUniversity = $('#mastersUniversity').val();
    $mastersYear = $('#mastersYear').val();
    $doctorateDegree = $('#doctorateDegree').val();
    $doctorateUniversity = $('#doctorateUniversity').val();
    $doctorateYear = $('#doctorateYear').val();
    $presenterSpecialization = $('#presenterSpecialization').val();
    $research = $('#research').val();
    $awards = $('#awards').val();
    $scholarships = $('#scholarships').val();
    $publications = $('#publications').val();
    $researchGrants = $('#researchGrants').val();

    $.ajax({ 
                type: 'POST',
                url: "{{ route('savePresenterProfile') }}",
                data: {
                    _token: "{{ csrf_token() }}",
                    invitationCode: $invitationCode,
                    email: $email,
                    philrice: $philrice,
                    participantType: $participantType,
                    firstName: $firstName,
                    midName: $midName,
                    lastName: $lastName,
                    extName: $extName,
                    sex: $sex,
                    ageBracket: $ageBracket,
                    contactNo: $contactNo,
                    isIndigenous: $isIndigenous,
                    indigenousGroup: $indigenousGroup,
                    withDisability: $withDisability,
                    disability: $disability,
                    philriceName: $philriceName,
                    philriceStation: $philriceStation,
                    philriceUnit: $philriceUnit,
                    philricePosition: $philricePosition,
                    affiliationName: $affiliationName,
                    affiliationAddress: $affiliationAddress,
                    affiliationRegion: $affiliationRegion,
                    workNature: $workNature,
                    affiliationPosition: $affiliationPosition,
                    affiliationEmail: $affiliationEmail,
                    affiliationContactNo: $affiliationContactNo,
                    specialization: $specialization,
                    regNo: $regNo,
                    licenseNo: $licenseNo,
                    licenseExpiry: $licenseExpiry,
                    arrivalTime: $arrivalTime,
                    arrivalDate: $arrivalDate,
                    departureTime: $departureTime,
                    departureDate: $departureDate,
                    dietRestrictions: $dietRestrictions,
                    otherDiet: $otherDiet,
                    invitationCode : $invitationCode,
                    presentationType : $presentationType,
                    presentationTitle : $presentationTitle,
                    authors : $authors,
                    abstract : $abstract,
                    keywords : $keywords,
                    firstNamePresenter : $firstNamePresenter,
                    midNamePresenter : $midNamePresenter,
                    lastNamePresenter : $lastNamePresenter,
                    extNamePresenter : $extNamePresenter,
                    positionPresenter : $positionPresenter,
                    agencyPresenter : $agencyPresenter,
                    addressPresenter : $addressPresenter,
                    emailPresenter : $emailPresenter,
                    contactNoPresenter : $contactNoPresenter,
                    bachelorsDegree : $bachelorsDegree,
                    bachelorsUniversity : $bachelorsUniversity,
                    bachelorsYear : $bachelorsYear,
                    mastersDegree : $mastersDegree,
                    mastersUniversity : $mastersUniversity,
                    mastersYear : $mastersYear,
                    doctorateDegree : $doctorateDegree,
                    doctorateUniversity : $doctorateUniversity,
                    doctorateYear : $doctorateYear,
                    presenterSpecialization : $presenterSpecialization,
                    research : $research,
                    awards : $awards,
                    scholarships : $scholarships,
                    publications : $publications,
                    researchGrants : $researchGrants

                },
                success: function(data){
                  // location.reload();
                  if(data == "sent"){
                  $('#registrationSubmitted').show();
                  $('#regForm').hide();
                  $('#entryForm').hide();
                  $('#emailForm').hide();
                  $('#classify').hide();
                  }
                }
            });
  });

});
</script>
</html>



