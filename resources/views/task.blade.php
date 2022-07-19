@extends('layouts.main')
@section('content')
<table class="table">
<h1 style="color: black; margin-left: 10px; margin-top:10px">Task Progress Report</h1>
<div class="col mr-1">
<a href="" class="btn btn-primary"><i class="fas fa-file-excel"></i> Export Excel</a>
</div>
  <thead>
    <tr>     
                <th>Nama Client</th>
                <th>Nama Project</th>
                <th>Uraian job</th>
                <th>Status job</th>
                <th>Note</th>
    </tr>
  </thead>
  @foreach ($data as $weekly)
  <tbody>

    <tr>
      <td>{{$weekly->client_name}}</td>
      <td>{{$weekly->project_name}}</td>
      <td>{{$weekly->uraian_job}}</td>
      <td>{{$weekly->status_job}}</td>
      <td>{{$weekly->note}}</td>
    </tr>
  </tbody>
  @endforeach
</table>
@endsection