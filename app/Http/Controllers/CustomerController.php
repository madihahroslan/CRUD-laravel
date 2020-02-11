<?php

namespace App\Http\Controllers;

use App\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customer = \App\Customer::all();
        return view('customer.index',compact('customer'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('customer.create');
    }

    public function search(Request $request)
    {
        $search = $request->get('search');
        $customer = \App\Customer::query()->where('name', 'LIKE', "%{$search}%")->paginate(5);
        return view('customer.index',compact('customer'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $customer = new \App\Customer;
        $customer->name=$request->get('name');
        $customer->address=$request->get('address'); 
        $customer->gender=$request->get('gender');
        $customer->age=$request->get('age');
        $customer->save();
        return redirect('customer');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function show(Customer $id)
    {
        $customer = \App\Customer::find($id);
        return view('customer.show',compact('customer'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function edit(Customer $id)
    {
        $book = \App\Customer::find($id);
        return view('customer.edit',compact('customer','id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $customer= \App\Customer::find($id);
        $customer->name=$request->get('name');
        $customer->address=$request->get('address');
        $customer->gender=$request->get('gender');
        $customer->age=$request->get('age');
        $customer->save();
        return redirect('customer');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $customer= \App\Customer::find($id);
        $customer->delete();
        return redirect('customer')->with('success','Delete success');

    }
}
