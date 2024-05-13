@extends('components.layouts.site')

@section('content')


<div class="container">

    <div class="row">
        <div class="col">  <h1 class="mt-4">Pessoas</h1></div>
    </div>

    <form action="{{route('page.search')}}" method="get">
    <div class="row">


        <div class="col">
            <input type="text" class="form-control" placeholder="Pesquisar por nome" value="" name="search">
        </div>

        <div class="col">
            <button type="submit" class="btn btn-primary mb-4" ><i class="fa fa-search"></i> Buscar </button>
            <a class="btn btn-outline-secondary mb-4" href="{{route('page.home')}}"><i class="bi bi-arrow-return-left"></i> Voltar</a>
        </div>

    </div>
</form>

@foreach($data as $item)

<div class="row">

    <div class="col">

        <div class="card mb-3" style="">
            <div class="row g-0">
              <div class="col-md-2 col-sm-12">
                @if($item->photo)
                <img src="{{asset('/')}}image/{{$item->photo}}"  style="padding: 5px; width: 100%; height: 200px;"   class="img-fluid2" alt="">

                @else
                <img src="https://t3.ftcdn.net/jpg/05/16/27/58/360_F_516275801_f3Fsp17x6HQK0xQgDQEELoTuERO4SsWV.jpg" style="padding: 5px; width: 100%; height: 200px;"   class="img-fluid2" alt="">

                @endif
              </div>
              <div class="col-md-10 col-sm-12">
                <div class="card-body">
                  <h5 class="card-title">{{$item->name}}</h5>
                  <p class="card-text">


                    <i class="fa fa-city"></i> Cidade: {{$item->city}}
                    <br>
                    <i class="fa fa-home"></i> Abrigo: <a href="#">  ALOJADOS SERTÃO SANTANA</a>
                    <br>
                    <i class="bi bi-whatsapp"></i> Contato: <a href="#"> Entrar em contato</a>
                </p>

                </div>
              </div>
            </div>
          </div>


    </div>




</div>





@endforeach

    <table class="table table-responsive table-striped" style="display: none;">
        <thead>
        <tr>

            <th scope="col">Foto</th>
            <th scope="col">Nome</th>
            <th scope="col">Data de Nascimento</th>
            <th scope="col">Sexo</th>
            <th scope="col">Telefone</th>
            <th scope="col">Cep</th>
            <th scope="col">Cidade</th>
            <th scope="col">Estado</th>

        </tr>
        </thead>
        <tbody>
        @foreach($data as $item)
        <tr>
            <td><img src="{{asset('/')}}image/{{$item->photo}}" width="50" height="50" alt=""></td>
            <td>{{$item->name}}</td>
            <td>{{ date('d-m-Y',strtotime($item->birthdate)) }}</td>
            <td>{{$item->sex}}</td>
            <td>{{$item->phone}}</td>
            <td>{{$item->zip_code}}</td>
            <td>{{$item->city}}</td>
            <td>{{$item->state}}</td>

            <td>
                <a class="btn btn-secondary" href="{{route('admin.customer.edit', $item->id)}}"> <i class="fa fa-pencil"></i> Editar</a>
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
