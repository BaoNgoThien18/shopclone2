<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
Use App\Models\User;
use App\Models\Contact;
class ContactController extends Controller
{
    public function index() {
        $body = [
            'title' => 'Trang chủ',
            'header' => '',
            'footer' => '',
        ];
    
        $user = User::find(session('user'));
        $contacts = Contact::all();
    
        return view('frontend.pages.contact', compact('body', 'user', 'contacts'));
    }
    

    public function showContacts()
    {
        $contacts = Contact::all();
        return view('frontend.pages.contact', compact('contacts'));
    }



}
