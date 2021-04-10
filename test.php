<html>
<head>
<script>
function showHint(str,p) {
    if (str.length == 0) { 
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET", "newEmptyPHPWebPage.php?q=" + str+"&p="+p, true,true);
        xmlhttp.send();
    }
}
</script>
</head>
<body>

<p><b>Start typing a name in the input field below:</b></p>
<form> 
    <select onchange="showHint(this.value,2)">
        <option value="50 ML">50 ML</option>
        <option value="30 ML">30 ML</option>
        <option value="Cinderella">Cinderella</option>
        <option value="slimane">slimane</option>
    </select>>
    First name: <input type="text" onchange="showHint(this.value)">
</form>
<p>Suggestions: <span id="txtHint"></span></p>
</body>
</html>