<?php

namespace App\Http\Controllers;
use App\User;
use Auth;
use Mail;  
use Illuminate\Http\Request;
use Session;
use DB;

class LoginAuthController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::check()){
            $user = User::where('id', '=', Auth::user()->id)->first();

            if($user->login1){
                return redirect()->back();
            }else{
    
            return view('login1');
            }
        } else {
            return redirect('/login');
        }
        
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
       $user = User::where('id', '=', Auth::user()->id)->first();
       if($request->email == $user->email && $request->password2 == $user->password2 ){
           $user->login1 = 1;
          
           $rand = mt_rand(100000, 999999);
           $user->otp = $rand;
           $user->save();
           $to_name = 'user';
           $to_email = Auth::user()->email;
           $data = array('name'=>Auth::user()->name, "body" => $rand);
               
           Mail::send('emails.mail', $data, function($message) use ($to_name, $to_email) {
               $message->to($to_email, $to_name)
                       ->subject('otp verification system');
               $message->from('karthiram165@gmail.com','otp');
           });
           return redirect('/login2');
       } else{
           Session::flash('failed', 'You should enter correct details');
        return redirect()->back();

       }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        if(Auth::check()){

        if (!Auth::user()->login1){
            return redirect('/login1');
        }
        else if(Auth::user()->login2) {
            return redirect()->back();

        }else{
            return view('login2');
        }
    } else {
        return redirect('/login');
    }
}

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        $user = User::where('id', '=', Auth::user()->id)->first();
$datet= strtotime(Auth::user()->updated_at);
if (time() - $datet > 2 * 60) {
    Session::flash('failed', 'more than 2 minutes passed');
    return redirect()->back();
}

else if($request->otp == $user->otp) {
            $user->login2 = 1;
            $user->save();
            return redirect('/finalauth');
        }
        else {
            Session::flash('failed', 'You should enter correct otp');
    return redirect()->back();
        }

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function mail(Request $request)
    {
        $user = User::where('id', '=', Auth::user()->id)->first();

        $rand = mt_rand(100000, 999999);
        $user->otp = $rand;
                   $user->save();
                   $to_name = 'user';
                   $to_email = Auth::user()->email;
                   $data = array('name'=>Auth::user()->name, "body" => $rand);
                       
                   Mail::send('emails.mail', $data, function($message) use ($to_name, $to_email) {
                       $message->to($to_email, $to_name)
                               ->subject('otp verification system');
                       $message->from('karthiram165@gmail.com','otp');
                   });
                   return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function login3()
    {
        return view('login3');
    }


    public function getchange(Request $request, $id) {
     DB::table('db_org_medialog')->where('id', '=', $id)->update([
       "x"=> $request->x,
        "y" => $request->y,
        "height" => $request->height,
        "width" => $request->width,
        "text" => $request->text
    ]);
   
    }


    public function ch($id) {
  $app =        DB::table('db_org_medialog')->where('id', '=', $id)->first();

return response()->json($app);
       
      
       }
}
