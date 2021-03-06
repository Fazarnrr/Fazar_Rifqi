@extends('layouts.main')
@section('content')
    <section class="section">
    <div class="title">
        <h1 style="color: black; margin-left: 9px; margin-top:20px">Detail Timeline</h1>
     </div> 
       <div class="card">
        <div class="card-body">
                <div class="mb-3 row">
                    <label for="nama_institusi" class="col-sm-2 col-form-label" style="color:black;font-weight:bold">Nama Institusi</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" value="{{$detail->nama_institusi}}" readonly>
                    </div>
                </div>

                <div class="mb-2 row">
                    <label for="inputNamaProject" class="col-sm-2 col-form-label" style="color:black;font-weight:bold">Nama Project</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" value="{{$detail->NamaProject}}" readonly>
                    </div>
                </div>
        
                <div class="mb-2 row">
                    <label for="inputTimeline" class="col-sm-2 col-form-label" style="color:black;font-weight:bold">Timeline</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" value="{{$detail->Timeline}}" readonly>
                    </div>
                </div>

                <div class="mb-2 row">
                    <label for="inputProduk/Solusi" class="col-sm-2 col-form-label" style="color:black;font-weight:bold">Solusi/Produk</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" value="{{$detail->elearning_id}}" readonly>
                    </div>
                </div>

                <div class="mb-2 row">
                    <label class="col-sm-2 col-form-label" style="color:black;font-weight:bold">Date</label>
                    <div class="col-sm-10">
                    <input type="date" class="form-control" value="{{$detail->Date}}" readonly>
                    </div>
                </div>

                <div class="mb-2 row">
                    <label for="inputAngka" class="col-sm-2 col-form-label" style="color:black;font-weight:bold">Angka</label>
                    <div class="col-sm-10">
                    <input type="number" class="form-control" value="{{$detail->Angka}}" readonly >
                    </div>
                </div>

                <div class="mb-2 row">
                    <label for="inputAngka" class="col-sm-2 col-form-label" style="color:black;font-weight:bold">Status</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" value="{{$detail->Status}}" readonly >
                    </div>
                </div>

                </div>
        </div>
       </div>

      
    
    </section>
@endsection