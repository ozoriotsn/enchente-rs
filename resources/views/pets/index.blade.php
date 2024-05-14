@extends('components.layouts.site')

@section('content')


    <div class="container">

        <div class="row">
            <div class="col">
                <h1 class="mt-4">Animais {{ $donation ? 'Para Doação' : 'Salvos' }}</h1>
                <p>Os animais salvos no sistema se encontram aqui.</p>
            </div>
        </div>



        @if (session()->has('success'))
            <br>
            <div class="alert alert-success">
               <i class="fa fa-warning"></i> {{ session()->get('success') }}
            </div>
        @endif

        @if (session()->has('error'))
            <br>
            <div class="alert alert-danger">
                <i class="fa fa-warning"></i>  {{ session()->get('error') }}
            </div>
        @endif





        <form action="{{ route('pet.index') }}" method="get">
            <div class="row">

                <div class="col-lg-3 col-sm-12 mb-3">
                    <input type="text" class="form-control" placeholder="Pesquisar por características" value=""
                        name="search">
                    <input type="hidden" name="donation" value="{{ $donation ? 1 : 0 }}">
                </div>


                <div class="col-lg-3 col-sm-12 mb-3">

                    <select class="form-select" aria-label="Default select example" name="type">
                        <option value="">Tipo</option>
                        <option value="dog">Cães</option>
                        <option value="cat">Gatos</option>
                        <option value="other">Outros</option>
                    </select>

                </div>

                <div class="col-lg-3 col-sm-12 mb-3">

                    <select class="form-select" aria-label="Default select example" name="color">
                        <option value=""> Cor </option>
                        <option value="black" {{ old('color') == 'black' ? 'selected' : '' }}>Preto</option>
                        <option value="white" {{ old('color') == 'white' ? 'selected' : '' }}>Branco</option>
                        <option value="carmbel" {{ old('color') == 'carmbel' ? 'selected' : '' }}>Caramelo</option>
                        <option value="gray" {{ old('color') == 'gray' ? 'selected' : '' }}>Cinza</option>
                        <option value="red" {{ old('color') == 'red' ? 'selected' : '' }}>Vermelho</option>
                        <option value="brown" {{ old('color') == 'brown' ? 'selected' : '' }}>Marrom</option>
                        <option value="tricolor" {{ old('color') == 'other' ? 'selected' : '' }}>Tricolor 3 cores</option>
                        <option value="bicolor" {{ old('color') == 'beecolor' ? 'selected' : '' }}>Bicolor 2 cores</option>
                        <option value="other" {{ old('color') == 'other' ? 'selected' : '' }}>Outra</option>
                    </select>

                </div>


                <div class="col-lg-3 col-sm-12 mb-3">
                    <button type="submit" class="btn btn-primary mb-4"><i class="fa fa-search"></i> Buscar </button>
                    <a class="btn btn-outline-secondary mb-4" href="{{ route('page.home') }}"><i
                            class="bi bi-arrow-return-left"></i> Voltar</a>
                </div>

            </div>
        </form>


        @if (count($data) > 0)
            @foreach ($data as $item)
                <div class="row">

                    <div class="col">

                        <div class="card mb-3" style="">
                            <div class="row g-0">
                                <div class="col-md-2 col-sm-12 text-center">
                                    @if ($item->photo)
                                        <img src="https://enchente-rs.nyc3.digitaloceanspaces.com/images/pets/{{ $item->photo }}" class="img-fluid img-list"
                                            alt="">
                                    @else
                                        <img src="https://t3.ftcdn.net/jpg/05/16/27/58/360_F_516275801_f3Fsp17x6HQK0xQgDQEELoTuERO4SsWV.jpg"
                                            class="img-fluidv img-list" alt="">
                                    @endif
                                </div>
                                <div class="col-md-10 col-sm-12">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ Str::limit($item->description, 20) }}</h5>
                                        <p class="card-text">


                                            <i class="fa fa-paw"></i> Tipo de animal:
                                            @if ($item->type == 'dog')
                                                Cão
                                            @elseif($item->type == 'cat')
                                                Gato
                                            @else
                                                Outro
                                            @endif
                                            <br>
                                            <i class="fa fa-fill-drip"></i> Cor:
                                            @switch($item->color)
                                                @case('black')
                                                    Preto
                                                @break

                                                @case('white')
                                                    Branco
                                                @break

                                                @case('carmbel')
                                                    Caramelo
                                                @break

                                                @case('gray')
                                                    Cinza
                                                @break

                                                @case('red')
                                                    Vermelho
                                                @break

                                                @case('brown')
                                                    Marrom
                                                @break

                                                @case('tricolor')
                                                    Tricolor 3 cores
                                                @break

                                                @case('bicolor')
                                                    Bicolor 2 cores
                                                @break

                                                @case('other')
                                                    Outra
                                                @break
                                            @endswitch
                                            <br>
                                            <i class="fa fa-city"></i> Cidade: {{ $item->city }}
                                            <br>
                                            <i class="fa fa-home"></i> Abrigo: <a href="https://www.google.com/search?q={{ $item->shelter }}" target="_blank"> {{$item->shelter}}</a>

                                            @if (isset($item->phone))
                                                <br>
                                                <i class="bi bi-whatsapp"></i> Contato do abrigo: <a href="https://wa.me/55{{$item->phone}}" target="_blank">
                                                    {{ $item->phone }}</a>
                                            @endif
                                        </p>

                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>

                </div>
            @endforeach

            <p>
                {{ $data->appends(request()->except('page'))->links() }}
            </p>
        @else
            <div class="alert alert-info">
                <i class="fa fa-exclamation-triangle"></i> Nenhum resultado encontrado
            </div>

    </div>
    @endif


    </div>


@endsection
