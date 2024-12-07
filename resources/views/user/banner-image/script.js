function toggleText() {
    const textOverlay = document.getElementById('textOverlay');
    if (textOverlay.style.visibility === 'visible' || textOverlay.style.visibility === '') {
        textOverlay.style.visibility = 'hidden';
    } else {
        textOverlay.style.visibility = 'visible';
    }
}

function zoomText(direction) {
    const textOverlay = document.getElementById('textOverlay');
    let currentFontSize = window.getComputedStyle(textOverlay, null).getPropertyValue('font-size');
    let newSize = parseFloat(currentFontSize);

    if (direction === 'in') {
        newSize += 2;
    } else if (direction === 'out' && newSize > 8) {
        newSize -= 2;
    }
    textOverlay.style.fontSize = `${newSize}px`;
}

function downloadImage() {
    const container = document.querySelector('.image-container');
    html2canvas(container).then(canvas => {
        const link = document.createElement('a');
        link.download = 'customized-image.png';
        link.href = canvas.toDataURL();
        link.click();
    });
}
