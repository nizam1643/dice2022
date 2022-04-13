<?php

namespace App\Http\Controllers;

use App\Models\MyPayment;
use App\Models\User;
use Illuminate\Http\Request;

class MyPaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $validatedData = request()->validate([
            'user_id' => 'required',
            'company_slug' => 'required',
            'item_id' => 'required',
            'item_type' => 'required',
            'price' => 'required',
        ]);

        $user_id = $request->user()->id;
        $company_slug = $request->company_slug;
        $item_id = $request->item_id;
        $item_type = $request->item_type;
        $price = $request->price;

        $user = User::find($user_id);
        $user->money_point = $user->money_point - $price;

        if ($user->money_point < 0) {
            return redirect()->back()->with('error', 'You don\'t have enough money point to buy this item.');
        }
        $user->save();

        $my_payment = new MyPayment;
        $my_payment->user_id = $user_id;
        $my_payment->company_slug = $company_slug;
        $my_payment->item_id = $item_id;
        $my_payment->item_type = $item_type;
        $my_payment->price = $price;
        $my_payment->save();

        return redirect()->back()->with('success', 'Payment has been added.');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MyPayment  $myPayment
     * @return \Illuminate\Http\Response
     */
    public function show(MyPayment $myPayment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MyPayment  $myPayment
     * @return \Illuminate\Http\Response
     */
    public function edit(MyPayment $myPayment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\MyPayment  $myPayment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MyPayment $myPayment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MyPayment  $myPayment
     * @return \Illuminate\Http\Response
     */
    public function destroy(MyPayment $myPayment)
    {
        //
    }
}
