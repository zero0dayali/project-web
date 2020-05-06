<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Teachers;
use Laravel\Ui\Presets\React;

class TeachersController extends Controller
{
    public function index()
    {
        $teachers = Teachers::all();
        return view('admin.teachers')->with('teachers', $teachers);
    }

    public function store(Request $request)
    {
        $teachers = new Teachers;

        $teachers->nik = $request->input('nik');
        $teachers->name = $request->input('name');
        $teachers->email = $request->input('email');
        $teachers->phone = $request->input('phone');
        $teachers->address = $request->input('address');
        $teachers->save();
        return redirect('/teachers')->with('status', 'Data success ditambahkan');
    }

    public function edit($id)
    {
        $teachers = Teachers::findOrFail($id);
        return view('admin.teachers.edit')->with('teachers', $teachers);
    }

    public function update(Request $request, $id)
    {
        $teachers = Teachers::findOrFail($id);
        $teachers->nik = $request->input('nik');
        $teachers->name = $request->input('name');
        $teachers->email = $request->input('email');
        $teachers->phone = $request->input('phone');
        $teachers->address = $request->input('address');
        $teachers->update();

        return redirect('teachers')->with('status', 'Data berhasil di update');
    }
}
