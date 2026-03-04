<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentsController extends Controller
{
    public function index() {

        $students = [
            ['firstname' => 'Marina', 'lastname' => 'AZOUMARO', 'age' => 50],
            ['firstname' => 'Manchour', 'lastname' => 'TCHADJOBO', 'age' => 21],
            ['firstname' => 'Moukitat', 'lastname' => 'LASSISI', 'age' => 20],
            ['firstname' => 'Gracia', 'lastname' => 'ETOH', 'age' => 20],
            ['firstname' => 'Yvette', 'lastname' => 'HOUAGASSI', 'age' => 20]
        ];

        return view('students.index', ['students' => $students]);
    }

    public function create() {
        return view('students.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'firstname' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'age' => 'required|integer|min:16',
        ]);

        return back()->with('success', 'Student created successfully!');
    }

    public function show($id) {

    }

    public function edit($id) {

    }

    public function destroy($id)
    {

    }

    public function update(Request $request, $id) {

    }
}
