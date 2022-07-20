@extends('layouts.main')
@section('content')
    <section class="section">
     <div class="title">
        <h1 style="color: black; margin-left: 10px; margin-top:10px">Create Project Timeline</h1>
     </div> 

     <!-- Nama CLient -->
     <form action="{{route ('simpan-data')}}" method="POST" enctype="multipart/form-data">
      {{csrf_field()}}


      <div class="col-sm-5">
      <label for="nama_institusi" class="form-label" style="font-weight: bold; color:black">Nama Institusi</label>
      <select name="nama_institusi" id="nama_institusi" class="form-control">
      <option selected>Pilih Technikal</option>
        <option value="fazar">Bank BCA</option>
        <option value="rifqi">Bank CIMB</option>
        <option value="arisz">BNI</option>
      </select>
      </div>


      <div class="col-sm-6">
      <label for="nama_project" class="form-label" style="font-weight: bold; color:black">Nama Project</label>
      <input type="text" name="nama_project"  class="form-control" >
      </div>
      <div class="col-sm-6">
      <label for="sign_to" class="form-label" style="font-weight: bold; color:black">Technikal</label>
      <input type="text" name="sign_to"  class="form-control" >
      </div>
      <p></p>
      <br>
      <h2 style="color: black; margin-left: 10px; margin-top:10px">Timeline</h2>
</br>
    </div>
   
<br>


</br>

     </form>
    
   
@endsection