<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Budget;

class OrderController extends Controller
{
    public function index()
    {
       return $budget = Budget::orderBy('id', 'DESC')->get();
    }

    public function store(Request $request)
    {
        $dados = $request->all();
        $response = Budget::create($dados);
        return response($response);
    }

    public function show($id)
    {
        $budget = Budget::where('id', $id);
        return response($budget);
    }
   
    public function update(Request $request, $id)
    {
        $budget = Budget::find($id);
        $response = $budget->update($request->all());
        return response($response);
    }

    public function destroy($id)
    {
        $budget = Budget::find($id);
        $budget->delete();
        $response = Budget::all();
        return response($response);
    }
}
