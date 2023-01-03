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

    <title>Upload Holiday Page</title>
  </head>

  @extends('dashboard')

  @section('content')
  <body>
  
  <div class="contact-us">
    <h3>Matangazo ya likizo</h3>
  <form action="{{url('/HolidayData')}}" method="POST" enctype="multipart/form-data" style="margin-top:10px;">
   @csrf
    <label for="holidayDate">Tarehe<em>&#x2a;</em></label>
    <input type="date" id="holidayDate" name="holidayDate" required="" />

    <label for="servantName">Jina la mtumishi<em>&#x2a;</em></label>
    <input type="text" id="servantName" name="servantName" required="" />

    <label for="holidayType">Aina ya Likizo <em>&#x2a;</em></label>
    <input type="text" id="holidayType" name="holidayType" required="" />

    <label for="holidayDays">Siku za likizo <em>&#x2a;</em></label>
    <input type="text" id="holidayDays" name="holidayDays" required="" />

    <label for="holidayStartDate">Tarehe ya kuanza likizo<em>&#x2a;</em></label>
    <input type="date" id="holidayStartDate" name="holidayStartDate" required="" />

    <label for="holidayExpirationDate">Tarehe ya kumaliza likizo<em>&#x2a;</em></label>
    <input type="date" id="holidayExpirationDate" name="holidayExpirationDate" required="" />

    <label for="assistantName">Anayekaimu<em>&#x2a;</em></label>
    <input type="text" id="assistantName" name="assistantName" required="" />

    <label for="spamProtection"><em>&#x2a; </em><span>&nbsp;&nbsp;&nbsp;&nbsp;Export Processing Zones Authority Taarifa ya Likizo</span></label>
    
    <button id="customerOrder">SUBMIT</button>
  </form>
</div>
</body>
@endsection
</html>