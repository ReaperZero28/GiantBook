@extends('template')
    @section('content')
    @section('navPublisher', 'active')
    <div class="d-flex justify-content-center align-items-center" style="min-height: 85vh;">
        <div class="card mb-3" style="max-width: 750px;">
            <div class="row g-0" style="position: relative">
              <div class="col-md-4">
                <img src="{{asset($bookDtlData->image)}}" class="img-fluid rounded-start" alt="..."
                style="object-fit: contain; width: 800px; height:400px; margin-left: 10px">
              </div>
              <div class="col-md-8" style="position: absolute; top:50%; left: 35%; transform:translateY(-50%)">
                <div class="card-body">
                  <h5 class="card-title" style="font-size: 1.5rem">Title : {{$bookDtlData->title}}</h5>
                  <p class="card-text">Author : {{$bookDtlData->author}}</p>
                  <p class="card-text">Publisher: {{$bookDtlData->showPublisherName->name}}</p>
                  <p class="card-text">Year : {{$bookDtlData->year}}</p>
                  <p class="card-text">Synopsis : {{$bookDtlData->synopsis}}</p>
                </div>
              </div>
            </div>
          </div>
    </div>
@endsection
