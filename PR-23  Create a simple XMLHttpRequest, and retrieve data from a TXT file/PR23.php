<html>
<head>
<title>XHR Example</title>
</head>
<body>
<h2>Retrieve Data from TXT File</h2>
<button id="loadData">Load Data</button>
<p id="dataDisplay"></p>
<script>
function loadData() {
var xhr = new XMLHttpRequest();
xhr.open("GET", "data.txt", true);
xhr.onreadystatechange = function() {
if (xhr.readyState === 4 && xhr.status === 200) {
var responseData = xhr.responseText;
document.getElementById("dataDisplay").textContent = responseData;
}
};
xhr.send();
}
document.getElementById("loadData").addEventListener("click", loadData);
</script>
</body>
</html>