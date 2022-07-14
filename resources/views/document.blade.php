@extends('layouts.main')
@section('content')
    <section class="section">
     <div class="title">
        <h1 style="color: black; margin-left: 10px; margin-top:10px">Document Upload</h1>
     </div> 

     <!-- Nama CLient -->
     <form action="{{route ('simpan-data')}}" method="POST" enctype="multipart/form-data">
      {{csrf_field()}}
     <div class="row g-3 align-items-center" style="margin-top: 40px; margin-left:5px">
        <div class="col-auto">
          <label for="code_project" class="col-form-label" style="font-weight: bold; color:black">No Dokumen</label>
        </div>
        <div class="col-auto" style="margin-left:55px; width:30em;">
          <input type="text" name="no_dokumen" id="code_project" class="form-control">
        </div>
     </div>

     <!-- Nama Project -->
     <div class="row g-3 align-items-center" style="margin-top: 40px; margin-left:5px">
        <div class="col-auto">
          <label for="name_institusi" class="col-form-label" style="font-weight: bold; color:black">Tanggal Upload</label>
        </div>
        <div class="col-auto" style="margin-left:40px; width:30em;">
          <input type="date" name="tgl_upload"  class="form-control">
        </div>
     </div>

     <!-- Uraian Pekerjaan -->
     <div class="row g-3 align-items-center" style="margin-top: 40px; margin-left:5px">
        <div class="col-auto">
          <label for="name_project" class="col-form-label" style="font-weight: bold; color:black">Nama Institusi</label>
        </div>
        <div class="col-auto" style="margin-left:48px; width:30em;">
          <input type="text" name="nama_institusi"  class="form-control" >
        </div>
     </div>

     <!-- Date -->
     <div class="row g-3 align-items-center" style="margin-top: 40px; margin-left:5px">
        <div class="col-auto">
          <label for="name_project" class="col-form-label" style="font-weight: bold; color:black">Nama Project</label>
        </div>
        <div class="col-auto" style="margin-left:68px; width:30em;">
            <input type="text" name="nama_project" id="name_project" class="form-control" >
          </div>
     </div>
     
   

         <!-- Status Approve -->
     <div class="row g-3 align-items-center" style="margin-top: 40px; margin-left:5px">
        <div class="col-auto">
          <label for="inputPassword6" class="col-form-label" style="font-weight: bold; color:black">Jenis Dokumen</label>
        </div>
        <div class="col-auto" style="margin-left:38px; width:30em;">
          <select class="form-control selectric" name="jenis_dokumen">
          <option selected>Pilih Jenis Dokumen</option>
  <option value="Pdf">Pdf</option>
  <option value="Doc">Doc</option>
  <option value="Exel">Exel</option>
          </select>
        </div>
     </div>

     <div class="row g-3 align-items-center" style="margin-top: 40px; margin-left:5px">
        <div class="col-auto">
          <label for="" class="col-form-label" style="font-weight: bold; color:black">Upload Dokumen</label>
        </div>
        <div class="col-auto" style="margin-left:68px; width:30em;">
            <input type="file" name="upload_dokumen"  class="form-control" >
          </div>
     </div>

     <button type="submit" class="btn btn-primary btn-sm">Save</button>
     </form>
   
@endsection