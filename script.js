let currentIndex = 0;
const carouselItems = document.querySelectorAll('.carousel-item');
const totalItems = carouselItems.length;

function showNextSlide() {
  // Hide current slide
  carouselItems[currentIndex].style.transform = 'translateX(-120%)';

  // Increment index and wrap around if necessary
  currentIndex = (currentIndex + 1) % totalItems;

  // Show next slide
  carouselItems[currentIndex].style.transform = 'translateX(0)';
//   carouselItems[currentIndex].style.visibility = "hidden"

}
function backHome(){
    window.location.href = "index.html";
    Window.location.reload();
}

// Rotate carousel every 3 seconds
setInterval(showNextSlide, 3000);

/////
const register = document.getElementById("register");
        const login = document.getElementById("login");
        const card = document.querySelector(".card");

        function showLogin(){
            login.showModal();
        }
        function closeDialog(){
            register.close();
            login.close();
        }
        function showRegister(){
            register.showModal();
        }
        // function goBack(){
        //         window.location.href ="./bio.html";
        // }
        register.addEventListener("click", (e) => {
            if(!card.contains(e.target)){
                register.close();
            }
        });
        login.addEventListener("click", (e) => {
            if(!card.contains(e.target)){
                login.close();

            }
        });


//////

        
    
