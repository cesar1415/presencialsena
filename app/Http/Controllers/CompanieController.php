<?php

namespace App\Http\Controllers;

use App\Models\Companie;
use Illuminate\Http\Request;

class CompanieController extends Controller
{
    public function index()
    {
        $companies = Companie::paginate(5);
        return view('companies.index', compact('companies'));
    }

    public function create()
    {
        return view('companies.create');
    }

    public function store(Request $request)
    {
        $companie = Companie::create([
            'name'=>$request->input('name'),
            'nit'=>$request->input('nit'),
        ]);
        return redirect('companies')->with('success', 'Compañia creada correctamente');
    }

    public function show($id)
    {
        $companie = Companie::find($id);
        return view('companies.show', compact('companie'));
    }

    public function destroy($id)
    {
        $companie = Companie::find($id)->delete();
        return redirect('companies')->with('success', 'Empresa eliminada correctamente');

    }

    public function edit($id)
    {
        $companie = Companie::find($id);
        return view('companies.edit', compact('companie'));
    }

    public function update(Request $request, $id)
    {
        $companie = Companie::find($id)->update([
            'name'=>$request->input('name'),
            'nit'=>$request->input('nit'),
        ]);
        return redirect('companies')->with('success', 'Empresa actualizada correctamente');
    }
}
