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
    <div class="row">
        <div class="col-sm-12">
		<div style="position: relative; width: 1000px; height: 557px;">  
		<div id="poster_container" style="position: relative; width: 1000px; height: 557px; ">
			<div style="
				position: absolute;
				margin-top:196px;
				top: 0;
				left: 0;
				width: 99%;
				height: 32%;
				background-image: url('data:image/png;base64, {{ base64_encode(QrCode::format('png')->size(500)->margin(0)->generate("$qr_code")) }}');
				background-size: contain;
				background-repeat: no-repeat;
				background-position: center;">
			</div>

			<div id="hiring_poster" style="
				position: absolute;
				top: 0;
				left: 0;
				width: 1000px;
				height: 557px;
				background-image: url('https://ugnaypalay.philrice.gov.ph:441/csd/37th/public/qr/template.png');
				background-size: auto;
				background-repeat: no-repeat;
				background-position: center;
				z-index: 1;">
			</div>
		</div>
		</div>

        </div>
    </div>

	<button onclick="downloadPoster()">Download Poster</button>



       <!--    <center><a href="data:image/jpg;base64, {{ base64_encode(QrCode::format('png')->size(500)->margin(0)->generate("$qr_code")) }} " download="filename.jpg"><img src="data:image/jpg;base64, {{ base64_encode(QrCode::format('png')->size(500)->margin(0)->generate("$qr_code")) }} "/></a>
				<br>
				<br>
				<h3> Click QR code to download image</h3>		
			</center> -->
</div><!-- component-section -->



{{-- <script src="{{ asset('lib/jquery2/jquery.min.js"></script> --}}

<script src="{{ asset('lib/cdn/sweetalert.mini.js')}}"></script>
<script src="{{ asset('lib/cdn/sweetalert.mini2.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>


<script>


function downloadPoster() {
	const posterElement = document.getElementById("poster_container");

	if (!posterElement) {
		alert("Poster container not found!");
		return;
	}

	html2canvas(posterElement).then(canvas => {
		const link = document.createElement('a');
		link.download = 'poster.png';
		link.href = canvas.toDataURL('image/png');
		link.click();
	}).catch(err => {
		console.error("html2canvas error:", err);
	});
}


$( document ).ready(function() {
   $('#saveQr').click(function(){
	qrcode._oDrawing._elCanvas.toDataURL("image/png")
   })
  });


</script>



@endsection()