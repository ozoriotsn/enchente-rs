<?php

namespace App\Http\Controllers;

use App\Models\Pet;
use App\Helpers\Helper;
use Illuminate\Http\Request;
use App\Http\Requests\PetRequest;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Cache;

class PetController extends Controller
{

    public function __construct()
    {
        Paginator::useBootstrap();

    }

    public function index(Request $request)
    {

        $title = 'Busca e Doação de Animais (Gato,Cachorro) Desaparecidos Enchente RS';
        $description = 'Busca e Doação de Animais (Gato,Cachorro) Desaparecidos Enchente RS';
        $keywords = 'Busca Animais (Gato,Cachorro) Desaparecidos Enchente RS';
        $keyword = $request->get('search');

        //dd($request->get('donation'));
        if ($request->has('donation') && $request->get('donation') == 1) {
            $donation = 1;
        } elseif($request->get('donation') == 0) {
            $donation = 0;
        } else {
            $donation = null;
        }


        if (Auth::check()) {


            $data = Pet::orderBy('created_at', 'desc');


            if ($request->has('donation') && $request->get('donation') != null) {
                $data->where('donation', $donation);
            }

            if ($request->has('search')) {
                $data->where('description', 'like', '%' . $keyword . '%');
            }

            if ($request->has('type') && $request->get('type') != '') {
                $data->where('type', $request->get('type'));
            }

            if ($request->has('color') && $request->get('color') != '') {
                $data->where('color', $request->get('color'));
            }

            $data = $data->paginate(10);


            return view('admin.pets.index', compact('data'));
        }



        $data = Pet::where('active', 1)->where('donation', $donation)->orderBy('created_at', 'desc');


        if ($request->has('search')) {
            $data->where('description', 'like', '%' . $keyword . '%');
        }

        if ($request->has('type') && $request->get('type') != '') {
            $data->where('type', $request->get('type'));
        }

        if ($request->has('color') && $request->get('color') != '') {
            $data->where('color', $request->get('color'));
        }

        $data = $data->paginate(10);


        return view('pets.index', compact('title', 'description', 'keywords', 'data', 'donation'));

    }

    public function create(Request $request)
    {
        $title = 'Busca Animais (Gato,Cachorro) Desaparecidos Enchente RS';
        $description = 'Busca Animais (Gato,Cachorro) Desaparecidos Enchente RS';
        $keywords = 'Busca Animais (Gato,Cachorro) Desaparecidos Enchente RS';

        $donation = $request->has('donation') ? 1 : 0;
        $cities = Helper::getCities();
        $shelters = Helper::getShelters();

        return view('pets.create', compact('cities', 'shelters', 'donation'));

    }

    public function store(PetRequest $request)
    {
        $data = $request->all();
        //dd($data);

        if ($request->hasFile('photo')) {
            $photo = $request->file('photo');
            $photoHashName = $photo->hashName();
            $photo->move(public_path('image'), $photoHashName);
            $data['photo'] = $photoHashName;
        }

        $register = Pet::create($data);

        if (!$register) {
            return redirect()->route('pet.index')->with('error', 'Erro ao cadastrar!');
        }

        if ($request->has('donation') && $request->get('donation') == 1) {
            return redirect()->route('pet.index', ['donation' => 1])->with('success', 'Registro cadastrado com sucesso! Seu cadastro foi para moderação, assim que for aprovado aparecera no site');

        }

        return redirect()->route('pet.index')->with('success', 'Registro cadastrado com sucesso! Seu cadastro foi para moderação, assim que for aprovado aparecera no site');
    }


    public function edit($id)
    {
        $title = 'Busca Animais (Gato,Cachorro) Desaparecidos Enchente RS';
        $description = 'Busca Animais (Gato,Cachorro) Desaparecidos Enchente RS';
        $keywords = 'Busca Animais (Gato,Cachorro) Desaparecidos Enchente RS';

        $pet = Pet::find($id);
        $cities = Helper::getCities();
        $shelters = Helper::getShelters();
        return view('admin.pets.edit', compact('pet', 'cities', 'shelters'));
    }


    public function update(PetRequest $request, $id)
    {
        $data = $request->all();
        $data['active'] = $request->has('active') ? 1 : 0;
        $data['donation'] = $request->has('donation') && $request->get('donation')==1 ? 1 : 0;


        $pet = Pet::find($id);

        if ($request->hasFile('photo')) {
            $photo = $request->file('photo');
            $photoHashName = $photo->hashName();
            $photo->move(public_path('image'), $photoHashName);
            $data['photo'] = $photoHashName;
        }
        $pet->update($data);
        return redirect()->route('admin.pet.index')->with('success', 'Registro atualizado com sucesso!');
    }


    public function destroy($id)
    {
        $data = Pet::find($id);
        $deletePhoto = public_path('image') . '/' . $data->photo;
        if (file_exists($deletePhoto)) {
            unlink($deletePhoto);
        }
        $data->delete();
        return redirect()->route('admin.pet.index')->with('success', 'Registro excluido com sucesso!');
    }


    public function donation()
    {

        $title = 'Busca Desaparecidos Enchente RS';
        $description = 'Busca Desaparecidos';
        $keywords = 'Busca Desaparecidos';
        $data = Pet::paginate(15);
        return view('pets.donation', compact('title', 'description', 'keywords', 'data'));

    }


}
