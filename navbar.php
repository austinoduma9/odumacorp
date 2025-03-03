
<link rel="stylesheet" href="Styles/styles.css">

    <header class="header-section">
        <div class="nav-bar">
            <script> 
                const home = document.getElementById('logo-section');

                function backHome(){
                    location.href = "index.html";
                }
            </script>
        
            <div class="logo-section" onclick ="backHome()">
                <?php echo '<img src="./images/odumacorp-icon.png" alt="company-icon">'?>
                <div>hello</div>
                <img src="images/odumacorp-icon.png" alt="company-icon">
                <img src="../odumacorp-icon.png" alt="company-icon">

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
        </div>
        <div class="btns">
            <button onclick="showRegister()">Register</button>
            <button onclick="showLogin()">Login</button>
            <button onclick="showLogout()">Logout</button>
            <button onclick="history.back()">Back</button>
        </div>
    </header>

    