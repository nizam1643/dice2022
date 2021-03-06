<?php

namespace App\Http\Controllers;

use App\Models\MyPayment;
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
        $jury = Http::post('https://eform.dice.dynanity.com/api/juryform',
            [
            'key' => '2b4ef001153523c0aa6052a69c5a7342',
            'title' => $request->title,
            'name' => $request->namereal,
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

    public function vproject(Request $request)
    {
        $post = Http::post('https://eform.dice.dynanity.com/api/listall',
            [
            'key' => '2b4ef001153523c0aa6052a69c5a7342',
            'search' => $request->search,
            ]
        );
        $check = Http::post('https://eform.dice.dynanity.com/api/votecheck',
            [
            'key' => '2b4ef001153523c0aa6052a69c5a7342',
            'ip_address' => $request->ip(),
            ]
        );
        $data = json_decode($post);
        $check = json_decode($check);
        return view('pages.vproject', compact('data', 'check'));
    }

    public function voteposter(Request $request)
    {
        dd($request->all());
        $post = Http::post('https://eform.dice.dynanity.com/api/voteposter',
            [
            'key' => '2b4ef001153523c0aa6052a69c5a7342',
            'ip_address' => $request->ip(),
            'poster_id' => $request->poster_id,
            'count' => '1',
            ]
        );
        return redirect()->back() ->with('success', 'Created successfully!');
    }

    public function vmarketplace()
    {
        $companys = Http::post('https://eform.dice.dynanity.com/api/companylist',
            [
            'key' => '2b4ef001153523c0aa6052a69c5a7342',
            ]
        );
        $bests = Http::post('https://eform.dice.dynanity.com/api/bestlist',
            [
            'key' => '2b4ef001153523c0aa6052a69c5a7342',
            ]
        );
        $data1 = json_decode($companys);
        $data2 = json_decode($bests);
        if (auth()->user() != NULL) {
            $shoplists = MyPayment::where('user_id', auth()->user()->id)
            ->get();
        }else
        {
            $shoplists = NULL;
        }
        return view('pages.vmarketplace', compact('data1', 'data2', 'shoplists'));
    }

    public function vcompany($id)
    {
        $companys = Http::post('https://eform.dice.dynanity.com/api/detailcompany',
            [
            'key' => '2b4ef001153523c0aa6052a69c5a7342',
            'slug' => $id,
            ]
        );
        $data1 = json_decode($companys);
        return view('pages.companyProject', compact('data1'));
    }

    public function vshow($id, $item)
    {
        $companys = Http::post('https://eform.dice.dynanity.com/api/detailcompany',
            [
            'key' => '2b4ef001153523c0aa6052a69c5a7342',
            'slug' => $id,
            ]
        );
        $products = Http::post('https://eform.dice.dynanity.com/api/product',
            [
            'key' => '2b4ef001153523c0aa6052a69c5a7342',
            'product' => $item,
            ]
        );
        $data1 = json_decode($companys);
        $data2 = json_decode($products);
        return view('pages.companyPShow', compact('data1', 'data2'));
    }

    public function company()
    {
        return view('pages.company');
    }

    public function companyProject()
    {
        return view('pages.companyProject');
    }

    public function about()
    {
        return view('pages.about');
    }


    public function company1()
    {
        return view('pages.company');
    }

    public function companyProject1()
    {
        return view('pages.companyProject');
    }

    public function vproject1(Request $request)
    {
        $post = Http::post('https://eform.dice.dynanity.com/api/listproject',
            [
            'key' => '2b4ef001153523c0aa6052a69c5a7342',
            'search' => $request->search,
            ]
        );
        $data = json_decode($post);
        return view('pages.vproject', compact('data'));
    }

    public function voteposter1(Request $request)
    {
        $post = Http::post('https://eform.dice.dynanity.com/api/voteposter',
            [
            'key' => '2b4ef001153523c0aa6052a69c5a7342',
            'ip_address' => $request->ip(),
            'project_id' => $request->projectDD,
            'count' => '1',
            ]
        );

        return redirect()->back() ->with('success', 'Created successfully!');
    }

    public function vmarketplace1()
    {
        //$method1 = request()->ip();
        $post = Http::post('https://eform.dice.dynanity.com/api/companylist',
            [
            'key' => '2b4ef001153523c0aa6052a69c5a7342',
            ]
        );
        dd($post);

        return view('pages.vmarketplace');
    }
}
