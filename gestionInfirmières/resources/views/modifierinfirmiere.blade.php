@extends("layout")

@section("content")

<div class="container">
    <div class="row">
        <div class="col-md-8 mx-auto">
            <div class="card">
                <div class="card-body">
                    <form action="{{route('update.infirmiere')}}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                        <label  class="form-label">Nom</label>
                        <input type="text" value="{{$infirmiere->nom}}" name="nom" class="form-control" id="nom">
                        </div>
                        <input type="hidden"  value="{{$infirmiere->id}}" name="id" >
                        <div class="mb-3">
                            <label  class="form-label">Prenom</label>
                            <input type="text" value="{{$infirmiere->prenom}}" name="prenom" class="form-control" id="prenom">
                        </div>
                        <div class="mb-3">
                            <label  class="form-label">dateNaissance</label>
                            <input type="text"value="{{$infirmiere->dateNaissance}}" name="dateNaissance" class="form-control" id="dateNaissance">
                        </div>
                        <div class="mb-3">
                            <label  class="form-label">anciennete</label>
                            <input type="text"value="{{$infirmiere->anciennete}}" name="anciennete" class="form-control" id="anciennete">
                        </div>
                        <div class="mb-3">
                            <label for="disabledSelect" class="form-label">affectation</label>
                            <select name="affectation" value="{{$infirmiere->affectation}}" id="affectation" class="form-select form-control">
                              <option>Hopital universitaire</option>
                              <option>Hopital Regionale</option>
                              <option>Hopital de specialite</option>
                            </select>
                          </div>
                        
                        <button type="submit" class="btn btn-primary">Modifier</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


