<?php

namespace App\Http\Controllers;

use App\Gait;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;

class GaitController extends Controller
{
    public function __construct()
    {
        $this->middleware('authn');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function upload()
    {
        return view('gaitupload');
    }

    public function post(Request $request)
    {
        ini_set('memory_limit', '4096M');

        if ($request->hasFile('image')) {

            foreach ($request->image as $file) {
                $new = time() . $file->getClientOriginalName();
                $file->move('gait', $new);
                DB::table('gaits')->insert([
                    'image' => 'asset/' . $new,
                    'user_id' => Auth::user()->id,
                    'created_at' => Carbon::now()
                ]);
                Session::flash('success', 'Image uploaded Successfully');
            }
        } else {

            Session::flash('failed', 'image upload failed');
        }


        return redirect()->back();
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
     * @param  \App\Gait  $gait
     * @return \Illuminate\Http\Response
     */
    public function show(Gait $gait)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Gait  $gait
     * @return \Illuminate\Http\Response
     */
    public function edit(Gait $gait)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Gait  $gait
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Gait $gait)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Gait  $gait
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gait $gait)
    {
        //
    }
}

