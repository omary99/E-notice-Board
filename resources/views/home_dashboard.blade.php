<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Boxicons CSS -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!-- style for dashboard CSS -->
    <link rel="stylesheet" href="css/dashboard.css"> 

    <title>EPZA | e-noticeBoard </title>

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
                <a href="{{url('/dashboard')}}">
                    <i class='bx bx-grid-alt'></i>
                    <span class="link-name">Dashboard</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link-name" href="#">Dashboard</a></li>
                </ul>
            </li>

            <!-- Taarifa ya safari -->
            <li>
                <a href="{{url('/TravelDataPage')}}">
                 <i class='bx bx-briefcase'></i>
                    <span class="link-name">Taarifa ya safari</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link-name" href="#">Taarifa ya safari</a></li>
                </ul>
            </li>
              <!--Taarifa ya Vikao -->
              <li>
                <a href="{{url('/MeetingDataPage')}}">
                    <i class='bx bx-news'></i>
                    <span class="link-name">Taarifa ya Vikao</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link-name" href="#">Taarifa ya Vikao</a></li>
                </ul>
            </li>

             <!-- Taarifa ya Likizo -->
             <li>
                <a href="{{url('/HolidayDataPage')}}">
                <i class='bx bx-fork' ></i>
                    <span class="link-name">Taarifa ya Likizo</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link-name" href="#">Taarifa ya Likizo</a></li>
                </ul>
            </li>

             <!-- Taarifa ya Mafunzo-->
             <li>
                <a href="{{url('/TrainingDataPage')}}">
                  <i class='bx bx-book-open'></i>
                    <span class="link-name">Taarifa ya Mafunzo</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link-name" href="#">Taarifa ya Mafunzo</a></li>
                </ul>
            </li>

             <!-- Taarifa ya ICT-->
             <li>
                <a href="{{url('/IctDataPage')}}">
                 <i class='bx bx-envelope' ></i>
                    <span class="link-name">Taarifa ya ICT</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link-name" href="#">Taarifa ya ICT</a></li>
                </ul>
            </li>

             <!--Matangazo Mengineyo-->
             <li>
                <a href="{{url('/OtherAnnouncementsDataPage')}}">
                   <i class='bx bx-collection'></i>
                    <span class="link-name">Matangazo Mengineyo</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link-name" href="#">Matangazo Mengineyo</a></li>
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
<!-- Home section -->
    <section class="home-section">
        <div class="home-content">
             <i class='bx bx-menu'></i>
        </div>
        <div class="dashboard-information">
        </div>

        <!-- yield container -->
        <div class="container">
            @yield('content')
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