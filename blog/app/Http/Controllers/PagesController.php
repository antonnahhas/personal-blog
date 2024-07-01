<?php

namespace App\Http\Controllers;

class PagesController extends Controller {
    public function getIndex() {
        return view('pages.welcome');
    }

    public function getAbout() {
        $data = ["email"=>"anton@nahhas.com", "fullname"=>"Anton Nahhas"];
        return view('pages.about')->withData($data);
    }

    public function getContact() {
        return view('pages.contact');
    }
}