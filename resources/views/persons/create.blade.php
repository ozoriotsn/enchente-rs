@extends('components.layouts.site')

@section('content')
    <div class="container">

        <div class="row d-flex align-items-center justify-content-center">
            <div class="col-lg-8">
                <h1 class="mt-4">Cadastrar Pessoa Resgatada</h1>
                <p class="text-primary">
                    <i class="fa fa-info-circle"></i>
                    Atenção seu cadastro vai para moderação antes de ser publicado, assim que for aprovado aparecera no site.

                 </p>
            </div>
        </div>

        <div class="row d-flex align-items-center justify-content-center">

            <div class="col-lg-8">

                <form class="col" action="{{ route('person.store') }}" method="POST"  enctype="multipart/form-data">
                    @csrf

                    <div class="row">

                        <div class="form-group mt-4 col-lg-6">
                            <label for="name">Nome</label>
                            <input type="text" name="name" id="name"
                                class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}">
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>


                        <div class="form-group mt-4 col-lg-6">
                            <label for="email">Telefone do abrigo whatsapp (opcional)</label>
                            <input type="text" name="phone" id="phone"
                                class="form-control @error('phone') is-invalid @enderror" value="{{ old('phone') }}">
                            @error('phone')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                    </div>





                    <div class="form-group mt-4">

                        <label for="city">Cidade de Origem</label>

                        <input list="brow" class="form-control @error('city') is-invalid @enderror" name="city" value="{{ old('city') }}">

                        @error('city')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                        <datalist id="brow">
                            @foreach ($cities as $city)
                                <option value="{{ $city['name'] }}">{{ $city['name'] }}</option>
                            @endforeach
                        </datalist>

                    </div>

                    <div class="form-group mt-4">

                        <label for="city">Abrigo <a href="https://sos-rs.com/" target="_blank">(Ref. SOS-RS)</a></label>

                        <input list="shelters" class="form-control @error('shelter') is-invalid @enderror" name="shelter" value="{{ old('shelter') }}">

                        @error('shelter')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                        <datalist id="shelters">
                            @foreach ($shelters as $shelter)
                                <option value="{{ $shelter['name'] }} - {{ $shelter['address'] }}">{{ $shelter['name'] }} - {{ $shelter['address'] }}</option>
                            @endforeach
                        </datalist>

                    </div>



                    <div class="form-group mt-4">
                        <label for="photo">Foto (opcional)</label>

                        <div class="dropzone @error('photo') is-invalid @enderror">

                            <i class="bi bi-cloud-arrow-up upload-icon"></i>
                            <input type="file" class="upload-input @error('photo') is-invalid @enderror" id="formFileMultiple" name="photo"
                                accept="image/*">
                            ANEXAR IMAGEM
                            @error('photo')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                        </div>

                    </div>

                    <div class="form-group mt-4  d-flex justify-content-end">
                        <button type="submit" class="btn btn-primary " style="margin-right: 10px;">Cadastrar</button>
                        <a href="{{ route('page.home') }}" class="btn btn-secondary">Voltar</a>

                    </div>

                </form>

            </div>

        </div>

    </div>

@endsection
