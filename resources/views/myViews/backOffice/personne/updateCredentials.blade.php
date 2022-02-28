@extends("myViews.backOffice.layout.backOfficeLayout")

@section("page")
    Profile
@endsection

@section("firstLevelLayoutBodyContent")

    <div class="row">

        <div class="col-12">
            <div class="portlet">
                <div id="bg-default" class="panel-collapse collapse show">
                    <div class="portlet-body">

                        @include("myViews.shared.formErrors")

                        <form method="POST" action="{{ route("updateCredentials") }}" enctype="multipart/form-data">
                            @csrf

							<div class="row">
								<div class="col-md-6">

									<div class="form-group">
										<label for="">Nom </label>
										<input type="text" class="form-control" value="{{ $_personne->nomPers }}" disabled name="nomPers">
										@error('nomPers')
										<ul class="text-danger">
											@foreach($errors->get("nomPers") as $error)
												<li> {{ $error }} </li>
											@endforeach
										</ul>
										@enderror
									</div>

									<div class="form-group">
										<label for="">Prénom </label>
										<input type="text" class="form-control" value="{{ $_personne->prenPers }}" disabled name="prenPers">
										@error('prenPers')
										<ul class="text-danger">
											@foreach($errors->get("prenPers") as $error)
												<li> {{ $error }} </li>
											@endforeach
										</ul>
										@enderror
									</div>

									<div class="form-group">
										<label for="">Email </label>
										<input type="email" class="form-control" value="{{ $_personne->emailPers }}" disabled name="emailPers">
										@error('emailPers')
										<ul class="text-danger">
											@foreach($errors->get("emailPers") as $error)
												<li> {{ $error }} </li>
											@endforeach
										</ul>
										@enderror
									</div>


								</div>
								<div class="col-md-6">

									<div class="form-group">
										<label for="">Ancien mot de passe (*)</label>
										<input type="password" class="form-control" value="{{ old("oldPass") }}" name="oldPass">
										@error('oldPass')
										<ul class="text-danger">
											@foreach($errors->get("oldPass") as $error)
												<li> {{ $error }} </li>
											@endforeach
										</ul>
										@enderror
									</div>

									<div class="form-group">
										<label for="">Nouveau Mot de passe (*)</label>
										<input type="password" class="form-control" value="{{ old("newPass") }}" name="newPass">
										@error('newPass')
										<ul class="text-danger">
											@foreach($errors->get("newPass") as $error)
												<li> {{ $error }} </li>
											@endforeach
										</ul>
										@enderror
									</div>

									<div class="form-group">
										<label for="">Confirmez le mot de passe (*)</label>
										<input type="password" class="form-control" value="{{ old("confirmPass") }}" name="confirmPass">
										@error('confirmPass')
										<ul class="text-danger">
											@foreach($errors->get("confirmPass") as $error)
												<li> {{ $error }} </li>
											@endforeach
										</ul>
										@enderror
									</div>

								</div>
							</div>
							<div class="row">
								<div class="col-md-6">

									<div class="form-group">
										<label for="">Signature</label>
										<input type="file" accept="image/jpeg,image/png" value="" class="form-control-file"  name="signature">
										@if(isset($_personne->signature))
											<small class="form-text text-muted">Ne choisissez un fichier que si vous souhaitez remplacer l'ancien</small>
										@endif

										@error('signature')
										<ul class="text-danger">
											@foreach($errors->get("signature") as $error)
												<li> {{ $error }} </li>
											@endforeach
										</ul>
										@enderror

										@if(isset($_personne->signature))
											<a href="{{ $uploadedFilesFolder."/".$_personne->signature }}">
												<img src="{{  $uploadedFilesFolder."/".$_personne->signature }}" class="img-fluid" alt="">
											</a>
										@endif
									</div>

								</div>

								<div class="col-md-6">

									<div class="form-group">
										<label for="">Signature PO</label>
										<input type="file" accept="image/jpeg,image/png" value="" class="form-control-file"  name="signaturePO">
										@if(isset($_personne->signaturePO))
											<small class="form-text text-muted">Ne choisissez un fichier que si vous souhaitez remplacer l'ancien</small>
										@endif

										@error('signaturePO')
										<ul class="text-danger">
											@foreach($errors->get("signaturePO") as $error)
												<li> {{ $error }} </li>
											@endforeach
										</ul>
										@enderror

										@if(isset($_personne->signaturePO))
											<a href="{{ $uploadedFilesFolder."/".$_personne->signaturePO }}">
												<img src="{{  $uploadedFilesFolder."/".$_personne->signaturePO }}" class="img-fluid" alt="">
											</a>
										@endif
									</div>

								</div>

							</div>


{{--

                            <div class="form-group">
                                <label for="">Poste </label>
                                <input type="text" class="form-control" value="{{ $_personne->postePers }}" disabled name="postePers">
                                @error('postePers')
                                <ul class="text-danger">
                                    @foreach($errors->get("postePers") as $error)
                                        <li> {{ $error }} </li>
                                    @endforeach
                                </ul>
                                @enderror
                            </div>
--}}

							<div class="row">
								<div class="col-md-6">

									<div class="form-group">
										<label for="">Signature à utiliser</label>
										<select name="useSignaturePO" class="form-control">

											<option value="0" {{boolval(old("useSignaturePO")?:$_personne->useSignaturePO)==  boolval(false) ? "selected" : "" }}>Principale</option>

											<option value="1" {{ ( boolval((old("useSignaturePO")?:$_personne->useSignaturePO)) == boolval(true)  ) ? "selected" : "" }}>PO</option>


										</select>

										@error('useSignaturePO')
										<ul class="text-danger">
											@foreach($errors->get("useSignaturePO") as $error)
												<li> {{ $error }} </li>
											@endforeach
										</ul>
										@enderror
									</div>


								</div>


								<div class="col-md-6">

									<div class="form-group">
										<label for="">Avatar</label>
										<input type="file" accept="image/jpeg,image/png" value="" class="form-control-file"  name="imgPers">
										@if(isset($_personne->imgPers))
											<small class="form-text text-muted">Ne choisissez un fichier que si vous souhaitez remplacer l'ancien</small>
										@endif

										@error('imgPers')
										<ul class="text-danger">
											@foreach($errors->get("imgPers") as $error)
												<li> {{ $error }} </li>
											@endforeach
										</ul>
										@enderror

										@if(isset($_personne->imgPers))
											<a href="{{ $uploadedFilesFolder."/".$_personne->imgPers }}">
												<img src="{{  $uploadedFilesFolder."/".$_personne->imgPers }}" class="img-fluid" alt="Avatar">
											</a>
										@endif
									</div>

								</div>

							</div>

                            <div>
                                <button type="submit" class="btn btn-success">Modifier</button>
                                <button type="reset" class="btn btn-outline-secondary">Annuler</button>
                            </div>

                        </form>

                    </div>
                </div>
            </div> <!-- /Portlet -->

        </div> <!-- end col -->


    </div> <!-- end row -->



@endsection