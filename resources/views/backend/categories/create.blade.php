<x-backend.layouts.master>

    <x-slot name="pageTitle">
        Categories
    </x-slot>

<main>
<div class="container-fluid px-4">


    <div class="row justify-content-center">
        <div class="col-sm-6 shadow p-3 mb-5 bg-white rounded">
            <h1 class="text-center">Add New</h1>
            <form action="{{ route('categories.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="mb-3 row">
                    <label for="inputTitle" class="col-sm-2 col-form-label">Title:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="title" value="" id="inputTitle">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="inputDetails" class="col-sm-2 col-form-label">Description:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="description" value="" id="inputDetails">
                    </div>
                </div>
                
                
                <button type="submit" class="btn btn-success">Submit</button>

            </form>

        </div>
    </div>

</div>
</main>
</x-backend.layouts.master>
