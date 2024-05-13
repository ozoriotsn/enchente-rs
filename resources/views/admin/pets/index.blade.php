@extends('components.layouts.admin')

@section('content')


<div>

    <div class="row">
        <div class="col">  <h1 class="mt-4">Animais</h1></div>
    </div>

    <form action="{{route('admin.pet.index')}}" method="get">
    <div class="row">


        <div class="col">
            <input type="text" class="form-control" placeholder="Pesquisar por nome" value="" name="search">
        </div>



        <div class="col">

            <select class="form-select" aria-label="Default select example" name="donation">
                <option value="">Doação</option>
                <option value="1">Sim</option>
                <option value="0">Não</option>
            </select>

        </div>


        <div class="col">

            <select class="form-select" aria-label="Default select example" name="type">
                <option value="">Tipo</option>
                <option value="dog">Cães</option>
                <option value="cat">Gatos</option>
                <option value="other">Outros</option>
            </select>

        </div>

        <div class="col">

            <select class="form-select" aria-label="Default select example" name="color">
                <option value=""> Cor </option>
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

        </div>



        <div class="col">
            <button type="submit" class="btn btn-primary mb-4" ><i class="fa fa-search"></i> Buscar </button>

        </div>

    </div>
</form>
    <table class="table table-responsive table-striped">
        <thead>
        <tr>

            <th scope="col">ID</th>
            <th scope="col">Foto</th>
            <th scope="col">Características</th>
            <th scope="col">Tipo</th>
            <th scope="col">Cor</th>
            <th scope="col">Doação</th>
            <th scope="col">Telefone</th>
            <th scope="col">Cidade</th>
            <th scope="col">Abrigo</th>
            <th scope="col">Status</th>
            <th scope="col">Ações</th>

        </tr>
        </thead>
        <tbody>
        @foreach($data as $item)
        <tr>
            <td><a class="text-secondary" href="{{route('admin.pet.edit', $item->id)}}"> # {{$item->id}} </a></td>
            <td>
                @if ($item->photo)
                <img src="{{ asset('/') }}image/{{ $item->photo }}" width="50" height="50"  alt="">
            @else
                <img src="https://t3.ftcdn.net/jpg/05/16/27/58/360_F_516275801_f3Fsp17x6HQK0xQgDQEELoTuERO4SsWV.jpg" width="50" height="50"  alt="">
            @endif

            </td>
            <td>
                {{Str::limit($item->description, 20)}}
            </td>
            <td>

                @if ($item->type == 'dog')
                    <span class="badge text-bg-primary">Cachorro</span>
                @elseif ($item->type == 'cat')
                    <span class="badge text-bg-secondary">Gato</span>
                @else
                    <span class="badge text-bg-secondary">Outro</span>
                @endif

            </td>
            <td>
                @switch($item->color)
                    @case('gray')
                    <span class="badge text-bg-secondary">Cinza</span>
                    @break
                    @case('black')
                    <span class="badge text-bg-secondary">Preto</span>
                    @break
                    @case('white')
                    <span class="badge text-bg-secondary">Branco</span>
                    @break
                    @case('yellow')
                    <span class="badge text-bg-secondary">Amarelo</span>
                    @break
                    @case('brown')
                    <span class="badge text-bg-secondary">Marrom</span>
                    @break
                    @case('red')
                    <span class="badge text-bg-secondary">Vermelho</span>
                    @break
                    @case('carmbel')
                    <span class="badge text-bg-secondary">Caramelo</span>
                    @break
                    @default
                @endswitch
            </td>

            <td>

                @if ($item->donation == 1)
                    <span class="badge text-bg-success">Sim</span>
                @else
                    <span class="badge text-bg-danger">Não</span>
                @endif
            </td>
            <td>
                @if($item->phone)
                <a href="https://wa.me/55{{$item->phone}}" target="_blank"> <i class="bi bi-whatsapp"></i> {{$item->phone}}</a>
                @endif
            </td>
            <td>{{$item->city}}</td>
            <td>{{Str::limit($item->shelter, 15)}}</td>
            <td>

                @if ($item->active == 1)
                   <span class="badge text-bg-success"><i class="fa fa-circle"></i> Ativo</span>
                @else
                    <span class="badge text-bg-danger"><i class="fa fa-circle"></i> Inativo</span>
                @endif
            </td>

            <td>
                <a class="btn btn-secondary" href="{{route('admin.pet.edit', $item->id)}}"> <i class="fa fa-pencil"></i> Editar</a>
                <a class="btn btn-danger" onclick="return confirm('Você tem certeza?')" href="{{route('admin.pet.delete', $item->id)}}"> <i class="fa fa-trash"></i> Excluir</a>
            </td>

        </tr>
        @endforeach
        </tbody>
    </table>

    <p>
        {{ $data->links() }}
    </p>

</div>


@endsection
