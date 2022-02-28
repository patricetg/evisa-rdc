@extends("myViews.backOffice.layout.backOfficeLayout")

@section("page")

	@if(Session::get("connectedUserTypePers") == Session::get("typePerss")["admin"]["back"] )
		Fichiers
	@else
		Vos fichiers
	@endif

     générés durant une validation partielle
@endsection

@section("firstLevelLayoutBodyContent")

    <div class="row">
        <div class="col-lg-12">

            <div class="card">
                <div class="card-body">

                    <div class="row">

                        <div class="col-lg-12">

							<div class="row mb-3">
								<div class="col text-right">
									@if(($pendingFiles->count()>0) &&  (Session::get("connectedUserTypePers") == Session::get("typePerss")["admin"]["back"]) )
										<a href="{{ route("deletePendingFiles") }}" title="Supprimer les fichiers temporaires" class="btn btn-danger btn-roundedS btn-sm my-1 delete-row" data-row-name="les fichiers temporaires">
											<span class="fas fa-trash"></span>
											Supprimer les fichiers temporaires
										</a>
									@endif
								</div>
							</div>

                            <div class="row">
                                <div class="col">

                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered datatable">
                                            <thead>
                                            <tr>
                                                <th>Fichiers</th>
												<th>Validé par</th>
												<th>Autres</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($pendingFiles as $_file)
                                                <tr>
                                                    <td>
														<a target="_blank" href="{{ $_file->cheminPF }}">
															<i class="fas fa-download"></i>
															{{ basename($_file->cheminPF) }}
														</a>
													</td>
                                                    <td>{{ $_file->idPers==Session::get("connectedUserId") ? "Vous" : "{$_file->prenPers} {$_file->nomPers}" }}</td>
													<td>
													  Validé le	{{ (new \DateTime($_file->fq_createdAt))->format("d/m/Y H:i") }}, dans la file {{ $_file->libFQ }}
													</td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>

                                    </div>


                                </div>
                            </div>

                        </div> <!-- end col -->


                    </div> <!-- end row -->

                    <div class="row mt-3">
                        <div class="col">

                            <a href="{{ route("validateExcelFiles") }}">
								<i class="far fa-file-excel"></i> Nouvelle validation Excel
							</a>

							&nbsp; &nbsp;

                            <a href="{{ route("validatePdfFiles") }}">
								<i class="far fa-file-pdf"></i> Nouvelle validation PDF
							</a>

                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>


@endsection