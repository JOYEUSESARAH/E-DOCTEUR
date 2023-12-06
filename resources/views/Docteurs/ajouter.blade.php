@extends('layouts.mainlayouts')
@section('content')

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





    <h1 class="text-center">Ajouter un nouveau Docteur</h1>


    <form action="{{ route('docteurs.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="row">

        <div class="col-lg-6 mt-3">
          <label for="inputNom" class="form-label">Nom</label>
          <input type="text" class="form-control" name="nom">

        </div>
        <div class="col-lg-6 mt-3">
          <label for="inputPrenom" class="form-label">Prenom</label>
          <input type="text" class="form-control" name="prenom">
        </div>

        <div class="col-lg-6 mt-3">
          <label for="inputDate_naissance" class="form-label">Date_naissance</label>
          <input type="date" class="form-control" name="date_naissance">
        </div>
        <div class="col-lg-6 mt-3">
          <label for="inputAdresse" class="form-label">adresse</label>
          <input type="text" class="form-control" name="adresse">
        </div>

        <div class="col-lg-6 mt-3">
            <label for="inputSexe" class="form-label">Sexe</label>
            <input type="text" class="form-control" name="sexe">
          </div>

          <div class="col-lg-6 mt-3">
            <label for="inputSpecialite" class="form-label">Specialite</label>
            <input type="text" class="form-control" name="specialite">
          </div>

          <div class="col-lg-12 mt-3">
            <label for="inputTelephone" class="form-label">Telephone</label>
            <input type="number" class="form-control" name="telephone">
        </div>

        <div class="col-6 mt-5">
            <input type="file" name="photo" class="form-control" placeholder="photo">
       </div>

        <div class="text-center mt-3">
          <button type="submit" class="btn btn-primary">Enregistrer</button>
          <button type="reset" class="btn btn-danger">Annuler</button>
        </div>




      </div>
    </form>
@endsection
