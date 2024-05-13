<?php

namespace App\Http\Controllers;


use App\Models\Person;
use Illuminate\Http\Request;

class PageController extends Controller
{


    public function index()
    {
        $title = 'Busca Desaparecidos Enchente RS';
        $description = 'Busca Desaparecidos Enchente RS';
        $keywords = 'Busca Desaparecidos, Enchente, RS';
        return view('pages.home', compact('title', 'description', 'keywords'));
    }


    public function about()
    {
        $title = 'Busca Desaparecidos';
        $description = 'Busca Desaparecidos';
        $keywords = 'Busca Desaparecidos';
        return view('pages.about', compact('title', 'description', 'keywords'));
    }


    public function contact()
    {
        $title = 'Busca Desaparecidos - contato';
        $description = 'Busca Desaparecidos';
        $keywords = 'Busca Desaparecidos';
        return view('pages.contact', compact('title', 'description', 'keywords'));
    }

    public function terms()
    {
        $title = 'Busca Desaparecidos - contato';
        $description = 'Busca Desaparecidos';
        $keywords = 'Busca Desaparecidos';
        return view('pages.terms', compact('title', 'description', 'keywords'));
    }


    public function shelters(Request $request)
    {
        $keyword = $request->get('search');
        $title = 'Busca Desaparecidos Enchente RS - Abrigos';
        $description = 'Busca Desaparecidos Enchente RS - Abrigos';
        $keywords = 'Busca Desaparecidos Enchente RS, Abrigos';

        return view('pages.shelters', compact('title', 'description', 'keywords'));

    }


    public function voluntaries(Request $request)
    {
        $keyword = $request->get('search');
        $title = 'Busca Desaparecidos Enchente RS - Voluntários';
        $description = 'Busca Desaparecidos Enchente RS - Voluntários';
        $keywords = 'Busca Desaparecidos Enchente RS, Voluntários';
        $data = Person::where('name', 'like', '%' . $keyword . '%')->paginate(15);
        return view('pages.voluntaries', compact('title', 'description', 'keywords', 'data'));

    }


}

