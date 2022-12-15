<?php

namespace Modules\Admin\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Admin\Entities\Student;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        if(request('search')) {
            $students = Student::where('name', 'LIKE', '%'.request('search').'%')
                                ->orWhere('phone', 'LIKE', '%'.request('search').'%')->paginate(10);
        } else {
            $students = Student::paginate(10);
        }
        // $students = Student::get();

        // return success([
        //     'students' => $students,
        //     'total' => count($students)
        // ]);
        return view('admin::students\index', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('admin::students\create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        $res = Student::create($request->only('name', 'phone', 'gender'));
        return redirect('/admin');
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        $data = Student::find($id);
        if(!$data) {
            return "No student found!";
        }
        return view('admin::students\edit', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        return view('admin::students\edit');
    }

    /**​
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request, $id)
    {
        $student = Student::find($id);

        if(!$student) {
            return "No student found!";
        }

        $student->update($request->only('name', 'gender', 'phone'));

        return redirect('/admin');
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        $student = Student::find($id);

        if(!$student) {
            return "No student found!";
        }

        $student->delete();

        return redirect('/admin');
    }

    public function duplicate(Request $request, $id) {
        $students = Student::find($id);

        if(!$students) {
            return fail('No student found!');
        }

        $students->create($request->only('name', 'phone', 'gender'));

        return view('admin::students\index', compact('students'));
    }

    public function viewDeletedRecords() {
        // if(request('search')) {
        //     $students = Student::where('name', 'LIKE', '%'.request('search').'%')
        //                         ->orWhere('phone', 'LIKE', '%'.request('search').'%')->paginate(10);
        // } else {
        //     }
            $students = Student::where('deleted_at', '<>', 'null')->get();

        return view('admin::students.deleted', compact('students'));
    }

    public function restoreAll() {
        $students = Student::onlyTrashed()->restore();
        return back();
   }

    public function restore($id) {
        $students = Student::withTrashed()->find($id)->restore();
        return back();
   }
}
