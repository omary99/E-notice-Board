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

    <title>Upload Training Page</title>
  </head>

  @extends('dashboard')

  @section('content')
  <body>
  
  <div class="contact-us">
  <h3>Matangazo ya Mafunzo</h3>
  <form action="{{url('/TrainingData')}}" method="POST" enctype="multipart/form-data" style="margin-top:10px;">
   @csrf
    <label for="trainingDate">Tarehe<em>&#x2a;</em></label>
    <input type="date" id="trainingDate" name="trainingDate" required="" />

    <label for="travelDate">Tarehe ya safari<em>&#x2a;</em></label>
    <input type="date" id="travelDate" name="travelDate" required="" />

    <label for="trainingExpirationDate">Tarehe ya kumaliza<em>&#x2a;</em></label>
    <input type="date" id="trainingExpirationDate" name="trainingExpirationDate" required="" />
    
    <label for="servantName">Mhusika<em>&#x2a;</em></label>
    <input type="text" id="servantName" name="servantName" required="" />

    <label for="trainingType">Aina ya mafunzo <em>&#x2a;</em></label>
    <input type="text" id="trainingType" name="trainingType" required="" />

    <label for="place">Mahali anapokwenda <em>&#x2a;</em></label>
    <input type="text" id="place" name="place" required="" />

    <label for="assistantName">Anayekaimu<em>&#x2a;</em></label>
    <input type="text" id="assistantName" name="assistantName" required="" />

    <label for="spamProtection"><em>&#x2a; </em><span>&nbsp;&nbsp;&nbsp;&nbsp;Export Processing Zones Authority Taarifa ya mafunzo</span></label>
    
    <button id="customerOrder">SUBMIT</button>
  </form>
</div>
</body>
@endsection
</html>