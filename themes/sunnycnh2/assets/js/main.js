// Changes vector to white on hover cards
function vector_hover(element) {
    var vector;
    var url;
    if (element.className == 'link-card') {
        vector = element.childNodes[3];
        url = myScript.template_url+'/assets/images/Vector-gold.png';
    } else {
        var header = element.childNodes[1];
        vector = header.childNodes[1];
        url = myScript.template_url+'/assets/images/Vector-white.png';
    }
    vector.setAttribute('src', url);
}
// Changes vector back to normal after hover cards
function vector_unhover(element) {
    var vector;
    var url = myScript.template_url+'/assets/images/Vector.png';
    if (element.className == 'link-card') {
        vector = element.childNodes[3];
    } else {
        var header = element.childNodes[1];
        vector = header.childNodes[1];
    }
    vector.setAttribute('src', url);
}

