@extends('template')
    @section('content')
    @section('navHome', 'active')
    @section('navPublisher', '')
    @section('navContact', '')
    @section('header')
        <div style="position: relative">
            <div class="header" style="background-image: url('header.webp'); width:100%; height:300px;
            display:flex; justify-content:center; align-items:center; filter:blur(3.5px)"></div>
            <h1 style="position: absolute; top:50%; left:50%; transform: translate(-50%,-50%); color: white; font-size:5rem">Book List</h1>
        </div>
    @endsection
    <div class="d-flex justify-content-center">
        <div class="container d-flex m-3 justify-content-around flex-wrap" style="background-color: F3EFE0">
            @foreach ($dataBook as $listBook)
                <div class="card position-relative mt-4 mb-4" style="width: 18rem; height: 27rem;">
                    <img src="{{asset($listBook->image)}}" height="250px" style="object-fit: contain" class="card-img-top" alt="...">
                    <div class="card-body">
                    <h5 class="card-title">{{$listBook->title}}</h5>
                    <p class="card-text">by : {{$listBook->author}}</p>
                    <a href="/bookdetail/{{$listBook->id}}" class="btn btn-primary position-absolute left-0 bottom-0 ms-3 mb-3">Detail</a>
                </div>
              </div>
            @endforeach
          </div>
    </div>
@endsection


