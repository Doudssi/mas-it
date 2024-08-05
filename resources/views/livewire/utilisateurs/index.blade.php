<div>
  @if(isBtnAddClicked)
  <div class="row">
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Exemple rapide</font></font></h3>
      </div>
      <!-- /.card-header -->
      <!-- form start -->
      <form>
        <div class="card-body">
          <div class="form-group">
            <label for="exampleInputEmail1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Adresse e-mail</font></font></label>
            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Entrez l'email">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Mot de passe</font></font></label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Mot de passe">
          </div>
          <div class="form-group">
            <label for="exampleInputFile"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Entrée de fichier</font></font></label>
            <div class="input-group">
              <div class="custom-file">
                <input type="file" class="custom-file-input" id="exampleInputFile">
                <label class="custom-file-label" for="exampleInputFile"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Choisir le fichier</font></font></label>
              </div>
              <div class="input-group-append">
                <span class="input-group-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Télécharger</font></font></span>
              </div>
            </div>
          </div>
          <div class="form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Regarde-moi</font></font></label>
          </div>
        </div>
        <!-- /.card-body -->

        <div class="card-footer">
          <button type="submit" class="btn btn-primary"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Soumettre</font></font></button>
        </div>
      </form>
    </div>
  </div>
  @else
  <div class="row p-4 pt-5">
      <div class="col-12">
        <div class="card">
          <div class="card-header bg-primary d-flex align-items-center ">
            <h3 class="card-title flex-grow-1"><i class="fas fa-users fa-2x"></i>Liste des utilisateurs</h3>

            <div class="card-tools d-flex align-items-center ">
              <a href="" class="btn btn-link text-white mr-4 d-bloc" wire:click.prevent="goToAddUser()"><i class="fas fa-user-plus"></i> utilisateur</a>
              <div class="input-group input-group-md" style="width: 250px;">
                <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                <div class="input-group-append">
                  <button type="submit" class="btn btn-default">
                    <i class="fas fa-search"></i>
                  </button>
                </div>
              </div>
            </div>
          </div>
          <!-- /.card-header -->
          <div class="card-body table-responsive p-0 table-striped" style="height: 300px;">
            <table class="table table-head-fixed text-nowrap">
              <thead>
                <tr>
                  <th style="width:5%;"></th>
                  <th style="width:25%;">Utilisateurs</th>
                  <th style="width:20%;">Rôles</th>
                  <th style="width:20%;" class="text-center">Ajouté</th>
                  <th style="width:30%;" class="text-center">Actions</th>
                </tr>
              </thead>
              <tbody>
                @foreach($user as $users)
                <tr>
                  <td>{{ $user->sexe }}</td>
                  <td>{{ $user->prenom }}</td>
                  <td>{{ $user->allRolesNames }}</td>
                  <td class="text-center"><span class="tag tag-success">{{ $user->created_at->diffForHumans() }}</span></td>
                  <td class="text-center">
                    <button clas="btn btn-link"><i class="far fa-edit"></i></button>
                    <button clas="btn btn-link"><i class="fas fa-trash-alt"></i></button>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
          <!--Card footer-->
          <div class="card-footer">
            <div class="float-right">
              {{ $users->links() }}
            </div>
          </div>
        </div>
      </div>
  </div>
  @endif
</div>
