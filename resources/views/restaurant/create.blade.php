@extends('layout.master')
@section('content')


<div class="container">
<h1>create</h1>
<form class="mt-4" action="{{ Route('restaurants.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <input type="text" class="form-control" name="name">
    </div>
    <div class="mb-3">
        <textarea class="form-control" name="description" id="" rows="5"></textarea>
     </div>
    <div class="mb-3">
        <input type="file" name="picture">
    </div>

    <button>submit</button>
 </form>
</div>



@endsection