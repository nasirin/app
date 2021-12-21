<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class FasilityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $res = Http::get('http://localhost:8000/api/fasility')->json();
        $data['fasility'] = $res['data'];
        return view('pages.fasilities.index', $data);
    }

    public function store(Request $request)
    {
        $data = $request->all();
        Http::post('http://localhost:8000/api/fasility', $data);
        return back();
    }

    public function destroy($id)
    {
        Http::delete('http://localhost:8000/api/fasility/' . $id);
        return back();
    }
}
