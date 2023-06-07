@extends('layout.master')
@section('content')

<div class="fluid-container  header d-flex justify-content-center ">
 
<div class="text-center">
    <h1>Good Food for Good people 😋</h1>
    <h2>Food restaurant that's available <span class="auto-type"></span> </h2>
    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Praesentium, dicta.</p>
    <a class="btn btn-warning" href="{{ Route('restaurants.index') }}">see all restaurant</a>
</div>
<div></div>

</div>

<script src="https://unpkg.com/typed.js@2.0.16/dist/typed.umd.js"></script>
<script>
    var typed = new Typed('.auto-type', {
      strings: ['Hanamasa', 'Chiz n Chick','McDonalds'],
      typeSpeed: 100,
      backSpeed:100,
      loop:true
    });
</script>

@endsection