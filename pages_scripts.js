
    fetch("footer.php")
    .then(response => response.text())
    .then(data => {
        document.getElementById("footer").innerHTML = data;
    });
    //////
    fetch("navbar.php") // The PHP file to load
    .then(response => response.text())
    .then(data => {
        document.getElementById("navbar").innerHTML = data;
    })
    // .catch(error => console.error("Error loading PHP:", error));

///////
fetch("bio.php") // The PHP file to load
    .then(response => response.text())
    .then(data => {
        document.getElementById("navbar").innerHTML = data;
    })
    .catch(error => console.error("Error loading PHP:", error));
// /////
let path = location.pathname;
document.getElementById("demo").innerHTML = path;
