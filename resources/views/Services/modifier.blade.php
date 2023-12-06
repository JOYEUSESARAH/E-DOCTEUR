@extends('layouts.mainlayouts')

@section('content')




<div class="pagetitle">

  <div>

    @if (session('status'))
  <div class="alert alert-success">
  {{session('status')}}
  </div>

  @endif
<ul>
@foreach ($errors->all() as $error)
  <li class="alert alert-danger"> {{ $error }}</li>
@endforeach
</ul>
    <h1>Tableau Bord</h1>
    <nav>
      <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="dashboard">Accueil</a></li>
        <li class="breadcrumb-item active">Modifier un service</li>
      </ol>
    </nav>
  </div>
  <!-- End Page Title -->

  <section class="section dashboard">

    <div class="row">
      <!-- Left side columns -->
      <div class="col-lg-12">
        <div class="row">

          <!-- Formulaire inscription service -->

          <div class="col-12">
            <div class="card recent-sales overflow-auto">
              <div class="card-body">
                <h5 class="card-title">Enregistrement d'un service </h5>

              <form method="POST" action="{{route('services.update', [$services->id])}}" class="row g-3">
                @method('PATCH')
                @csrf

              <div class="col-md-6">
                <label for="inputName5" class="form-label">Type_service </label>
                <input type="text" class="form-control" name="type_service" value="{{ $services->type_service}}">
              </div>

              <div class="col-md-6">
                <label for="inputEmail5" class="form-label">Description</label>
                <input type="text" class="form-control" name="description" value="{{ $services->description}}">
              </div>


              <div class="text-center">
                <button type="submit" class="btn btn-primary">Enregistrer</button>
                <button type="reset" class="btn btn-danger">Annuler</button>
              </div>
            </form>

              </div>

            </div>
          </div>
          <!-- End Formulaire inscription service -->

        </div>
      </div>
      <!-- End Left side columns -->

    </div>
  </section>
  @include('require.footer')

@endsection
