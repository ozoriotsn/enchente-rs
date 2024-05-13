@extends('components.layouts.site')

@section('content')


<div class="container">




      <div class="container px-4 py-5" id="featured-3">

        <h2 class="pb-2 border-bottom">Cadastro</h2>
        <a class="btn btn-outline-secondary mb-4" href="{{route('page.home')}}"><i class="bi bi-arrow-return-left"></i> Voltar</a>


        <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">


          <div class="feature col">

            <div class="card">

              <div class="card-body">

                <div class="feature-icon d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-2 mb-3">
                  <i class="bi bi-people"  width="1em" height="1em"></i>
                </div>
                <h3 class="fs-2 text-body-emphasis">Cadastrar Pessoa Resgatada</h3>
                <p class="feature-text">Ajude a cadastrar e atualizar a lista de resgatados</p>
                <a href="{{ route('person.create')}}" class="icon-link">
                    <i class="bi bi-plus" ></i> Cadastrar
                </a>
              </div>

            </div>

          </div>


          <div class="feature col">

            <div class="card">

              <div class="card-body">

                <div class="feature-icon d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-2 mb-3">
                  <svg class="fa-solid fa-dog" width="1em" height="1em"><use xlink:href="#people-circle"></use></svg>
                </div>
                <h3 class="fs-2 text-body-emphasis">Cadastrar Animal Resgatado</h3>
                <p class="feature-text">Ajude a cadastras e atualizar a lista de resgatados</p>
                <a href="{{ route('pet.create')}}" class="icon-link">
                    <i class="bi bi-plus" ></i> Cadastrar
                </a>

              </div>

            </div>

          </div>


          <div class="feature col">

            <div class="card">

              <div class="card-body">

                <div class="feature-icon d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-2 mb-3">
                  <svg class="fa-solid fa-dog" width="1em" height="1em"><use xlink:href="#people-circle"></use></svg>
                </div>
                <h3 class="fs-2 text-body-emphasis">Cadastrar Animal Para Doação</h3>
                <p class="feature-text">Ajude a cadastras e atualizar a lista de animais para doação</p>
                <a href="{{ route('pet.create')}}?donation=1" class="icon-link">
                    <i class="bi bi-plus" ></i> Cadastrar
                </a>

              </div>

            </div>

          </div>



          <div class="feature col">

            <div class="card">

              <div class="card-body">

                <div class="feature-icon d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-2 mb-3">
                  <svg class="fa-solid fa-hospital" width="1em" height="1em"><use xlink:href="#people-circle"></use></svg>
                </div>
                <h3 class="fs-2 text-body-emphasis">Cadastrar Novo  Abrigo de Ajuda</h3>
                <p class="feature-text">Ajude a cadastras e atualizar os abrigos</p>
                <a href="https://forms.gle/2S7L2gR529Dc8P3T9" class="icon-link" target="_blank">
                    <i class="bi bi-plus" ></i> Cadastrar
                </a>

              </div>

            </div>

          </div>


        </div>

      </div>


    <div class="text-center">

        <!--
        <img src="https://www.gnu.com.br/uploads/noticias/gnu-faz-campanha-para-ajudar-vitimas-de-tragedia-no-rs1714660470-g.webp" class="" height="300">

        -->

        <!-- <h1 class="text-center text-success">Busca Desaparecidos Enchente RS </h1>
        <p class="text-center">Busque seu familiar ou animal de extimação </p>

        -->

    </div>
</div>



@endsection



