<?php

namespace App\Http\Controllers;

use App\Models\Produtos;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
        $produtos = Produtos::get()->all();
        // dd($produtos);
        return view('base.home' , [
            'produtos' => $produtos
        ]);
    }
    public function carrinho(Request $request)
    {
        return view('base.carrionho' , [
            'count' => $request->count,
            'prod' => $request->prod
        ]);
    }
}
