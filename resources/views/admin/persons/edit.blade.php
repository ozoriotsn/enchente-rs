@extends('components.layouts.admin')

@section('content')
    <div>

        <div class="row">
            <div class="col">
                <h1 class="mt-4">Editar Pessoa</h1>
            </div>
        </div>


        <div class="row">

            <form method="POST" action="{{ route('admin.person.update', $person->id) }}" enctype="multipart/form-data">
                @method('PUT')
                @csrf


                <div class="form-group mt-4">

                    <div class="form-check form-switch">
                        <label class="form-check-label" for="flexSwitchCheckDefault">Ativo</label>
                        <input class="form-check-input" type="checkbox" role="switch" name="active" {{ $person->active ? 'checked' : '' }} value="{{ old('active') ? old('active') : $person->active }}">

                    </div>

                </div>

                <div class="form-group mt-4">
                    <label for="name">Nome</label>
                    <input type="text" name="name" id="name"
                        class="form-control @error('name') is-invalid @enderror"
                        value="{{ old('name') ? old('name') : $person->name }}">
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>


                <div class="form-group mt-4">
                    <label for="email">Telefone do abrigo</label>
                    <input type="text" name="phone" id="phone"
                        class="form-control @error('phone') is-invalid @enderror"
                        value="{{ old('phone') ? old('phone') : $person->phone }}">
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

                    @if ($person->photo)
                        <img src="{{ asset('/') }}image/{{ $person->photo }}" width="50" height="50"
                            alt="">
                    @else
                        <img src="https://t3.ftcdn.net/jpg/05/16/27/58/360_F_516275801_f3Fsp17x6HQK0xQgDQEELoTuERO4SsWV.jpg"
                            width="50" height="50" alt="">
                    @endif
                </div>



                <div class="form-group mt-4">

                    <label for="city">Cidade de Origem</label>

                    <input list="brow" class="form-control @error('city') is-invalid @enderror" name="city"
                        value="{{ old('city') ? old('city') : $person->city }}">

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

                    <input list="shelters" class="form-control @error('shelter') is-invalid @enderror" name="shelter"
                        value="{{ old('shelter') ? old('shelter') : $person->shelter }}">

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
                    <a href="{{ route('admin.person.index') }}" class="btn btn-secondary">Voltar</a>

                </div>

            </form>

        </div>

    </div>
@endsection
