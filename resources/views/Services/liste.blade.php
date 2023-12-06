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
            <h5 class="card-title">Liste des services</h5>


            <!-- Table with stripped rows -->
            <table class="table datatable">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Type_service</th>
                  <th scope="col">Description</th>
                  <th scope="col">Actions </th>
                </tr>
              </thead>
              <tbody>
                @foreach ( $services as $serv )
                <tr>
                  <td>{{ $serv->id }}</td>
                  <td>{{ $serv->type_service }}</td>
                  <td>{{ $serv->description }}</td>

                  <td>
                    <a href="{{ route('services.edit', $serv->id) }}" > <i class="bi bi-pencil-square"></i></a>

                    <a href="{{ url('supprimer-service/' .$serv->id) }}"> <i class="bi bi-trash"></i></a>



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
