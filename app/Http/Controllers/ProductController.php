<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Product;
use Faker\Generator;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $products = Product::take(10)->get();
        //$products = Product::orderBy('created_at', 'DESC')->take(5)->get();
        // $products = Product::paginate(5)->sortBy('created_at', 'DESC')->get();

        //$products = Product::paginate(5)->get();
        //error, too few arguments

        //$products = Product::orderBy('created_at', 'DESC')->paginate(5)->get();
        //error, too few arguments

        // return view('home', compact['products']);

        // $products = Product::orderBy('created_at', 'DESC')->limit(5)->get();
        // return view('home', compact('products'));

        return response(Product::all()->jsonSerialize(), Response::HTTP_OK);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Generator $faker)
    {
        $product = new Product();
        $product->name = $faker->lexify('????????');
        $product->category = $faker->lexify('????????');
        $product->description = $faker->lexify('????????');
        //$crud->color = $faker->boolean ? 'red' : 'green';
        $product->save();

        return response($product->jsonSerialize(), Response::HTTP_CREATED);
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        return response(Product::find($id)->jsonSerialize(), Response::HTTP_OK);
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
    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);
        $product->name = $request->name;
        $product->category = $request->category;
        $product->description = $request->description;
        $product->save();
      
        return response(null, Response::HTTP_OK);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Product::destroy($id);

        return response(null, Response::HTTP_OK);
    }
}
