@extends('components.layouts.site')

@section('content')
    <div class="container">

        <div class="row">
            <div class="col">
                <h1 class="mt-4">Abrigos</h1>
                <p>Abrigos salvos no sistema se encontram aqui.</p>
                <a class="btn btn-outline-secondary mb-4" href="{{ route('page.home') }}"><i
                        class="bi bi-arrow-return-left"></i> Voltar</a>

            </div>

        </div>

        <div class="row">

            <div class="col">
                <iframe src="https://sos-rs.com/" width="100%" height="600" style="border:0;"></iframe>
            </div>

        </div>


    </div>
@endsection
