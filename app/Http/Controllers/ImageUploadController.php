<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Carbon\Carbon;
use DB;
use App\User;
use Session;

class ImageUploadController extends Controller
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
    public function index()
    {
        return view('dashboard.image');
    }
    public function smart()
    {
        $app = DB::table('alerts')->where("alerttype", "=", "video")->paginate(5);

        return view('smart')->with('app', $app);
    }
    public function smartImage()
    {
        $app = DB::table('alerts')->where("alerttype", "=", "image")->get();
        return view('smartimage')->with('app', $app);
    }

 public function del()
    {
        $images = DB::table('db_org_medialog')->where('user_id', '=', Auth::user()->id)->get();
            return response()->json($images);

    }
    public function api()
    {
        $app = DB::table('alerts')->get();
        $data = array();
        foreach ($app as $apps) {
            $data[] = [
                'name' => DB::table('mob_users')->where('userid', '=', $apps->userid)->first()
            ];
        }
        return response()->json($app);
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
        ini_set('memory_limit', '4096M');
        if ($request->hasFile('image')) {

            foreach ($request->image as $file) {
                if ($request->repo == "wanted") {
                    $this->validate($request, [
                        'storagepath' => 'image'
                    ]);
                    $new = time() . $file->getClientOriginalName();
                    $file->move('wanted', $new);
                    DB::table('wanted')->insert([
                        'storagepath' => 'wanted/' . $new,
                        'user_id' => Auth::user()->id,
                        'created_at' => Carbon::now()
                    ]);
                } else {
                    $img = time() . $file->getClientOriginalName();
                    $file->move('repo', $img);
                    DB::table('db_org_medialog')->insert([
                        'image' => 'repo/' . $img,
                        'user_id' => Auth::user()->id,
                        'status' => 'pending',
                        'created_at' => Carbon::now()
                    ]);
                }
                Session::flash('success', 'Image uploaded Successfully');
            }
        } else {

            Session::flash('failed', 'image upload failed');
        }


        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $images = DB::table('db_org_medialog')->where('user_id', '=', Auth::user()->id)->get();
        return view('data')->with('images', $images);
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
    public function changep(Request $request)

    {
        $this->validate($request, [
            'password' => 'min:6|required'
        ]);
        $get = User::where('id', '=', Auth::user()->id)->first();


        $get->password = bcrypt($request->password);

        if ($request->password2 !== null) {
            $get->password2 = $request->password2;
        } else {
            $get->password2 = $get->password2;
        }
        $get->save();
        Session::flash('success', "Password Changed Successfully");
        return redirect()->back();
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

