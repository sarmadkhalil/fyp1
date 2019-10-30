<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Salesquote;
use App\Inquiry;
use View;
use Carbon\Carbon;
use PDF;
class SalesquoteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $salesquotes = Salesquote::all();
        return view('salesquotes.index', compact('salesquotes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $salesquotes = Salesquote::all();
        $inquiry= Inquiry::where('id',$salesquotes->inquiry_id);
        dd($inquiry);
        return View::make('salesquotes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Salesquote::create($request->all());
        return redirect('/salesquotes')->with('success', 'Salesquote Added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $mytime=Carbon::now();
        $salesquotes = Salesquote::find($id);
        // $salesquotes->customer;
        $cal = $salesquotes->total+5+($salesquotes->total*(10/100));
        $salesquotes = Salesquote::find($id);
        return view('salesquotes.order', compact('salesquotes','mytime','cal'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $salesquotes = Salesquote::find($id);
        return view('salesquotes.edit', compact('salesquotes'));
    }
    public function generatePDF()
    {
        $pdf = PDF::loadView('salesquotes.order');
        return $pdf->download('invoice.pdf');
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
        $salesquotes = Salesquote::find($id);
        $salesquotes->name =  $request->get('name');
        $salesquotes->description = $request->get('description');
        $salesquotes->total = $request->get('total');
        $salesquotes->status = $request->get('status');
        $salesquotes->customer_id = $request->get('customer_id');
        $salesquotes->product_id = $request->get('product_id');
        $salesquotes->save();

        return redirect('/salesquotes')->with('success', 'sales quote updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
