<script>
    function Price(str) {
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (xhttp.readyState == 4 && xhttp.status == 200) {
                document.getElementById("txtHint").innerHTML = xhttp.responseText;
            }
        };
        xhttp.open("GET", "Price.php?q=" + str, true);
        xhttp.send();
    }

</script>

<script>
    function Capacity(str) {
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (xhttp.readyState == 4 && xhttp.status == 200) {
                document.getElementById("txtHint").innerHTML = xhttp.responseText;
            }
        };
        xhttp.open("GET", "Capacity.php?q=" + str, true);
        xhttp.send();
    }

</script>

<script>
    function Brand(str, str1) {
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (xhttp.readyState == 4 && xhttp.status == 200) {
                document.getElementById("txtHint").innerHTML = xhttp.responseText;
            }
        };
        xhttp.open("GET", "Brand.php?q=" + str + "&name=" + str1, true);
        xhttp.send();
    }

</script>

<script>
    function Price_type(str, str1) {
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (xhttp.readyState == 4 && xhttp.status == 200) {
                document.getElementById("txtHint").innerHTML = xhttp.responseText;
            }
        };
        xhttp.open("GET", "Price_type.php?q=" + str + "&name=" + str1, true);
        xhttp.send();
    }

</script>

<script>
    function Capacity_type(str, str1) {
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (xhttp.readyState == 4 && xhttp.status == 200) {
                document.getElementById("txtHint").innerHTML = xhttp.responseText;
            }
        };
        xhttp.open("GET", "Capacity_type.php?q=" + str + "&name=" + str1, true);
        xhttp.send();
    }

</script>
