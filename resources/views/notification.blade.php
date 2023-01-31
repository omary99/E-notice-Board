<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>notification</title>
    <link rel="stylesheet" href="css/notify.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
</head>

<body>
    <div class="notification center">
        <input type="checkbox" name="notify" id="">
        <div class="num number center">4</div>
        <div class="box">
            <div class="heading center">
                <p><i class="fas fa-bell"></i><span class="number">4</span>Notifications</p>
            </div>

            <div class="notification_box">
            <p><i class="fas fa-user"></i>Someone liked your photo</p>
            <p><i class="fas fa-user"></i>Someone liked your photo</p>
            <p><i class="fas fa-user"></i>Someone liked your photo</p>
            <p><i class="fas fa-user"></i>Someone liked your photo</p>
            <p><i class="fas fa-user"></i>Someone liked your photo</p>
            <p><i class="fas fa-user"></i>Someone liked your photo</p>
            <p><i class="fas fa-user"></i>Someone liked your photo</p>
            <p><i class="fas fa-user"></i>Someone liked your photo</p>
            </div>

        </div>
    </div>

    <script>
        const box = document.querySelectorAll('.notification_box p');
        const number = document.querySelectorAll('.number');
        console.log(box.length);

        number.forEach((e) => {
            e.innerText = box.length;
        });
    </script>
</body>

</html>