<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use App\Models\Tag;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;
use Session;

class PagesController extends Controller {
    public function getIndex() {
        $posts = Post::orderBy('created_at', 'desc')->limit(4)->get();
        $postsCount = Post::all()->count();
        $tagsCount = Tag::all()->count();
        $categoriesCount = Category::all()->count();
        $authorsCount = User::all()->count();
        return view('pages.welcome')->withPosts($posts)->withTagsCount($tagsCount)->withCategoriesCount($categoriesCount)->withAuthorsCount($authorsCount)->withPostsCount($postsCount);
    }

    public function getAbout() {
        return view('pages.about');
    }

    public function getContact() {
        return view('pages.contact');
    }

    public function postContact(Request $request) {
        $request->validate([
            'email' => 'required|email',
            'message' => 'min:10',
            'subject' => 'min:3'
        ]);
        $data = array(
            'email' => $request->email,
            'subject' => $request->subject,
            'bodyMessage' => $request->message
        );
        Mail::to('anton-nahhas@hotmail.com')->queue(new ContactMail($data));

        Session::flash('success', 'Your Message was Sent Successfully!');

        return redirect()->back();
    }
}