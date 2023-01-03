<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EPZA | Login Form</title>
    <!-- Style for login form -->
    <link rel="stylesheet" href="css/signup.css">
    <script src="https://kit.fontawesome.com/fbcb5ffdce.js" crossorigin="anonymous"></script>
</head>
<body>
   <div class="container">
    <div class="form-box">
        <h1 id="title">Sign Up</h1>
        <form action="{{url('/UserData')}}" method="POST" enctype="multipart/form-data">
        @csrf
            <div class="input-group">
                <div class="input-field" id="nameField">
                  <i class="fa-solid fa-user"></i>
                  <input type="text" placeholder="Name" name="name" required>
                </div>

                <div class="input-field">
                  <i class="fa-solid fa-envelope"></i>
                  <input type="email" placeholder="Email" name="email" required>
                </div>

                <div class="input-field">
                  <i class="fa-solid fa-lock"></i>
                  <input type="password" placeholder="Password" name="password" required>
                </div>
                <p>Forgot password? <a href="#">Click Here!</a></p>
            </div>

            <div class="btn-field">
                <button type="submit" id="signupBtn">Sign up</button>              
            </div>

            <p>Do you have an account? <a href="/loginform">Sign in Here!</a></p>
        </form>
    </div>
   </div> 

<!-- <script>
    let signupBtn = document.getElementById("signupBtn");
    let signinBtn = document.getElementById("signinBtn");
    let nameField = document.getElementById("nameField");
    let title = document.getElementById("title");

    signinBtn.onclick = function(){
        nameField.style.maxHeight = "0";
        title.innerHTML = "Sign In";
        signupBtn.classList.add("disable");
        signinBtn.classList.remove("disable");
    }

    signupBtn.onclick = function(){
        nameField.style.maxHeight = "60px";
        title.innerHTML = "Sign Up";
        signinBtn.classList.add("disable");
        signupBtn.classList.remove("disable");
    }
</script> -->
</body>
</html>