


<?php echo '<link rel="stylesheet" href="Styles/styles.scss">'?>


<?php echo '<script src="./script.js"></script>'
            '<header class="header-section">'
             '<div class="nav-bar">'?>
             <!-- <script> 
                const home = document.getElementById('logo-section');

                function backHome(){
                    location.href = "index.html";
                }
            </script> -->
            
        <?php echo '<div class="logo-section" onclick ="backHome()">
                <!-- <img src="" alt=""> -->
                <img src="./images/odumacorp-icon.png" alt="company-icon">
                <span>Oduma Corp</span>
            </div>
                <nav>
                    <ul>
                        <li>
                            <a href="index.html">Home</a>
                            <a href="app.html">App</a>
                            <a href="about.html">About</a>
                            <a href="services.html">Services</a>
                            <a href="events.html">News/Events</a>
                            <a href="networks.html">My Network</a>
                            <a href="jobs.html">Jobs</a>
                            <a href="messages.html">Messages</a>
                            <a href="notifications.html">Notification</a>
                            <a href="dashboard.html">Dashboard</a>
                        </li>
                    </ul>
                </nav>
        </div>'?>
        <?php 
            echo '<div class="btns">
                    <button id="register" onclick="showRegister()">Register</button>
                    <button id="login" onclick="showLogin()">Login</button>
                    <button id="logout" onclick="showLogout()">Logout</button>
                    <button onclick="history.back()">Back</button>
                </div>'?>
    <?php echo '</header>'

    