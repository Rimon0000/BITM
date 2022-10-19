<x-backend.layouts.master>

    <x-slot name="pagetitle">
        Categories
    </x-slot>

    <x-backend.elements.breadcrumb>
        <x-slot name="pageHeader">
            Categories
        </x-slot>
    </x-backend.elements.breadcrumb>

    <div class="container-fluid px-4">
        <div class="row justify-content-center">
            <div class="col-sm-7">
                <div class="card shadow border-0 mt-5">
                    <div class="card-header">
                        <h3 class="text-center fw-light">Add New</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('categories.store')}}" method="post">
                            @csrf
                            <div class="mb-3 row">
                                <label for="inputTitle" class="col-sm-2 col-form-label">Title: </label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="title" id="inputTitle">
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <label for="inputTitle" class="col-sm-2 col-form-label">Description: </label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="description" id="inputTitle">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-dark">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>


    </div>
</x-backend.layouts.master>