<?php

namespace App\Http\Controllers;

use Auth;

use App\Models\User;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{



    public function login(Request $request){
        
        $credentials = [
            'email' => $request->input('email'),
            'password' => $request->input('password')
        ];

        $this->validate($request,[
            'email'     => 'required',
            'password'  => 'required'
        ]);

        if(Auth::attempt($credentials)){
            
        }else{

            return redirect()->back()->withError('Email, password mismatch.');
        }

    }

    public function createUser(Request $request){

        $this->validate($request,[
            'email' => 'required',
            'password'  => 'confirmed | required | min:4'
        ]);

        User::create([
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password'))
        ]);

        return 123;

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
