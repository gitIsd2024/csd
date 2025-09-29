<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Thank You for Registering</title>
  <style>
    body {
      font-family: "Segoe UI", sans-serif;
      background: #f5f5f5;
      color: #333;
      text-align: center;
      padding: 50px;
    }
    .container {
      background: white;
      max-width: 600px;
      margin: auto;
      padding: 40px;
      border-radius: 10px;
      box-shadow: 0 4px 12px rgba(0,0,0,0.1);
    }
    h1 {
      color: #4CAF50;
      margin-bottom: 20px;
    }
    .event {
      font-size: 18px;
      margin-bottom: 10px;
    }
    .date {
      font-size: 16px;
      color: #666;
      margin-bottom: 30px;
    }
    .qr-code {
      margin-top: 20px;
    }
    .footer {
      font-size: 14px;
      color: #999;
      margin-top: 30px;
    }

	.download-btn {
      background: linear-gradient(135deg, #4CAF50, #2E7D32);
      color: white;
      padding: 14px 28px;
      font-size: 16px;
      border: none;
      border-radius: 8px;
      box-shadow: 0 4px 12px rgba(0,0,0,0.2);
      cursor: pointer;
      transition: all 0.3s ease;
	  width: auto;
    }

    .download-btn:hover {
      background: linear-gradient(135deg, #43A047, #1B5E20);
      transform: scale(1.05);
      box-shadow: 0 6px 16px rgba(0,0,0,0.25);
    }

    .download-btn:active {
      transform: scale(0.98);
      box-shadow
	}


	
	
  </style>
</head>
<body>
  <div class="">
    <h1>Thank You for Registering!</h1>
    <div class="event"><strong>40 Years of Rice Innovations:</strong> Sowing Progress, Harvesting Prosperity</div>
    <div class="date">November 25–27, 2025</div>
    
    <p>Please present the QR code below at the event venue for verification.</p>
    
    <img id="qrImage" src="https://ugnaypalay.philrice.gov.ph:441/csd/37th/public/python/qrcodes/{{$qr_code}}.png" alt="">

	<br>
	<button class="download-btn" onclick="downloadPoster()">Download QR</button>

    <div class="footer">
      This QR code is uniquely generated for your registration and is valid only for this event.
    </div>
  </div>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>
<script>
	function downloadPoster() {
  const img = document.getElementById("qrImage");

  if (!img) {
    alert("QR image not found!");
    return;
  }

  const link = document.createElement('a');
  link.href = img.src;
  link.download = "qr_code.png";
  document.body.appendChild(link);
  link.click();
  document.body.removeChild(link);
}
</script>
</html>
