<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Admin Panel') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                <div class="container mt-3">
    <div class="main">
    <a class="btn btn-success mb-3" href="{{ Route('restaurants.create') }}">add new restaurant</a>
    
        <table class="table">
        <thead>
            <tr>
            <th scope="col">Name</th>
            <th scope="col">Description</th>
            <th scope="col">picture</th>
            <th scope="col">download</th>
            <th scop="col">Edit</th>
            <th scop="col">Delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach($restaurants as $restaurant)
            <tr>
            <td>{{ $restaurant->name }}</td>
            <td>{{ $restaurant->description }}</td>
            <td> <img src="{{ asset('storage/images/' . $restaurant->picture) }}" alt="" style="width:100px; height:100px;"> </td>
            <td>  <a > download </a>  </td>
            <td> 
                <a href="{{ Route('restaurants.edit',$restaurant->id) }}"> Edit </a>  </td>
            <td> 
            <form action="{{ route('restaurants.destroy',$restaurant->id) }}" method="POST">
                    @csrf 
                    @method('DELETE')
                    <button>delete</button>

                </form>
                </form>  
            </td>
            </tr>
            @endforeach
        </tbody>
        </table>

            
        </div>
        </div>
        </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
