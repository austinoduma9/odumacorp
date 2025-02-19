
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
                            <a href="notifications.php">Notification</a>
                            <a href="dashboard.php">Dashboard</a>
                        </li>
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


    