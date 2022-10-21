<x-backend.layouts.master>

    <x-slot name="pageTitle">
        Coupons
    </x-slot>

    <main>
        <div class="container-fluid px-4">

            <x-backend.elements.breadcrumb>
                <x-slot name="pageHeader">
                Coupons
                </x-slot>
                <li class="breadcrumb-item"><a href="index.html"></a>Dashboard</li>
                <li class="breadcrumb-item active">Coupons</li>
            </x-backend.elements.breadcrumb>


            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    Categories <a href="{{route('coupons.create')}}">Add New Coupon</a>
                </div>
                <div class="card-body">
                    <table id="datatablesSimple">
                        <thead>
                            <tr>
                                <th>Code</th>
                                <th>Type</th>
                                <th>Value</th>
                                <th>Parcent Off</th>
                                <th>Action</th>

                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($coupons as $coupon)
                            <tr>
                                <td>{{ $coupon->code}}</td>
                                <td>{{ $coupon->type}}</td>
                                <td>{{ $coupon->value}}</td>
                                <td>{{ $coupon->parcent_off}}</td>
                                <td>
                                    <a href="{{ route('coupons.show',['coupon'=>$coupon->id]) }}">Show</a>
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