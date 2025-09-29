   @extends('dashboard.index')

@section('styles')
    <style>
      

 /* Font Definitions */
 @font-face
	{font-family:"Cambria Math";
	panose-1:2 4 5 3 5 4 6 3 2 4;}
@font-face
	{font-family:DengXian;
	panose-1:2 1 6 0 3 1 1 1 1 1;}
@font-face
	{font-family:Calibri;
	panose-1:2 15 5 2 2 2 4 3 2 4;}
@font-face
	{font-family:Cambria;
	panose-1:2 4 5 3 5 4 6 3 2 4;}
@font-face
	{font-family:"\@DengXian";
	panose-1:2 1 6 0 3 1 1 1 1 1;}
 /* Style Definitions */
 p.MsoNormal, li.MsoNormal, div.MsoNormal
	{margin:0in;
	font-size:10.0pt;
	font-family:"Calibri",sans-serif;}
.MsoChpDefault
	{font-family:"Calibri",sans-serif;}
.MsoPapDefault
	{margin-bottom:8.0pt;
	line-height:107%;}
 /* Page Definitions */
 @page WordSection1
	{size:595.3pt 841.9pt;
	margin:1.0in 1.25in 1.0in 1.25in;}
div.WordSection1
	{page:WordSection1;}
 /* List Definitions */
 ol
	{margin-bottom:0in;}
ul
	{margin-bottom:0in;}
  .borderless table {
    border-top-style: none;
    border-left-style: none;
    border-right-style: none;
    border-bottom-style: none;
}

    </style>
@endsection

@section('content')




<div class="component-section no-code">
    <h5 id="section1" class="tx-semibold">Ugnay Palay Participants</h5>
    <button id="download_btn" class="btn btn-success btn-sm pull-right"><i class="fa fa-download"></i> Download Data</button>
    <button id="download_btn2" class="btn btn-warning btn-sm pull-right"><i class="fa fa-download"></i> Presenter Other Details</button>

    <table class="table table-hover table-striped table-bordered" id="participants_tbl">
      <thead>
        <tr>
          <th>Invitation Code</th>
          <th>E-mail Address</th>
          <th class="w-25">Full Name</th>
          <th>If PhilRice or External</th>
          <th>PhilRice Station</th>
          <th>PhilRice Unit</th>
          <th>Affiliation Name</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody></tbody>
    </table>
        
        
      </div><!-- component-section -->


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> <!-- or your local jQuery -->
<script src="{{ asset('lib/select2/js/select2.min.js')}}"></script>
<script src="{{ asset('js/DataTables/datatables.min.js')}}"></script>
<script src="{{ asset('lib/cdn/sweetalert.mini.js')}}"></script>
<script src="{{ asset('lib/cdn/sweetalert.mini2.js')}}"></script>








