<?php

namespace App\Controllers;

use App\Models\Contact;

class HomeController extends Controller
{
    public function index()
    {
        $contactModel = new  Contact();
        //return $contactModel->all();
        //return $contactModel->find(1);
        //return $contactModel->where('name','Samuel Guerrero')->first();
        //return $contactModel->where('id','>',1)->first();
        //return $contactModel->where('id','>',1)->get();
        //return $contactModel->where('name','Samuel Guerrero')->get();

        return $this->view('home', [
            'title' => 'Home',
            'description' => "Esta es la página home"
        ]);
    }
}
