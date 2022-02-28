@extends("myViews.backOffice.layout.backOfficeLayout")

@section("page")
    Utilisateurs
@endsection

@section("firstLevelLayoutBodyContent")


    <div class="card">
        <div class="card-body">

            <div class="row">
                <div class="col mb-3">
                    <a href="{{ route("createUser") }}"> Nouveau </a>
                </div>
            </div>

            <div class="row">

                <div class="col-lg-12">


                    <div class="table-responsive">
                        <table class="table table-striped table-bordered datatable">
                            <thead>
                            <tr>
                                <th>Utilisateur</th>
                                {{--<th>Poste</th>--}}
                                <th>Email</th>
                                <th>Créé le</th>
                                <th>Statut</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($_personnes as $_personne)
                                <tr>
                                    <td>{{ $_personne->nomPers." ".$_personne->prenPers }}
                                        @if($_personne->typePers == $typePerss["admin"]["back"])
                                            ( {{ $typePerss["admin"]["front"] }} )
                                        @endif
                                    </td>
                                    {{--<td>{{ $_personne->postePers }}</td>--}}
                                    <td>{{ $_personne->emailPers}}</td>
                                    <td>{{ $_personne->pers_createdAt->format("d/m/Y H:i") }}</td>
                                    <td>
                                        @if($_personne->pers_deletedAt==null)
                                            <span class="badge badge-success">Actif</span>
                                        @else
                                            <span class="badge badge-danger">Désactivé</span>
                                        @endif

                                    </td>
                                    <td>

                                        <a href="{{ route("updateUser",["idPers"=>$_personne->idPers]) }}" class="btn btn-outline-secondary btn-sm">
                                            <span class="fas fa-user-edit"></span>

                                            Modifier
                                        </a>

                                        @if($_personne->typePers != $typePerss["admin"]["back"])

                                            @if($_personne->pers_deletedAt==null)


                                                <a href="{{ route("deactivateUser",["idPers"=>$_personne->idPers]) }}" data-pers="{{ $_personne->nomPers." ".$_personne->prenPers }}" class="btn btn-danger btn-sm deactivate-user">
                                                    <span class="fas fa-user-slash"></span>

                                                    Désactiver
                                                </a>

                                            @else

                                                <a href="{{ route("reactivateUser",["idPers"=>$_personne->idPers]) }}" data-pers="{{ $_personne->nomPers." ".$_personne->prenPers }}" class="btn btn-success btn-sm reactivate-user">
                                                    <span class=" fas fa-user-check"></span>
                                                    Réactiver
                                                </a>

                                            @endif

                                        @endif

                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>

                    </div>


                </div> <!-- end col -->


            </div> <!-- end row -->


        </div>
    </div>





@endsection

@section("pageJs")
    <script>
        $(document).ready(function(){

            $("body").on("click",".reactivate-user",function(e){

                let pers = $(this).data("pers");

                if(!confirm("Réactiver l'utilisateur "+pers+" ?"))
                    return false;

            });

            $("body").on("click",".deactivate-user",function(e){

                let pers = $(this).data("pers");

                if(!confirm("Désactiver l'utilisateur "+pers+" ?"))
                    return false;
            });


        })
    </script>
@endsection