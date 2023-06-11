@extends('layout.master')
@section('content')

<div class="container">

 

@if(Auth::user()->is_admin==1)
<p class="text-center">your are an admin <br> Go to <a href="{{ route('admin') }}">admin page</a></p>
@endif

<form class="search-query mt-5">
  <div class="form-group">
     <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Search restaurant">
   </div> 
</form>
<div class="d-flex justify-content-between food-category">
     <p>Cafe</p>
     <p>Fast food</p>
     <p>Chinese food</p>
     <p>Western food</p>
     <p>Indian food</p>
</div>

 
<div class="row mt-3">
    @foreach($restaurants as $restaurant)
    <div class="col-lg-3 col-md-4 col-xs-6 thumb mb-4">
        <div class="card mb-4"  >
             <div class="card-body">
                <img class="img-fluid" src="{{ asset('storage/images/' . $restaurant->picture) }}" alt=""  >
                <p class="card-text">
                    <strong class="d-flex justify-content-between">{{ $restaurant->name }} <i class="fa-solid fa-heart" style="line-height:30px"></i></strong>
                    Berjarak sekitar 2km <br>
                    Category:
                 </p>
             </div>
        </div>
    </div>
    @endforeach
</div>
       
 

</div>




@endsection