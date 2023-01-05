<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Upload CSS -->
    <link rel="stylesheet" href="css/uploadpages.css">
    
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Upload Meeting Page</title>
  </head>
  
  @extends('home_dashboard')

  @section('content')
  <body>
  
  <div class="contact-us">
  <h3>Matangazo ya Vikao</h3>
  <form action="{{url('/MeetingData')}}" method="POST" enctype="multipart/form-data" style="margin-top:10px;">
   @csrf
    <label for="meetingDate">Tarehe ya kikao<em>&#x2a;</em></label>
    <input type="date" id="meetingDate" name="meetingDate" required="" />

    <label for="meetingTime">Muda wa kikao<em>&#x2a;</em></label>
    <input type="time" id="meetingTime" name="meetingTime" required="" />

    <label for="goal">Lengo <em>&#x2a;</em></label>
    <textarea id="goal" name="goal" required="" rows="4"></textarea>

    <label for="characters">Wahusika <em>&#x2a;</em></label>
    <input type="text" id="characters" name="characters" required="" />

    <label for="area">Eneo <em>&#x2a;</em></label>
    <input type="text" id="area" name="area" required="" />

    <label for="spamProtection"><em>&#x2a; </em><span>&nbsp;&nbsp;&nbsp;&nbsp;Export Processing Zones Authority Taarifa ya kikao</span></label>
    
    <button id="customerOrder">SUBMIT</button>
  </form>
</div>
</body>
@endsection
</html>