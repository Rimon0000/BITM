<x-backend.layouts.master>

    <x-slot name="pageTitle">
        Details
    </x-slot>
    <x-backend.elements.breadcrumb>
        <x-slot name="pageHeader">
            Category Details
        </x-slot>

    </x-backend.elements.breadcrumb>

    <main>
        <div class="container-fluid px-4">


            <div class="row justify-content-center">
                <div class="col-sm-6 shadow border-0 mt-5">
                    <div class="card-header">
                        <h4 class="text-center fw-light">Details</h4>
                    </div>
                    <div class="card-body">
                        <dl class="row">
                            <dt class="col-sm-3">Title:</dt>
                            <dd class="col-sm-9">{{$category->title}}</dd>
                            <dt class="col-sm-3">Description:</dt>
                            <dd class="col-sm-9">{{$category->description}}</dd>
                        </dl>
                    </div>
                </div>
            </div>

        </div>
    </main>
</x-backend.layouts.master>