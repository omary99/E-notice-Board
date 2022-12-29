<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Responsive Sidebar Menu</title>
    <style>
      /* Google FOnts Links */
@import url("https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap");

* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Poppins", "sans-sarif";
}

body {
  position: relative;
  min-height: 100vh;
  width: 100%;
  overflow: hidden;
}

.sidebar {
  position: fixed;
  top: 0;
  left: 0;
  height: 100%;
  width: 78px;
  background: #11101d;
  padding: 6px 14px;
  transition: all 0.5s ease;
}

.sidebar.active {
  width: 278px;
}

.sidebar .logo_class .logo {
  color: white;
  display: flex;
  height: 50px;
  width: 100%;
  align-items: center;
  opacity: 0;
  pointer-events: none;
  transition: all 0.5s ease;
}

.sidebar.active .logo_class .logo {
  opacity: 1;
  pointer-events: auto;
}

.logo_class .logo i {
  font-size: 20px;
  margin-right: 5px;
}

.logo_class .logo .logo_name {
  font-size: 20px;
  font-weight: 400;
}

.sidebar #menu {
  color: #fff;
  position: absolute;
  left: 50%;
  top: 6px;
  font-size: 20px;
  height: 50px;
  width: 50px;
  text-align: center;
  line-height: 50px;
  transform: translateX(-50%);
}

.sidebar.active #menu {
  left: 90%;
}
.sidebar ul {
  margin-top: 20px;
}

.sidebar ul li input {
  position: absolute;
  height: 100%;
  width: 100%;
  left: 0;
  top: 0;
  border-radius: 12px;
  outline: none;
  border: none;
  background-color: #1d1b31;
  padding-left: 50px;
  font-size: 12px;
  color: #fff;
}

.sidebar ul li .bx-search {
  position: absolute;
  z-index: 100;
  color: #fff;
  font-size: 22px;
  margin-top: 50px;
  margin-left: 5px;
  transition: all 0.5s ease;
}
.sidebar ul li .bx-search:hover {
  background: #fff;
  color: #1d1b31;
}

.sidebar ul li {
  position: relative;
  margin: 0 5px;
  height: 50px;
  width: 100%;
  list-style: none;
  line-height: 50px;
  border-radius: 12px;
}

.sidebar ul li .tooltip {
  position: absolute;
  height: 35px;
  left: 122px;
  top: 0;
  transform: translateY(-50%, -50%);
  border-radius: 6px;
  width: 122px;
  background: #fff;
  line-height: 35px;
  text-align: center;
  box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
  transition: 0s;
  opacity: 0;
  pointer-events: none;
  display: block;
}

.sidebar .links_name {
  opacity: 0;
  pointer-events: none;
  transition: all 0.5s ease;
}

.sidebar.active .links_name {
  opacity: 1;
  pointer-events: auto;
}

.sidebar.active ul li .tooltip {
  display: none;
}

.sidebar ul li:hover .tooltip {
  transition: all 0.5s ease;
  opacity: 1;
  top: 50%;
}

.sidebar ul li a:hover {
  color: #585575;
  background: #fff;
}

.sidebar ul li a {
  color: #fff;
  display: flex;
  align-items: center;
  text-decoration: none;
  transition: all 0.4s ease;
  border-radius: 12px;
  white-space: nowrap;
}

.sidebar ul li i {
  height: 50px;
  min-width: 50px;
  border-radius: 12px;
  line-height: 50px;
  text-align: center;
}

.sidebar .profile_content {
  position: absolute;
  color: #fff;
  bottom: 0;
  left: 0;
  width: 100%;
}

.sidebar .profile_content .profile {
  position: relative;
  padding: 10px 6px;
  height: 60px;
  background-color: #1d1b31;
  transition: all 0.5s ease;
}

.profile_content .profile .profile_details {
  display: flex;
  align-items: center;
  opacity: 0;
  pointer-events: none;
  white-space: nowrap;
}

.sidebar.active .profile .profile_details {
  opacity: 1;
  pointer-events: auto;
}

.profile .profile_details img {
  height: 45px;
  width: 45px;
  object-fit: cover;
  border-radius: 12px;
}

.profile .profile_details .name_job {
  margin-left: 10px;
}

.profile .profile_details .name {
  font-size: 15px;
  font-weight: 400;
}

.profile .profile_details .job {
  font-size: 12px;
}

.profile #log_out {
  position: relative;
  left: 50%;
  bottom: 40px;
  transform: translateX(-50%);
  min-width: 50px;
  line-height: 50px;
  font-size: 22px;
  border-radius: 12px;
  text-align: center;
}

.sidebar.active .profile #log_out {
  left: 88%;
}

.home_content {
  position: absolute;
  height: 100%;
  width: calc(100% - 78px);
  left: 78px;
  transition: all 0.5s ease;
}

