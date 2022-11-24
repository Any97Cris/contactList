<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contacts;

class ContactsController extends Controller
{
    public function index(){
        $contatos = Contacts::all();       

        return view('index', ['contatos' => $contatos]);
    }

    public function create(Request $request){
        $contatos = new Contacts;

        $contatos->name = $request->name;
        $contatos->numberContact = $request->numberContact;
        $contatos->email = $request->email;
        $contatos->status = $request->status;

        $contatos->save();

        return redirect('/');
    }
}
