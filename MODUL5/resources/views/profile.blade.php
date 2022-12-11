@extends('layouts.layout')

@section('content')
<section id="profile">
    <div class="container d-flex flex-column pt-5">
      <form action="{{ '/profile/'.$user->id  }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="profile">
          <span class="d-flex mx-auto">
            <h1>Profile</h1>
          </span>
          <div class="d-flex align-items-center">
            <label for="dummy1">Email</label>
            <h2>{{ $user->email }}</h2>
          </div>
          <div class="d-flex align-items-center mt-4">
            <label for="nama">Nama</label>
            <input id="nama" name="name" value="{{ $user->name }}">
          </div>
          <div class="d-flex align-items-center mt-4">
            <label for="nohp">Nomor Handphone</label>
            <input id="nohp" name="no_hp" value="{{ $user->no_hp }}">
          </div>
          <hr>
          <div class="d-flex align-items-center">
            <label for="password">Kata Sandi</label>
            <input type="password" id="password" name="password" placeholder="Kata Sandi">
          </div>
          <div class="d-flex align-items-center mt-4">
            <label for="password">Konfirmasi Kata Sandi</label>
            <input type="password" id="password" name="password" placeholder="Konfirmasi Kata Sandi">
          </div>
          <div class="d-flex align-items-center mt-4">
            <label for="password">Warna Navbar</label>
            <input type="navbar" id="navbar" name="navbar" placeholder="Warna Navbar">
          </div>
          <div class="d-flex align-items-center mt-4 justify-content-center">
            <button type="submit" class="btn btn-primary">Update</button>
          </div>
        </div>
      </form>
        <!-- footer -->
    <footer class="fixed-bottom text-center pt-3 bg-light">
        <p style="text-align: center; color: lightslategray;">
        <img src="<?php echo "../assets/img/logo-ead.png" ?>" alt="logoead" style="width:120px;">
        <p style="margin-top: 20px; font-size:10px;">Rivaldo_1202204044</p>
        </p>
     </footer>
  <!-- end footer -->
    </div>
    
    
</section>
@endsection