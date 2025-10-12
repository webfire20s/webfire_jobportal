@extends('web-layout')

@section('content')


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">-->

    <style>
        canvas {
            border: 1px solid #ccc;
            display: block;
            margin: 20px auto;
            width: 100%;
            max-width: 800px;
            height: auto;
        }

        .controls {
            text-align: center;
            margin: 20px;
        }

        a {
            margin: 10px;
            padding: 10px 20px;
            font-size: 16px;
        }
    </style>
    <style>
    canvas {
        border: 2px solid #007bff; /* Blue border */
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); /* Subtle shadow */
        display: block;
        margin: 20px auto;
        width: 100%;
        max-width: 800px;
        height: auto;
    }

    .controls {
        text-align: center;
        margin: 20px;
        padding: 10px;
        background: linear-gradient(90deg, #007bff, #6c757d); /* Gradient background */
        border-radius: 10px;
        color: white;
    }

    .controls a {
        margin: 10px;
        padding: 10px 20px;
        font-size: 16px;
        text-decoration: none;
        color: white;
        border-radius: 5px;
        transition: background-color 0.3s ease, transform 0.2s ease;
    }

    .controls a:hover {
        background-color: #0056b3; /* Darker blue on hover */
        transform: scale(1.1); /* Slight zoom */
    }

    .controls label {
        font-weight: bold;
        font-size: 18px;
        color: #ffffff;
    }

    .btn-primary {
        background-color: #007bff;
        border: none;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    }

    .btn-primary:hover {
        background-color: #0056b3;
    }

    .btn-primary i {
        margin-right: 5px;
    }
</style>



<div class="container mt-5">
    <div class="row">
        <!-- Poster Customization -->
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Poster Customize for {{ $poster->title }}</div>
                <div class="card-body">
                    <canvas id="canvas" width="1600" height="1493"></canvas>

                    <div class="controls mt-3">
                        <div class="mb-3">
                            <a class="btn btn-sm btn-primary" onclick="downloadCanvas()" aria-label="Download Image">
                                <i class="fas fa-download"></i> Download Poster
                            </a>
                            <a class="btn btn-sm btn-primary" onclick="toggleStripe()" aria-label="Toggle Stripe">
                                Show/Hide Stripe
                            </a>
                        </div>
                        <div class="mb-3">
                            <label for="h1-controls">Firm:</label>
                            <a class="btn btn-sm btn-primary" id="h1-controls" onclick="changeFontSize(0, 'increase')" aria-label="Increase H1 Size">
                                <i class="fas fa-plus"></i>
                            </a>
                            <a class="btn btn-sm btn-primary" onclick="changeFontSize(0, 'decrease')" aria-label="Decrease H1 Size">
                                <i class="fas fa-minus"></i>
                            </a>
                        </div>
                        <div class="mb-3">
                            <label for="text1-controls">Address:</label>
                            <a class="btn btn-sm btn-primary" id="text1-controls" onclick="changeFontSize(1, 'increase')" aria-label="Increase Text 1 Size">
                                <i class="fas fa-plus"></i>
                            </a>
                            <a class="btn btn-sm btn-primary" onclick="changeFontSize(1, 'decrease')" aria-label="Decrease Text 1 Size">
                                <i class="fas fa-minus"></i>
                            </a>
                        </div>
                        <div class="mb-3">
                            <label for="text2-controls">Contact:</label>
                            <a class="btn btn-sm btn-primary" id="text2-controls" onclick="changeFontSize(2, 'increase')" aria-label="Increase Text 2 Size">
                                <i class="fas fa-plus"></i>
                            </a>
                            <a class="btn btn-sm btn-primary" onclick="changeFontSize(2, 'decrease')" aria-label="Decrease Text 2 Size">
                                <i class="fas fa-minus"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    const canvas = document.getElementById('canvas');
const ctx = canvas.getContext('2d');
let dragging = false;
let dragTarget = null;
let fontFamily = "Georgia, serif";
const bgImage = new Image();
bgImage.src = '<?= asset('storage/app/public/'.$poster->image); ?>'; 
bgImage.onload = () => {
    ctx.drawImage(bgImage, 0, 0, canvas.width, canvas.height);
    drawTexts();
};

let isStripeVisible = true; // Flag to toggle stripe visibility

function toggleStripe() {
    isStripeVisible = !isStripeVisible; // Toggle the flag
    drawTexts(); // Redraw the canvas
}

function drawTexts() {
    ctx.clearRect(0, 0, canvas.width, canvas.height); // Clear the canvas
    ctx.drawImage(bgImage, 0, 0, canvas.width, canvas.height); // Redraw the background image

    if (isStripeVisible) {
        // Draw the stripe
        const stripeHeight = 30;
        const stripeColor = '#d3d1ce8f';
        const stripeY = canvas.height / 2.4 - stripeHeight / 2;

        ctx.fillStyle = stripeColor;
        ctx.fillRect(0, stripeY, canvas.width, stripeHeight);

        // Repeated text in the stripe
        const repeatText = '{{ $user->shop_name }} | ✆ {{ $user->mobile }}';
        const fontSize = 12;
        ctx.font = `${fontSize}px Arial`;
        ctx.fillStyle = 'black';
        const textWidth = ctx.measureText(repeatText).width;
        let startX = -textWidth;

        while (startX < canvas.width) {
            ctx.fillText(repeatText, startX, stripeY + stripeHeight / 2 + fontSize / 2);
            startX += textWidth + 20;
        }
    }

    // Draw the main texts
    drawBottomContent(); // Ensure bottom content is always drawn after the main text
}
function changeFontSize(index, action) {
    // Ensure that the drawableObjects array exists and contains valid objects
    if (!canvas.drawableObjects || canvas.drawableObjects.length <= index) {
        console.error('No object found at index ' + index);
        return; // Exit if no object exists at the given index
    }

    const object = canvas.drawableObjects[index];

    // Ensure that the object is of type 'text'
    if (object.type !== 'text') {
        console.error('Invalid text object at index ' + index);
        return; // Exit if the object is not a text object
    }

    // Extract the current font size from the font property
    const fontParts = object.font.split(' ');

    // Ensure the font has a valid size and is a valid number
    if (fontParts.length < 2 || isNaN(fontParts[0])) {
        console.error('Font size is invalid or missing in object:', object);
        return; // Exit if the font size is not valid
    }

    let currentFontSize = parseInt(fontParts[0]); // Extract current font size

    // Define min and max font size limits to avoid excessive sizes
    const minFontSize = 10;
    const maxFontSize = 100;

    // Increase or decrease font size based on the action
    if (action === 'increase') {
        if (currentFontSize < maxFontSize) {
            currentFontSize += 4; // Increase the font size
        } else {
            console.warn('Font size is already at the maximum limit');
            return;
        }
    } else if (action === 'decrease') {
        if (currentFontSize > minFontSize) {
            currentFontSize -= 4; // Decrease the font size
        } else {
            console.warn('Font size is already at the minimum limit');
            return;
        }
    } else {
        console.error('Invalid action for font size change');
        return; // Exit if the action is neither "increase" nor "decrease"
    }

    // Update the font property with the new size
    object.font = `${currentFontSize}px ${fontParts.slice(1).join(' ')}`;

    // Redraw the canvas with the updated text
    drawTexts();
}

function drawBottomContent() {
    const bottomY = canvas.height - 150;
    const columnWidth1 = canvas.width / 4;
    const columnWidth2 = canvas.width - columnWidth1;
    const padding = 30;

    // Create an array to store object details
    let drawableObjects = [];

    // 1. Retailer Image
    const retailerImage = new Image();
    retailerImage.src = '<?= asset("storage/app/public/" . str_replace("public/", "", $user->photo)); ?>';
    retailerImage.onload = () => {
        const imageSize = 250;
        const imageX = columnWidth1 / 2 - imageSize / 2;
        const imageY = bottomY - 10 - imageSize / 2;

        // Draw image
        ctx.drawImage(retailerImage, imageX, imageY, imageSize, imageSize);

        // Store object info with unique ID
        drawableObjects.push({
            id: 'image_' + Date.now(), // Unique ID using timestamp
            type: 'image',
            x: imageX,
            y: imageY,
            width: imageSize,
            height: imageSize,
        });
    };

    // 2. Vertical Blue Line
    const verticalLineX = columnWidth1;
    ctx.strokeStyle = 'blue';
    ctx.lineWidth = 4;
    ctx.beginPath();
    ctx.moveTo(verticalLineX, bottomY - 150);
    ctx.lineTo(verticalLineX, bottomY + 120);
    ctx.stroke();

    // Store the line information
    drawableObjects.push({
        id: 'line_' + Date.now(),
        type: 'line',
        x: verticalLineX,
        y: bottomY - 150,
        width: 4,
        height: 270, // The line length
        startX: verticalLineX,
        startY: bottomY - 150,
        endX: verticalLineX,
        endY: bottomY + 120,
    });

    // 3. Shop Details
    const textStartX = columnWidth1 + padding + 10;
    let currentY = bottomY - 90;
    const lineSpacing = 90;

    // Shop Name
    ctx.font = 'bold 60px Georgia, serif';
    ctx.textAlign = 'left';
    ctx.fillStyle = 'black';
    ctx.fillText('{{ $user->shop_name }}', textStartX, currentY);

    // Store shop name text
    drawableObjects.push({
        id: 'shop_name_' + Date.now(),
        type: 'text',
        text: '{{ $user->shop_name }}',
        x: textStartX,
        y: currentY,
        font: 'bold 60px Georgia, serif',
        fontSize: 60,
    });

    // Address
    currentY += lineSpacing;
    ctx.font = '35px Georgia, serif';
    ctx.fillText('📍 {{ $user->address }}', textStartX, currentY);

    // Store address text
    drawableObjects.push({
        id: 'address_' + Date.now(),
        type: 'text',
        text: '📍 {{ $user->address }}',
        x: textStartX,
        y: currentY,
        font: '35px Georgia, serif',
        fontSize: 35
    });

    // Blue Underline
    const underlineY = currentY + 30;
    const underlineWidth = columnWidth2 - 2 * padding - 14;
    ctx.strokeStyle = 'blue';
    ctx.lineWidth = 4;
    ctx.beginPath();
    ctx.moveTo(textStartX, underlineY);
    ctx.lineTo(textStartX + underlineWidth, underlineY);
    ctx.stroke();

    // Store underline details
    drawableObjects.push({
        id: 'underline_' + Date.now(),
        type: 'line',
        x: textStartX,
        y: underlineY,
        width: underlineWidth,
        height: 4
    });

    // Contact Details
    currentY += lineSpacing;
    ctx.font = '35px Arial';
    ctx.fillText('✆ {{ $user->mobile }} | ✉ {{ $user->email }}', textStartX, currentY);

    // Store contact text
    drawableObjects.push({
        id: 'contact_' + Date.now(),
        type: 'text',
        text: '✆ {{ $user->mobile }} | ✉ {{ $user->email }}',
        x: textStartX,
        y: currentY,
        font: '35px Arial',
        fontSize: 35
    });

    // Store the objects array to use later for interaction detection
    canvas.drawableObjects = drawableObjects;
}

function downloadCanvas() {
    const link = document.createElement('a');
    link.download = '{{$download_name}}.png';
    link.href = canvas.toDataURL();
    link.click();
}

function isMouseOverText(mouseX, mouseY, textObj) {
    const textWidth = ctx.measureText(textObj.text).width;
    const textHeight = textObj.fontSize;
    return (
        mouseX >= textObj.x &&
        mouseX <= textObj.x + textWidth &&
        mouseY >= textObj.y - textHeight &&
        mouseY <= textObj.y
    );
}

canvas.addEventListener('mousedown', (e) => {
    const mouseX = e.offsetX;
    const mouseY = e.offsetY;
    
    canvas.drawableObjects.forEach((textObj) => {
        if (isMouseOverText(mouseX, mouseY, textObj)) {
            dragging = true;
            dragTarget = textObj;
        }
    });
});

canvas.addEventListener('mousemove', (e) => {
    if (dragging && dragTarget) {
        dragTarget.x = e.offsetX;
        dragTarget.y = e.offsetY;
        drawTexts();
    }
});

canvas.addEventListener('mouseup', () => {
    dragging = false;
    dragTarget = null;
});

canvas.addEventListener('mouseleave', () => {
    dragging = false;
    dragTarget = null;
});



</script>

@endsection
