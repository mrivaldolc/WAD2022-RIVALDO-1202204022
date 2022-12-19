@extends('layouts.layout')
@section('list')
    active
@endsection
@section('content')
<!-- Content -->
<section id="list">
    <div class="container">
      <div>
        <h1>My Show Room</h1>
        <p>List Show Room Rivaldo - 1202204022</p>
        <div class="d-flex gap-5">
          @foreach ($showroom as $row)
            <div class='card cardcontent' style='width: 18rem;'>
            <img src='{{ url('storage/'.$row->image)}}' class='card-img-top' alt='fotomobil' style='padding: 16px;'>
            <div class='card-body'>
                <h5 class='card-title'>{{ $row->name }}</h5>
                <p class='card-text'>{{ $row->description }}</p>
                <span class='d-flex gap-2'>
                  <a href='{{ '/detail/'.$row->id }}' class='btn btn-primary' style='border-radius: 100px; width:140px; height: 36px;'>Detail</a>
                  {{-- delete car --}}
                  <form action='{{ url('list/'.$row->id) }}' method='POST'>
                    @csrf
                    @method('DELETE')
                    <button type='submit' class='btn btn-danger' style='border-radius: 100px; width:140px; height: 36px;'>Delete</button>
                  </form>
                </span>
            </div>
            </div>
          @endforeach
        </div>  
      </div>
    </div>
  </section>
<!-- Content End -->

        <!-- footer -->
        <footer class="fixed-bottom text-center pt-3 bg-light">
    <p style="text-align: center; color: lightslategray;">
      <img src="<?php echo "assets/img/logo-ead.png" ?>" alt="logoead" style="width:120px;">
    <p style="margin-top: 20px; font-size:10px;">Rivaldo_1202204044</p>
    </p>
  </footer>
  <!-- end footer -->
@endsection