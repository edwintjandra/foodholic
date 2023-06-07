@extends('layout.master')
@section('content')

<div class="container">
<h1>Edit {{ $restaurant->name }}</h1>
<form class="mt-4" action="{{ Route('restaurants.update',$restaurant->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <input type="text" class="form-control" name="name" value="{{ $restaurant->name }}">
    </div>
    <div class="mb-3">
        <textarea class="form-control" name="description" id="" rows="5">{{$restaurant->description}}</textarea>
     </div>
     <img src="{{ asset('storage/images/' . $restaurant->picture) }}" alt="" style="width:100px; height:100px;">
    <div class="mb-3">
        <input type="file" name="picture">
    </div>

    <button>submit</button>
 </form>
</div>

@endsection