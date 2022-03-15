<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PageController extends Controller
{
    public function index()
    {
        return view('pages.index');
    }

    public function preregister()
    {
        return view('pages.preregister');
    }

    public function juryregister()
    {
        return view('pages.juryregister');
    }

    public function juryform(Request $request)
    {
        //dd($request->all());
        $jury = Http::post('http://dyapp-eform1.test/api/juryform',
            [
            'key' => '2b4ef001153523c0aa6052a69c5a7342',
            'title' => $request->title,
            'name' => $request->name,
            'email' => $request->email,
            'contact_person' => $request->contact_person,
            'category' => $request->category,
            'declaration' => $request->declaration,
            ]
        );
        return redirect()->back() ->with('success', 'Created successfully!');
    }

    public function successregister(Request $request)
    {
        $post = Http::post('https://eform.dice.dynanity.com/api/listproject',
            [
            'key' => '2b4ef001153523c0aa6052a69c5a7342',
            'search' => $request->search,
            ]
    );
        $data = json_decode($post);
        return view('pages.successregister', compact('data'));
    }

    public function submit()
    {
        return view('pages.submit');
    }

    public function activity()
    {
        return view('pages.activity');
    }

    public function awardlist()
    {
        return view('pages.awardlist');
    }

    public function awardrule()
    {
        return view('pages.awardrule');
    }

    public function awardwinner()
    {
        return view('pages.awardwinner');
    }

    public function vproject()
    {
        return view('pages.vproject');
    }

    public function vmarketplace()
    {
        return view('pages.vmarketplace');
    }

    public function about()
    {
        return view('pages.about');
    }
}
