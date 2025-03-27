
//to fetch the navbar
fetch("navbar.html")
.then(response => response.text())
.then(data => {
    document.getElementById("navbar").innerHTML = data;
}).catch(error => console.error("Error loading PHP:", error));


fetch("navbar.html")
.then(response => response.text())
.then(data => {
    document.getElementById("navbar2").innerHTML = data;
}).catch(error => console.error("Error loading PHP:", error));

//to fetch the footer
fetch("footer.php")
.then(response => response.text())
.then(data => {
    document.getElementById("footer").innerHTML = data;
}).catch(error => console.error("Error loading PHP:", error));

// //to fetch the head
// fetch("head.php")
// .then(response => response.text())
// .then(data => {
//     document.getElementById("head").innerHTML = data;
// }).catch(error => console.error("Error loading PHP:", error));



// fetch("bio.php") // The PHP file to load
//     .then(response => response.text())
//     .then(data => {
//         document.getElementById("navbar").innerHTML = data;
//     })
//     .catch(error => console.error("Error loading PHP:", error));
// /////
// let path = location.pathname;
// document.getElementById("demo").innerHTML = path;

//////
 //////
//  fetch("login.html") // The PHP file to load
//  .then(response => response.text())
//  .then(data => {
//      document.getElementById("button_scripts").innerHTML = data;
//  })
