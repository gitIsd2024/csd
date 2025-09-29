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
            <source media="(min-width: 300px)" srcset="../resources/bg/bgBanner.jpg">
            <img src="../resources/bg/37th_Banner11.jpg" height="100%" width="100%" alt="">
          </picture>
          
          <p id="invCode" style="display:none">{{ $invitationCode }}</p>
        </div>      
      </div>

      <div class="content-body" > 
      
      <div class="component-section no-code" id="registrationForm">

            <style>
              #disclaimer {
                background-color: #f9f9f9;
                border: 1px solid #ddd;
                border-radius: 8px;
                padding: 20px;
                margin: 20px 0;
              }
              .disclaimer-title {
                font-size: 1.25rem;
                color: #333;
                margin-bottom: 15px;
              }
              .disclaimer-text {
                font-size: 1rem;
                color: #555;
                line-height: 1.5;
              }
            </style>
            <div class="card card-body pd-lg-25" id="disclaimer">
              <div class="disclaimer-content">
                <h4 class="disclaimer-title">Disclaimer</h4>
                <p class="disclaimer-text">
                  <strong>The DA-Philippine Rice Research Institute (DA-PhilRice)</strong> values the confidentiality of personal data in accordance with the Data Privacy Act of 2012, its Implementing Rules and Regulations (IRR), other issuances of the National Privacy Commission, and other relevant laws. By filling out this registration form, you consent to the collection, generation, use, and processing of your personal data solely for the purpose of participating in the National Rice R4D Conference organized by DA-PhilRice.
                </p>
              </div>
            </div>
            

            <style type="text/css">
              #emailForm {
                background-color: #f9f9f9;
                border: 1px solid #ddd;
                border-radius: 8px;
                padding: 20px;
                margin: 20px 0;
              }

              .form-container {
                display: flex;
                flex-direction: column;
              }

              .form-group {
                margin-bottom: 20px;
              }

              .form-label {
                font-size: 1.2em;
                display: flex;
                align-items: center;
                color: #333;
              }

              .form-label ._icon {
                color: #008000;
                margin-right: 8px;
              }

              .form-control {
                height: 3em;
                width: 100%;
                font-size: 1em;
                padding: 0 10px;
                border: 1px solid #ddd;
                border-radius: 4px;
              }

              .btn-submit {
                background-color: #008000;
                color: white;
                padding: 10px 20px;
                border: none;
                border-radius: 4px;
                font-size: 1em;
                cursor: pointer;
                transition: background-color 0.3s ease;
              }

              .btn-submit:hover {
                background-color: #005d00;
              }

              .error-messages {
                margin-top: 10px;
              }

              .error-text {
                color: red;
                font-style: italic;
                display: none;
              }
            </style>
            <div class="card card-body pd-lg-25" id="emailForm">
                <form data-parsley-validate>
                  <div class="form-container">
                    <div class="form-group">
                      <label for="email" class="form-label">
                        <i class="fa fa-envelope _icon" aria-hidden="true"></i> Please enter a valid e-mail address.<span class="tx-danger">*</span>
                      </label>
                      <input type="email" id="email" class="form-control" placeholder="Enter your email" required>
                      <div class="error-messages">
                        <p id="emailError" class="error-text">E-mail address provided is not in a valid format.</p>
                        <p id="emailError1" class="error-text">Email already exists!</p>
                      </div>
                    </div>

                    <button type="submit" id="submitEmail" class="btn btn-submit bg-success text-white">Submit</button>
                  </div>
                </form>
              </div>

        </div><!-- component-section -->


        

        <div class="animatedFadeIn" id="classify" style="display:none">
          <div class="card card-body pd-lg-25">
            <form data-parsley-validate>
              <div class="form-section">
                <div class="form-group">
                  <label for="philrice" class="form-label">
                    <i class="fa fa-id-card _icon" aria-hidden="true"></i> Are you from DA-PhilRice?<span class="tx-danger">*</span>
                  </label>
                  <select id="philrice" class="form-select" required>
                    <option value="default">-Select answer-</option>
                    <option value="philrice">Yes</option>
                    <option value="external">No</option>
                  </select>
                </div>

                <div class="form-group">
                  <label for="participantType" class="form-label">
                    <i class="fa fa-user _icon" aria-hidden="true"></i> 
                    Will you be submitting a paper?
                    <span class="tx-danger">*</span>   
                  </label>
                {{--   <p class="text-danger"> Presenter options are removed as we are no longer accepting submissions. Thank you for understanding. </p> --}}
                  <select id="participantType" class="form-select" required>
                    <option value="default">-Select Type-</option>
                    <option value="presenter">Yes</option>
                    <option value="participant">No</option>                    
                  </select>
                </div>

                <div class="form-group">
                  <label for="tour" class="form-label">
                    <i class="fa fa-id-card _icon" aria-hidden="true"></i> Are you joining in the DA-PhilRice tour?<span class="tx-danger">*</span>
                  </label>
                  <select id="tour" class="form-select" required>
                    <option value="default">-Select answer-</option>
                    <option value="1">Yes</option>
                    <option value="0">No</option>
                  </select>
                </div>

                <div class="form-group">
                  <button type="submit" id="submit" class="btn btn-submit bg-success text-white" disabled>Submit</button>
                </div>
              </div>
            </form>
          </div>
        </div>

        <style>
          #classify {
            background-color: #f9f9f9;
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 20px;
            margin: 20px 0;
          }

          .form-section {
            display: flex;
            flex-direction: column;
            gap: 20px;
          }

          .form-group {
            margin-bottom: 0;
          }

          .form-label {
            font-size: 1.2em;
            display: flex;
            align-items: center;
            color: #333;
          }

          .form-label ._icon {
            color: #008000;
            margin-right: 8px;
          }

          .form-select {
            width: 100%;
            height: 3em;
            font-size: 1em;
            padding: 0 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
          }

          .btn-submit {
            background-color: #008000;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            font-size: 1em;
            cursor: pointer;
            transition: background-color 0.3s ease;
          }

          .btn-submit:disabled {
            background-color: #ddd;
            cursor: not-allowed;
          }

          .btn-submit:hover {
            background-color: #005d00;
          }
        </style>


        <!-- <div class="component-section no-code" id="regForm"> -->
        <div class=" animatedFadeIn" style="display:none;" id="regForm">
            

            <h2 id="section1" class="tx-semibold">Registration Form</h2>
            <h6 id="requiredFields" style="color: red; font-style: italic;">Fields marked with an * are required</h6>
            

            <div id="wizard1">
              <h4><i class="fa fa-user-circle _icon" aria-hidden="true" style="color: #008000;"></i> Personal Information</h4>
              <section>
                <!-- <p class="mg-b-20">Try the keyboard navigation by clicking arrow left or right!</p> -->
                <div class="row row-sm">
                  <div class="form-group col-sm-3">
                    <label>Full Name<span class="tx-danger">*</span></label>
                    <input type="text" class="form-control" placeholder="First Name" id="firstName">
                  </div><!-- col -->
                  <div class="form-group col-sm-3 d-flex align-items-end">
                    <input type="text" class="form-control" placeholder="Middle Name (Leave blank if not applicable)" id="midName">
                  </div><!-- col -->
                  <div class="form-group col-sm-3 d-flex align-items-end">
                    <input type="text" class="form-control" placeholder="Last Name" id="lastName">
                  </div><!-- col -->
                  <div class="form-group col-sm-3 d-flex align-items-end">
                    <input type="text" class="form-control" placeholder="Name Extension (Leave blank if not applicable)" id="extName">
                  </div><!-- col -->

                  <div class="col-sm-4 col-md-3">
                    <label>Sex<span class="tx-danger">*</span></label>
                    <select class="custom-select" id="sex" required >
                      <option value="" disabled selected="">-</option>
                      <option value="male">Male</option>
                      <option value="female">Female</option>
                    </select>
                  </div>

                  <div class="col-sm-4 col-md-3">
                    <label>Age Bracket<span class="tx-danger">*</span></label>
                    <select class="custom-select" id="ageBracket" required>
                      <option value="" disabled selected="">-</option>
                      <option value="30 y/o and below">30 y/o and below</option>
                      <option value="31-45 y/o">31-45 y/o</option>
                      <option value="46-59 y/o">46-59 y/o</option>
                      <option value="60 y/o and above">60 y/o and above</option>                     
                    </select>
                  </div>

                  <div class="form-group col-sm-3">
                  <label>Contact Number<span class="tx-danger">*</span></label>
                    <input type="text" class="form-control" placeholder="" id="contactNo">
                  </div><!-- col -->
                </div><!-- form-row -->
                
                
                <div class="row row-sm">
                  <div class="col-sm-4 col-md-3">
                      <label>Are you a member of any indigenous group?<span class="tx-danger">*</span></label>
                      <select class="custom-select" id="isIndigenous" required>
                        <option value="" disabled selected="">-</option>
                        <option value="Yes">Yes</option>
                        <option value="No">No</option>
                      </select>
                  </div>
                  <div class="form-group col-sm-3 scale-up-center" style="display:none" id="indigenousSpecify">
                  <label>If yes, kindly specify:</label>
                    <input type="text" class="form-control" placeholder=" " id="indigenousGroup" value="">
                  </div><!-- col -->

                  <div class="col-sm-4 col-md-3">
                      <label>Are you a person with disability?<span class="tx-danger">*</span></label>
                      <select class="custom-select" id="withDisability" required>
                        <option value="" disabled selected="">-</option>
                        <option value="Yes">Yes</option>
                        <option value="No">No</option>
                      </select>
                  </div>
                  <div class="form-group col-sm-3 scale-up-center" style="display:none" id="disabilitySpecify">
                  <label>If yes, kindly specify:</label>
                    <input type="text" class="form-control" placeholder=" " id="disability" value="">
                  </div><!-- col -->
                </div><!-- form-row -->
              </section>

              <h4 style="margin-top:0.8em;"><i class="fa fa-users _icon" aria-hidden="true" style="color: #008000;"></i> Professional Affiliation</h4>

              <section>
                <div class="row row-sm" style="display: none" id="philriceDetails">
                      <div class="form-group col-sm-3">
                        <label>Affiliation Details<span class="tx-danger">*</span></label>
                        <input type="text" class="form-control" disabled placeholder="Philippine Rice Research Institute" value="Philippine Rice Research Institute" id="philriceName">
                      </div><!-- col -->

                      <div class="form-group col-sm-3 d-flex align-items-end">
                        <select class="custom-select" id="philriceStation" required>
                          <option value="" disabled selected="">Select Station</option>
                          <option value="Agusan">Agusan</option>
                          <option value="Batac">Batac</option>
                          <option value="Bicol">Bicol</option>
                          <option value="Central Experiment Station">Central Experiment Station</option>
                          <option value="Isabela">Isabela</option>
                          <option value="Los Banos">Los Baños</option>
                          <option value="Midsayap">Midsayap</option>
                          <option value="Negros">Negros</option>
                        </select>
                      </div><!-- col -->

                      <div class="form-group col-sm-3 d-flex align-items-end">
                        <select class="custom-select" id="philriceUnit" required>
                          <option value="" disabled selected="">Select Office/Unit</option>
                          @php
                          $allValues = [];
                          foreach($getUnits as $row) {
                            $allValues[] = $row->unit_name;
                          }
                          foreach($getOffices as $row) {
                            $allValues[] = $row->office_name;
                          }
                          foreach($getDivisions as $row) {
                            $allValues[] = $row->division_name;
                          }
                          sort($allValues);
                          @endphp
                          @foreach($allValues as $value)
                            <option value="{{ $value }}">{{ $value }}</option>
                          @endforeach
                        </select>
                      </div><!-- col -->

                      <div class="form-group col-sm-3 d-flex align-items-end">
                        <select class="custom-select" id="philricePosition" required>
                          <option value="" disabled selected="">Select Designation/Position</option>
                          @foreach($getPositions as $row)
                          <option value="{{$row->position_name}}">{{$row->position_name}}</option>
                          @endforeach
                          <option value="Other">Other</option>
                        </select>
                      </div><!-- col -->
                  </div><!-- row -->
              </section>

              <section>
                <div class="row row-sm" style="display: none" id="affiliationDetails">
                      <div class="form-group col-sm-3">
                        <label>Agency/Organization Details (Do not abbreviate)<span class="tx-danger">*</span></label>
                        <input type="text" class="form-control" placeholder="Name" id="affiliationName">
                      </div><!-- col -->

                      <div class="form-group col-sm-3 d-flex align-items-end">
                        <input type="text" class="form-control" placeholder="Address" id="affiliationAddress">
                      </div><!-- col -->

                      <div class="form-group col-sm-3 d-flex align-items-end">
                        <select class="custom-select" id="affiliationRegion" required>
                          <option value="" disabled selected="">Select Region</option>
                          <option value="Region I">Region I</option>
                          <option value="Region II">Region II</option>
                          <option value="Region III">Region III</option>
                          <option value="Region IV-A">Region IV-A</option>
                          <option value="Region IV-B">Region IV-B</option>
                          <option value="Region V">Region V</option>
                          <option value="Region VI">Region VI</option>
                          <option value="Region VII">Region VII</option>
                          <option value="Region VIII">Region VIII</option>
                          <option value="Region IX">Region IX</option>
                          <option value="Region X">Region X</option>
                          <option value="Region XI">Region XI</option>
                          <option value="Region XII">Region XII</option>
                          <option value="CARAGA Region">CARAGA Region</option>
                          <option value="Cordillera Administrative Region (CAR)">Cordillera Administrative Region (CAR)</option>
                          <option value="National Capital Region (NCR)">National Capital Region (NCR)</option>
                          <option value="Bangsamoro Autonomous Region in Muslim Mindanao (BARMM)">Bangsamoro Autonomous Region in Muslim Mindanao (BARMM)</option>
                        </select>
                      </div><!-- col -->

                      <div class="form-group col-sm-3 d-flex align-items-end">
                        <select class="custom-select" id="affiliationCategory" required>
                          <option value="" disabled selected="">Affiliation Category</option>
                          <option value="Academe (for instructors and students)">Academe (for instructors and students)</option>
                          <option value="DA, RFOs, and attached agencies">DA, RFOs, and attached agencies</option>
                          <option value="Government Organization/Agency (non-DA)">Government Organization/Agency (non-DA)</option>
                          <option value="International Organization/Agency">International Organization/Agency</option>
                          <option value="Local Government">Local Government</option>
                          <option value="Non-Government Organization/Civil Society Organization">Non-Government Organization/Civil Society Organization</option>
                          <option value="Private Company">Private Company</option>
                          <option value="Seed Growers' Cooperative">Seed Growers' Cooperative</option>
                          <option value="Other">Other</option>                          
                        </select>
                      </div><!-- col -->

                      <div class="form-group col-sm-3 d-flex align-items-end">
                        <input type="text" class="form-control" placeholder="Nature of Work" id="workNature">
                      </div><!-- col -->

                      <div class="form-group col-sm-3 d-flex align-items-end">
                        <input type="text" class="form-control" placeholder="Designation/Position (Do not abbreviate)" id="affiliationPosition">
                      </div><!-- col -->

                      <div class="form-group col-sm-3">
                        <input type="text" class="form-control" placeholder="E-mail Address/Active Website" id="affiliationEmail">
                      </div><!-- col -->

                      <div class="form-group col-sm-3 d-flex align-items-end">
                        <input type="text" class="form-control" placeholder="Contact Number" id="affiliationContactNo">
                      </div><!-- col -->
                  </div><!-- row -->
              </section>

              <section  style="display:none" id="professionalDetails">
                <h4><i class="fa fa-id-card _icon" aria-hidden="true" style="color: #008000;"></i> Professional Details (For CPD Requirements)</h4>
                <!-- <p class="mg-b-20">Wonderful transition effects.</p> -->
                <div class="row row-sm">
                <div class="form-group col-sm-6">
                  <label>Field of Specialization (for Students, type N/A if not applicable)</label>
                    <input type="text" class="form-control" placeholder="" id="specialization">
                  </div><!-- col -->
                  <div class="form-group col-sm-6">
                  <label>Registration Number (Type N/A if not applicable)</label>
                    <input type="text" class="form-control" placeholder="" id="regNo">
                  </div><!-- col -->
                  <div class="form-group col-sm-6">
                  <label>License Number (Type N/A if not applicable)</label>
                    <input type="text" class="form-control" placeholder="" id="licenseNo">
                  </div><!-- col -->
                  <div class="form-group col-sm-6">
                  <label>License Expiry Date</label>
                    <input type="date" class="form-control" placeholder="" id="licenseExpiry">
                  </div><!-- col -->
                </div><!-- row -->
              </section>

              <section  style="display:none" id="accommodationDetails">
                <h4><i class="fa fa-car _icon" aria-hidden="true" style="color: #008000;"></i> <i class="fa fa-bed _icon" aria-hidden="true" style="color: #008000;"> </i><i class="fa fa-cutlery _icon" aria-hidden="true" style="color: #008000;"></i> Arrival Details, Accommodations, and Dietary Restrictions</h4>
                <p class="mg-b-20">No registration fee will be charged but participants
  will please shoulder and arrange their travel and accommodation expenses. You may refer to <a href="https://drive.google.com/file/d/1KqZ_LsNMYnD539U6AUAx-nW5ffgLDOsf/view?usp=sharing" target="_blank">this link</a> for the list of hotel recommendations. For booking inquiries, please contact the hotels directly. PhilRice will provide vehicles to fetch and ferry participants from their respective hotels to CBC Plenary Hall. </p>
                <div class="row row-sm">
                <div class="form-group col-sm-6">
                 {{--  <label>Estimated Date of Arrival<span class="tx-danger">* <br> <em>Take note: The event is moved to December 3-5</em></label> --}}

                    <input type="date" class="form-control" placeholder="" id="arrivalDate" min="">
                  </div><!-- col -->
                <div class="form-group col-sm-6">
                 {{--  <label>Estimated Time of Arrival<span class="tx-danger">*<br> <em>Take note: The event is moved to December 3-5</em></label> --}}
                    <input type="time" class="form-control" disabled placeholder="" id="arrivalTime">
                  </div><!-- col -->
                  <div class="form-group col-sm-6">
                 {{--    <label>Estimated Date of Departure<span class="tx-danger">*<br> <em>Take note: The event is moved to December 3-5</em></label> --}}
                    <input type="date" class="form-control" disabled placeholder="" id="departureDate" min="">
                  </div><!-- col -->
                  <div class="form-group col-sm-6">
                {{--   <label>Estimated Time of Departure<span class="tx-danger">*<br> <em>Take note: The event is moved to December 3-5</em></label> --}}
                    <input type="time" class="form-control" disabled placeholder="" id="departureTime">
                  </div><!-- col -->

                  <div class="form-group col-sm-6">
                  <label>Do you have any dietary restrictions?<span class="tx-danger">*</span></label>
                    <select class="custom-select" id="dietRestrictions" required>
                      <option value="" disabled selected="">Select dietary restriction</option>
                      <option value="No restrictions">No restrictions</option>
                      <option value="Non-Pork">Non-Pork</option>
                      <option value="Fish & Vegetables">Fish & Vegetables</option>
                      <option value="Vegetables Only">Vegetables Only</option>
                      <option value="Other">Other</option>
                    </select>
                  </div><!-- col -->

                  <div class="form-group col-sm-6 scale-up-center" style="display:none" id="otherDietForm">
                  <label>Please specify</label>
                    <input type="text" class="form-control" placeholder="" id="otherDiet">
                  </div><!-- col -->

                </div><!-- row -->
              </section>
            </div>
            <hr><br>
            <button type="submit" id="submitParticipant" style="display:none; color: white;" class="btn btn-success pd-x-20" disabled>Submit</button>
            <button type="submit" id="toPresenterForm" style="display:none; color: white;" class="btn btn-success pd-x-20" disabled>Next Page</button> {{-- disabled dapat ito --}}
            <br><br>
            <p class="text-danger"><strong> If the button is still disabled, it means a required field still needs to be filled. </strong> </p><br>
            <button type="submit" id="backButton" style="display:none" class="btn btn-success pd-x-20">Back</button>
          </div><!-- component-section -->

      </div><!-- content-body -->



    </div><!-- content -->

        <div class="card card-body pd-lg-25" id="registrationSubmitted" style="display:none">
          <div class="confirmation-message">
            <h2 class="confirmation-title">Thank you for registering for the 37<sup>th</sup> Ugnay Palay National Rice R4D Conference!</h2>
            <p class="confirmation-text">Your registration has been submitted. Please check your e-mail for further details. We look forward to welcoming you at DA-PhilRice CES in Nueva Ecija and sharing an enriching experience with you.</p>
            <p class="confirmation-text">If you have any questions, please contact us at <a href="mailto:ricesecretariat@gmail.com" class="email-link">ricesecretariat@gmail.com</a>.</p>
          </div>
        </div>

        <style>
          #registrationSubmitted {
            background-color: #f9f9f9;
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 20px;
            margin: 20px 0;
          }

          .confirmation-message {
            text-align: center;
          }

          .confirmation-title {
            font-size: 1.5em;
            color: #333;
            margin-bottom: 15px;
          }

          .confirmation-text {
            font-size: 1em;
            color: #555;
            line-height: 1.5;
            margin-bottom: 10px;
          }

          .email-link {
            color: #008000;
            text-decoration: none;
          }

          .email-link:hover {
            text-decoration: underline;
          }
        </style>

    <!-- Entry Form -->
    <div class="content-body">
      <div class="component-section no-code animatedFadeIn" style="display:none" id="entryForm">
            <p class="mg-b-25">This form is intended for researchers interested in presenting the results of their rice R4D studies and/or initiatives.</p>

      
      <div class="component-section no-code form-group col-lg"id="entForm">
          
          <h2 id="section1" class="tx-semibold">Entry Form</h2>
          <h6 id="requiredFields2" style="color: red; font-style: italic;">Fields marked with an * are required</h6>
          

              

            <h4><i class="fa fa-file-powerpoint _icon form-group col-lg" aria-hidden="true" style="color: #008000;"></i> &nbsp;&nbsp;&nbsp;Presenter Profile</h4>
            <br>

            <section>

                <div class="row form-group col-lg" id="presenterProfile">
                  <div class="form-group col-sm-3">
                    <label>Full Name<span class="tx-danger"> * </span></label>
                    <input type="text" class="form-control" placeholder="First Name *" id="firstNamePresenter">
                  </div>
                  <div class="form-group col-sm-3 d-flex align-items-end">
                    <input type="text" class="form-control" placeholder="Middle Name (Leave blank if not applicable)" id="midNamePresenter">
                  </div>
                  <div class="form-group col-sm-3 d-flex align-items-end">
                    <input type="text" class="form-control" placeholder="Last Name *" id="lastNamePresenter">
                  </div>
                </div>

                <div class="row form-group col-lg">
                    <div class="form-group col-sm-3">
                      <label>Contact Information of Presenter<span class="tx-danger"> * </span></label>
                      <input type="text" class="form-control" placeholder="Current Address *" id="current_address">
                    </div>
                    <div class="form-group col-sm-3 d-flex align-items-end">
                      <input type="text" class="form-control" placeholder="Mobile Number *" id="mobileNumber_presenter">
                    </div>
                    <div class="form-group col-sm-3 d-flex align-items-end">
                      <input type="text" class="form-control" placeholder="Email-address" id="email_presenter" disabled>
                    </div>
                </div>

                <div class="row form-group col-lg">
                    <div class="form-group col-lg-6">
                      <h5 >
                        Upload Endorsement Letter from Agency Head (PDF, Max 1.5MB)<span class="tx-danger">*</span>
                      </h5>
                      <button type="button" class="btn btn-primary" data-toggle="modal" data-target ="#uploadModal">
                          Attach PDF File
                      </button>
                      <p id="nameofFile"></p>
                      <p id="nameofFile1" hidden></p>
                    </div>
                </div>


              <div class="presentation details bg-light" id="presentationdetails">
                
                <br>
                <h4>
                  <i class="fa fa-file-powerpoint _icon form-group col-lg" aria-hidden="true" style="color: #008000;"></i> 
                  &nbsp;&nbsp;&nbsp;Presentation Details
                </h4><br>
                <h5 class="text-danger">&nbsp;&nbsp;&nbsp;&nbsp;You may submit multiple entry forms as needed.</h5>
                <br><br>

                <div class="row row-sm form-group col-lg bg" id="presentationTypes">
                  <div class="form-group col-sm-3">
                    <label>Presentation Type <span class="tx-danger">*</span></label>
                    <select class="custom-select" id="presentationType" required>
                      <option value="" disabled selected="">-Select Presentation Type-</option>
                      <option value="Paper">Paper</option>
                      <option value="Poster">Poster</option>
                    </select>
                  </div>

                  <div class="form-group col-sm-3">
                    <label>Thematic area <span class="tx-danger">*</span></label>
                    <select class="custom-select" id="thematicArea" required>
                      <option value="" disabled selected="">-Select Thematic Area-</option>
                      <option value="Climate-smart and resilient rice farming">Climate-smart and resilient rice farming</option>
                      <option value="Mechanization, digital tools, and smart farming">Mechanization, digital tools, and smart farming</option>
                      <option value="Rice-based enterprises and value chain innovations">Rice-based enterprises and value chain innovations</option>                      
                      <option value="Participatory extension and inclusive innovations">Participatory extension and inclusive innovations</option>                      
                    </select>
                  </div>

                  <div class="form-group col-sm-6">
                    <h4>Title of Paper/Poster<span class="tx-danger">*</span></h4>
                    <input type="text" class="form-control" placeholder="" id="presentationTitle">
                  </div>
                </div>

                <div id="authorDetails " class="form-group col-lg">
               
                  <div class="dynamicFormInput">
                    <div class="dynamicFormInputRatio0">
                      <div class="row form-group">

                        <div class="form-group col-sm-3">
                          <h4><i class="fa fa-user _icon" aria-hidden="true" style="color: #008000;"></i> Corresponding Author<span class="tx-danger">*</span></h4>
                          <input type="text" class="form-control authorsName" placeholder="Author" id="authorsName0">
                        </div>

                        <div class="form-group col-sm-3 d-flex align-items-end">
                          <input type="text" class="form-control authorsPosition" placeholder="Position" id="authorsPosition0">
                        </div>

                        <div class="form-group col-sm-3 d-flex align-items-end">
                          <input type="text" class="form-control authorsAgency" placeholder="Agency" id="authorsAgency0">
                        </div>

                        <div class="form-group col-sm-3 d-flex align-items-end">
                          <a class="clone-btn">
                            <div class="icon-box">
                              <i class="fa fa-plus text-success" style="color: #008000;"></i>
                            </div>
                          </a>
                        </div>

                      </div>
                      <h4 id="coAuthorsLabel" style="display:none"><i class="fa fa-users _icon" aria-hidden="true" style="color: #008000;"> </i> Co-Authors</h4>
                    </div>
                  </div>

                    <br><br><br>
               
                    <div class="form-group col-sm-6">
                      <h4>Abstract<span class="tx-danger">*</span></h4>
                      <label>(Kindly limit to 300 words)</label>
                      <textarea class="form-control" id="abstract" rows="5" oninput="checkWordLimit()"></textarea>
                      <p id="wordCount">Word count: 0/300</p>
                    </div>
                    <div class="form-group col-sm-6">
                      <h4>Keywords<span class="tx-danger">*</span></h4>
                      <label>(maximum of 5, separate using commas)</label>
                      <input type="text" class="form-control" placeholder="" id="keywords">
                    </div>
                    <br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button class="btn btn-success clone-btn-form" id="addEntryForm">Submit Entry Form</button>
                    <p class="text-danger"><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong> Please ensure that you click the 'Submit Entry Form' button to complete your submission. **</strong></p>
                    <br><br><br>

                    <div class="form-group col" id="listofEntryForms" >
                      <h5>List of Entry Forms</h5>
                      <table class="table table-bordered">
                          <thead class="thead-dark">
                              <tr>
                                  <th style="width: 15%;">Presentation Type</th>
                                  <th style="width: 40%;">Thematic Area</th>
                                  <th style="width: 40%;">Title Poster</th>
                                  <th style="width: 5%;">Remove</th>
                              </tr>
                          </thead>
                          <tbody id="Entry_Forms">
                              {{-- data --}}
                          </tbody>
                      </table>
                    </div>

                    <br>
                </div>

                </div>


            </section>


              <br>
              <br>
              <hr>
              <br>

              
            </section>


            <button type="submit" id="submitPresenter" style="background-color:#008000; color: white;" class="btn pd-x-20" disabled>Submit</button>{{--  dapat nakadisabled --}}
            <button type="submit" id="backToRegForm" style="background-color:#008000; color: white;" class="btn pd-x-20" >Back</button>
            <br><br>
            <p class="text-danger"><strong> If the submit button is still disabled, it means a required field still needs to be filled. </strong> </p><br>

        </div><!-- component-section -->
    </div><!-- content -->

    @extends('layouts.js')


    @if(session('success'))
      <div class="alert alert-success">
          {{ session('success') }}
      </div>
  @endif

    <!-- Modal -->
    <div class="modal fade" id="uploadModal" tabindex="-1" role="dialog" aria-labelledby="uploadModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="uploadModalLabel">Upload PDF File</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="uploadForm" method="POST" enctype="multipart/form-data" action="#">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="file">Select PDF File</label>
                            <input type="file" class="form-control" id="file" name="file" accept="application/pdf" required>
                        </div>

                        <p id="nameofFile11" hidden></p>
                        <button type="submit" class="btn btn-success">Upload</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Success Modal -->
    <div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="successModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="successModalLabel">Success</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Data has been successfully saved.
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success" data-dismiss="modal">OK</button>
                </div>
            </div>
        </div>
    </div>

     <!-- Warning Modal -->
    <div class="modal fade" id="warningModal" tabindex="-1" aria-labelledby="warningModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="warningModalLabel">Warning</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Are you sure you want to delete this?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-danger" id="confirmDelete">Delete</button>
                </div>
            </div>
        </div>
    </div>

    <!-- The Modal -->
    <div class="modal fade" id="designationModal" tabindex="-1" role="dialog" aria-labelledby="designationModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="designationModalLabel">Enter Designation</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <input type="text" id="designationInput1" class="form-control" placeholder="Designation Position" required>
                </div>
                <div class="modal-footer">
                    <button type="button" id="submitDesignation" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </div>
    </div>

 
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
        const disabledDates = ["2024-11-26", "2024-11-27", "2024-11-28"];

        document.getElementById("arrivalDate").addEventListener("input", function() {
            const selectedDate = this.value;
            if (disabledDates.includes(selectedDate)) {
                alert("This date is not available for selection. The event is moved to December 3-5");
                this.value = ""; // Reset the input
            }
        });

        document.getElementById("departureDate").addEventListener("input", function() {
            const selectedDate = this.value;
            if (disabledDates.includes(selectedDate)) {
                alert("This date is not available for selection. The event is moved to December 3-5");
                this.value = ""; // Reset the input
            }
        });
        

    </script>

  <script type="text/javascript">
    
    document.getElementById('submitDesignation').onclick = function() {
        // Get the value from the input field
        const designationValue = document.getElementById('designationInput1').value.trim(); // Use trim() to avoid whitespace issues

        if (designationValue === "") {
            alert("Leave Designation Position");
            return; // Return early if the input is empty
        } else {
            const selectElement = document.getElementById('philricePosition');
            let optionExists = false;

            // Check if the option already exists
            for (let i = 0; i < selectElement.options.length; i++) {
                if (selectElement.options[i].value.toLowerCase() === designationValue.toLowerCase()) {
                    optionExists = true; // Option already exists
                    break;
                }
            }

            // If option does not exist, create a new option and append it to the select element
            if (!optionExists) {
                const newOption = document.createElement('option');
                newOption.value = designationValue; // Set the value of the new option
                newOption.text = designationValue;  // Set the text of the new option
                selectElement.appendChild(newOption); // Append the new option to the select element
            }

            // Set the value of the select element to the input value (new or existing)
            selectElement.value = designationValue;

            // Clear the input field
            document.getElementById('designationInput1').value = ""; // Corrected ID

            // Hide the modal
            $('#designationModal').modal('hide');
        }
    };


  </script>


  <script>
    document.getElementById('proponentsForm').addEventListener('submit', function(event) {
        event.preventDefault(); // Prevent the default form submission

        // Capture form data
        const proponents_type = document.getElementById('proponents_type').value;
        const proponents_name = document.getElementById('proponents_name').value;
        const proponents_position = document.getElementById('proponents_position').value;
        const proponents_agency = document.getElementById('proponents_agency').value;

        const proponents_agency_inputted = document.getElementById('proponents_agency_inputted').value;
        // Check if we are editing an existing row
        const editRowId = document.getElementById('editRowId_Proponents').value;

        if (editRowId) {
            // Update existing row
            const rowToEdit = document.getElementById(editRowId);
            rowToEdit.innerHTML = `
                <td>${proponents_type}</td>
                <td>${proponents_name}</td>
                <td>${proponents_position}</td>
                <td>${proponents_agency}</td>
                <td>
                    <button type="button" class="btn btn-warning btn-sm edit-row-proponents">Edit</button>
                    <button type="button" class="btn btn-danger btn-sm delete-row">Delete</button>
                </td>

                <td hidden>${proponents_agency_inputted}</td>
            `;
        } else {
            // Create a new row
            const tableBody = document.getElementById('Proponents');
            const newRow = document.createElement('tr');
            newRow.id = `row-${Date.now()}`;

            // Insert data into the new row
            newRow.innerHTML = `
                <td>${proponents_type}</td>
                <td>${proponents_name}</td>
                <td>${proponents_position}</td>
                <td>${proponents_agency}</td>
                <td>
                    <button type="button" class="btn btn-warning btn-sm edit-row-proponents">Edit</button>
                    <button type="button" class="btn btn-danger btn-sm delete-row">Delete</button>
                </td>

                <td hidden>${proponents_agency_inputted}</td>
            `;

            // Add the new row to the table
            tableBody.appendChild(newRow);

            // Remove the "No records found" row if it exists
            const noRecordsRow = document.querySelector('.no-records');
            if (noRecordsRow) {
                check_recordss();
            }
        }

        // Close the add proposal modal and show the success modal
        $('#proponentsModal').modal('hide');
        $('#successModal').modal('show');

        // Clear the form
        document.getElementById('proponentsForm').reset();
    });


    // Edit row functionality
    document.addEventListener('click', function(event) {
        if (event.target.classList.contains('edit-row-proponents')) {
            const rowToEdit = event.target.closest('tr');
            const cells = rowToEdit.children;

            // Populate form fields with existing row data
            document.getElementById('editRowId_Proponents').value = rowToEdit.id;
            document.getElementById('proponents_type').value = cells[0].textContent;
            document.getElementById('proponents_name').value = cells[1].textContent;
            document.getElementById('proponents_position').value = cells[2].textContent;
            document.getElementById('proponents_agency').value = cells[3].textContent;
            document.getElementById('proponents_agency_inputted').value = cells[5].textContent;
            
            $('#proponentsModal').modal('show');
        }
    });

    // Reset edit row ID and form on modal close
    $('#proponentsModal').on('hidden.bs.modal', function () {
        document.getElementById('editRowId_Proponents').value = '';
        document.getElementById('proponentsForm').reset();
    });
