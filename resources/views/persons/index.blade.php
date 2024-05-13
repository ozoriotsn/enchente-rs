@extends('components.layouts.site')

@section('content')
    <div class="container">

        <div class="row">
            <div class="col">
                <h1 class="mt-4">Pessoas Salvas</h1>
                <p>As pessoas salvas no sistema se encontram aqui.</p>
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
                <i class="fa fa-warning"></i> {{ session()->get('error') }}
            </div>
        @endif



        <form action="{{ route('person.index') }}" method="get">
            <div class="row">


                <div class="col-lg-4 col-sm-12 mb-3">
                    <input type="text" class="form-control" placeholder="Pesquisar por nome" value=""
                        name="search">
                </div>

                <div class="col-lg-4 col-sm-12 mb-3">
                    <button type="submit" class="btn btn-primary mb-4"><i class="fa fa-search"></i> Buscar </button>
                    <a class="btn btn-outline-secondary mb-4" href="{{ route('page.home') }}"><i
                            class="bi bi-arrow-return-left"></i> Voltar</a>
                </div>

            </div>
        </form>


        @if(count($data) > 0)

        @foreach ($data as $item)
            <div class="row">

                <div class="col">

                    <div class="card mb-3" style="">
                        <div class="row g-0">
                            <div class="col-md-2 col-sm-12">
                                @if ($item->photo)
                                    <img src="{{ asset('/') }}image/{{ $item->photo }}" class="img-fluid img-list" alt="">
                                @else
                                    <img src="https://t3.ftcdn.net/jpg/05/16/27/58/360_F_516275801_f3Fsp17x6HQK0xQgDQEELoTuERO4SsWV.jpg" class="img-fluid img-list" alt="">
                                @endif
                            </div>
                            <div class="col-md-10 col-sm-12">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $item->name }}</h5>
                                    <p class="card-text">


                                        <i class="fa fa-city"></i> Cidade de Origem: {{ $item->city }}
                                        <br>
                                        <i class="fa fa-home"></i> Abrigo: <a href="https://www.google.com/search?q={{ $item->shelter }}" target="_blank"> {{ $item->shelter }}</a>
                                        <br>
                                        @if($item->phone)
                                        <i class="bi bi-whatsapp"></i> Contato do abrigo: <a href="https://wa.me/55{{ $item->phone }}" target="_blank"> {{ $item->phone }}</a>
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
            {{ $data->links() }}
        </p>

        @else
        <div class="alert alert-info">
            <i class="fa fa-exclamation-triangle"></i> Nenhum resultado encontrado
         </div>

        @endif

    </div>
@endsection
