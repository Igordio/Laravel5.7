<?php

namespace App\Http\Controllers;

use App\ShortLink;
use Illuminate\Http\Request;

class LinkController extends Controller
{

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('link.index');
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $ident = substr(sha1(time() - rand(10000, 984723)), 0, 5);
        $url = $request->get('url');

        $link = new ShortLink();
        $link->create([
            'url' => $url,
            'ident' => $ident
        ]);

        return view('link.index', [
            'url' => $url,
            'ident' => $_SERVER['HTTP_HOST'] . '/' . $ident
        ]);
    }
}
