<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\admin\Admin;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    
    public function index()
    {
        $admins = Admin::latest()->get();
        return view('admin.admin.index' , compact('admins'));
    }

    public function create()
    {
       return view('admin.admin.create');
    }

    
    public function store(Request $request)
    {
       $this->validate($request,[

        'name' => 'required',
        'email'  => 'required',
        'password' => 'required',
        'user_role' => 'required',
        'image' => 'required'
        ]);

        $admins = new Admin;
        
        $admins->image = $request->file('image');
        $image_name = str_random(20);
        $ext = strtolower($admins->image->getClientOriginalExtension());
        $image_full_name = $image_name.'.'.$ext;
        $upload_path = 'image/';
        $image_url = $upload_path.$image_full_name;
        $success = $admins->image->move($upload_path,$image_full_name);
        
        $admins->image = $image_url;

        $admins->name = $request->name;
        $admins->email = $request->email;
        $admins->password = bcrypt($request->password);
        $admins->user_role = $request->user_role;
        $admins->status = $request->status;
        

        $admins->save();     
     
        session()->flash('message','User added successfully');
        return redirect()->back();
    }

    
    public function show($id)
    {
        //
    }

  
    public function edit($id)
    { 
        $admins = Admin::find($id);
        return view('admin.admin.update' , compact('admins'));
    }

    
    public function update(Request $request, $id)
    {
        $admins = new Admin;
        $admins->status = $request->status;
        Admin::where( 'id' , $id)->update( array( 'status' =>  $admins->status));
        session()->flash('message','User deactivated successfully');
        return redirect()->back(); 
    }

   
    public function destroy($id)
    {
        $admins = Admin::find($id);
        $admins->delete();
        session()->flash('message','User deleted successfully');
        return redirect()->back(); 
    }
}
