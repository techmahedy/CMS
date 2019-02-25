<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\user\Contact;

class EmailController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
        $all = Contact::latest()->get();
        return view('admin.contact.index' , compact('all'));
    }


    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $this->validate($request, [

        'from' => 'required',
         'to' => 'required',
         'subject' => 'required',
         'text' => 'required'
        ]);
        $fromemail = $request->from;
        $tomail = $request->to;
        $subject = $request->subject;
        $text = $request->text;

        $sendmail = mail($tomail, $subject, $text,$fromemail);
        if ($sendmail) {
            session()->flash('message','Mail has been sent');
            return redirect()->back();
        }else{
            session()->flash('message','Sorry , there has been error');
            return redirect()->back();
        }
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $contact = Contact::find($id);
        return view('admin.contact.reply',compact('contact'));
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
       $message = Contact::find($id);
       $message->delete();
       return redirect()->back();
    }
}
