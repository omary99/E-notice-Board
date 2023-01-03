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

    <title>Upload Other announcements Page</title>
  </head>

  @extends('dashboard')

  @section('content')
  <body>
  
  <div class="contact-us">
  <h3>Matangazo ya Mengineyo</h3>
  <form action="{{url('/OtherAnnouncementsData')}}" method="POST" enctype="multipart/form-data" style="margin-top:10px;">
   @csrf
    <label for="announcementDate">Tarehe<em>&#x2a;</em></label>
    <input type="date" id="announcementDate" name="announcementDate" required="" />

    <label for="whereFrom">Kutoka<em>&#x2a;</em></label>
    <input type="text" id="whereFrom" name="whereFrom" required="" />

    <label for="related">Yahusu<em>&#x2a;</em></label>
    <textarea id="related" name="related" required="" rows="4"></textarea>

    <label for="spamProtection"><em>&#x2a; </em><span>&nbsp;&nbsp;&nbsp;&nbsp;Export Processing Zones Authority Taarifa ya matangazo mengineyo</span></label>
    
    <button id="customerOrder">SUBMIT</button>
  </form>
</div>
</body>
@endsection
</html>