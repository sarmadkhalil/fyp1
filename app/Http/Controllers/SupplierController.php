<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Supplier;
use App\Product;
use View;
class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $suppliers = Supplier::all();
        return view('suppliers.index', compact('suppliers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, array(
            'name'                    => 'required|string|max:255',
            // 'email'                   => 'required|email|unique:users',
            'address'                 => 'required|string|max:255',
            'PNumber'                 => 'required|numeric'            
          ));
        Supplier::create($request->all());
        return redirect('/suppliers')->with('success', 'Supplier Added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $suppliers = Supplier::find($id);
        $suppliers->products;
        // show the view and pass the product to it
        return view('suppliers.show', compact('suppliers'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $suppliers = Supplier::find($id);
        return view('suppliers.edit', compact('suppliers'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name'=>'required',
            'address'=>'required',
            'PNumber'=>'required'
        ]);

        $supplier = Supplier::find($id);
        $supplier->name =  $request->get('name');
        $supplier->address = $request->get('address');
        $supplier->PNumber = $request->get('PNumber');
        $supplier->save();

        return redirect('/suppliers')->with('success', 'Supplier updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $suppliers = Supplier::find($id);
        $suppliers->delete();

        return redirect('/suppliers')->with('success', 'Supplier deleted!');
    }
}
