<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Boxicons CSS -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <style>
        /* Google FOnts Links */
        @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap");

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Poppins", "sans-sarif";
        }

        .sidebar {
            position: fixed;
            top: 0;
            left: 0;
            height: 100%;
            width: 260px;
            background: #11101d;
            z-index: 100;
            transition: all 0.4s ease;
        }

        .sidebar.close{
            width: 70px;
        }

        .sidebar .logo-details{
            height: 60px;
            width: 100%;
            display: flex;
            align-items: center;
        }

        .sidebar .logo-details i{
            font-size: 30px;
            color: #fff;
            height: 50px;
            min-width: 70px;
            text-align: center;
            line-height: 50px;
            cursor: pointer;
        }

        .sidebar .logo-details .logo-name{
            font-size: 20px;
            color: #fff;
            font-weight: 600;
            transition: 0.3s ease;
            transition-delay: 0.1s;
        }

        .sidebar.close .logo-details .logo-name{
            opacity: 0;
            pointer-events: none;
            transition-delay: 0s;
        }

        .sidebar .nav-links{
            height: 100%;
            padding: 30px 0 180px 0;
            overflow: auto;
        }

        .sidebar.close .nav-links{
            overflow: visible;
        }

        .sidebar .nav-links::-webkit-scrollbar{
            display: none;
        }

        .sidebar .nav-links li{
            position: relative;
            list-style: none;
            transition: all 0.4s ease;
        }

        .sidebar .nav-links li:hover{
            background: #1d1b31;
        }

        .sidebar .nav-links li .icon-link{
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .sidebar.close .nav-links li .icon-link{
            display: block;
        }

        .sidebar .nav-links li i{
            height: 50px;
            min-width: 70px;
            text-align: center;
            line-height: 50px;
            color: #fff;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .sidebar .nav-links li.showMenu i.arrow{
            transform: rotate(-180deg);
        }

        .sidebar.close .nav-links i.arrow{
            display: none;
        }

        .sidebar .nav-links li a{
            display: flex;
            align-items: center;
            text-decoration: none;
        }

        .sidebar .nav-links li a .link-name{
            font-size: 18px;
            font-weight: 400;
            color: #fff;
        }

        .sidebar.close .nav-links li a .link-name{
            opacity:0;
            pointer-events: none;
        }

        .sidebar .nav-links li .sub-menu{
            padding: 6px 6px 14px 80px;
            margin-top: -10px;
            background: #1d1b31; 
            display: none;
        }

        .sidebar .nav-links li.showMenu .sub-menu{
            display: block;
        }

        .sidebar .nav-links li .sub-menu a{
            color:#fff;
            font-size: 15px;
            padding: 5px 0;
            white-space: nowrap;
            opacity: 0.6;
            transition: all 0.3s ease;
        }

        .sidebar .nav-links li .sub-menu a:hover{
            opacity: 1;
        }

        .sidebar.close .nav-links li .sub-menu{
            position: absolute;
            left: 100%;
            top: -10px;
            margin-top: 0;
            padding: 10px 20px;
            border-radius: 0 6px 6px 0;
            opacity: 0;
            display: block;
            pointer-events: none;
            transition: 0s;
        }

        .sidebar.close .nav-links li:hover .sub-menu{
            top: 0;
            opacity: 1;
            pointer-events: auto;
            transition: all 0.4s ease;
        }

        .sidebar .nav-links li .sub-menu .link-name{
            display: none;
        }

        .sidebar.close .nav-links li .sub-menu .link-name{
            display: none;
        }

        .sidebar.close .nav-links li .sub-menu .link-name{
            font-size: 18px;
            opacity: 1;
            display: block;
        }

        .sidebar .nav-links li .sub-menu.blank{
            opacity: 1;
            pointer-events: auto;
            padding: 3px 20px 6px 16px;
            opacity: 0;
            pointer-events: none;
            
        }

        .sidebar .nav-links li:hover .sub-menu.blank{
            top: 50%;
            transform: translateY(-50%)
        }

        .sidebar .profile-details{
            position: fixed;
            bottom: 0;
            width: 260px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            background: #1d1b31;
            padding: 6px 0;
            width: 260px;
            transition: all 0.5s ease;
        }

        .sidebar.close .profile-details{
            background: none;
        }

        .sidebar.close .profile-details{
            width: 70px;
        }

        .sidebar .profile-details .profile-content{
            display: flex;
            align-items: center;
        }

        .sidebar .profile-details img{
            height: 52px;
            width: 52px;
            object-fit: cover;
            border-radius: 16px;
            margin: 0 14px 0 12px;
            background: #1d1b31;
            transition: all 0.5s ease;        
        }

        .sidebar.close .profile-details img{
            padding: 10px;
        }

        .sidebar .profile-details .profile-name,
        .sidebar .profile-details .job{
            color: #fff;
            font-size: 13px;
            font-weight: 300;
            white-space: nowrap;
        }
        .sidebar.close .profile-details i,
        .sidebar.close .profile-details .profile-name,
        .sidebar.close .profile-details .job{
            display: none;
        }

        .sidebar .profile-details .job{
            font-size: 11.5px;
        }

        .home-section{
            position: relative;
            background: #D0D3D3;
            height: 100vh;
            left: 260px;
            width: calc(100% -260px);
            transition: all 0.5s ease;
        }

        .sidebar.close ~ .home-section{
            left: 70px;
            width: calc(100% -70px)
        }

        .home-section .home-content{
            height: 60px;
            display: flex;
            align-items: center;
        }

        .home-section .home-content .bx-menu,
        .home-section .home-content .text{
            color: #11101d;
            font-size: 35px;
        }

        .home-section .home-content .bx-menu{
            margin: 0 15px;
            cursor: pointer;
        }

        .home-section .home-content .text{
            font-size: 26px;
            font-weight: 600;
        }
    </style>

<body>
    <div class="sidebar">
          <!-- logo details -->
        <div class="logo-details">
            <i class='bx bxl-c-plus-plus'></i>
            <span class="logo-name">Announcement</span>
        </div>
<!-- nav link -->
        <ul class="nav-links">
              <!-- Dashboard details -->
            <li>
                <a href="#">
                    <i class='bx bx-grid-alt'></i>
                    <span class="link-name">Dashboard</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link-name" href="#">Dashboard</a></li>
                </ul>
            </li>
            <!-- category Details dropping down -->
            <li>
                <div class="icon-link">
                    <a href="#">
                        <i class='bx bx-collection'></i>
                        <span class="link-name">Category</span>
                    </a>
                    <i class='bx bxs-chevron-down arrow' ></i>
                </div>
                <ul class="sub-menu">
                    <li><a class="link-name" href="#">Category</a></li>
                    <li><a href="#">HTML & CSS</a></li>
                    <li><a href="#">JavaScript</a></li>
                    <li><a href="#">PHP & MySQL</a></li>
                </ul>
            </li>
            <!-- posts Details dropping down -->      
            <li>
                <div class="icon-link">
                    <a href="#">
                        <i class='bx bx-book-alt'></i>
                        <span class="link-name">Posts</span>
                    </a>
                    <i class='bx bxs-chevron-down arrow'></i>
                </div>
                <ul class="sub-menu">
                    <li><a class="link-name" href="#">Posts</a></li>
                    <li><a href="#">Web Design</a></li>
                    <li><a href="#">Login Form</a></li>
                    <li><a href="#">Card Design</a></li>
                </ul>
            </li>
              <!-- Analytics CSS -->
            <li>
                <a href="#">
                    <i class='bx bx-pie-chart-alt-2'></i>
                    <span class="link-name">Analytics</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link-name" href="#">Analytics</a></li>
                </ul>
            </li>
              <!-- Chart CSS -->
            <li>
                <a href="#">
                    <i class='bx bx-line-chart'></i>
                    <span class="link-name">Chart</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link-name" href="#">Chart</a></li>
                </ul>
            </li>
             <!-- plugin Details dropping down -->
            <li>
                <div class="icon-link">
                    <a href="#">
                        <i class='bx bx-plug'></i>
                        <span class="link-name">Plugins</span>
                    </a>
                    <i class='bx bxs-chevron-down arrow'></i>
                </div>
                <ul class="sub-menu">
                    <li><a class="link-name" href="#">Plugins</a></li>
                    <li><a href="#">UI Face</a></li>
                    <li><a href="#">Pigments</a></li>
                    <li><a href="#">Box Icns</a></li>
                </ul>
            </li>
             <!-- explore Details -->
            <li>
                <a href="#">
                    <i class='bx bx-compass'></i>
                    <span class="link-name">Explore</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link-name" href="#">Explore</a></li>
                </ul>
            </li>
             <!-- history Details -->
            <li>
                <a href="#">
                    <i class='bx bx-history'></i>
                    <span class="link-name">History</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link-name" href="#">History</a></li>
                </ul>
            </li>
             <!-- setting Details -->
            <li>
                <a href="#">
                    <i class='bx bx-cog'></i>
                    <span class="link-name">Setting</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link-name" href="#">Setting</a></li>
                </ul>
            </li>  
            
            <li>
                <!-- Profile Details -->
                <div class="profile-details">
                <div class="profile-content">
                    <img src="images/logo.png" alt="profile">
                </div>
                
                <div class="name-job">
                    <div class="profile-name">Chichi Omary</div>
                    <div class="job">Software Developer</div>
                </div>
                <i class='bx bx-log-out'></i>
            </div>
            </li>
        </ul>
    </div>

    <section class="home-section">
        <div class="home-content">
             <i class='bx bx-menu'></i>
             <span class="text">EPZA Electonic Announcement Board</span>
        </div>
    </section>

    <script>
        let arrow = document.querySelectorAll(".arrow");
        for (var i = 0; i < arrow.length; i++) {
            arrow[i].addEventListener("click", (e)=>{
                let arrowParent = e.target.parentElement.parentElement;
                arrowParent.classList.toggle("showMenu")
            });         
        }

        let sidebar = document.querySelector(".sidebar");
        let sidebarBtn = document.querySelector(".bx-menu");
        console.log(sidebarBtn);
        sidebarBtn.addEventListener("click", ()=>{
            sidebar.classList.toggle("close");
        });
    </script>

</body>

</html>