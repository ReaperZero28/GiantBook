@extends('template')
    @section('content')
    @section('navHome', '')
    @section('navPublisher', 'active')
    @section('header')
        <div style="position: relative">
            <div class="header" style="background-image: url('{{asset('header.webp')}}'); width:100%; height:300px;
            display:flex; justify-content:center; align-items:center; filter:blur(3.5px)"></div>
            <h1 style="position: absolute; top:50%; left:50%; transform: translate(-50%,-50%); color: white; font-size:5rem">Publisher List</h1>
        </div>
    @endsection
    <div class="d-flex justify-content-center mt-5 mb-5">
        <div class="container d-flex m-3 justify-content-around flex-wrap" style="background-color: F3EFE0">
            @foreach ($dataPublisher as $listPublisher)
                <div class="card position-relative mt-4" style="width: 15rem; height: 25rem;">
                    <img src="{{asset('Storage/'.$listPublisher->image)}}" height="250px" style="object-fit: contain" class="card-img-top" alt="...">
                    <div class="card-body">
                    <h5 class="card-title">{{$listPublisher->name}}</h5>
                    <a href="/publisherdetail/{{$listPublisher->id}}" class="btn btn-primary position-absolute left-0 bottom-0 ms-3 mb-3">Detail</a>
                </div>
              </div>
            @endforeach
          </div>
    </div>
    <form action="/formpublisher" method="GET">
        <button class="btn btn-warning" type="submit" style="margin-left: 44rem; margin-bottom: 5rem">Add Publisher</button>
    </form>
@endsection
