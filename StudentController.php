<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    // Method untuk menampilkan data student
    public function index(){
        // menarik data dari database
        $students = Student::all();

        // panggil view dan kirim data students
        return view('admin.contents.student.index', [
            'students' => $students
        ]);
    } 


// method untuk menampilkan form tambah student
    public function create (){
    // panggil view
    return view('admin.contents.student.create');
    }

    // method untuk menyimpan data student
    public function store(Request $request)
    {
        // validasi data
        $request->validate([
            'name' => 'required',
            'nim' => 'required',
            'major' => 'required',
            'class' => 'required'
        ]);
    }
}