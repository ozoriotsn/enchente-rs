@extends('components.layouts.site')

@section('content')


<div class="container">

      <div class="container px-4 py-5" id="featured-3">

        <h1 class=" text-success"style="text-transform: uppercase;">Enchente RS </h1>

        <h2 class="pb-2 border-bottom" style="text-transform: uppercase;">Lista de Pessoas e Animais Resgatados</h2>

        <div class="row g-4 py-5 row-cols-1 row-cols-lg-2">


          <div class="feature col">

            <div class="card">

              <div class="card-body">

                <div class="feature-icon d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-2 mb-3">
                  <i class="bi bi-people"  width="1em" height="1em"></i>
                </div>
                <h3 class="fs-2 text-body-emphasis">Pessoas Resgatadas</h3>
                <p class="feature-text">Encontre amigos e familiares resgatados em abrigos.</p>
                <a href="{{ route('person.index')}}" class="icon-link">
                    <i class="bi bi-eye" ></i> Ver lista
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
                <h3 class="fs-2 text-body-emphasis">Animais Resgatados</h3>
                <p class="feature-text">Encontre animais resgatados em abrigos</p>
                <a href="{{ route('pet.index')}}" class="icon-link">
                    <i class="bi bi-eye" ></i> Ver lista
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
                <h3 class="fs-2 text-body-emphasis">Animais Para Doação</h3>
                <p class="feature-text">Acolha um animal que precisa da sua ajuda</p>
                <a href="{{ route('pet.index')}}?donation=1" class="icon-link">
                    <i class="bi bi-eye" ></i> Ver lista
                </a>

              </div>

            </div>

          </div>



          <div class="feature col">

            <div class="card">

              <div class="card-body">


                <div class="feature-icon d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-2 mb-3">
                  <i class="bi bi-hospital"  width="1em" height="1em"></i>
              </div>
              <h3 class="fs-2 text-body-emphasis">Abrigos</h3>
              <p class="feature-text">Lista de abrigos disponíveis, ajude com doações</p>
              <a href="{{ route('page.shelters')}}" class="icon-link">
                <i class="bi bi-eye" ></i> Ver lista
              </a>


              </div>

            </div>

          </div>


          <div class="feature col">

            <div class="card">

              <div class="card-body">


                <div class="feature-icon d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-2 mb-3">
                  <i class="bi bi-clipboard-heart"  width="1em" height="1em"></i>
              </div>
              <h3 class="fs-2 text-body-emphasis">Quero Ser Voluntário</h3>
              <p class="feature-text">Seja um voluntário e ajude a atualizar as listas</p>

              <a href="{{ route('page.voluntaries')}}" class="icon-link">
                <i class="bi bi-info-circle" ></i> Ajudar
              </a>


              </div>

            </div>

          </div>




        </div>

        <div class="feature col">
            <div class="col-md-1 d-block d-md-none">
            <div class="card">

              <div class="card-body mobile-links">

                <a class="btn btn-secondary w-100 mb-3" href="https://app.ospa.place/sos-rs" target="_blank">Mapa de Abrigos</a>
                <a class="btn btn-secondary w-100 mb-3" href="https://sos-rs.com/" target="_blank">SOS Rio Grande do Sul</a>
                <a class="btn btn-secondary w-100 mb-3" href="https://bento.me/ajudars" target="_blank">Ajuda RS</a>

                <div class="dropdown">
                    <a class="btn btn-outline-primary dropdown-toggle w-100 mb-3" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-plus"></i> Cadastrar
                    </a>

                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="{{ route('person.create') }}">Pessoas Resgatadas</a></li>
                      <li><a class="dropdown-item" href="{{ route('pet.create') }}">Animais Resgatados</a></li>
                      <li><a class="dropdown-item" href="{{ route('pet.create') }}?donation=1">Animais para doação</a></li>
                    </ul>
                  </div>

            </div>

              </div>
            </div>

        </div>


      </div>


</div>


@endsection

