<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="css/uploadpages.css">
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Upload Information and Communication Technology Advertising Page</title>
  </head>

@extends('dashboard')

@section('content')

<body>
  
  <div class="contact-us">
    <h3>Matangazo ya ICT</h3>
  <form action="{{url('/IctData')}}" method="POST" enctype="multipart/form-data" style="margin-top:10px;">
   @csrf
    <label for="ictDate">Tarehe<em>&#x2a;</em></label>
    <input type="date" id="ictDate" name="ictDate" required="" />

    <label for="ictTime">Muda<em>&#x2a;</em></label>
    <input type="time" id="ictTime" name="ictTime" required="" />

    <label for="about">Kuhusu<em>&#x2a;</em></label>
    <textarea id="about" name="about" required="" rows="4"></textarea>

    <label for="description">Maelezo<em>&#x2a;</em></label>
    <textarea id="description" name="description" required="" rows="4"></textarea>

    <label for="spamProtection"><em>&#x2a; </em><span>&nbsp;&nbsp;&nbsp;&nbsp;Export Processing Zones Authority Taarifa ya ICT</span></label>
    
    <button id="customerOrder">SUBMIT</button>
  </form>
</div>
</body>
  @endsection
</html>