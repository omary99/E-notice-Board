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

    <title>Upload Travel Page</title>
  </head>

  @extends('dashboard')

  @section('content')
  <body>
  
  <div class="contact-us">
  <h3>Matangazo ya safari</h3>
  <form action="{{url('/TravelData')}}" method="POST" enctype="multipart/form-data" style="margin-top:10px;">
   @csrf
    <label for="AdsDate">Tarehe ya tangazo<em>&#x2a;</em></label>
    <input type="date" id="AdsDate" name="adsDate" required="" />

    <label for="travelDate">Tarehe ya safari <em>&#x2a;</em></label>
    <input type="date" id="travelDate" name="travelDate" required="" />

    <label for="returnDate">Tarehe ya kurudi <em>&#x2a;</em></label>
    <input type="date" id="returnDate" name="returnDate" required="" />

    <label for="place">Anapokwenda <em>&#x2a;</em></label>
    <textarea id="place" name="place" required="" rows="4"></textarea>

    <label for="servantName">Mhusika <em>&#x2a;</em></label>
    <input type="text" id="servantName" name="servantName" required="" />

    <label for="assistantName">Anaekaimu <em>&#x2a;</em></label>
    <input type="text" id="assistantName" name="assistantName" required="" />

    <label for="spamProtection"><em>&#x2a; </em><span>&nbsp;&nbsp;&nbsp;&nbsp;Export Processing Zones Authority Taarifa ya safari</span></label>
    
    <button id="customerOrder">SUBMIT</button>
  </form>
</div>
</body>
@endsection
</html>