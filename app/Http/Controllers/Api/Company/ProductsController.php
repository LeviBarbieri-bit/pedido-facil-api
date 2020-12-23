<?php

namespace App\Http\Controllers\Api\Company;

use App\Http\Controllers\Controller;
use App\Models\Products;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index($id = false)
    {
        if($id)
        {
            return Products::where(['id' =>  $id])->first();
        } else {
            return Products::all();
        }
        
    }

    public function store(Request $request)
    {
        Products::create($request->all());
    }

    public function update(Request $request)
    {
        $data = $request->all();
        $Company =  Products::findOrFail($data['id']);
        $Company->update($data);
    }

    public function destroy(Request $request)
    {
        $data = $request->all();
        $Company =  Products::where(['id' =>  $data['id']])->first();
        $Company->delete();
    }
}
