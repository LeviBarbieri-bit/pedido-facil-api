<?php

namespace App\Http\Controllers\Api\Admin;

use App\Http\Controllers\Controller;
use App\Models\Companies;
use Illuminate\Http\Request;

class CompaniesController extends Controller
{
    public function index($id = false)
    {
        if($id)
        {
            return Companies::where(['id' =>  $id])->first();
        } else {
            return Companies::all();
        }
        
    }

    public function store(Request $request)
    {
        Companies::create($request->all());
    }

    public function update(Request $request)
    {
        $data = $request->all();
        $Company =  Companies::findOrFail($data['id']);
        $Company->update($data);
    }

    public function destroy(Request $request)
    {
        $data = $request->all();
        $Company =  Companies::where(['id' =>  $data['id']])->first();
        $Company->delete();
    }
}