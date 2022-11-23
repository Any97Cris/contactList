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
}
