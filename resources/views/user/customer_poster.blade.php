@extends('web')

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

<div class="container mt-5">
    <div class="row">
        <!-- Change Password Form -->
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Poster Customize for {{ $poster->title }}</div>
                <div class="card-body">
                    
                    
                    
<canvas id="canvas" width="800" height="600"></canvas>

<div class="controls">
    <a class="btn btn-sm btn-primary" onclick="downloadCanvas()" aria-label="Download Image">
        <i class="fas fa-download"></i> Download Poster
    </a>
    <div>
        <label for="h1-controls">Firm:</label>
        <a class="btn btn-sm btn-primary" id="h1-controls" onclick="changeFontSize(0, 'increase')" aria-label="Increase H1 Size">
            <i class="fas fa-plus"></i>
        </a>
        <a class="btn btn-sm btn-primary" onclick="changeFontSize(0, 'decrease')" aria-label="Decrease H1 Size">
            <i class="fas fa-minus"></i>
        </a>
    </div>
    <div>
        <label for="text1-controls">Address:</label>
        <a class="btn btn-sm btn-primary" id="text1-controls" onclick="changeFontSize(1, 'increase')" aria-label="Increase Text 1 Size">
            <i class="fas fa-plus"></i>
        </a>
        <a class="btn btn-sm btn-primary" onclick="changeFontSize(1, 'decrease')" aria-label="Decrease Text 1 Size">
            <i class="fas fa-minus"></i>
        </a>
    </div>
    <div>
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

    const texts = [
        { text: '{{ $user->shop_name }}', x: canvas.width / 2, y: 525 , fontSize: 30, isH1: true },
        { text: '{{ $user->address }}', x: canvas.width / 2, y: 550, fontSize: 24 },
        { text: '✆ {{ $user->mobile}} | ✉ {{$user->email}}', x: canvas.width / 2, y: 575, fontSize: 24 }
    ];

    const bgImage = new Image();
    bgImage.src = '<?= asset('storage/app/public/'.$poster->image); ?>'; 
    bgImage.onload = () => {
        ctx.drawImage(bgImage, 0, 0, canvas.width, canvas.height);
        drawTexts();
    };

    function drawTexts() {
        ctx.clearRect(0, 0, canvas.width, canvas.height); // Clear the canvas
        ctx.drawImage(bgImage, 0, 0, canvas.width, canvas.height); // Redraw the background image
        texts.forEach(({ text, x, y, fontSize }) => {
            ctx.font = `${fontSize}px Arial`;
            ctx.textAlign = 'center'; // Center align text horizontally
            ctx.fillStyle = 'black';
            ctx.fillText(text, x, y);
        });
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

        texts.forEach((textObj) => {
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

    function downloadCanvas() {
        const link = document.createElement('a');
        link.download = '{{$download_name}}.png';
        link.href = canvas.toDataURL();
        link.click();
    }

    function changeFontSize(index, action) {
        if (action === 'increase') {
            texts[index].fontSize += 4;
        } else if (action === 'decrease' && texts[index].fontSize > 12) {
            texts[index].fontSize -= 4;
        }
        drawTexts();
    }
</script>

@endsection
