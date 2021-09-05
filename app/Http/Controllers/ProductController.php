<?php

namespace App\Http\Controllers;

use App\Models\Companie;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::paginate(5);
        return view('products.index', compact('products'));
    }

    public function create(Request $request)
    {
        $companies = Companie::get();
        return view('products.create', compact('companies'));
    }

    public function edit($id)
    {
        $product = Product::find($id);
        return view('products.edit', compact('product'));
    }

    public function update(Request $request, $id)
    {

        $product = Product::find($id)->update([
            'name'=>$request->input('name'),
            'description'=>$request->input('description'),
            'precio'=>$request->input('precio'),
        ]);
        return redirect('products')->with('success', 'Producto actualizado correctamente');
    }

    public function show($id)
    {
        $product = Product::find($id);
        return view('products.show', compact('product'));
    }

    public function store(Request $request)
    {
        if($request->hasFile('image'))
        {
            $destination_path = 'public/images/products';
            $image = $request->file('image');
            $image_name = $image->getClientOriginalName();
            $path = $request->file('image')->storeAs($destination_path,$image_name);

            $input['image'] = $image_name;
        }
        $product = Product::create([
            'name'=>$request->input('name'),
            'description'=>$request->input('description'),
            'precio'=>$request->input('precio'),
            'image' =>$image_name,
            'companies_id'=>$request->input('companies_id'),

        ]);

        return redirect('products')->with('success', 'Producto creado correctamente');
    }

    public function destroy($id)
    {
        $product = Product::find($id)->delete();
        return redirect('products')->with('success', 'Producto eliminado correctamente');

    }
}
