function searchStudents() {
    var searchBox, input, ul, li, a;
    searchBox = document.getElementById('search');
    input = searchBox.value.toLowerCase();
    ul = document.getElementById('student-list');
    li = ul.getElementsByTagName('li');

    for (var i = 0; i < li.length; i++) {
        a = li[i].getElementsByTagName("a")[0];
        if ((a.innerHTML.toLowerCase().replace(",", "").indexOf(input) > -1) || (a.innerHTML.toLowerCase().replace(",", "").split(" ").reverse().join(" ").indexOf(input) > -1)) {
            li[i].style.display = "";
        } else {
            li[i].style.display = "none";
        }
    }
}