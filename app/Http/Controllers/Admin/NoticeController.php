<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Notice;
use Illuminate\Http\Request;

class NoticeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $notices = Notice::orderBy('id','desc')->get();
        return view('admin.notice.index', compact('notices'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.notice.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'subject' => 'required|max:255',
            'image' => 'required|file|max:1024',
        ]);

        $notice = new Notice();
        $notice->subject = $request->subject;

        if($request->hasFile('image')){
            $file = $request->image;
            $fileName = time(). "." . $file->getClientOriginalExtension();
            $file->move('images', $fileName);
            $notice->image = 'images/'.  $fileName;
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
        $notice = Notice::find($id);
        return view('admin.notice.edit',compact('notice'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'subject' => 'required|max:255',
        ]);

        $notice = Notice::find($id);
        $notice->subject = $request->subject;

        if($request->hasFile('image')){
            $file = $request->image;
            $fileName = time(). "." . $file->getClientOriginalExtension();
            $file->move('images', $fileName);
            $notice->image = 'images/'.  $fileName;
        }

        $notice->update();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
