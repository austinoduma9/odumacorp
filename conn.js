/////

//javascript connection
fetch("fetch_data.php")
.then(response => response.text())
.then(data => {document.getElementById("fetch_data").innerHTML = data;
})
fetch("fetch_data.php")
.then(response => response.text())
.then(data => {document.getElementById("bio").innerHTML = data;
})