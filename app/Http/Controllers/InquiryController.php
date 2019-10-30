<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Inquiry;
use App\Customer;
use App\Product;
use App\Salesquote;
use DB;

class InquiryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customers = Customer::all(['id', 'name']);
        $products = Product::all(['id', 'name']);
        $inquiries = Inquiry::all();
        return view('inquiries.index', compact('inquiries','customers','products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Inquiry::create($request->all());
        DB::table('salesqoute')->insert([
            'customer_id' => $request->get('customer_id'),
            'product_id' => $request->get('product_id'),
            'name' => $request->get('name'),
            'quantity' => $request->get('quantity'), 
            'description' => $request->get('description'),    
        ]);
        return redirect('/inquiries')->with('success', 'Inquiry Added!');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $inquiries = Inquiry::find($id);
        $customers = Customer::all(['id', 'name']);
        $inquiries->product;
        return view('inquiries.show', compact('inquiries','customers','products'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $inquiries = Inquiry::find($id);
        $products = Product::all(['id', 'name']);
        $customers = Customer::all(['id', 'name']);
        return view('inquiries.edit', compact('inquiries','products','customers'));
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
        $inquiry = Inquiry::find($id);
        $inquiry->name =  $request->get('name');
        $inquiry->quantity = $request->get('quantity');
        $inquiry->description = $request->get('description');
        $inquiry->product_id = $request->get('product_id');
        $inquiry->customer_id = $request->get('customer_id');
        $inquiry->save();

        return redirect('/inquiries')->with('success', 'inquiry updated!');
    }

    public function salesquote(Request $request){
        return redirect('/salesquotes')->with('status', 'Sales quote successfully created');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $inquiries = Inquiry::find($id);
        $inquiries->delete();

        return redirect('/inquiries')->with('success', 'Inquiry deleted!');
    }
}
