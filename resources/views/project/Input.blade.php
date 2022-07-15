@extends('layouts.main')
@section('content')
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
  

    <div class="card">
        <div class="card-body">
        <h3 class="font-weight-bold">Project Timeline</h3>
        </div>
        <div class="card-body">
        <form action="{{route ('simpan-data')}}" method="POST" enctype="multipart/form-data">   
            {{csrf_field()}}
            <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Nama institusi</label>
  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="nama_institusi">

  <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Nama project</label>
  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="nama_project">
</div>

<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Nama sales</label>
  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="nama_sales">
</div>

<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Project Timeline</label>
  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="project_timeline">
</div>

<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">start date</label>
  <input type="date" class="form-control" id="exampleFormControlInput1" placeholder="12-9-2022-12-1" name="start_date">
</div>

<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">finish date</label>
  <input type="date" class="form-control" id="exampleFormControlInput1" placeholder="12-9-2022-12-1" name="finish_date">
</div>

<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">sign to Technical</label>
  <select class="form-control" class="form-control" aria-label=".form-select-sm example" name="sign_to">
  <option selected>Pilih Penerima</option>
  <option value="rifqi">rifqi</option>
  <option value="ariz">ariz</option>
  <option value="fazar">fazar</option>
</select>
</div>

<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">sign to PM </label>
  <select class="form-control" class="form-control" aria-label=".form-select-sm example" name="sign_to">
  <option selected>Pilih Penerima</option>
  <option value="rifqi">rifqi</option>
  <option value="ariz">ariz</option>
  <option value="fazar">fazar</option>
</select>
</div>


<button type="submit" class="btn btn-primary">Submit</button>
<button type="button" class="btn btn-primary">Next</button>
</form> 
        </div>
    </div>
  
   

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
    -->
  </body>
</html>
@endsection