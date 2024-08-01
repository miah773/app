<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
class ContactController extends Controller
{
    


    public function create(){
        return view("admin.Contact.contact-create");
    }


    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required|string|max:255',
            'sujet' => 'required|string|max:255',
            'message' => 'required|string|max:500',
        ]);

        $contact = new Contact();
        $contact->nom = $request->input('nom');
        $contact->sujet = $request->input('sujet');
        $contact->message = $request->input('message');

        $contact->save();

        return redirect()->route('listecontact')->with('success', 'Contact créée avec succès');
    }



    public function getContact(){
        $contact = Contact::all();
        return view('admin/Contact/listeContact',['data'=>$contact]);
    }


    public function deleteContact($id){
        $contact = Contact::find($id);
        $contact->delete();
         return redirect()->route('listecontact')->with('message', 'Contact a ete bien supprimé');
    }

    public function updateContact(Request $request){
        $contact = Contact::find($request->id);
        $contact->nom  = $request->nom;
        $contact->sujet  = $request->sujet;
        $contact->message  = $request->message;

        $contact->save();
        return redirect()->route('listecontact')->with('message', 'Contact a ete bien modifié');
    }

    
public function show($id)
{
     


    $contact = Contact::find($id);
    $data = [
        'contact' => $contact,
    ];

    // Renvoie la réponse JSON avec les deux jeux de données
    return response()->json($data);
}



}


