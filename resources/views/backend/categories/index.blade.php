<x-backend.layouts.master>

    <x-slot name="pageTitle">
        Categories
    </x-slot>

    <main>
        <div class="container-fluid px-4">

            <x-backend.elements.breadcrumb>
                <x-slot name="pageHeader">
                    Categories
                </x-slot>
                <li class="breadcrumb-item"><a href="index.html"></a>Dashboard</li>
                <li class="breadcrumb-item active">Categories</li>
            </x-backend.elements.breadcrumb>


            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    Categories <a href="{{route('categories.create')}}">Add New Category</a>
                </div>
                <div class="card-body">
                    <table id="datatablesSimple">
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Action</th>

                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($categories as $category)
                            <tr>
                                <td>{{ $category->title}}</td>
                                <td>{{ $category->description}}</td>
                                <td>
                                    <a href="{{ route('categories.show',['category'=>$category->id]) }}">Show</a>
                                </td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
</x-backend.layouts.master>