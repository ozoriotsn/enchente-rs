@extends('components.layouts.site')

@section('content')
    <div class="container">

        <div class="row d-flex align-items-center justify-content-center">
            <div class="col-lg-8">

                @if($donation)
                <h1 class="mt-4">Cadastrar Animais Para Doação</h1>
                @else
                <h1 class="mt-4">Cadastrar Animais Resgatados</h1>
                @endif

                <p class="text-primary">
                    <i class="fa fa-info-circle"></i>
                    Atenção seu cadastro vai para moderação antes de ser publicado, assim que for aprovado aparecera no site.

                 </p>
            </div>
        </div>

        <div class="row d-flex align-items-center justify-content-center">

            <div class="col-lg-8">

                <form class="col" action="{{ route('pet.store') }}" method="POST"  enctype="multipart/form-data">
                    @csrf

                    <input type="hidden" name="donation" value="{{ $donation }}">

                    <div class="row">


                    <div class="form-group mt-4 col-lg-4">
                        <label for="description">Características</label>
                        <input type="text" name="description" id="name"
                            class="form-control @error('description') is-invalid @enderror" value="{{ old('description') }}" placeholder="(pit bull, gato) preto com branco...">
                        @error('description')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>


                    <div class="form-group mt-4 col-lg-4">
                        <label for="email">Tipo</label>

                        <select class="form-select @error('type') is-invalid @enderror" aria-label="Default select example" name="type">
                            <option value="" selected> Selecione </option>
                            <option value="dog" {{ old('type') == 'dog' ? 'selected' : ''}}>Cão</option>
                            <option value="cat" {{ old('type') == 'cat' ? 'selected' : ''}}>Gato</option>
                            <option value="other" {{ old('type') == 'other' ? 'selected' : ''}}>Outro</option>
                        </select>


                        @error('type')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group mt-4 col-lg-4">
                        <label for="email">Cor predominante</label>

                        <select class="form-select @error('color') is-invalid @enderror" aria-label="Default select example" name="color">
                            <option value="" selected> Selecione </option>
                            <option value="black" {{ old('color') == 'black' ? 'selected' : ''}}>Preto</option>
                            <option value="white" {{ old('color') == 'white' ? 'selected' : ''}}>Branco</option>
                            <option value="carmbel" {{ old('color') == 'carmbel' ? 'selected' : ''}}>Caramelo</option>
                            <option value="gray" {{ old('color') == 'gray' ? 'selected' : ''}}>Cinza</option>
                            <option value="red" {{ old('color') == 'red' ? 'selected' : ''}}>Vermelho</option>
                            <option value="brown" {{ old('color') == 'brown' ? 'selected' : ''}}>Marrom</option>
                            <option value="tricolor" {{ old('color') == 'other' ? 'selected' : ''}}>Tricolor 3 cores</option>
                            <option value="bicolor" {{ old('color') == 'beecolor' ? 'selected' : ''}}>Bicolor 2 cores</option>
                            <option value="other" {{ old('color') == 'other' ? 'selected' : ''}}>Outra</option>
                        </select>


                        @error('color')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>


                    </div>


                    <div class="form-group mt-4">
                        <label for="photo">Foto</label>
                        <small class="text-primary"><i class="bi bi-question-circle"></i> è obrigatório o cadastro da imagem no animal para reconhecimento</small>

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


                    <div class="form-group mt-4 ">
                        <label for="email">Telefone do abrigo whatsapp (opcional)</label>
                        <input type="text" name="phone" id="phone"
                            class="form-control @error('phone') is-invalid @enderror" value="{{ old('phone') }}">
                        @error('phone')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>



                    <div class="form-group mt-4">

                        <label for="city">Cidade de Origem</label>

                        <input type="text" autocomplete list="city" class="form-control @error('city') is-invalid @enderror" name="city" value="{{ old('city') }}">

                        @error('city')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                        <datalist id="city">
                            @foreach ($cities as $city)
                                <option value="{{ $city['name'] }}">{{ $city['name'] }}</option>
                            @endforeach
                        </datalist>

                    </div>

                    <div class="form-group mt-4">

                        <label for="city">Abrigo <a href="https://sos-rs.com/" target="_blank">(Ref. SOS-RS)</a></label>

                        <input type="text" autocomplete list="shelters" class="form-control @error('shelter') is-invalid @enderror" name="shelter" value="{{ old('shelter') }}">

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

                    <div class="form-group mt-4  d-flex justify-content-end">
                        <button type="submit" class="btn btn-primary " style="margin-right: 10px;">Cadastrar</button>
                        <a href="{{ route('page.home') }}" class="btn btn-secondary">Voltar</a>

                    </div>

                </form>

            </div>

        </div>

    </div>

@endsection
