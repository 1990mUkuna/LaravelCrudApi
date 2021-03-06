<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
     //http://127.0.0.1:8001/api/products
    public function index()
    {
        // this Method is to fetch all product
        $products = Product::all();
        return $products;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Save product
        $product = new Product();
        $product ->name = $request->name;
        $product ->description = $request->description;
        $product ->price = $request->price;
        $product->save();

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

     //http://127.0.0.1:8001/api/products/1
    public function show($id)
    {
        // geting single product
        $product = Product::find($id);
        return $product;
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

     //http://127.0.0.1:8001/api/products/1
    public function update(Request $request, $id)
    {
        // Update Single product
        $product = Product::find($id);
        $product ->name = $request->name;
        $product ->description = $request->description;
        $product ->price = $request->price;
        $product ->save();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // To delete product
        $product = Product::find($id);
        $product->delete();
    }
}
