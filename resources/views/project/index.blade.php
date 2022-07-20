@extends('layouts.main')
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Create Project Timeline</h1>
        </div>
       <div class="card">
        <div class="card-body">
        <table class="table table-striped table-hover">
            <a href="{{route('input')}}"><button type="submit" class="btn btn-primary btn-sm">Create</button></a>
          
         <hr>
            <thead>
            <tr>
                <th>No</th>
                <th>Nama institusi</th>
                <th>Nama Projek</th>
                <th>Start Date</th>
                <th>Finish Date</th>
                <th>Sign to Technical</th>
                <th>action</th>
                
                
            </tr>
         </thead>
         
         <tbody>
            @foreach ($data as $id)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $id->nama_institusi }}</td>
                    <td>{{ $id->nama_project }}</td>
                    <td>{{$id->start_date}}</td>  
                    <td>{{$id->finish_date}}</td> 
                    <td>{{ $id->sign_to }}</td>
                    
                    <td>
                    <a href="{{url ('detail', $id->id)}}">  <button type="submit" class="btn btn-warning btn-sm mb-1">Detail</button></a>
                    <a href="{{url ('delete', $id->id)}}">  <button type="submit" class="btn btn-danger btn-sm mb-1">Edit</button></a> 
                    </td>
                    
                
                </tr>
            @endforeach
         </tbody>
</table>
        </div>
       </div>

      
    
    </section>
    @endsection