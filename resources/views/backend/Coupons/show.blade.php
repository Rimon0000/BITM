<x-backend.layouts.master>

    <x-slot name="pageTitle">
        Details
    </x-slot>
    <x-backend.elements.breadcrumb>
        <x-slot name="pageHeader">
            Coupon Details
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
                            <dt class="col-sm-3">Code:</dt>
                            <dd class="col-sm-9">{{$coupon->code}}</dd>
                            <dt class="col-sm-3">Type:</dt>
                            <dd class="col-sm-9">{{$coupon->type}}</dd>
                            <dt class="col-sm-3">Value:</dt>
                            <dd class="col-sm-9">{{$coupon->value}}</dd>
                            <dt class="col-sm-3">Parcent Off:</dt>
                            <dd class="col-sm-9">{{$coupon->parcent_off}}</dd>
                           
                        </dl>
                    </div>
                </div>
            </div>

        </div>
    </main>
</x-backend.layouts.master>