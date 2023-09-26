<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class FormController extends Controller
{
    public function index()
    {
        return view('form');
    }

    public function show(Request $request)
    {

        $request->validate([
            'email' => 'required|email:rfc',
            'nama' => 'required|min:3|max:30',
            'nomorHp' => 'required|numeric',
            'gpa' => 'required|numeric|between:2.00,4.00',
            'krs' => 'required|max:2048|mimes:jpg,jpeg,png'
        ]);

        $request->krs->storeAs('public/images', $request->krs->getClientOriginalName());

        $results = [
            'email' => $request->email,
            'nama' => $request->nama,
            'nomorHp' => $request->nomorHp,
            'gpa' => $request->gpa,
            'krs' => $request->krs->getClientOriginalName(),
        ];

        return redirect('/result')->with(['result' => $results, 'status' => 'success']);
    }

    public function result() {
        $results = session()->get('result');

        return view('result',[
            'results' => $results
        ]);
    }
}