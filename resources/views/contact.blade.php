@extends('template')
    @section('content')
    @section('navContact', 'active')
    @section('header')
    <div style="position: relative">
        <div class="header" style="background-image: url('{{asset('header.webp')}}'); width:100%; height:300px;
        display:flex; justify-content:center; align-items:center; filter:blur(3.5px)"></div>
        <h1 style="position: absolute; top:50%; left:50%; transform: translate(-50%,-50%); color: white; font-size:5rem">Contact Us</h1>
    </div>
@endsection
    <div class="d-flex justify-content-center mt-5 mb-5">
        <div class="container d-flex m-3 justify-content-around flex-wrap" style="background-color: F3EFE0">
                <div class="card position-relative mt-4" style="width: 20rem; height: 25rem;">
                    <img src="{{asset('location.png')}}" height="150px" width="200px" style="object-fit: contain; margin-top: 65px" class="card-img-top" alt="...">
                    <div class="card-body">
                    <h1 class="card-title">Store Address</h1>
                    <p class="card-text">Jalan Pembangunan Raya, Komplek Pertokoan Emerald Blok III/12, Bintaro, Tangerang Selatan</p>
                </div>
              </div>
              <div class="card position-relative mt-4" style="width: 20rem; height: 25rem;">
                <img src="{{asset('time.png')}}" height="150px" width="200px"  style="object-fit: contain; margin-top: 65px" class="card-img-top" alt="...">
                <div class="card-body">
                <h1 class="card-title">Open Daily</h1>
                <p class="card-text">08.00 - 20.00</p>
            </div>
          </div>
          <div class="card position-relative mt-4" style="width: 20rem; height: 25rem;">
            <img src="{{asset('contact.webp')}}" height="150px" width="200px" style="object-fit: contain; margin-top: 65px" class="card-img-top" alt="...">
            <div class="card-body">
            <h1 class="card-title">Contact</h1>
            <p class="card-text">Phone : 021-08899776655</p>
            <p class="card-text">Email : 021-08899776655</p>
        </div>
      </div>
    </div>
</div>
@endsection
