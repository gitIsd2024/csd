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
    <h5 id="section1" class="tx-semibold">Ugnay Palay Presentation Details</h5>
    {{-- <p class="mg-b-25">This is a demo of a required field that must not leave empty.</p> --}}
    <div class="row pull-right" style="margin-right: 5px; margin-bottom: 3px;">

      
    </div>
    <br>
    <br>
      <table class="table table-hover table-striped table-bordered" id="presentation_tbl" >
          <thead>
            <th>Presenter Email</th>
            <th>Presenter Name</th>
            <th>Presentation Type</th>
            <th>Presentation Title</th>
            <th>Endorsement Letter</th>
            <th>Date Submitted</th>
            <th>Date Created</th>
            <th>Action</th>
          </thead>

          <tbody>

          </tbody>
      </table>
       
</div><!-- component-section -->


<div class="d-none" id="exportContent">
  <div class=WordSection1>

    <p id="trackingNumber" class="float-end" style='text-align:right;line-height:200%'>Tracking Number:</p>
    
    <p class=MsoNormal align=center style='text-align:center'><span
    style='font-size:11.0pt;font-family:"Cambria",serif'>&nbsp;</span></p>
    
    <p class=MsoNormal align=center style='text-align:center'><b><span
    style='font-size:11.0pt;font-family:"Cambria",serif'>36<sup>th</sup>
    Ugnay Palay National Rice R4D Conference</span></b></p>
    
    <p align=center>CBC Plenary Hall, DA-PhilRice<br>Maligaya, Science City of
      Muñoz, Nueva Ecija<br>November 26-28,
      2024</p>

    
    <p class=MsoNormal style='text-align:justify'><span style='font-size:11.0pt;
    font-family:"Cambria",serif'>&nbsp;</span></p>
       
      

    <table class="" border="0">
      <tr>
       <td width=228 valign=top >
            <p class=MsoNormal><b><span style='font-size:11.0pt;font-family:"Cambria",serif'>Presentation:  </p>
       </td>
       <td width=224 valign=top >
       <p class=MsoNormal align=center style='margin-left:-22.5pt;text-align:center'><b><i><span
       style='font-size:11.0pt;font-family:"Cambria",serif'>Poster</span></i></b></p>
       </td>
       <td width=154 valign=top >
       <p class=MsoNormal align=center><img   id="imagePoster"  
       src="#" ></span></i></b></p>
       </td>

       <td width=224 valign=top >
        <p class=MsoNormal align=center style='margin-left:-22.5pt;text-align:center'><b><i><span
        style='font-size:11.0pt;font-family:"Cambria",serif'>Paper</span></i></b></p>
        </td>
        <td width=154 valign=top >
        <p class=MsoNormal align=center><img id="imagePaper"  
        src="#" ></span></i></b></p>
        </td>
      </tr>
    </table>
    

    <div id="titleDiv" style='border:none;border-bottom:solid windowtext 1.5pt;padding:0in 0in 1.0pt 0in'>
    
    <p class=MsoNormal style='text-align:justify;line-height:200%;border:none;
    padding:0in'><b><span style='font-size:11.0pt;line-height:200%;font-family:
    "Cambria",serif'>&nbsp;</span></b></p>
    

    
    </div>
    
    <p class=MsoNormal style='text-align:justify;line-height:200%'><b><span
    style='font-size:11.0pt;line-height:200%;font-family:"Cambria",serif'>&nbsp;</span></b></p>
    
    <table class=MsoNormalTable border=1 cellspacing=0 cellpadding=0 width=606
     style='width:454.5pt;margin-left:-.25pt;border-collapse:collapse;border:none'>
     <thead>
      <tr>
        <td width=228 valign=top style='width:171.0pt;border:solid black 1.0pt;
        padding:0in 5.4pt 0in 5.4pt'>
        <p class=MsoNormal align=center style='margin-left:-22.5pt;text-align:center'><b><i><span
        style='font-size:11.0pt;font-family:"Cambria",serif'>Author/s</span></i></b></p>
        </td>
        <td width=224 valign=top style='width:167.65pt;border:solid black 1.0pt;
        border-left:none;padding:0in 5.4pt 0in 5.4pt'>
        <p class=MsoNormal align=center style='margin-left:-22.5pt;text-align:center'><b><i><span
        style='font-size:11.0pt;font-family:"Cambria",serif'>Position</span></i></b></p>
        </td>
        <td width=154 valign=top style='width:115.85pt;border:solid black 1.0pt;
        border-left:none;padding:0in 5.4pt 0in 5.4pt'>
        <p class=MsoNormal align=center style='margin-left:-22.5pt;text-align:center'><b><i><span
        style='font-size:11.0pt;font-family:"Cambria",serif'>Agency</span></i></b></p>
        </td>
       </tr>
     </thead>
     <tbody id="tblBody">
     
     </tbody>
    
    
     
    </table>
    
    <p class=MsoNormal style='text-align:justify;line-height:200%'><b><span
    style='font-size:11.0pt;line-height:200%;font-family:"Cambria",serif'>&nbsp;</span></b></p>
    
    <p class=MsoNormal style='text-align:justify;line-height:200%'><b><span
    style='font-size:11.0pt;line-height:200%;font-family:"Cambria",serif'>Abstract:
    </span></b></p>
    

    <p id="abstract" style='text-align:justify;'>
      
    </p>

    
    <p class=MsoNormal style='text-align:justify;line-height:200%'><b><span
    style='font-size:11.0pt;line-height:200%;font-family:"Cambria",serif'>&nbsp;</span></b></p>
    
    <p class=MsoNormal style='text-align:justify;line-height:200%'><b><span
    style='font-size:11.0pt;line-height:200%;font-family:"Cambria",serif'>Keywords:
    </span></b></p>
    
    <p id="keywords"  class=MsoNormal style='text-align:justify;line-height:200%'><b></p>
    



      <center> 
        <p>
          Certificate of Originality
        </p>
      </center>
      <p style='text-align:justify;line-height:200%' >
          This is to certify that the abstract is original, unpublished, and has not been presented in any other forum, event, or competition.
      </p>
      <br>
      <p>
          <strong> Contact Information Presenter </strong> 
      </p>

      <p id="" style='text-align:justify;'>Name: <label id="name_presenter"></label> </p>
      <p>Current Address: <label id="address_presenter"></label>  </p>
      <p>Mobile Number: <label id="mnumber_presenter"></label> </p>
      <p>Email-Address: <label id="email_presenter"></label> </p>
      







    </div>
