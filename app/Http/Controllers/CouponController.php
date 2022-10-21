<?php

namespace App\Http\Controllers;
use App\Models\Coupon;
use Illuminate\Http\Request;

class CouponController extends Controller
{
    //
    public function index(){
        $coupons = Coupon::all();

        // dd($coupons);
        return view('backend.coupons.index', ['coupons' => $coupons]);
    }
    public function create(){
    
        return view('backend.coupons.create');
    }
    public function store(Request $request){
        // dd($request);
        Coupon::create([
            'code'=>$request->code,
            'type'=>$request->type,
            'value'=>$request->value,
            'parcent_off'=>$request->parcent_off,
        ]);
    
        return redirect()->route('coupons.store');
    }

    public function show(Coupon $coupon){
    //  dd($coupon);
        return view('backend.coupons.show', ['coupon' => $coupon]);
    }
}
