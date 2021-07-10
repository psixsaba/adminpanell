<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Crud;
use Illuminate\Http\Request;
//use function GuzzleHttp\Promise\all;

class CrudController extends Controller
{

    public function index()
    {
//
        $CRUDs = Crud::orderBy('Surname')->paginate(10);

        return view('CRUDs.index')->with('CRUDs', $CRUDs);

    }

    public function create()
    {
        return view('CRUDs.create');
    }


    public function store(Request $request)
    {
//        dd($request->all());
        Crud::create($request->all());

        return redirect()->route('index');
    }

    public function hire(Request $request, $id) {

        $CRUD = Crud::find($id);
        $CRUD->update($request->all());

        return redirect()->route('index');
    }

//    public function show($id)
//    {
//        $CRUD = Crud::findOrFail($id);
//        return view('CRUDs.show')->with('CRUD', $CRUD);
//    }

    public function edit($id)
    {

        $CRUD = Crud::findOrFail($id);

        return view('CRUDs.edit')->with('CRUD', $CRUD);
    }

    public function update(Request $request, $id)
    {
//        dd($request->all());

        $CRUD = Crud::find($id);
        $CRUD->update($request->all());

        return redirect()->route('index');
    }

    public function delete($id)
    {
        $CRUD = Crud::findOrFail($id);
        $CRUD->delete();

        return redirect()->route('index');
    }
}
