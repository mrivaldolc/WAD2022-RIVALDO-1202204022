@extends('layouts.layout')

@section('content')
<!-- Jumbotron -->
<section id="home">
    <div class="container">
        <div class="d-flex gap-5 wrap justify-content-center align-items-center">
            <div>
                <h1>Selamat Datang Di</h1>
                <h1>Show Room Rivaldo</h1>
                <p class="mt-3">- Showroomnya Pejuang Rupiah -</p>
            </div>
            {{-- display image from assets/img --}}
            <img src="assets/img/sopir.jpg" alt="" style="width: 750px;height: 500px;">
        </div>
    </div>
</section>
<!-- Jumbotron End -->

<!-- footer -->
<footer class="fixed-bottom text-center pt-3 bg-light">
    <p style="text-align: center; color: lightslategray;">
      <img src="<?php echo "assets/img/logo-ead.png" ?>" alt="logoead" style="width:120px;">
    <p style="margin-top: 20px; font-size:10px;">Rivaldo_1202204044</p>
    </p>
  </footer>
  <!-- end footer -->
@endsection