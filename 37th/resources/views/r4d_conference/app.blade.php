<!DOCTYPE html>
<html lang="en">

{{-- <script type="text/javascript">
    // Redirect to the specified URL
    window.location.href = "https://ugnaypalayv2.philrice.gov.ph/";
</script> --}}
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="A modern mobile sidebar template using Bootstrap.">
  
  <title>Ugnay Palay App</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    
  <!-- Include Lightbox CSS -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.min.css" rel="stylesheet" />

  


  <style>
        body {
            background-image: url('/csd/37th/public/ugnaypalayapp/bg.png');
            background-size: cover; /* Cover the entire body */
            background-position: center; /* Center the image */
            background-repeat: no-repeat; /* Do not repeat the image */
            height: 100vh; /* Set the height to full viewport height */
            margin: 0; /* Remove default margin */
            font-family: Arial, sans-serif; /* Improved font choice */
        }

        .offcanvas-header {
            background-color: white; /* Change to a more modern blue */
            color: white;
            border-bottom: 1px solid #0056b3; /* Added border for separation */
        }

        .offcanvas-body {
            padding-top: 0;
            background-color: #f8f9fa; /* Light background for better contrast */
        }

        .offcanvas-body a {
            display: block;
            padding: 15px; /* Increased padding for better touch targets */
            color: #333; /* Darker text color for readability */
            text-decoration: none;
            border-bottom: 1px solid #ddd; /* Added divider between links */
            transition: background-color 0.3s; /* Smooth transition */
        }

        .offcanvas-body a:hover {
            background-color: #e9ecef; /* Slightly darker on hover */
        }

        .navbar {
            background-color: rgba(255, 255, 255, 0.8); /* Semi-transparent navbar */
            backdrop-filter: blur(10px); /* Added blur effect for modern look */
        }

        .navbar .btn {
            margin-right: auto; /* Align button to the right */
        }

        /* Custom styles for full-screen modals */
        .modal-fullscreen {
            height: 100%;
            width: 100%;
            margin: 0;
            border-radius: 0; /* Remove border radius for full screen */
        }

        .modal-content {
            height: 100%; /* Full height for modal content */
            border: none; /* Remove border */
            border-radius: 0; /* Remove border radius */
        }

        .lightbox img {
            max-width: 90%; /* Ensure the image fits within the viewport */
            max-height: 90vh; /* Maintain aspect ratio within the viewport */
            object-fit: cover; /* Cover will maintain the aspect ratio */
        }
  </style>