<script>

  $( document ).ready(function() {
    

    $("#participants_tbl").DataTable().clear();

    $("#participants_tbl").DataTable({
      bDestroy: true,
      autoWidth: false,
      searchHighlight: true,
      processing: true,
      serverSide: true,
      orderMulti: true,
      order: [],
      ajax: {
        url: "{{ route('getParticipantsData') }}",
        dataType: "json",
        type: "POST",
        data: {
          _token: "{{ csrf_token() }}",

        },
      },
      columns: [
        { data: "invitationCode" },
        { data: "email" },
        { data: "fullName" },
        { data: "isPhilriceEmp" },
        { data: "philriceStation" },
        { data: "philriceUnit" },
        { data: "affiliationName" },
        {
          data: "id",
          orderable: false,
          render: function (data, type, row) {
            return `
              <button class="edit-btn btn btn-warning" data-id="${data}">Edit</button>
              <button class="delete-btn btn btn-danger"  data-id="${data}">Delete</button>
            `;
          },
        },
      ],
    });

  });

  $("#download_btn").on("click", function (e) {
    var url = '{{ route("exportParticipants") }}';
    window.open(url);
  });

  $("#download_btn2").on("click", function (e) {
    var url = '{{ route("exportPresenters") }}';
    window.open(url);
  });


  $('#participants_tbl').on('click', '.edit-btn', function() {
    var id = $(this).data('id');
    // Write your edit logic here

    $.ajax({
        url: '{{ url("/getparticipant/") }}/' + id,
        type: 'GET',
        dataType: 'json',
        success: function(response) {

          document.getElementById('id').value = response.id; // Example ID value
          document.getElementById('firstName').value = response.firstName; // Example first name
          document.getElementById('middleName').value = response.midName; // Example middle name
          document.getElementById('lastName').value = response.lastName; // Example last name
          document.getElementById('station').value = response.philriceStation; // Example station
          document.getElementById('affiliation').value = response.affiliationName; // Example affiliation

          new bootstrap.Modal(document.getElementById('update')).show();
          
        }
    });

  });


  $('#participants_tbl').on('click', '.delete-btn', function() {
    var id = $(this).data('id');
    document.getElementById('idofParticipant').innerHTML = id;
    new bootstrap.Modal(document.getElementById('deleteModal')).show();
  });




  document.addEventListener('DOMContentLoaded', (event) => {
    const updateButton = document.getElementById('participantUpdate');
    const deleteButton = document.getElementById('deleteParticipant');

    updateButton.addEventListener('click', () => {
        const id = document.getElementById('id').value;
        const firstName = document.getElementById('firstName').value;
        const middleName = document.getElementById('middleName').value;
        const lastName = document.getElementById('lastName').value;
        const station = document.getElementById('station').value;
        const affiliation = document.getElementById('affiliation').value;

        $.ajax({
          url: '{{ route('update.participant') }}',
          type: 'PUT',
          data: {
              _token: '{{ csrf_token() }}', // Laravel CSRF token
              id: id,
              firstName: firstName,
              middleName: middleName,
              lastName: lastName,
              station: station,
              affiliation: affiliation
          },
          success: function(response) {

            if (response.success) {
                $('#successModal').modal('show');
                reinitializeDataTable();
            }                

          },
          error: function(xhr) {
              console.log(xhr.responseText); // Log error response
              alert('An error occurred: ' + xhr.responseText);
          }
        });
    });


    deleteButton.addEventListener('click', () => {
        var temp_id = document.getElementById("idofParticipant");
        var id = temp_id.textContent;

        $.ajax({
          url: '{{ url("/deleteParticipant/") }}/' + id,
          type: 'POST',
          data: {
              _token: '{{ csrf_token() }}'
          },
          success: function(response) {

              if (response.success) {
                $('#successModal').modal('show');
                reinitializeDataTable();
              }
          },
          error: function(xhr) {
              console.error(xhr.responseText);
          }
        });        
    });

  });

  


  function reinitializeDataTable() {
    if ($.fn.dataTable.isDataTable('#participants_tbl')) {
      $('#participants_tbl').DataTable().clear().destroy();
    }

    $("#participants_tbl").DataTable({
      bDestroy: true,
      autoWidth: false,
      searchHighlight: true,
      processing: true,
      serverSide: true,
      orderMulti: true,
      order: [],
      ajax: {
        url: "{{ route('getParticipantsData') }}",
        dataType: "json",
        type: "POST",
        data: {
          _token: "{{ csrf_token() }}",
        },
      },
      columns: [
        { data: "invitationCode" },
        { data: "email" },
        { data: "fullName" },
        { data: "isPhilriceEmp" },
        { data: "philriceStation" },
        { data: "philriceUnit" },
        { data: "affiliationName" },
        {
          data: "id",
          orderable: false,
          render: function(data, type, row) {
            return `
              <button class="edit-btn btn btn-warning" data-id="${data}">Edit</button>
              <button class="delete-btn btn btn-danger" data-id="${data}">Delete</button>
            `;
          },
        },
      ],
    });
  }

</script>


    <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="deleteModalLabel">Confirm Deletion</h5>
            {{-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> --}}
          </div>
          <div class="modal-body">
            <p id="idofParticipant"></p>
            Are you sure you want to delete this participant?
          </div>
          <div class="modal-footer">

            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            <button type="button" class="btn btn-danger" id="deleteParticipant">Delete</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Warning Modal -->
    <div class="modal fade" id="update" tabindex="-1" aria-labelledby="warningModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="registrationModalLabel">Edit Participant</h5>
              </div>
              <div class="modal-body">
                <form id="registrationForm">
                  <div class="mb-3">
                    <label for="id" class="form-label">ID</label>
                    <input type="text" class="form-control" id="id" name="id" disabled>
                  </div>

                  <div class="mb-3">
                    <label for="firstName" class="form-label">First Name</label>
                    <input type="text" class="form-control" id="firstName" name="firstName" required>
                  </div>
                  <div class="mb-3">
                    <label for="middleName" class="form-label">Middle Name</label>
                    <input type="text" class="form-control" id="middleName" name="middleName" required>
                  </div>
                  <div class="mb-3">
                    <label for="lastName" class="form-label">Last Name</label>
                    <input type="text" class="form-control" id="lastName" name="lastName" required>
                  </div>
                  <div class="mb-3">
                    <label for="philRiceStation" class="form-label">PhilRice Station</label>
                    <input type="text" class="form-control" id="station" name="station">
                  </div>
                  <div class="mb-3">
                    <label for="affiliation" class="form-label">Affiliation Name</label>
                    <input type="text" class="form-control" id="affiliation" name="affiliation">
                  </div>
                </form>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" id="participantUpdate" class="btn btn-primary">Save and Update</button>
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




@endsection()