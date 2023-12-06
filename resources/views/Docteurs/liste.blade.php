@extends('layouts.mainlayouts')

@section('content')




<section class="section">
  <div>

    @if (session('status'))
<div class="alert alert-success">
{{session('status')}}
</div>
@endif

    <div class="row">
      <div class="col-lg-12">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Liste des docteurs</h5>


            <!-- Table with stripped rows -->
            <table class="table datatable">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Nom</th>
                  <th scope="col">Prénom</th>
                  <th scope="col">Specialite </th>
                  <th scope="col">Actions </th>
                </tr>
              </thead>
              <tbody>
                @foreach ( $docteurs as $doc )
                <tr>
                  <td>{{ $doc->id }}</td>
                  <td>{{ $doc->nom }}</td>
                  <td>{{ $doc->prenom }}</td>
                  <td>{{ $doc->specialite }}</td>

                  <td>

                    <a href="{{ route('docteurs.edit', $doc->id ) }}" class="btn btn-info"><i class="bi bi-pencil-square" title="modifier"></i></a>
                    <a href="{{ route('docteurs.show', $doc->id ) }}" class="btn btn-success"><i class="bi bi-eye" title="détails"></i></a>
                    <a href="{{ url('supprimer-docteur/' .$doc->id) }}" class="btn btn-danger"> <i class="bi bi-trash" title="supprimer"></i></a>



                  </td>
                </tr>
                @endforeach


              </tbody>
            </table>
            <!-- End Table with stripped rows -->

          </div>
        </div>

      </div>
    </div>
  </section>
@endsection
