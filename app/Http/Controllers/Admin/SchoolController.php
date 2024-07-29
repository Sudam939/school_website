<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\School;
use Illuminate\Http\Request;

class SchoolController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index()
    {
        //go to index view
        $school = School::first();
        return view('admin.school.index', compact('school'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //go to create view
        return view('admin.school.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //save data in databse
        $request->validate([
            'name' => 'required|max:255',
            'slogan' => 'required|max:255',
            'email' => 'required|max:255|email',
            'phone' => 'required|digits:10',
            'tel' => 'nullable|digits:7',
            'office_hour' => 'required|max:255',
            'logo' => 'required|file|max:1024',
        ]);

        $school = new School();
        $school->name = $request->name;
        $school->slogan = $request->slogan;
        $school->address = $request->address;
        $school->email = $request->email;
        $school->phone= $request->phone;
        $school->tel = $request->tel;
        $school->office_hour = $request->office;
        $school->map = $request->map;
        $school->facebook = $request->facebook;
        $school->youtube = $request->youtube;

        if($request->hasFile('logo')){
            $file = $request->logo;
            $fileName = time(). "." . $file->getClientOriginalExtension();
            $file->move('images', $fileName);
            $school->logo = 'images/'.  $fileName;
        }

        $school->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //go to edit view
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //update data in database
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //delete data from database
    }
}
