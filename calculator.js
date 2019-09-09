$(document).ready(function() {
    $(".kurs").click(function () {
        $("#valutas").empty();
        var xhttp =  new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState==4 && this.status == 200) {
                document.getElementById("valutas").innerHTML = this.responseText;
            }
        }
        xhttp.open("GET", "index.php", true);
        xhttp.send();
    });
});