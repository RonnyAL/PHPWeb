function fixHrefs() {
    var request_uri = location.pathname + location.search;
    var selfRef = document.querySelectorAll("a[href='" + request_uri + "']");

    for(var i = 0; i < selfRef.length; i++) {
        selfRef[i].setAttribute("href", "#");
        selfRef[i].classList.add("active-sub");
    }

}