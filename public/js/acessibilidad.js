document.getElementById('accessibilityIcon').addEventListener('click', function () {
    var menu = document.getElementById('accessibilityMenu');
    if (menu.classList.contains('show')) {
        menu.classList.remove('show');
    } else {
        menu.classList.add('show');
    }
});

let currentFontSize = 16;
const maxFontSize = 24;
const minFontSize = 12;

document.getElementById('increaseFontSize').addEventListener('click', function () {
    if (currentFontSize < maxFontSize) {
        currentFontSize += 2;
        document.body.style.fontSize = currentFontSize + 'px';
    }
});

document.getElementById('decreaseFontSize').addEventListener('click', function () {
    if (currentFontSize > minFontSize) {
        currentFontSize -= 2;
        document.body.style.fontSize = currentFontSize + 'px';
    }
});

document.getElementById('toggleContrast').addEventListener('click', function () {
    document.body.classList.toggle('high-contrast');
});
