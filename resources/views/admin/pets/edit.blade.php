@extends('components.layouts.admin')

@section('content')
    <div>

        <div class="row">
            <div class="col">
                <h1 class="mt-4">Editar Animal</h1>
            </div>
        </div>


        <div class="row">

            <form method="POST" action="{{ route('admin.pet.update', $pet->id) }}" enctype="multipart/form-data">
                @method('PUT')
                @csrf


                @if ($errors->has('message'))
                    <div class="alert alert-danger" role="alert">
                        {{ $errors->first('message') }}
                    </div>
                @endif
                @if ($errors->any())
                    @foreach ($errors->all() as $error)
                        <div>{{ $error }}</div>
                    @endforeach
                @endif


                <input type="hidden" name="donation" value="{{ $pet->donation }}">

                <div class="form-group mt-4">

                    <div class="form-check form-switch">
                        <label class="form-check-label" for="flexSwitchCheckDefault">Ativo</label>
                        <input class="form-check-input" type="checkbox" role="switch" name="active"
                            {{ $pet->active ? 'checked' : '' }} value="{{ old('active') ? old('active') : $pet->active }}">

                    </div>

                </div>

                <div class="form-group mt-4">
                    <label for="description">Características</label>
                    <input type="text" name="description" id="description"
                        class="form-control @error('description') is-invalid @enderror"
                        value="{{ old('description') ? old('description') : $pet->description }}">
                    @error('description')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>


                <div class="form-group mt-4 ">
                    <label for="email">Tipo</label>

                    <select class="form-select @error('type') is-invalid @enderror" aria-label="Default select example"
                        name="type">
                        <option value="" selected> Selecione </option>
                        <option value="dog" {{ $pet->type == 'dog' ? 'selected' : '' }}>Cão</option>
                        <option value="cat" {{ $pet->type == 'cat' ? 'selected' : '' }}>Gato</option>
                        <option value="other" {{ $pet->type == 'other' ? 'selected' : '' }}>Outro</option>
                    </select>


                    @error('type')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group mt-4">
                    <label for="email">Cor predominante</label>

                    <select class="form-select @error('color') is-invalid @enderror" aria-label="Default select example"
                        name="color">
                        <option value="" selected> Selecione </option>
                        <option value="black" {{ $pet->color == 'black' ? 'selected' : '' }}>Preto</option>
                        <option value="white" {{ $pet->color == 'white' ? 'selected' : '' }}>Branco</option>
                        <option value="carmbel" {{ $pet->color == 'carmbel' ? 'selected' : '' }}>Caramelo</option>
                        <option value="gray" {{ $pet->color == 'gray' ? 'selected' : '' }}>Cinza</option>
                        <option value="red" {{ $pet->color == 'red' ? 'selected' : '' }}>Vermelho</option>
                        <option value="brown" {{ $pet->color == 'brown' ? 'selected' : '' }}>Marrom</option>
                        <option value="tricolor" {{ $pet->color == 'other' ? 'selected' : '' }}>Tricolor 3 cores</option>
                        <option value="bicolor" {{ $pet->color == 'beecolor' ? 'selected' : '' }}>Bicolor 2 cores</option>
                        <option value="other" {{ $pet->color == 'other' ? 'selected' : '' }}>Outra</option>
                    </select>


                    @error('color')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>


                <div class="form-group mt-4">
                    <label for="email">Telefone do abrigo</label>
                    <input type="text" name="phone" id="phone"
                        class="form-control @error('phone') is-invalid @enderror"
                        value="{{ old('phone') ? old('phone') : $pet->phone }}">
                    @error('phone')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group mt-4">
                    <label for="photo">Foto</label>
                    <input type="file" name="photo" id="photo" accept=".jpg, .jpeg, .png"
                        class="form-control @error('photo') is-invalid @enderror">
                    @error('photo')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <br>

                    @if ($pet->photo)
                        <img src="{{ asset('/') }}image/{{ $pet->photo }}" width="50" height="50"
                            alt="">
                    @else
                        <img src="https://t3.ftcdn.net/jpg/05/16/27/58/360_F_516275801_f3Fsp17x6HQK0xQgDQEELoTuERO4SsWV.jpg"
                            width="50" height="50" alt="">
                    @endif
                </div>



                <div class="form-group mt-4">

                    <label for="city">Cidade de Origem</label>

                    <select class="form-select @error('city') is-invalid @enderror" aria-label="Default select example" name="city">
                        @foreach ($cities as $city)
                            <option value="{{ $city['name'] }}" {{$pet->city == $city['name'] ? 'selected' : ''}} >{{ $city['name'] }}</option>
                        @endforeach
                    </select>

                    @error('city')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                </div>



                <div class="form-group mt-4">

                    <label for="city">Abrigo <a href="https://sos-rs.com/" target="_blank">(Ref. SOS-RS)</a></label>

                    <input list="shelters" class="form-control @error('shelter') is-invalid @enderror" name="shelter"
                        value="{{ old('shelter') ? old('shelter') : $pet->shelter }}">

                    @error('shelter')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <datalist id="shelters">
                        @foreach ($shelters as $shelter)
                            <option value="{{ $shelter['name'] }} - {{ $shelter['address'] }}">{{ $shelter['name'] }} -
                                {{ $shelter['address'] }}</option>
                        @endforeach
                    </datalist>

                </div>


                <div class="form-group mt-4  d-flex justify-content-end">
                    <button type="submit" class="btn btn-primary " style="margin-right: 10px;">Salvar</button>
                    <a href="{{ route('admin.pet.index') }}" class="btn btn-secondary">Voltar</a>

                </div>

            </form>

        </div>

    </div>
@endsection
