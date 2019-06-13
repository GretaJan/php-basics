<!DOCTYPE html>
<html>
<head>
    <title>PHP AJAX Suggestions</title>
    <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
    <script>
    function showSuggestion(str){
        if(str.length == 0){
            document.getElementById('output').innerHTML = '';
        } else {
            //AJAX REQUEST
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {
                if(this.readyState == 4 && this.status == 200){
                    document.getElementById('output').innerHTML = this.responseText;
                }
            }
            xmlhttp.open("GET", "suggest.php?q="+str, true);
            xmlhttp.send();
        }
    }
    </script>
</head>
<body>
        <div class="container">
           <h1>Search User</h1>
            <form>
            Search User: <input type="text" class="form-contorl" onkeyup="showSuggestion(this.value)">
            </form>
            <p>Suggestions: <span id="output" style="font-weight:bold"></span></p>
    </div>
</body>
</html>