.home_content .text {
  font-size: 25px;
  font-weight: 500;
  color: #1d1b31;
  margin: 12px;
}

.sidebar.active ~ .home_content {
  width: calc(100% - 280px);
  left: 280px;
}

    </style>
    <!-- Boxicons CDN Links -->
    <link
      href="https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css"
      rel="stylesheet"
    />
  </head>
  <body>
    <div class="sidebar">
      <div class="logo_class">
        <div class="logo">
          <i class="bx bxl-bitcoin"></i>
          <div class="logo_name">Code With Bilal</div>
        </div>

        <i class="bx bx-menu" id="menu"></i>
      </div>

      <!-- Search Button -->
      <ul class="nav-list">
        <li>
          <a href="#">
            <i class="bx bx-search"></i>
            <input type="text" placeholder="Search Here..." />
          </a>
          <span class="tooltip">Search</span>
        </li>

        <!-- Dashboard Button -->
        <li>
          <a href="#">
            <i class="bx bx-grid-alt"></i>
            <span class="links_name">Dashboard</span>
          </a>
          <span class="tooltip">Dashborad</span>
        </li>

        <!-- User Button-->

        <li style="list-style: none">
          <a href="#">
            <i class="bx bx-user"></i>
            <span class="links_name">User</span>
          </a>
          <span class="tooltip">User</span>
        </li>

        <!-- Message Button -->

        <li style="list-style: none">
          <a href="#">
            <i class="bx bxs-chat"></i>
            <span class="links_name">Message</span>
          </a>
          <span class="tooltip">Message</span>
        </li>

        <!-- Analytic Button-->

        <li style="list-style: none">
          <a href="#">
            <i class="bx bxs-pie-chart-alt-2"></i>
            <span class="links_name">Analytic</span>
          </a>
          <span class="tooltip">Analytic</span>
        </li>

        <!-- File Manager  -->

        <li style="list-style: none">
          <a href="#">
            <i class="bx bx-folder"></i>
            <span class="links_name">File Manager</span>
          </a>
          <span class="tooltip">File Manager</span>
        </li>

        <!-- Order  -->
        <li style="list-style: none">
          <a href="#">
            <i class="bx bx-cart"></i>
            <span class="links_name">Order</span>
          </a>
          <span class="tooltip">Order</span>
        </li>

        <!-- Saved -->

        <li style="list-style: none">
          <a href="#">
            <i class="bx bxs-heart"></i>
            <span class="links_name">Saved</span>
          </a>
          <span class="tooltip">Saved</span>
        </li>

        <!-- Setting -->

        <li style="list-style: none">
          <a href="#">
            <i class="bx bxs-cog"></i>
            <span class="links_name">Setting</span>
          </a>
          <span class="tooltip">Setting</span>
        </li>

        <li>
            <div class="icon-link">
                <a href="#">
                    <i class='bx bx-collection'></i>
                    <span class="link-name">Admin</span>
                </a>
                <i class='bx bxs-chevron-down arrow'></i>
            </div>

            <ul class="sub-menu">
                <li><a class="link_name" href="">Admin</a></li>
                <li><a class="link" href="{{url('/TravelPage')}}">Travel</a></li>
                <li><a class="link" href="{{url('/MeetingPage')}}">Meeting</a></li>
                <li><a class="link" href="{{url('/HolidayPage')}}">Holiday</a></li>
                <li><a class="link" href="{{url('/TrainingPage')}}">Training</a></li>
                <li><a class="link" href="{{url('/IctPage')}}">Ict</a></li>
                <li><a class="link" href="{{url('/OtherAnnouncementsPage')}}">OtherAnnouncements</a></li>
            </ul>
        </li>
      </ul>

      <!-- Profile Content -->
      <div class="profile_content">
        <div class="profile">
          <div class="profile_details">
            <img src="profile.png" alt="" />
            <div class="name_job">
              <div class="name">Bilal Aslam</div>
              <div class="job">Web Developer</div>
            </div>
          </div>
          <!-- Logo Button -->
          <i class="bx bx-log-out" id="log_out"></i>
        </div>
      </div>
    </div>

    <div class="home_content">
      <div class="text">Home Content</div>
    </div>
    <script>
      const menu = document.querySelector("#menu");
      const sidebar = document.querySelector(".sidebar");
      const searchBtn = document.querySelector(".bx-search");

      menu.onclick = function () {
        sidebar.classList.toggle("active");
      };

      searchBtn.onclick = function () {
        sidebar.classList.toggle("active");
      };

      let arrow = document.querySelectorAll(".arrow");
    for (var i=0; i < arrow.length;i++){
        arrow[i].addEventListener("click", (e)=>{
            let arrowParent = e.target.parentElement.parentElement;
            console.log(arrowParent);
            arrowParent.classList.toggle("showMenu")
        })
    }
    </script>
  </body>
</html>
