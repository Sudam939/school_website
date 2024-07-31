<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Member;
use App\Models\MemberCategory;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $members = Member::orderBy('id', 'desc')->get();
        return view('admin.member.index', compact('members'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $membercategories = MemberCategory::all();
        return view('admin.member.create', compact('membercategories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'name' => 'required|max:255',
            'designation' => 'required|max:255',
            'email' => 'required|max:255',
            'phone' => 'required|max:255',
            'image' => 'required|file|max:1024',
        ]);

        $notice = new Member();
        $notice->name = $request->name;
        $notice->designation = $request->designation;
        $notice->email = $request->email;
        $notice->phone = $request->phone;
        $notice->member_category_id = $request->member_category_id;

        if ($request->hasFile('image')) {
            $file = $request->image;
            $fileName = time() . "." . $file->getClientOriginalExtension();
            $file->move('images', $fileName);
            $notice->image = 'images/' .  $fileName;
        }

        $notice->save();
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
