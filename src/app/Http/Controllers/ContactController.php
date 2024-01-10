<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index(){
        return view('index');
    }
    public function thanks(){
        return view('thanks');
    }

    public function confirm(ContactRequest $request){
        $contact = $request->only(['first_name','last_name', 'gender','email','tel1','tel2','tel3','address','building','content','detail']);
        return view('confirm', compact('contact'));
    }

    public function store(ContactRequest $request){
        $contact = $request->only(['first_name','last_name', 'gender','email','tel','address','building','detail']);
        Contact::create($contact);
        $category = $request->only(['content']);
        Category::create($category);

        $contact->category()->associate($category);
        $contact->save();

        return view('thanks');
    }
}
