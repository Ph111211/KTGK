<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class userController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::paginate(10);
        return view('index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $request->validate([
        //     'name' => 'required',
        //     'email' => 'required',
        //     'password' => 'required',
        //     'role' => 'required',
        // ]);
        User::create($request->all());
        return redirect()->route('index')->with('succses','Them thanh cong');
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
    public function edit( $id)
    {
    return view('update', compact('id'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $rs = User::findorFail($id);
        $rs->update($request->all());
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        $rs = User::findorFail($id);
        $rs->delete();
        return redirect()->route('index')->with('succses','Xoa thanh cong');
    }
}
