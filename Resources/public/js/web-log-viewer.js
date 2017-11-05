var toggle = function(className) {
    elements = document.getElementsByClassName(className);
    for (var i = 0; i < elements.length; i++) {
        elements[i].style.display = elements[i].style.display == 'table-row' ? 'none' : 'table-row';
    }
};