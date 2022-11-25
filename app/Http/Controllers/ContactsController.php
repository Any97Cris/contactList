<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contacts;

class ContactsController extends Controller
{
    public function index(){
        $search = request('search');
        if($search){
            $contatos = Contacts::where([
                ['name','like','%'.$search.'%']
            ])->get();
        }else{
            $contatos = Contacts::all();   
        }            

        return view('index', ['contatos' => $contatos, 'search' => $search]);
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

    public function edit($id) {
        $contatos = Contacts::findOrFail($id);

        return view('editar', ['contatos' => $contatos]);
    }

    public function update(Request $request, $id){
        $contatos = Contacts::findOrFail($id);

        $contatos->name = $request->name;
        $contatos->numberContact = $request->numberContact;
        $contatos->email = $request->email;
        $contatos->status = $request->status;

        $contatos->save();

        return redirect('/');
    }

    public function destroy($id){
        $contatos = Contacts::findOrFail($id);

        $contatos->delete();
        return redirect('/');
    }
}
