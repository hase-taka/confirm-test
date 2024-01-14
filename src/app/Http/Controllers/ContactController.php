<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Models\Contact;
use App\Models\Category;

class ContactController extends Controller
{
    public function index(){
        $categories = category::all();
        return view('index',compact('categories'));
    }

    public function confirm(ContactRequest $request){
        $contact = $request->only(['first_name','last_name', 'gender','email','tel1','tel2','tel3','address','building','category_id','detail']);
        return view('confirm', compact('contact'));
    }

    public function store(ContactRequest $request){
        $contact = $request->only(['category_id','first_name','last_name', 'gender','email','tel','address','building','detail']);
        Contact::create($contact);
        return view('thanks');
    }

    //作成中
    public function show(ContactRequest $request)
    {
        $contacts = Contact::with('category')->get;
        $categories = Category::all();
        return view('admin',compact('category'));
    }

    //未完成
    public function register(ContactRequest $request){
        return view('register');
    }
    public function login(ContactRequest $request){
        return view('login');
    }


}
