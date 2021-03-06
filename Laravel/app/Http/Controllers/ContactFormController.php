<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\ContactForm;
use Illuminate\Support\Facades\DB;
use App\Services\CheckFormData;
use App\Http\Requests\StoreCOntactForm;

class ContactFormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //エロクワント ORマッパー
        //$contacts=ContactForm::all();

        //クエリビルダ
        $contacts = DB::table('contact_forms')
            ->select('id', 'last_name', 'first_name', 'created_at')
            ->orderBy('created_at', 'desc')
            ->get();

        // dd($contacts);

        return view('contact.index', compact('contacts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('contact.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreContactForm $request)
    {
        $contact = new ContactForm;
        $contact->last_name = $request->input('last_name');
        $contact->first_name = $request->input('first_name');
        $contact->tel = $request->input('tel');
        $contact->email = $request->input('email');
        $contact->title = $request->input('title');
        $contact->contact = $request->input('contact');

        $contact->save();

        return redirect('contact/index');
        // dd($last_name);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //

        $contact = ContactForm::find($id);
        return view('contact.show', compact('contact'));
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
        $contact = ContactForm::find($id);

        return view('contact.edit', compact('contact'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $contact = ContactForm::find($id);
        $contact->last_name = $request->input('last_name');
        $contact->first_name = $request->input('first_name');
        $contact->tel = $request->input('tel');
        $contact->email = $request->input('email');
        $contact->title = $request->input('title');
        $contact->contact = $request->input('contact');

        $contact->save();

        return redirect('contact/index');
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
        $contact = ContactForm::find($id);
        $contact->delete();
        return redirect('contact/index');
    }
}
