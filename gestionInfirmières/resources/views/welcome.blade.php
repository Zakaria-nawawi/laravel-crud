@extends("layout")

@section("content")

<div class="container">
    <div class="row">
        <div class="col-md-8 mx-auto">
            @if (Session::has('message'))
                <div class="alert alert-success" role="alert">
                        <strong>{{Session::get('message')}}</strong>
                </div>
            @endif

            <div class="card">
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">NOM</th>
                            <th scope="col">PRENOM</th>
                            <th scope="col">dateNaissance</th>
                            <th scope="col">anciennete</th>
                            <th scope="col">affectation</th>
                            <th>Modifier</th>
                            <th>Supprimer</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($allinfirmiere as $infirmiere)
                            <tr>
                            <td>{{$infirmiere->id}}</td>
                            <td>{{$infirmiere->nom}}</td>
                            <td>{{$infirmiere->prenom}}</td>
                            <td>{{$infirmiere->dateNaissance}}</td>
                            <td>{{$infirmiere->anciennete}}</td>
                            <td>{{$infirmiere->affectation}}</td>
                            <td>
                                <a href="{{route('modifier.infirmiere',[$infirmiere->id])}}">
                                    <button class="btn btn-outline-warning">Modifier</button>
                                </a>
                            </td>
                            <td>
                                <form action="{{route('delete.infirmiere',[$infirmiere->id])}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-outline-danger">Supprimer</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                        </table>
                </div>
              </div>
        </div>
    </div>
</div>
@endsection
