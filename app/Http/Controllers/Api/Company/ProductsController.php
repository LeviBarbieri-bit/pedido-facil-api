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
        try {

            Products::create($request->all());
    
            return response()->json([
                'info' => 'success',
            ]);
    
        } catch (\Exception $e) {
            return response()->json([
                'info' => 'error',
                'error' => $e->getMessage(),
            ], 500);
        }

    }

    public function update(Request $request)
    {
        try {

            $data = $request->all();
            $Company =  Products::findOrFail($data['id']);
            $Company->update($data);
    
            return response()->json([
                'info' => 'success',
            ]);
    
        } catch (\Exception $e) {
            return response()->json([
                'info' => 'error',
                'error' => $e->getMessage(),
            ], 500);
        }

    }

    public function destroy(Request $request)
    {
        try {

            $data = $request->all();
            $Company =  Products::where(['id' =>  $data['id']])->first();
            $Company->delete();
    
            return response()->json([
                'info' => 'success',
            ]);
    
        } catch (\Exception $e) {
            return response()->json([
                'info' => 'error',
                'error' => $e->getMessage(),
            ], 500);
        }

    }
}
