<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\user\Subscriber;
use App\Mail\JoinNotify;

class SubscriberController extends Controller
{
   
    public function index()
    {
       
    }
   
    public function create()
    {
        //
    }
    

   

    public function store(Request $request)
    {

        $this->validate($request, [   
        'email' => 'required|string|email|max:255|'
        ]);

        $user = new Subscriber;
        $user->email = $request->email;

        \Mail::to($user->email)->send(new JoinNotify());
         $user->save();

         session()->flash('message','Thanks for being a member');
        return redirect()->back();
    }

    public function show($id)
    {
        //
    }
   
    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
       $subscriber = Subscriber::find($id);
        $subscriber->delete();
        session()->flash('message','Subscriber deleted successfully');
        return redirect()->back(); 
    }
}