</head>
<body>

  <!-- Navbar with sidebar toggle -->
  <nav class="navbar navbar-light">
    <div class="container">
      <button class="btn btn-outline-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasSidebar" aria-controls="offcanvasSidebar" aria-label="Toggle sidebar">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
  </nav>

  <!-- Offcanvas Sidebar -->
  <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasSidebar" aria-labelledby="offcanvasSidebarLabel">
    <div class="offcanvas-header">
        <img src="/csd/37th/public/ugnaypalayapp/logo.png" width="200px" height="60px" alt="Logo">
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
      <a href="#" data-bs-toggle="modal" data-bs-target="#programModal">Program</a>
      <a href="#" data-bs-toggle="modal" data-bs-target="#speakersModal">Speakers</a>
      <a href="#" data-bs-toggle="modal" data-bs-target="#souvenirModal">Souvenir Program</a>
      <a href="#" data-bs-toggle="modal" data-bs-target="#presentationsModal">Presentations</a>
      <a href="#" data-bs-toggle="modal" data-bs-target="#venueModal">Venue</a>
      <a href="#" data-bs-toggle="modal" data-bs-target="#commentsModal">Comments and Suggestions</a>
      <a href="#" data-bs-toggle="modal" data-bs-target="#faqsModal">FAQs</a>
      <a href="#" data-bs-toggle="modal" data-bs-target="#aboutModal">About Us</a>
    </div>
  </div>

  <!-- Modals -->
  <div class="modal fade" id="programModal" tabindex="-1" aria-labelledby="programModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-fullscreen">
          <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title" id="programModalLabel">Event Program</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              
              <div class="modal-body">
                  <h6 class="mb-3">Schedule of Events | November 26-28, 2024</h6>
                  <div class="accordion" id="programAccordion">
                      
                      <div class="accordion-item">
                          <h2 class="accordion-header" id="headingOne">
                              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                  Day 1
                              </button>
                          </h2>
                          <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#programAccordion">
                              <div class="accordion-body">
                                  <h5>November 26, 2024</h5>
                                  <table class="table" style="font-size: 13px;">
                                      <thead>
                                          <tr>
                                              <th scope="col">Time</th>
                                              <th scope="col"></th>
                                          </tr>
                                      </thead>
                                      <tbody>
                                          <tr>
                                              <td>7:00 AM - 8:30 AM</td>
                                              <td>Registration and Welcome Coffee</td>
                                          </tr>
                                          <tr>
                                              <td>10:00 AM - 10:30 AM</td>
                                              <td>Opening Program 
                                                <ul class="my-justified-text">
                                                    <li>Welcome Remarks</li>
                                                    <li>Keynote Message</li>
                                                    <li>Launching of new knowledge products</li>
                                                    <li>Opening/Viewing of Posters/ Exhibits</li>
                                                </ul>
                                              </td>
                                          </tr>
                                          <tr>
                                              <td>10:00 AM</td>
                                              <td>Networking Break + viewing of posters and exhibits</td>
                                          </tr>
                                          <tr>
                                              <td>10:30 AM - 12:00 NN</td>
                                              <td>Plenary Session 1. <br>
                                                <strong> Cutting-edge Rice R4D Innovations </strong>
                                              </td>
                                          </tr>
                                          <tr>
                                              <td>12:00 NN</td>
                                              <td>Lunch Break</td>
                                          </tr>
                                          <tr>
                                              <td>1:30 PM </td>
                                              <td>Panel Discussion 1.<br>
                                                <strong> Scaling R4D Innovations </strong>
                                              </td>
                                          </tr>
                                          <tr>
                                              <td>3:00 PM</td>
                                              <td>Networking Break + viewing of posters and exhibits</td>
                                          </tr>
                                          <tr>
                                              <td>3:30 PM</td>
                                              <td>Concurrent Sessions</td>
                                          </tr>
                                          <tr>
                                              <td>6:00 PM</td>
                                              <td>Welcome Dinner and Networking</td>
                                          </tr>
                                      </tbody>
                                  </table>
                              </div>
                          </div>
                      </div>
                      
                      <div class="accordion-item">
                          <h2 class="accordion-header" id="headingTwo">
                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                  Day 2
                              </button>
                          </h2>
                          <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#programAccordion">
                              <div class="accordion-body">
                                  <h5>November 27, 2024</h5>
                                  <table class="table" style="font-size: 13px;">
                                      <thead>
                                          <tr>
                                              <th scope="col">Time</th>
                                              <th scope="col"></th>
                                          </tr>
                                      </thead>
                                      <tbody>
                                          <tr>
                                              <td>7:00 AM</td>
                                              <td>Field/Facility Tour <br>
                                                  Morning Coffee and Networking<br>
                                                  Viewing of posters and exhibits
                                              </td>
                                          </tr>
                                          <tr>
                                              <td>8:00 AM</td>
                                              <td>Recap of Day 1</td>
                                          </tr>

                                          <tr>
                                              <td>09:00 AM</td>
                                              <td>Plenary Session 2. <br>
                                                <strong> RCEF Impact and Innovations: Success Stories and Future Directions </strong>
                                              </td>
                                          </tr>
                                          <tr>
                                              <td>10:00 AM</td>
                                              <td>Networking Break + viewing of posters and exhibits</td>
                                          </tr>
                                          <tr>
                                              <td>10:30 AM - 12:00NN</td>
                                              <td>Panel Discussion 2. <br>
                                                <strong> RCEF’s Role in Modernizing Rice Farming and Future Directions </strong>
                                              </td>
                                          </tr>
                                          <tr>
                                              <td>12:00 NN</td>
                                              <td>Lunch Break</td>
                                          </tr>
                                          <tr>
                                              <td>1:30 PM </td>
                                              <td>Plenary Session 3. <br>
                                                <strong> Cocreating the Future: Farmer-centered Innovations and Youth Empowerment  </strong>
                                              </td>
                                          </tr>
                                          <tr>
                                              <td>3:00 PM</td>
                                              <td>Networking Break + viewing of posters and exhibits</td>
                                          </tr>
                                          <tr>
                                              <td>3:30 PM</td>
                                              <td>Concurrent Sessions</td>
                                          </tr>
                                          <tr>
                                              <td>6:00 PM</td>
                                              <td>Fellowship Dinner / Socials and Networking </td>
                                          </tr>
                                      </tbody>
                                  </table>
                              </div>
                          </div>
                      </div>

                      <div class="accordion-item">
                          <h2 class="accordion-header" id="headingThree">
                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                  Day 3
                              </button>
                          </h2>
                          <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#programAccordion">
                              <div class="accordion-body">
                                  <h5>November 27, 2024</h5>
                                  <table class="table" style="font-size: 13px;">
                                      <thead>
                                          <tr>
                                              <th scope="col">Time</th>
                                              <th scope="col"></th>
                                          </tr>
                                      </thead>
                                      <tbody>
                                          <tr>
                                              <td>7:00 AM</td>
                                              <td>
                                                  Morning Coffee and Networking<br>
                                                  Viewing of posters and exhibits
                                              </td>
                                          </tr>
                                          <tr>
                                              <td>8:00 AM</td>
                                              <td>Recap of Day 2</td>
                                          </tr>
                                          <tr>
                                              <td>09:00 AM</td>
                                              <td>Panel Discussion 3.  <br>
                                                <strong> Bridging Generations: Collaboration between Farmers and Youth </strong>
                                              </td>
                                          </tr>
                                          <tr>
                                              <td>10:00 AM</td>
                                              <td>Networking Break + viewing of posters and exhibits</td>
                                          </tr>
                                          <tr>
                                              <td>10:30 AM</td>
                                              <td><strong> Closing Program </strong>
                                                <ul class="my-justified-text">
                                                    <li>Synthesis</li>
                                                    <li>Awarding of Best Posters</li>
                                                    <li>Vote of thanks</li>
                                                </ul>
                                              </td>
                                          </tr>
                                          <tr>
                                              <td>12:00 NN</td>
                                              <td>Lunch Break</td>
                                          </tr>
                                          <tr>
                                              <td>1:300 PM Onwards</td>
                                              <td>Departure of participants</td>
                                          </tr>
                                      </tbody>
                                  </table>
                              </div>
                          </div>
                      </div>
                      
                  </div>
              </div>


          </div>
      </div>
  </div>


  <div class="modal fade modal-fullscreen" id="speakersModal" tabindex="-1" aria-labelledby="speakersModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-fullscreen">
          <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title" id="speakersModalLabel">Our Esteemed Speakers</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                  <div class="accordion" id="speakersAccordion">
                      <!-- Keynote Speakers -->
                      <div class="accordion-item">
                          <h2 class="accordion-header" id="headingKeynote">
                              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseKeynote" aria-expanded="true" aria-controls="collapseKeynote">
                                  Keynote Speakers
                              </button>
                          </h2>
                          <div id="collapseKeynote" class="accordion-collapse collapse show" aria-labelledby="headingKeynote" data-bs-parent="#speakersAccordion">
                              <div class="accordion-body">
                                  <div class="row">
                                      <div class="col-md-4 mb-4">
                                          <div class="card d-flex flex-row align-items-center">
                                              <img src="/csd/37th/public/assets_website/img/r4d_speakers/FTL.png" alt="Speaker 1" class="card-img-left" style="width: 120px; height: 120px;">
                                              <div class="card-body">
                                                  <h6 class="card-title mb-0">Francisco Tiu Laurel, Jr.</h6>
                                                  <small class="text-muted">Secretary of Agriculture</small>
                                              </div>
                                          </div>
                                      </div>
                                      <!-- Add more keynote speakers here -->
                                  </div>
                              </div>
                          </div>
                      </div>
                      <!-- Guest Speakers -->
                      <div class="accordion-item">
                          <h2 class="accordion-header" id="headingGuest">
                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseGuest" aria-expanded="false" aria-controls="collapseGuest">
                                  Plenary Session
                              </button>
                          </h2>
                          <div id="collapseGuest" class="accordion-collapse collapse" aria-labelledby="headingGuest" data-bs-parent="#speakersAccordion">
                              <div class="accordion-body">
                                  <div class="row">
                                      <div class="col-md-4 mb-4">
                                          <div class="card d-flex flex-row align-items-center">
                                              <img src="https://via.placeholder.com/120" alt="Speaker 3" class="card-img-left" style="width: 120px; height: 120px;">
                                              <div class="card-body">
                                                  <h6 class="card-title mb-0">Juan Dela Cruz</h6>
                                                  <small class="text-muted">Founder of Creative Minds</small>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="col-md-4 mb-4">
                                          <div class="card d-flex flex-row align-items-center">
                                              <img src="https://via.placeholder.com/120" alt="Speaker 4" class="card-img-left" style="width: 120px; height: 120px;">
                                              <div class="card-body">
                                                  <h6 class="card-title mb-0">Juan Dela Cruz</h6>
                                                  <small class="text-muted">CTO at Innovate Solutions</small>
                                              </div>
                                          </div>
                                      </div>
                                      <!-- Add more guest speakers here -->
                                  </div>
                              </div>
                          </div>
                      </div>
                      
                      <!-- Panelists -->
                      <div class="accordion-item">
                          <h2 class="accordion-header" id="headingPanelists">
                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsePanelists" aria-expanded="false" aria-controls="collapsePanelists">
                                  Panel Discussion
                              </button>
                          </h2>
                          <div id="collapsePanelists" class="accordion-collapse collapse" aria-labelledby="headingPanelists" data-bs-parent="#speakersAccordion">
                              <div class="accordion-body">
                                  <div class="row">
                                      <div class="col-md-4 mb-4">
                                          <div class="card d-flex flex-row align-items-center">
                                              <img src="https://via.placeholder.com/120" alt="Speaker 5" class="card-img-left" style="width: 120px; height: 120px;">
                                              <div class="card-body">
                                                  <h6 class="card-title mb-0">Juan Dela Cruz</h6>
                                                  <small class="text-muted">Professor at University of Tech</small>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="col-md-4 mb-4">
                                          <div class="card d-flex flex-row align-items-center">
                                              <img src="https://via.placeholder.com/120" alt="Speaker 6" class="card-img-left" style="width: 120px; height: 120px;">
                                              <div class="card-body">
                                                  <h6 class="card-title mb-0">Juan Dela Cruz</h6>
                                                  <small class="text-muted">Head of Research at Global Labs</small>
                                              </div>
                                          </div>
                                      </div>
                                      <!-- Add more panelists here -->
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>



  <div class="modal fade" id="souvenirModal" tabindex="-1" aria-labelledby="souvenirModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-fullscreen">
          <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title" id="souvenirModalLabel">Souvenir Program</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                  <div class="row">
                      
                      <div class="col-md-4 mb-4">
                          <div class="card">
                              <a href="https://drive.google.com/file/d/1V2y5_TM7O3vmV2qJpEzqvKZcDoK6x_82/view?usp=sharing" target="_blank"> 
                                <img src="/csd/37th/public/ugnaypalayapp/souvenir_pic.png" class="card-img-top" alt="Souvenir 1"> 
                              </a>
                              <!-- <div class="card-body">
                                  <h5 class="card-title">Click the picture to open souve</h5>
                                  <p class="card-text">Stylish event t-shirt made from 100% cotton.</p>
                                  <p class="text-muted">$25.00</p> 
                              </div> -->
                          </div>
                      </div>
                      
                  </div>
              </div>
          </div>
      </div>
  </div>


  <div class="modal fade" id="presentationsModal" tabindex="-1" aria-labelledby="presentationsModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-fullscreen"> 
        <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title" id="presentationsModalLabel">Presentations</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                  <h6 class="mb-3">List of Presentations</h6>
                  <div class="accordion" id="presentationsAccordion">
                      
                      <div class="accordion-item">
                          <h2 class="accordion-header" id="presentationOne">
                              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapsePresentationOne" aria-expanded="true" aria-controls="collapsePresentationOne">
                                  Opening Program
                              </button>
                          </h2>
                          <div id="collapsePresentationOne" class="accordion-collapse collapse show" aria-labelledby="presentationOne" data-bs-parent="#presentationsAccordion">
                              <div class="accordion-body">
                                  Powerpoint Presentations here
                              </div>
                          </div>
                      </div>
                      <div class="accordion-item">
                          <h2 class="accordion-header" id="presentationTwo">
                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsePresentationTwo" aria-expanded="false" aria-controls="collapsePresentationTwo">
                                  I. Plenary Panel Sessions
                              </button>
                          </h2>
                          <div id="collapsePresentationTwo" class="accordion-collapse collapse" aria-labelledby="presentationTwo" data-bs-parent="#presentationsAccordion">
                              <div class="accordion-body">
                                  Powerpoint Presentations here
                              </div>
                          </div>
                      </div>
                      <div class="accordion-item">
                          <h2 class="accordion-header" id="presentationThree">
                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsePresentationThree" aria-expanded="false" aria-controls="collapsePresentationThree">
                                  II. Concurrent Sessions
                              </button>
                          </h2>
                          <div id="collapsePresentationThree" class="accordion-collapse collapse" aria-labelledby="presentationThree" data-bs-parent="#presentationsAccordion">
                              <div class="accordion-body">
                                  Powerpoint Presentations here
                              </div>
                          </div>
                      </div>
                      
                  </div>
              </div>
          </div>
      </div>
  </div>


  <div class="modal fade" id="venueModal" tabindex="-1" aria-labelledby="venueModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-fullscreen">
          <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title" id="venueModalLabel">Event Venue</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                  <p><strong>Opening and closing programs, and plenary sessions and panel discussions</strong></p>
                  <p>CBC Plenary Hall</p>
                  <hr>
                  <p><strong>Concurrent Sessions</strong></p>
                  <p>CBC Plenary Hall, FTIC Training Room3, Social</p>
                  <hr>
                  <p><strong>Lunch, fellowship, and dinner</strong></p>
                  <p>CBC Multipurpose Hall / CBC Training Hall</p>
                  <hr>
                  <h6 class="mt-4"><strong>Venue Map</strong></h6>
                  <a href="/csd/37th/public/ugnaypalayapp/venue_map.png" data-lightbox="venue-map" data-title="Venue Map">
                      <img src="/csd/37th/public/ugnaypalayapp/venue_map.png" class="img-fluid" alt="Venue Map" style="border: 1px solid #ddd;">
                  </a>
              </div>
          </div>
      </div>
  </div>



  <div class="modal fade" id="commentsModal" tabindex="-1" aria-labelledby="commentsModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-fullscreen">
          <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title" id="commentsModalLabel">Comments and Suggestions</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                  <form action="" id="comment" action="#">
                      <div class="mb-3">
                          <input type="text" class="form-control" id="name" placeholder="Enter your name" required>
                      </div>
                      <div class="mb-3">
                          <textarea class="form-control" id="comments" rows="10" placeholder="Write your comments or suggestions here..." required></textarea>
                      </div>
                      <div class="mb-3">
                          <label for="rating" class="form-label">Rate Us</label>
                          <select class="form-select" id="rating" required>
                              <option value="" disabled selected>Select your rating</option>
                              <option value="5">⭐️⭐️⭐️⭐️⭐️ (5 Stars)</option>
                              <option value="4">⭐️⭐️⭐️⭐️ (4 Stars)</option>
                              <option value="3">⭐️⭐️⭐️ (3 Stars)</option>
                              <option value="2">⭐️⭐️ (2 Stars)</option>
                              <option value="1">⭐️ (1 Star)</option>
                          </select>
                      </div>
                      <button type="submit" class="btn btn-primary" id="submitComment">Submit</button>
                  </form>
              </div>
          </div>
      </div>
  </div>


  <div class="modal fade modal-fullscreen" id="faqsModal" tabindex="-1" aria-labelledby="faqsModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-fullscreen">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="faqsModalLabel">Frequently Asked Questions</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="accordion" id="faqsAccordion">
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                  When and where is the conference taking place?
                </button>
              </h2>
              <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#faqsAccordion">
                <div class="accordion-body">
                  The 37th Ugnay Palay National Rice R4D Conference will be held on 26-28 November 2024. In-person participants will be gathered at the DA-Crop Biotechnology Center Plenary Hall, DA-PhilRice in Nueva Ecija.  
                </div>
              </div>
            </div>

            <div class="accordion-item">
              <h2 class="accordion-header" id="headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                  Who should attend the conference?
                </button>
              </h2>
              <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#faqsAccordion">
                <div class="accordion-body">
                  The DA-PhilRice hosts the annual Ugnay Palay National Rice Research for Development (R4D) Conference to unite stakeholders – researchers, development workers, scientists, policymakers, government officials, farmers, youth in agriculture, and industry partners – toward transforming the industry. 
                </div>
              </div>
            </div>

            <div class="accordion-item">
              <h2 class="accordion-header" id="headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                  Who is the organizer of Ugnay Palay?
                </button>
              </h2>
              <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#faqsAccordion">
                <div class="accordion-body">
                  Ugnay Palay is organized by the Department of Agriculture – Philippine Rice Research Institute.
                </div>
              </div>
            </div>

            <div class="accordion-item">
              <h2 class="accordion-header" id="headingFour">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                  Who can register for the conference?
                </button>
              </h2>
              <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#faqsAccordion">
                <div class="accordion-body">
                  Anyone can register to the 37th Ugnay Palay.  We are inviting the rice science community and its stakeholders to attend the Conference. Registration opened in September 2024. 
                </div>
              </div>
            </div>

            <div class="accordion-item"> 
                <h2 class="accordion-header" id="headingFive">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                        How do I register for the conference?
                    </button>
                </h2>
                <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#faqsAccordion">
                    <div class="accordion-body">
                        You can register for the Ugnay Palay online, either as participant or paper/poster presenter, via <a target="_blank" href="https://ugnaypalay.philrice.gov.ph:441/csd/37th/registration-form/ABCDefgHI">
                https://ugnaypalay.philrice.gov.ph:441/csd/37th/registration-form/ABCDefgHI
              </a>
                    </div>
                </div>
            </div>

            <div class="accordion-item"> 
                <h2 class="accordion-header" id="headingSix">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                        How will I know if my registration is successful?
                    </button>
                </h2>
                <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#faqsAccordion">
                    <div class="accordion-body">
                        A notification email will be sent to you once you are done with the registration. If you do not receive your email confirmation within 24 hours, please check your email spam folder and then contact us at <a href = "mailto:ricesecretariat@gmail.com?subject = Feedback&body = Message">
                ricesecretariat@gmail.com
              </a>
                    </div>
                </div>
            </div>

            <div class="accordion-item"> 
                <h2 class="accordion-header" id="headingSeven">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                        How much does it cost to register for the conference?
                    </button>
                </h2>
                <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven" data-bs-parent="#faqsAccordion">
                    <div class="accordion-body">
                        Attendance to the 37th Ugnay Palay is free of charge. All participants must register and will please arrange and pay for their own accommodation. Nearby accommodation options can be found here <a target="_blank" href="https://drive.google.com/file/d/1E_PrvbQpzwDj3ti7RNxiaD6Cg8GcN7wa/view?usp=sharing">
                https://drive.google.com/file/d/1E_PrvbQpzwDj3ti7RNxiaD6Cg8GcN7wa/view?usp=sharing
              </a>
                    </div>
                </div>
            </div>

            <div class="accordion-item"> 
                <h2 class="accordion-header" id="headingEight">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                        When is the deadline for registration?
                    </button>
                </h2>
                <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight" data-bs-parent="#faqsAccordion">
                    <div class="accordion-body">
                        Participant registration will be open until the second week of November 2024.
                    </div>
                </div>
            </div>

            <div class="accordion-item"> 
                <h2 class="accordion-header" id="headingNine">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                        Can I present at the conference?
                    </button>
                </h2>
                <div id="collapseNine" class="accordion-collapse collapse" aria-labelledby="headingNine" data-bs-parent="#faqsAccordion">
                    <div class="accordion-body">
                        Yes. Call for paper and poster (provide information on submitting papers, abstracts)
                    </div>
                </div>
            </div>

            <div class="accordion-item"> 
                <h2 class="accordion-header" id="headingTen">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
                        Is there a dress code for the conference?
                    </button>
                </h2>
                <div id="collapseTen" class="accordion-collapse collapse" aria-labelledby="headingTen" data-bs-parent="#faqsAccordion">
                    <div class="accordion-body">
                        The conference attire is business casual for all participants. We recommend dressing comfortably yet professionally for all conference sessions and networking events. Function rooms can get chilly, so we recommend layers for your comfort. 
                    </div>
                </div>
            </div>

            <div class="accordion-item">
              <h2 class="accordion-header" id="headingEleven">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEleven" aria-expanded="false" aria-controls="collapseEleven">
                      How are the conference sessions formatted?
                  </button>
              </h2>
              <div id="collapseEleven" class="accordion-collapse collapse" aria-labelledby="headingEleven" data-bs-parent="#faqsAccordion">
                  <div class="accordion-body">
                      There will be two plenary sessions, four panel discussions, and six concurrent sessions. (provide link for provisional program)
                  </div>
              </div>
          </div>

          <div class="accordion-item">
              <h2 class="accordion-header" id="headingTwelve">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwelve" aria-expanded="false" aria-controls="collapseTwelve">
                      Will conference materials be available?
                  </button>
              </h2>
              <div id="collapseTwelve" class="accordion-collapse collapse" aria-labelledby="headingTwelve" data-bs-parent="#faqsAccordion">
                  <div class="accordion-body">
                      Yes. A souvenir program and copies of the presentation will be available at the Ugnay Palay website.
                  </div>
              </div>
          </div>

          <div class="accordion-item">
              <h2 class="accordion-header" id="headingThirteen">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThirteen" aria-expanded="false" aria-controls="collapseThirteen">
                      Will certificates be given to all participants?
                  </button>
              </h2>
              <div id="collapseThirteen" class="accordion-collapse collapse" aria-labelledby="headingThirteen" data-bs-parent="#faqsAccordion">
                  <div class="accordion-body">
                      Yes.  The organizing committee will send out digital certificates of participation through your registered email address within a week after the conference to those who will accomplish the feedback survey questionnaire. 
                  </div>
              </div>
          </div>

          <div class="accordion-item">
              <h2 class="accordion-header" id="headingFourteen">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFourteen" aria-expanded="false" aria-controls="collapseFourteen">
                      Are there Continuing Professional Development (CPD) credit units?
                  </button>
              </h2>
              <div id="collapseFourteen" class="accordion-collapse collapse" aria-labelledby="headingFourteen" data-bs-parent="#faqsAccordion">
                  <div class="accordion-body">
                      Yes. Licensed agriculturists can use their certificates of participation under self-directed learning activities as per accreditation outlined in Section 2 of Resolution No. 1197, Series of 2019, issued by the Professional Regulation Commission. (provide link)
                  </div>
              </div>
          </div>

          <div class="accordion-item">
              <h2 class="accordion-header" id="headingFifteen">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFifteen" aria-expanded="false" aria-controls="collapseFifteen">
                      Whom should I contact for inquiries?
                  </button>
              </h2>
              <div id="collapseFifteen" class="accordion-collapse collapse" aria-labelledby="headingFifteen" data-bs-parent="#faqsAccordion">
                  <div class="accordion-body">
                      The Conference Secretariat will respond to your queries and additional information requests through <a href = "mailto:ricesecretariat@gmail.com?subject = Feedback&body = Message">
                ricesecretariat@gmail.com.  
              </a>
                  </div>
              </div>
          </div>

          <!-- <div class="accordion-item">
              <h2 class="accordion-header" id="headingSixteen">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSixteen" aria-expanded="false" aria-controls="collapseSixteen">
                      How can I contact the organizers?
                  </button>
              </h2>
              <div id="collapseSixteen" class="accordion-collapse collapse" aria-labelledby="headingSixteen" data-bs-parent="#faqsAccordion">
                  <div class="accordion-body">
                      You can contact the conference organizers via email at info@conference2024.com or call us at (123) 456-7890 during business hours.
                  </div>
              </div>
          </div> -->

          </div>
        </div>
      </div>
    </div>
  </div>

  <style>
      .text-justify {
          text-align: justify;
      }
  </style>

  <div class="modal fade modal-fullscreen" id="aboutModal" tabindex="-1" aria-labelledby="aboutModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-fullscreen">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="aboutModalLabel">About Us</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- <h6>Welcome to Our Event Application!</h6> -->
                <p class="text-justify">
                    The <strong> DA-PhilRice charter</strong>, established by Executive Order No. 1061 in November 1985, mandates the Institute to lead the national rice research for development and extension (R4DE) program. This initiative has been crucial in enhancing and sustaining rice production across the Philippines. Over the years, DA-PhilRice has worked closely with the Department of Agriculture (DA) and a broad network of collaborators—including state colleges and universities, local government units, the private sector, non-governmental organizations, and farmer groups—to uplift the nation’s rice farming communities.
                </p>
                <p class="text-justify">
                  During the implementation of its Strategic Plan 2017-2022, DA-PhilRice successfully navigated numerous challenges and played a key role in the rollout of the Rice Competitiveness Enhancement Fund (RCEF). This initiative provided Filipino rice farmers with access to high-quality seeds, advanced farming technologies, mechanization, and comprehensive training programs. These measures were pivotal in modernizing rice farming practices, reducing production costs, and increasing yields, thereby enhancing the competitiveness of Filipino farmers in the global market.
                </p>
                <p class="text-justify">
                  Building on these successes, DA-PhilRice is now set to implement its 2023-2028 Strategic Plan, which focuses on leveraging advanced science and technology to create more prosperous and resilient rice farming communities. Central to this plan is a people-centric approach, aimed at improving the productivity, profitability, and well-being of farmers while ensuring the long-term sustainability and competitiveness of the rice industry.
                </p>
                <p class="text-justify">
                   The <strong> 37th Ugnay Palay National Rice R4D Conference </strong> arrives at a crucial moment in the evolution of the Philippine rice industry. This year's theme, <strong>"Advancing Rice R4DE para sa Masaganang Bagong Pilipinas"</strong> encapsulates DA-PhilRice's commitment to driving innovation, resilience, and sustainability in Philippine agriculture. It reflects the Institute’s dedication to placing farmers at the core of these advancements, ensuring their needs are met and their livelihoods are improved as they strive for greater productivity.
                   <br>
                </p>

                <p class="text-justify">
                   This conference will serve as a pivotal platform for uniting stakeholders from across the rice sector—including researchers, scientists, policymakers, farmers, and industry partners—around a shared mission of transforming the industry. By focusing on harnessing cutting-edge advancements in rice research, technology, and development (R4D), the conference aims to build on the momentum initiated by the RCEF program, exploring ways to further elevate the productivity and market competitiveness of Filipino farmers and reinforce the Philippines' standing as a global rice industry leader.
                </p>
                <p class="text-justify">
                   Through collaboration and innovation, DA-PhilRice is confident in securing a more resilient, sustainable, and food-secure future for all Filipinos. Together, we are working toward realizing a <strong>"Masaganang Bagong Pilipinas,"</strong> where every Filipino enjoys a prosperous and secure life.
                </p>

                <img src="/csd/37th/public/ugnaypalayapp/philricelogo.png" alt="" class="img-fluid">
                <!-- <h6>Follow Us:</h6>
                <p>
                    Stay updated by following us on our social media channels: 
                    <a href="#">Facebook</a>, 
                    <a href="#">Twitter</a>, 
                    <a href="#">Instagram</a>.
                </p> -->
            </div>
        </div>
    </div>
</div>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <!-- Include jQuery (required for Lightbox) -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <!-- Include Lightbox JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox.min.js"></script>



  <script type="text/javascript">
    $(document).ready(function() {
      $('body').on('click', '#submitComment', function(event) {
        event.preventDefault(); // Prevent the default action if it's a form submission
        
        var name = $("#name").val();
        var comments = $("#comments").val();
        var rating = $("#rating").val();

        // Check if any of the fields are null or empty
        if (!name || !comments || !rating) {
          alert("All fields are required. Your name, comments and rate");
          return; // Exit the function if validation fails
        }


        $.ajax({ 
          type: 'POST',
          url: "{{ route('saveParticipantProfile2') }}",
          data: {
            _token: "{{ csrf_token() }}",
            name: name,
            comments: comments,
            rating: rating,
          },
          success: function(data){
            if(data === "sent"){
              $('#commentsModal').modal('toggle');
              $("#name").val("");
              $("#comments").val("");
              $("#rating").val(""); 
              alert("Your feedback has been received. Thank you!");               
            }
          }
        });
      });
    });
  </script>

</body>
</html>
