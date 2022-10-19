<x-backend.layouts.master>

    <x-slot name="pagetitle">
    Categories
    </x-slot>

    <div class="container-fluid px-4">

        <x-backend.elements.breadcrumb>
            <x-slot name="pageHeader">
            Categories
            </x-slot>
            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
            <li class="breadcrumb-item active">Categories</li>
        </x-backend.elements.breadcrumb>

        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Categories <a href="{{route('categories.create')}}">Add New Categories</a>
            </div>
            <div class="card-body">
                
                @if(session('message'))
                <div class="alert alert-success">
                    <strong>{{ session('message')}}</strong>
                </div>
                @endif

                <table id="datatablesSimple">
                    <thead>
                   
                        <tr>
                            <th>Title</th>
                            <th>Description</th>
                        </tr>
                    </thead>
                    
                    <tbody>
                         @foreach ($categories as $category)
                        <tr>
                            <td>{{ $category->title}}</td>
                            <td>{{ $category->description}}</td>
                        </tr>                                      
                @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-backend.layouts.master>