<html>
<head>
<title>jQuery Example</title>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
<h2>jQuery Example</h2>
<p>Click the button to change the text color.</p>
<button id="changeColorButton">Change Text Color</button>
<p id="textToChange">This is some text to change color.</p>
<script>
$(document).ready(function(){
$("#changeColorButton").click(function(){
$("#textToChange").css("color", "red");
});
});
</script>
</body>
</html>