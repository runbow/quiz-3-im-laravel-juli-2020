@extends('layouts.master')

@section('content')

<div class="col-lg-6">
    <div class="p-5">
      <div class="text-center">
        <h1 class="h4 text-gray-900 mb-4">New projcet</h1>
      </div>
      <form class="user" method="POST" action="/proyek">
        @csrf
        <div class="form-group">
          <input type="text" class="form-control form-control-user" id="nama" name="nama" placeholder="nama proyek">
        </div>
        <div class="form-group">
          <input type="text" class="form-control form-control-user" id="deskripsi" name="deskripsi" placeholder="deskripsi proyek">
        </div>
        <div class="form-group">
            <input type="date" class="datepicker form-control form-control-user" id="tanggal_mulai" name="tanggal_mulai">
        </div>
        <div class="form-group">
            <input type="date" class="datepicker form-control form-control-user" id="tanggal_deadline" name="tanggal_deadline">
        </div>
        
        <button type="submit" class="btn btn-primary">Submit</button>
        <hr>
        
      </form>
      <hr>
      
    </div>
  </div>
    
@endsection