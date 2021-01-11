<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = $this->paginateProducts();
        return view('products', ['products' => $products]);
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
        $product = new Product();
        $product->name = $request->name;
        $product->location = "{$request->corredor}{$request->prateleira}{$request->lado}";
        $product->save();
        //$response = new Response();
        $products = $this->paginateProducts();
        return view('tbody', ['products' => $products]);
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
        $product = Product::find($id);

        $product->name = $request->name;
        $product->location = "{$request->corredor}{$request->prateleira}{$request->lado}";

        $product->save();
        $products = $this->paginateProducts();
        return view('tbody', ['products' => $products]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);

        $product->delete();
        $products = $this->paginateProducts();
        return view('tbody', ['products' => $products]);
    }

     /**
     * Search the specified resource from storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function pesquisar(Request $request)
    {
        $query = $request->get('query');
        $products = $this->paginateProducts($query);
        return view('tbody', ['products' => $products]);
    }

    private function paginateProducts($query = null)
    {
        if(empty($query)){
            $products = Product::orderBy('id', 'desc')->paginate(10);
        } else {
            $products = Product::where('name', 'like', "{$query}%")->orderBy('id', 'desc')->paginate(10);
        }
        $products->withPath('/');
        return $products;
    }
}
