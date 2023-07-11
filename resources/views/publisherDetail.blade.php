@extends('template')
    @section('content')
    @section('navPublisher', 'active')
    <div class="d-flex justify-content-center align-items-center" style="min-height: 85vh;">
        <div class="card mb-3 ms-5" style="max-width: 450px">
            <div class="row g-0" style="position: relative">
              <div class="col-md-4">
                <img src="{{asset($pubDtlData->image)}}" class="img-fluid rounded-start" alt="..."
                style="object-fit: contain; width: 800px; height:400px; margin-left: 15px">
              </div>
              <div class="col-md-8" style="position: absolute; top:50%; left: 35%; transform:translateY(-50%)">
                <div class="card-body">
                  <h5 class="card-title" style="font-size: 1.5rem">Name : {{$pubDtlData->name}}</h5>
                  <p class="card-text">Address : {{$pubDtlData->address}}</p>
                  <p class="card-text">Phone : {{$pubDtlData->phone}}</p>
                  <p class="card-text">Email : {{$pubDtlData->email}}</p>
                </div>
              </div>
            </div>
          </div>
          <div class="container d-flex m-3 justify-content-around flex-wrap" style="background-color: F3EFE0">
            @foreach ($pubDtlData->relation as $listBook)
                <div class="card position-relative mt-4" style="width: 18rem; height: 27rem;">
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
