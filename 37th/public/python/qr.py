import qrcode
import sys
from PIL import Image, ImageDraw, ImageFont

if len(sys.argv) < 4:
    print("Error: 3 arguments required.")
    sys.exit(1)

    
# === Variables ===
data =  sys.argv[1]                     # QR content
text1 = sys.argv[2]    # Name
text2 = sys.argv[3]  # Agency

# === Step 1: Generate QR code ===
qr = qrcode.QRCode(
    version=1,
    error_correction=qrcode.constants.ERROR_CORRECT_H,
    box_size=10,
    border=4
)
qr.add_data(data)
qr.make(fit=True)

qr_img = qr.make_image(fill_color="black", back_color="white").convert("RGBA")
qr_img = qr_img.resize((220, 220))

# === Step 2: Load template and prepare transparent canvas ===
template = Image.open("public\\python\\template.png").convert("RGBA")
canvas = Image.new("RGBA", template.size, (255, 255, 255, 0))  # Transparent background

# === Step 3: Paste QR code on canvas ===
qr_position = (44, 200)
canvas.paste(qr_img, qr_position)

# === Step 4: Paste the template on top of QR ===
canvas.paste(template, (0, 0), template)

# === Step 5: Draw text OVER everything ===
draw = ImageDraw.Draw(canvas)

# Load fonts with fallback
try:
    font1 = ImageFont.truetype("public\\python\\Roboto-Bold.ttf", 20)
except:
    font1 = ImageFont.load_default()

canvas_width = canvas.size[0]

# === Text 1: Name (Centered) ===
text1_bbox = draw.textbbox((0, 0), text1, font=font1)
text1_width = text1_bbox[2] - text1_bbox[0]
text1_x = (canvas_width - text1_width) // 2
text1_position = (text1_x, 160)
draw.text(text1_position, text1, font=font1, fill=(0, 0, 0, 255))

# === Text 2: Auto-fit agency name (Centered) ===
max_text_width = canvas_width - 40  # 20px padding each side
max_font_size = 12
min_font_size = 8
font_size = max_font_size

while font_size >= min_font_size:
    try:
        font2 = ImageFont.truetype("public\\python\\Roboto-Bold.ttf", font_size)
    except:
        font2 = ImageFont.load_default()
    text2_bbox = draw.textbbox((0, 0), text2, font=font2)
    text2_width = text2_bbox[2] - text2_bbox[0]
    if text2_width <= max_text_width:
        break
    font_size -= 1

text2_x = (canvas_width - text2_width) // 2
text2_position = (text2_x, 185)
draw.text(text2_position, text2, font=font2, fill=(0, 0, 0, 255))

# === Step 6: Save the final image with transparency (PNG supports it) ===
canvas.save(f"public\\python\\qrcodes\\{data}.png")
print(f"Ticket saved as {data}.png")
