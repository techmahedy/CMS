<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\user\Contact;

class ContactController extends Controller
{
    public function index()
    {
        //
    }

    public function create()
    {
       return view('frontend.contact.contact');
    }

   
    public function store(Request $request)
    {
        $this->validate($request, [

        'name'  => 'required',
        'email' => 'required',
        'text'  => 'required'
        ]);
        $contacts = new Contact;
        $contacts->name = $request->name;
        $contacts->email = $request->email;
        $contacts->website = $request->website;
        $contacts->text = $request->text;
        $contacts->save();
        
        session()->flash('message','Text send successfully');
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
        //
    }
}
