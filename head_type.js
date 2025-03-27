//to fetch the navbar
fetch("head.php")
.then(response => response.text())
.then(data => {
    document.getElementsByTagName("head");
}).catch(error => console.error("Error loading PHP:", error));