</script>


  <script>

    $(document).ready(function() {
        $("#uploadForm").submit(function(e) {
            e.preventDefault(); // avoid to execute the actual submit of the form.
            
            var form = document.getElementById('uploadForm');
            var formData = new FormData(form);

            var filenameText = $("#nameofFile11").text();


            if(filenameText!=""){
              formData.append('filenameText', filenameText);
            }
            else{
              formData.append('filenameText', "");
            }


            $.ajax({
                type: "POST",
                url: '{{ route('uploadd') }}', // Use Laravel's route helper
                data: formData, 
                contentType: false,
                processData: false,
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(data) {
                    if(data['status'] == "uploaded"){
                      alert("Successfully Uploaded");

                      $("#nameofFile").text(data['filename']);
                      $("#nameofFile1").text(data['newFilename']);
                      $("#nameofFile11").text(data['newFilename']);

                      // alert(data['filenameText']);
                      
                      $('#uploadModal').modal('toggle');
                      checkFormFields();
                    }
                },
                error: function(xhr, status, error) {
                    alert("Error uploading. Make sure pdf file and minimize size file");
                    // alert("Error: Please resize your pdf below 2mb or kbs");
                }
            });
        });
    });

    function checkFormFields() {
  
          var tbody = document.getElementById('Entry_Forms');
          var counter = 0;
          // Check if the tbody has any rows
          if (tbody && tbody.children.length === 0) {
              ////console.log('The table is empty.');
              

          } else {
              ////console.log('The table has data.');
              counter = 1;
          }




        if($('#firstNamePresenter').val() !== '' &&
          $('#current_address').val() !== '' &&
          $('#lastNamePresenter').val() !== '' &&
          $('#file').val() !== '' &&
          $('#mobileNumber_presenter').val() !== '' &&
          $('#email_presenter').val() !== '' &&
          $('#nameofFile').text() !== '') // Check the text of #nameofFile
          {   
              if(counter === 1){
                $('#btn-addform').prop('disabled', false);
                $('#submitPresenter').prop('disabled', false);
              }
              else{
                $('#submitPresenter').prop('disabled', true);
              }
              
          }
          else{
            $('#submitPresenter').prop('disabled', true);
          }
      }


  </script>


  
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
  //console.log(invCode);

  var framData = 100;
  var framData1 =0;
  var framDataForm = 0;




    var newFilename = "";
          
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
                   // framData--;
                   //console.log(framData);
                   if(framData==0)
                   {
                    $('#coAuthorsLabel').hide();
                   }
               }
           });

       });

       //  $('body').on('click', '.delete-clone-btn-form', function() {
           
       //     var dataF = $(this).attr("data-id");
       
       //     Swal.fire({
       //         title: 'Delete this?',
       //         text: "Are you sure you want to delete this form?",
       //         icon: 'info',
       //         showCancelButton: true,
       //         confirmButtonColor: '#3085d6',
       //         cancelButtonColor: '#d33',
       //         confirmButtonText: 'Delete'
       //     }).then((result) => {
       //         if (result.isConfirmed) {
       //             var token = $('#_token').val();
       //             var rmvData = dataF;
       //             $(this).closest('.dynamicFormInputRatioForm' + dataF + '').remove();                                    
       //             framDataForm--;
       //             //console.log(framDataForm);
       //             if(framDataForm==0)
       //             {
       //              $('#coAuthorsLabel1').hide();
       //             }
       //         }
       //     });
       // });



  var phil = $("#philrice").val();
  var participant = $("#participantType").val();

  $('#philrice').on('change', () => {
    var phil = $("#philrice").val();
    var participant = $("#participantType").val();
    var tour = $("#tour").val();
    //console.log(tour);
    if (phil !== 'default' && participant !== 'default' && tour !== 'default') {
      $('#submit').prop('disabled', false);
    } else {
      $('#submit').prop('disabled', true);
    }
  });



  

  $('#participantType').on('change', () => {
    var phil = $("#philrice").val();
    var participant = $("#participantType").val();
    var tour = $("#tour").val();
    //console.log(tour);
    if (phil !== 'default' && participant !== 'default' && tour !== 'default') {
      $('#submit').prop('disabled', false);
    } else {
      $('#submit').prop('disabled', true);
    }
  });

  $('#tour').on('change', () => {
    var phil = $("#philrice").val();
    var participant = $("#participantType").val();
    var tour = $("#tour").val();
    //console.log(tour);
    if (phil !== 'default' && participant !== 'default' && tour !== 'default') {
      $('#submit').prop('disabled', false);
    } else {
      $('#submit').prop('disabled', true);
    }
  });

  $('#dietRestrictions').on('change',() => {
    var diet = $("#dietRestrictions").val();
    //console.log(diet);
    if(diet=='Other')
    {``
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

    var emails = <?php echo json_encode($emails); ?>;
    var counter;

    for (var i = 0; i < emails.length; i++) { 
      if(emails[i]["email"] == email){
        counter = 1;
      }
    }

    if (!emailPattern.test(email)) {
      $('#emailError').show();
    }
    else if(counter == 1){
      $('#emailError1').show();
    }
     else {
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


    var emailValue11 = document.getElementById('email').value;
    document.getElementById('email_presenter').value = emailValue11;

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
      
    if($('#philricePosition').val()=='Other')
    { 

      $('#designationModal').modal('show');
    }


    //console.log($('#philrice').val(),$('#participantType').val());
    
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
        $('#affiliationCategory').val() !== '' &&
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



  $('#firstNamePresenter, #midNamePresenter, #lastNamePresenter, #current_address, #mobileNumber_presenter, #email_presenter').on('change', () => {


    checkFormFields();

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
    $affiliationCategory = $('#affiliationCategory').val();
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
    $tour = $('#tour').val();
    $('.loader').show();
    $(this).prop("disabled", true);
    $(this).text("Processing...");  // optional: show feedback
    $.ajax({ 
        type: 'POST',
        url: "{{ route('saveParticipantProfile') }}",
        data: {
            _token: "{{ csrf_token() }}",
            invitationCode: $invitationCode,
            email: $email,
            tour: $tour,
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
            workNature: $workNature,
            affiliationCategory:$affiliationCategory,
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
          $('.loader').hide();
          $(this).prop("disabled", false).text("Submit");
        }
    });
  });




  function getTableData() {
      // Access the table body
      const tableBody = document.getElementById('Entry_Forms');
      // Get all rows in the table body
      const rows = tableBody.getElementsByTagName('tr');

      // Array to hold the extracted data
      const data = [];

      // Loop through each row
      for (let row of rows) {
          const cells = row.getElementsByTagName('td');

          // Extract data from each cell
          const rowData = {
              presentationType: cells[0].innerText,
              thematicArea: cells[1].innerText,
              presentationTitle: cells[2].innerText,
              authors: cells[4].innerText,  // hidden data
              abstract: cells[5].innerText, // hidden data
              keywords: cells[6].innerText  // hidden data
          };

          // Add the row data to the array
          data.push(rowData);
      }

      return data;
  }

  function handlePresenterData(data){


    


    $invitationCode = $('#invCode').text();
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
    $affiliationCategory = $('#affiliationCategory').val();
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
    $tour = $('#tour').val();


      $.ajax({ 
        type: 'POST',
        url: "{{ route('savePresenterProfile') }}",
        data: {
            _token: "{{ csrf_token() }}",
            invitationCode: $invitationCode,
            email: $email,
            tour: $tour,
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
            affiliationCategory: $affiliationCategory,
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
            database_presenter : data
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
          else if(data == "no_data"){
            alert("no data");
          }
        }
    });

  }



  $('#submitPresenter').on("click", function (e) {

    

    var filenamee = document.getElementById('nameofFile1');
    var filenameee = filenamee.textContent;
    const tableBodyBody = document.getElementById('Entry_Forms');
    const numberOfRows = tableBodyBody.rows.length;
    //alert("Number of rows: " + numberOfRows);


    const tableData = getTableData();

    const invitationCode = $('#invCode').text();
    const file = filenameee; 
    const firstNamePresenter = $('#firstNamePresenter').val();
    const midNamePresenter = $('#midNamePresenter').val();
    const lastNamePresenter = $('#lastNamePresenter').val();
    const current_address = $('#current_address').val();
    const mobileNumber_presenter = $('#mobileNumber_presenter').val();
    const email_presenter = $('#email').val();

    $('.loader').show();
    $(this).prop("disabled", true);
    $(this).text("Processing...");  // optional: show feedback

    $.ajax({ 
      type: 'POST',
      url: "{{ route('savePresenterProfile1') }}",
      data: {
          _token: "{{ csrf_token() }}",
          invitationCode : invitationCode,
          endorsement_letter :file,
          firstNamePresenter : firstNamePresenter,
          midNamePresenter : midNamePresenter,
          lastNamePresenter : lastNamePresenter,
          current_address : current_address,
          mobileNumber_presenter : mobileNumber_presenter,
          email_presenter : email_presenter,
          tableData : tableData
      },
        success: function(data){

          if(data.status === "inserted"){
            
            var rawData = data.data;
            var database_presenter = JSON.stringify(rawData);

            ////console.log(JSON.stringify(tableData));

            handlePresenterData(database_presenter);
          }
          $('.loader').hide();
          $(this).prop("disabled", false).text("Submit");
        }
    });


    return 0;

  });




  $('#addEntryForm').on("click", function (e) {

    if($('#presentationType').val() == null ||
      $('#presentationTitle').val() == '' ||
      $('#thematicArea').val() == null ||
      $('#authorsName0').val() == '' ||
      $('#authorsPosition0').val() == '' ||
      $('#authorsAgency0').val() == '' ||
      $('#abstract').val() == '' ||
      $('#keywords').val() == '')
      {
              alert("Please complete all the details before proceeding");
      }
    else{

              var authorArray = [];
              var authorDetails = [];

              // //console.log(framData);
              for(i=0; i<=framData; i++)
              {
                var authName = $('#authorsName'+i+'').val(); 
                var authPosition = $('#authorsPosition'+i+'').val();
                var authAgency = $('#authorsAgency'+i+'').val();
                ////console.log(authName, authPosition, authAgency);
                
                if(authName == null || authName == ''){
                  
                }else{
                  var authorDetails = {
                      "authName": authName,
                      "authPosition": authPosition,
                      "authAgency": authAgency
                  };
                  authorArray.push(authorDetails);
                }
                
              }
              ////console.log(JSON.stringify(authorArray));

              $presentationType = $('#presentationType').val(); 
              $thematicArea = $('#thematicArea').val();
              $presentationTitle = $('#presentationTitle').val();
              $authors = JSON.stringify(authorArray);
              $abstract = $('#abstract').val();
              $keywords = $('#keywords').val();

              // Create a new row
              const tableBody = document.getElementById('Entry_Forms');
              const newRow = document.createElement('tr');
              newRow.id = `row-${Date.now()}`;

              
              // Insert data into the new row
              newRow.innerHTML = `
                  <td>${$presentationType}</td>
                  <td>${$thematicArea}</td>
                  <td>${$presentationTitle}</td>
                  <td><button type="button" class="btn btn-danger btn-sm delete-row-entry-form"><i class="fa fa-trash" aria-hidden="true"></i></button></td>
                  <td hidden>${$authors}</td>
                  <td hidden>${$abstract}</td>
                  <td hidden>${$keywords}</td>
              `;

              // Add the new row to the table
              tableBody.appendChild(newRow);

            $('#successModal').modal('show'); 

            // Set the values of the elements to an empty string
            $('#presentationType').val('');
            $('#thematicArea').val('');
            $('#presentationTitle').val('');
            $('#abstract').val('');
            $('#keywords').val('');

            $('#authorsName0').val(''); 
            $('#authorsPosition0').val('');
            $('#authorsAgency0').val('');
            document.getElementById('coAuthorsLabel').style.display = 'none';
            checkFormFields();

            for (let a = 1; a <= framData; a++) { 
              let element = document.querySelector('.dynamicFormInputRatio' +a+'');
              if (element) {
                element.remove();
              }
            }
    }


  });
  




  // Delete row functionality with warning modal
    let rowToDelete;
    document.addEventListener('click', function(event) {
        if (event.target.classList.contains('delete-row-entry-form')) {
            rowToDelete = event.target.closest('tr');
            $('#warningModal').modal('show');
        }
    });

    document.getElementById('confirmDelete').addEventListener('click', function() {
        if (rowToDelete) {
            rowToDelete.remove();
            rowToDelete = null;
            $('#warningModal').modal('hide');
            checkFormFields();
        }
    });
    // Delete row functionality with warning modal




});
</script>


</html>
