<?php

namespace App\Http\Controllers;

use App\Models\student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class StudentController extends Controller
{
    public function insert_static_data()
    {
        $student = new student();
        $student->first_name = "jack";
        $student->last_name = "doueihy";
        $student->address = "zghrta";
        $student->age = 22;
        $student->is_registered = true;
        $student->save();
        return response()->json(["message" => "Success", "code" => 200]);
    }
    public function insert_student(Request $request)
    {
        $student = new student();
        $student->first_name = $request->first_name;
        $student->last_name = $request->last_name;
        $student->address = $request->address;
        $student->age = $request->age;
        $student->is_registered = $request->is_registered;
        $student->save();
        return response()->json(["message" => "success", "code" => 200]);
    }
    public function insert_student_method_2(Request $request)
    {
        $student = Student::create($request->all());
        $student->save();
        return response()->json(["message" => "success", "code" => 200]);
    }
    public function update_student(Request $request, $id ){
        $student=Student::find($id);
        $student->fill($request->all());
        $student->save();
        return response()->json(["message" => "success", "code" => 200]);
    }
    public function delete_student($id){
        $student=Student::find($id);
        $student->delete();
        return response()->json(["message" => "deleted", "code" => 200]);
    }

    public function getAllStudents() {
        $students = Student::all();
        return $students;
    }

    public function getStudentByNameAndAge($name,$age) {
        $students = Student::where("first_name", $name)->where("age",">",$age)->get();
        return $students;
    }
}
