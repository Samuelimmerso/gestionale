<?php

namespace App\Http\Controllers;

use App\Models\Customers;
use Illuminate\Http\Request;


class newcontactsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $customers = Customers::all();
        return view('contact.index',[
            'customers' => $customers,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $customers = Customers::all();
        $customer = new Customers();

        return view('contact.create',[
            'customer' => $customer,
            'customers' => $customers,

        ]);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store()
    {
        //
        $data= request()->validate([
            'name' => 'required',
            'email' => 'required|email',
            'active' => 'required',
            'description' => 'required',
        ]);


        Customers::create($data);

        return redirect()->route('contact.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Customers $customer)
    {
        //
       /*  return view('contact.show',[ 
            'customer' => $customer,
        ]); */

        dd($customer->id);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Customers $customer)
    {
        //
        $customers = Customers::all();


        return view('contact.edit',[
            'customers' => $customers,
            'customer' => $customer,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Customers $customer){
        $data = request()->validate([
            'name' => 'required',
            'email' => 'required|email',
            'active' => 'required',
            'description' => 'required',
        ]);

        $customer->update($data);
        return redirect()->route('products.show', $customer);

    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Customers $customer){
        $customer->delete();
        return redirect()->route('contact.index');
    }

}
