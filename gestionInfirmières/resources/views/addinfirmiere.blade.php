@extends("layout")

@section("content")

<div class="container">
    <div class="row">
        <div class="col-md-8 mx-auto">
            <div class="card">
                <div class="card-body">
                    <form action="{{route('infirmiere.store')}}" method="POST">
                        @csrf
                        <div class="mb-3">
                          <label  class="form-label">Nom</label>
                          <input type="text" name="nom" class="form-control" id="nom">
                        </div>
                        <div class="mb-3">
                            <label  class="form-label">Prenom</label>
                            <input type="text" name="prenom" class="form-control" id="prenom">
                        </div>
                        <div class="mb-3">
                            <label  class="form-label">dateNaissance</label>
                            <input type="text" name="dateNaissance" class="form-control" id="dateNaissance">
                        </div>
                        <div class="mb-3">
                            <label  class="form-label">anciennete</label>
                            <input type="text" name="anciennete" class="form-control" id="anciennete">
                        </div>
            
                        <div class="mb-3">
                            <label for="disabledSelect" class="form-label">affectation</label>
                            <select name="affectation" id="affectation" class="form-select form-control">
                              <option>Hopital universitaire</option>
                              <option>Hopital Regionale</option>
                              <option>Hopital de specialite</option>
                            </select>
                          </div>
                        
                        
                        <button type="submit" class="btn btn-primary">Ajouter</button>
                      </form>
                </div>
              </div>
        </div>
    </div>
</div>
@endsection
