
function hideAllBut(id) {
    var e = document.getElementById(id);
    var content = document.querySelectorAll('.content');
    if (e.style.display == 'block') e.style.display = '.content';
    else e.style.display = 'block';

    for (var i = content.length; i--; ) {
        if (content[i].id != id) {
            content[i].style.display = 'none';
        }
    }
}