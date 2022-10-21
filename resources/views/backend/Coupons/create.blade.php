<x-backend.layouts.master>

    <x-slot name="pageTitle">
        Coupons
    </x-slot>
    <x-backend.elements.breadcrumb>
        <x-slot name="pageHeader">
        Coupons
        </x-slot>
    </x-backend.elements.breadcrumb>

    <main>
        <div class="container-fluid px-4">


            <div class="row justify-content-center">
                <div class="col-sm-6 col-sm-6 shadow border-0 mt-5">
                    <h1 class="text-center">Add New Coupon</h1>
                    <form action="{{route('coupons.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3 row">
                            <label for="inputCode" class="col-sm-2 col-form-label">Code:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="code" value="" id="inputCode">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="inputType" class="col-sm-2 col-form-label">Type:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="type" value="" id="inputType">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="inputValue" class="col-sm-2 col-form-label">Value:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="value" value="" id="inputValue">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="inputParcent" class="col-sm-2 col-form-label">Parcent Off:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="parcent_off" value="" id="inputParcent">
                            </div>
                        </div>


                        <button type="submit" class="btn btn-success">Submit</button>

                    </form>

                </div>
            </div>

        </div>
    </main>
</x-backend.layouts.master>