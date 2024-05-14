var isDarkMode = localStorage.getItem('darkMode') === 'true';
var icon = document.getElementById('icon');
var elements = document.getElementsByClassName('footer-box-h3');

if (isDarkMode) {
    document.body.classList.add('dark-mode');
    for (var i = 0; i < elements.length; i++) {
        elements[i].style.color = 'wheat';
    }
    icon.src = `${paths}/asset/images/sun.png`;
}

icon.onclick = function () {
    document.body.classList.toggle('dark-mode');
    var isDarkMode = document.body.classList.contains('dark-mode');

    for (var i = 0; i < elements.length; i++) {
        elements[i].style.color = isDarkMode ? 'wheat' : 'black';
    }

    icon.src = isDarkMode ? `${paths}/asset/images/sun.png` : `${paths}/asset/images/moon.png`;
    localStorage.setItem('darkMode', isDarkMode);
};