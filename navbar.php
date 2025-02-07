
<link rel="stylesheet" href="Styles/styles.css">

    <header class="header-section">
        <div class="nav-bar">
            <script> 
                const home = document.getElementById('logo-section');

                function backHome(){
                    location.href = "index.php";
                }
            </script>
        
            <div class="logo-section" onclick ="backHome()">
                <img src="./images/odumacorp-icon.png" alt="company-icon">
                <span>Oduma Corp</span>
            </div>
                <nav>
                    <ul>
                        <li>
                            <a href="index.php">Home</a>
                            <a href="app.php">App</a>
                            <a href="about.php">About</a>
                            <a href="services.php">Services</a>
                            <a href="events.php">News/Events</a>
                            <a href="networks.php">My Network</a>
                            <a href="jobs.php">Jobs</a>
                            <a href="messages.php">Messages</a>
                            <a href=" notifications.php">Notification</a>
                            <a href=" dashboard.php">Dashboard</a>
                        </li>
                        <!-- <li><a href="app.php">App</a></li> -->
                        <!-- <li><a href="about.php">About</a></li>
                        <li><a href="services.php">Services</a></li>
                        <li><a href="events.php">News/Events</a></li>
                        <li><a href="networks.php">My Network</a></li>
                        <li><a href="jobs.php">Jobs</a></li>
                        <li><a href="messages.php">Messages</a></li>
                        <li><a href=" notifications.php">Notification</a></li>
                        <li><a href=" dashboard.php">Dashboard</a></li> -->
                    </ul>
                </nav>
        </div>
        <div class="btns">
            <button onclick="showRegister()">Register</button>
            <button onclick="showLogin()">Login</button>
            <button onclick="showLogout()">Logout</button>
            <button onclick="history.back()">Back</button>
        </div>
    </header>


    