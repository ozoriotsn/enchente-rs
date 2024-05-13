<?php

namespace App\Http\Controllers;

use App\Models\Person;
use App\Helpers\Helper;
use Illuminate\Http\Request;
use App\Http\Requests\PersonRequest;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Auth;


class PersonController extends Controller
{

    public function __construct()
    {
        Paginator::useBootstrap();

    }

    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $title = 'Busca Desaparecidos Enchente RS';
        $description = 'Busca Desaparecidos';
        $keywords = 'Busca Desaparecidos';



        if (Auth::check()) {
            $data = Person::where('name', 'like', '%' . $keyword . '%')->orderBy('created_at', 'desc')->paginate(15);
            return view('admin.persons.index', compact('data'));
        }

        $data = Person::where('name', 'like', '%' . $keyword . '%')->where('active', 1)->orderBy('created_at', 'desc')->paginate(15);

        return view('persons.index', compact('title', 'description', 'keywords', 'data'));

    }

    public function create()
    {

        $title = 'Busca Desaparecidos Enchente RS';
        $description = 'Busca Desaparecidos';
        $keywords = 'Busca Desaparecidos';

        $cities = Helper::getCities();
        $shelters = Helper::getShelters();
        return view('persons.create', compact('cities', 'shelters'));

    }

    public function store (PersonRequest $request)
    {
        $data = $request->all();

        if ($request->hasFile('photo')) {
            $photo = $request->file('photo');
            $photoHashName = $photo->hashName();
            $photo->move(public_path('image'), $photoHashName);
            $data['photo'] = $photoHashName;
        }

        $register = Person::create($data);

        if (!$register) {
            return redirect()->route('persons.index')->with('error', 'Erro ao cadastrar!');
        }

        return redirect()->route('person.index')->with('success', 'Registro cadastrado com sucesso!. Seu cadastro foi para moderação, assim que for aprovado aparecera no site');
    }


    public function edit($id)
    {
        $title = 'Busca Desaparecidos Enchente RS';
        $description = 'Busca Desaparecidos';
        $keywords = 'Busca Desaparecidos';

        $cities = Helper::getCities();
        $shelters = Helper::getShelters();
        $person = Person::find($id);
        $cities = Helper::getCities();
        return view('admin.persons.edit', compact('person', 'cities', 'shelters', 'id'));
    }


    public function update(PersonRequest $request, $id)
    {
        $data = $request->all();
        $data['active'] = $request->has('active') ? 1 : 0;

        $person = Person::find($id);
        if ($request->hasFile('photo')) {
            $photo = $request->file('photo');
            $photoHashName = $photo->hashName();
            $photo->move(public_path('image'), $photoHashName);
            $data['photo'] = $photoHashName;
        }
        $person->update($data);
        return redirect()->route('admin.person.index')->with('success', 'Registro atualizado com sucesso!');
    }


    public function destroy($id)
    {
        $person = Person::find($id);
        $deletePhoto = public_path('image') . '/' . $person->photo;
        if (file_exists($deletePhoto)) {
            unlink($deletePhoto);
        }
        $person->delete();
        return redirect()->route('admin.person.index')->with('success', 'Registro excluido com sucesso!');
    }



}
