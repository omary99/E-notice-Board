<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Training Advertisement</title>
    <!-- CSS link -->
    <link rel="stylesheet" href="css/showpages.css">

    <!-- Bootsrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
@extends('dashboard')

@section('content')
<body>

<div class="container text-center">
      
    <div class="col align-self-center">
      <div class="container-img">
          <img src="images/logo.png" alt="Image" />
      </div>
    </div>  

    <div class="col align-self-center">
       <div class="container-text">
        <h3>Export Processing Zones Authority</h3>
        <h5>TAARIFA YA MAFUNZO</h5>
       </div>
    </div>

    <div class="col align-self-center">
       <div class="container-table">
        <table border="1px">
          <tr>
              <td>TAREHE</td>
              <td>TAREHE YA SAFARI</td>
              <td>TAREHE YA KUMALIZA</td>
              <td>MHUSIKA</td>
              <td>AINA YA MAFUNZO</td>
              <td>MAHALI ANAPOKWENDA</td>
              <td>ANAYEKAIMU</td>
          </tr>
      
          @foreach ($data as $data)
          <tr>
              <td>{{$data->training_date}}</td>
              <td>{{$data->travel_date}}</td>
              <td>{{$data->training_expiration_date}}</td>
              <td>{{$data->servant_name}}</td>
              <td>{{$data->training_type}}</td>
              <td>{{$data->place}}</td>
              <td>{{$data->assistant_name}}</td>
          </tr>

          @endforeach
      </table>

       </div>
    </div>
    
  </div>

  <button class="button button2"><a class="link_underline" style="color:black" href="{{url('/dashboard')}}">RUDI MWANZO</a></button>
  </body>
  @endsection
</html>