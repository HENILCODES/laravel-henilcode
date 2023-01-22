<?php

namespace App\Http\Controllers;

use App\Models\Temp;
use Illuminate\Http\Request;
use mysqli;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *get
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return 'Index Route';
    }
    
    /**
     * Show the form for creating a new resource.
     *get
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $customer = new Temp();
        echo "<pre>";
        print_r($customer->all()->toArray());
        // return $;
        exit;
    }

    /**
     * Store a newly created resource in storage.
     *post
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $customer = new Temp();
        $customer->name = 'HEnil';
        $customer->email = md5('ddd');
        $customer->password = md5('ddd');
        $customer->save();
    }

    /**
     * Display the specified resource.
     *get
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        return 'show ' . $id;
    }

    /**
     * Show the form for editing the specified resource.
     *get
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        return $id . " Edit";
    }

    /**
     * Update the specified resource in storage.
     *put / patch
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *delete
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
