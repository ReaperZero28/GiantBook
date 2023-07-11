@extends('template')
    @section('content')
    @section('navHome', '')
    @section('navPublisher', 'active')
    @section('header')

    <h1 style="text-align: center; margin-top: 1rem">Add New Publisher</h1>
    <div class="container w-50" style="background-color: #B2B2B2; margin-bottom: 0">
        <form action="/addpublisher" method="POST" style="width: 100%" enctype="multipart/form-data">
            @csrf
            <div class="updatePublisher">
                <label for="" style="display:block; margin-bottom:5px;margin-top:20px;">Name</label>
                <input type="text" name="name" id="name" placeholder="Input name" style="width: 100%">
                @error('name')
                    {{$message}}
                @enderror
            </div>

            <div class="updatePublisher">
                <label for="" style="display:block; margin-bottom:5px;margin-top:20px;">Address</label>
                <input type="text" name="address" id="address" placeholder="Input address" style="width: 100%">
                @error('address')
                {{$message}}
            @enderror
            </div>

            <div class="updatePublisher">
                <label for="" style="display:block; margin-bottom:5px;margin-top:20px;">Phone Number</label>
                <input type="text" name="phone" id="phone" placeholder="Input phone" style="width: 100%">
                @error('phone')
                {{$message}}
            @enderror
            </div>

            <div class="updatePublisher">
                <label for="" style="display:block; margin-bottom:5px;margin-top:20px;">Email</label>
                <input type="text" name="email" id="email" placeholder="Input email" style="width: 100%">
                @error('email')
                {{$message}}
            @enderror
            </div>

            <div class="updatePublisher">
                <label for="" style="display:block; margin-bottom:5px;margin-top:20px;">Browse Image</label>
                <input type="file" name="image" id="image">
                @error('image')
                {{$message}}
            @enderror
            </div>

            <button class="btn btn-dark" type="submit" style="justify-content-around; margin-top: 2rem; margin-bottom:7rem">Add</button>
        </form>
    </div>

@endsection
