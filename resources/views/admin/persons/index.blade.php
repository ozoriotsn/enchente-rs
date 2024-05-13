@extends('components.layouts.admin')

@section('content')


<div>

    <div class="row">
        <div class="col">  <h1 class="mt-4">Pessoas</h1></div>
    </div>

    <form action="{{route('admin.person.index')}}" method="get">
    <div class="row">


        <div class="col">
            <input type="text" class="form-control" placeholder="Pesquisar por nome" value="" name="search">
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
            <th scope="col">Nome</th>
            <th scope="col">Foto</th>
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
            <td><a class="text-secondary" href="{{route('admin.person.edit', $item->id)}}"> # {{$item->id}} </a></td>
            <td>{{$item->name}}</td>
            <td>
                @if ($item->photo)
                <img src="{{ asset('/') }}image/{{ $item->photo }}" width="50" height="50"  alt="">
            @else
                <img src="https://t3.ftcdn.net/jpg/05/16/27/58/360_F_516275801_f3Fsp17x6HQK0xQgDQEELoTuERO4SsWV.jpg" width="50" height="50"  alt="">
            @endif

            </td>
            <td>
                @if($item->phone)
                <a href="https://wa.me/55{{$item->phone}}" target="_blank"> <i class="bi bi-whatsapp"></i> {{$item->phone}}</a>
                @endif
            </td>
            <td>{{$item->city}}</td>
            <td>{{Str::limit($item->shelter, 20)}}</td>
            <td>

                @if ($item->active == 1)
                   <span class="badge text-bg-success"><i class="fa fa-circle"></i> Ativo</span>
                @else
                    <span class="badge text-bg-danger"><i class="fa fa-circle"></i> Inativo</span>
                @endif
            </td>

            <td>
                <a class="btn btn-secondary" href="{{route('admin.person.edit', $item->id)}}"> <i class="fa fa-pencil"></i> Editar</a>
                <a class="btn btn-danger" onclick="return confirm('Você tem certeza?')" href="{{route('admin.person.delete', $item->id)}}"> <i class="fa fa-trash"></i> Excluir</a>
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
