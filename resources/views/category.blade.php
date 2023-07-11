@extends('template')
    @section('content')
    @section('navHome', 'active')
    @section('navPublisher', '')
    @section('navContact', '')
    @section('header')
        <div style="position: relative">
            <div class="header" style="background-color: #E5D9B6; height:50px; display:flex"></div>
            <h4 style="position: absolute; top:50%; left:50%; transform: translate(-50%,-50%); color: black">{{$dataCategory->name}}</h4>
        </div>
    @endsection
    <div class="d-flex justify-content-center mt-2 mb-3">
        <div class="container d-flex m-3 justify-content-around flex-wrap" style="background-color: F3EFE0">
            @foreach ($dataCategory->relation as $ctg)
                <div class="card position-relative mt-4" style="width: 18rem; height: 27rem;">
                    <img src="{{asset($ctg->image)}}" height="250px" style="object-fit: contain" class="card-img-top" alt="...">
                    <div class="card-body">
                    <h5 class="card-title">{{$ctg->title}}</h5>
                    <p class="card-text">by : {{$ctg->author}}</p>
                    <a href="/bookdetail/{{$ctg->id}}" class="btn btn-primary position-absolute left-0 bottom-0 ms-3 mb-3">Detail</a>
                </div>
              </div>
            @endforeach
          </div>
    </div>
@endsection