</div>


 

{{-- <script src="{{ asset('lib/jquery2/jquery.min.js"></script> --}}
{{-- <script src="{{asset('js/jquerys.js')}}"></script> --}}
<script src="{{asset('lib/select2/js/jquery.min.js')}}"></script>
<script src="{{asset('lib/select2/js/select2.min.js')}}"></script>
<script src="{{asset('js/DataTables/datatables.min.js')}}"></script>
<script src="{{ asset('lib/cdn/sweetalert.mini.js')}}"></script>
<script src="{{ asset('lib/cdn/sweetalert.mini2.js')}}"></script>

<script>

$( document ).ready(function() {
  
  $("#presentation_tbl").DataTable().clear(); 
    $("#presentation_tbl").DataTable({
      bDestroy: true,
      autoWidth: false,
      searchHighlight: true,
      processing: true,
      serverSide: true,
      orderMulti: true,
      order: [],
      ajax: {
        url: "{{ route('getPresentationData') }}",
        dataType: "json",
        type: "POST",
        data: {
          _token: "{{ csrf_token() }}",

        },
      },
      columns: [
        { data: "emailPresenter" },
        { data: "fullName" },
        { data: "presentationType" },
        { data: "presentationTitle" },
        {
          data: "endorsement_letter", // or whatever unique identifier you use
          render: function (data, type, row) {
            return `
              <button class="btn btn-primary view-btn-endorsement-letter" data-id="${data}">View file</button>
            `;
          }
        },
        { data: "trackingNumber" },
        { data: "dateSubmitted" },
        { data: "actions" },
      ],
    });
    
  });

  $('body').on('click', '#ExportData', function() {
    window.open('exportPresenter');
  });

  $('body').on('click', '.btn-export', function() {
    var id = $(this).attr("data-id");
    $.ajax({ 
                type: 'POST',
                url: "{{ route('getPresenterInfo') }}",
                data: {
                    _token: "{{ csrf_token() }}",
                    id: id,
                },
                success: function(data){
                
                if(data[0].presentationType == "Poster"){
                  //$("#imagePoster").attr("src","http://localhost{{ asset('Entry-Form_35th-R4D-Conference_files/image003.png");
                  //$("#imagePaper").attr("src","http://localhost{{ asset('Entry-Form_35th-R4D-Conference_files/image002.png");

                  $("#imagePoster").attr("src","https://ugnaypalay.philrice.gov.ph:441/csd/37th/public/Entry-Form_35th-R4D-Conference_files/image003.png");
                  $("#imagePaper").attr("src","https://ugnaypalay.philrice.gov.ph:441/csd/37th/public/Entry-Form_35th-R4D-Conference_files/image002.png");
                  
                }else{
                  //$("#imagePoster").attr("src","http://localhost{{ asset('Entry-Form_35th-R4D-Conference_files/image002.png");
                  //$("#imagePaper").attr("src","http://localhost{{ asset('Entry-Form_35th-R4D-Conference_files/image003.png");

                  $("#imagePoster").attr("src","https://ugnaypalay.philrice.gov.ph:441/csd/37th/public/Entry-Form_35th-R4D-Conference_files/image002.png");
                  $("#imagePaper").attr("src","https://ugnaypalay.philrice.gov.ph:441/csd/37th/public/Entry-Form_35th-R4D-Conference_files/image003.png");
                }


                $('#titleDiv').empty();
                $('#titleDiv').append(
                  "<p class=MsoNormal style='text-align:justify;line-height:200%;border:none;"+
                  "padding:0in'><b><span style='font-size:11.0pt;line-height:200%;font-family:"+
                  "\"Cambria\",serif'>Thematic Area : </span></b>"+data[0].thematicArea+" </p>"+

                  "<p class=MsoNormal style='text-align:justify;line-height:200%;border:none;"+
                  "padding:0in'><b><span style='font-size:11.0pt;line-height:200%;font-family:"+
                  "\"Cambria\",serif'>Title : </span></b>"+data[0].presentationTitle+" </p>"
                );
                
                const authors = JSON.parse(data[0].authors);
             
                $('#tblBody').empty();
                authors.forEach((element) => 
          
                    $('#tblBody').append(
                      '<tr>'+
                    '<td width=228 valign=top style="width:171.0pt;border:solid black 1.0pt;'+
                    'border-top:none;padding:0in 5.4pt 0in 5.4pt">'+
                    '<p class=MsoNormal style="margin-left:-22.5pt;text-align:justify;line-height:'+
                    '115%"><b><span style="font-size:11.0pt;line-height:115%;font-family:Cambria,serif"> </span></b></p>'+
                    ''+element.authName+'</td>'+
                    '<td width=224 valign=top style="width:167.65pt;border-top:none;border-left:'+
                    'none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;'+
                    'padding:0in 5.4pt 0in 5.4pt">'+
                    '<p class=MsoNormal style="margin-left:-22.5pt;line-height:115%"><b><span'+
                    'style="font-size:11.0pt;line-height:115%;font-family:Cambria,serif"></span></b></p>'+
                    ''+element.authPosition+'</td>'+
                    '<td width=154 valign=top style="width:115.85pt;border-top:none;border-left:'+
                    'none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;'+
                    'padding:0in 5.4pt 0in 5.4pt">'+
                    '<p class=MsoNormal style="margin-left:-22.5pt;line-height:115%"><b><span'+
                    'style="font-size:11.0pt;line-height:115%;font-family:Cambria,serif"></span></b></p>'+
                    ''+element.authAgency+'</td>'+
                    '</tr>'
                    )
                    
                );

                $('#abstract').text(data[0].abstract);
                $('#keywords').text(data[0].keywords);
                $('#trackingNumber').text("Tracking Number: "+data[0].trackingNumber);


                $('#name_presenter').text(data[0].firstNamePresenter +" "+ data[0].lastNamePresenter);

                $('#address_presenter').text(data[0].current_address);

                $('#mnumber_presenter').text(data[0].mobileNumber_presenter);

                $('#email_presenter').text(data[0].emailPresenter);
                
                

                  Export2Word('exportContent','37th Ugnay Palay R4D Conf_ENTRY form_'+data[0].trackingNumber);
                }
            });
    
  })
  function Export2Word(element, filename = ''){
    var preHtml = "<html xmlns:o='urn:schemas-microsoft-com:office:office' xmlns:w='urn:schemas-microsoft-com:office:word' xmlns='http://www.w3.org/TR/REC-html40'><head><meta charset='utf-8'><title>Export HTML To Doc</title></head><body>";
    var postHtml = "</body></html>";
    var html = preHtml+document.getElementById(element).innerHTML+postHtml;

    var blob = new Blob(['\ufeff', html], {
        type: 'application/msword'
    });
    
    // Specify link url
    var url = 'data:application/vnd.ms-word;charset=utf-8,' + encodeURIComponent(html);
    
    // Specify file name
    filename = filename?filename+'.doc':'document.doc';
    
    // Create download link element
    var downloadLink = document.createElement("a");

    document.body.appendChild(downloadLink);
    
    if(navigator.msSaveOrOpenBlob ){
        navigator.msSaveOrOpenBlob(blob, filename);
    }else{
        // Create a link to the file
        downloadLink.href = url;
        
        // Setting the file name
        downloadLink.download = filename;
        
        //triggering the function
        downloadLink.click();
    }
    
    document.body.removeChild(downloadLink);
}

$(document).on('click', '.view-btn-endorsement-letter', function() {
  var filename = $(this).data('id');  // Change this to 'id' if using data-id
  var url = "public/endorsement_letter/" + filename;
  window.open(url, '_blank');
});


</script>



@endsection()