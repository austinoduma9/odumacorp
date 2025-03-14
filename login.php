<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Login</title>
    <!-- <link rel="stylesheet" href="Styles/styles2.css"> -->
</head>
<body>



    <!-- <h1>Login</h1> -->

    <dialog id="login">
        <div class="card">
            <!-- To be a modal -->
            <!-- To appear on the left corner of the profile page -->
            <form action="login.php" method="post" enctype="multipart/form-data">
            <!-- Bio on the left side Updated -->
                <p>Login</p>
                <label for="email">Enter your email:</label><br>
                <input id="email" type="text" name="email" >
                <br>
                <label for="password">Enter your password</label><br>
                <input id="password" type="password" name="password" >
                <br>
                <p><a href="http://" target="_blank" rel="noopener noreferrer">Forget Password</a></p>
                <br><br>
                <button>
                    <input type="submit" value="Login">
                </button>
                <button onclick="closeDialog()">Close</button>
            </form>
        <!-- end -->
        </div>
    </dialog>

<script>
      function goBack(){
                window.location.href ="./bio.php";
        }
        function showLogout(){
            
        }
</script>
</body>
</html>


<?php
    require_once "bio.php";
    // require_once "footer.php";
?>
<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="/jquery-3.7.1.min.js"></script>
    <title>Bio</title>
    <link rel="stylesheet" href="Styles/styles2.css">

</head>
<body> -->
    

<div class="user-section">
    <dialog id="register">
        <div class="card">
            <!-- To be a modal -->
            <!-- To appear on the left corner of the profile page -->
            <form action="saveinfo.php" method="post" enctype="multipart/form-data">
            <!-- Bio on the left side Updated -->
                <p>Register</p>
                <div>
                    <label for="fname">Enter First Name</label><br>
                    <input id="fname" type="text" name="fname" >
                    <br>
                    <label for="lname">Enter Last Name</label><br>
                    <input id="lname" type="text" name="lname" >
                    <br>
                </div>
                <div>
                    <label for="email">Enter email address</label><br>
                    <input id="email" type="text" name="email" >
                    <br>
                    <label for="phone">Enter Phone Number</label><br>
                    <input id="phone" type="text" name="phone" >
                    <br>
                </div>
                <div>
                    <label for="password">Enter password</label><br>
                    <input id="password" type="password" name="password" >
                    <br>
                    <label for="photo">Enter Profile Photo</label><br>
                    <input id="photo" type="file" name="photo" accept="image/*"  multiple>
                    <br><br>
                </div>
                <div>
                    <button>
                    <input type="submit" value="Save">

                    </button>
                    <button onclick="closeDialog()">Close</button>

                </div>
            </form>
        <!-- end -->
        </div>
    </dialog>
    <!-- <dialog id="login">
        <div class="card">
            To be a modal -->
            <!-- To appear on the left corner of the profile page -->
            <!-- <form action="login.php" method="post" enctype="multipart/form-data"> -->
            <!-- Bio on the left side Updated -->
                <!-- <p>Login</p> -->
                <!-- <label for="email">Enter your email:</label><br>
                <input id="email" type="text" name="email" >
                <br>
                <label for="password">Enter your password</label><br>
                <input id="password" type="password" name="password" >
                <br>
                <p><a href="http://" target="_blank" rel="noopener noreferrer">Forget Password</a></p>
                <br><br>
                <input type="submit" value="Login" id="openApp">
                <button onclick="closeDialog()">Close</button> -->
            <!-- </form> -->
        <!-- end -->
        </div>
    </dialog>
    <script>
        const app = document.getElementById('');
        function openApp(){
            app.addEventListener('click',(e) =>{
                window.location.href = "app.html";
            });

        }

    </script>

    <script>
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
        function goBack(){
                window.location.href ="./bio.php";
        }
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
    </script>

</body>
</html>
