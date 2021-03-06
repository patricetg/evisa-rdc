@extends("myViews.frontOffice.layout.frontOfficeLayout")

@section("page")
    Contacts
@endsection

@section("firstLevelLayoutBodyContent")


    <!--Start Enquire Form-->
    <section class="contact-page pad-tb">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 v-center">
                    <div class="common-heading text-l">
                        <span>Contactez-nous maintenant</span>
                        <h3 class="mt0 mb0 c-primary">Vous avez des question ? Ecrivez-nous</h3>
                        <p class="mb60 mt20">
                            Nous vous reviendrons ausstôt que nous aurons votre message.
                        </p>
                    </div>
                    <div class="form-block">
                        <form method="POST" target="{{ route("frontOfficeContactsPage") }}" id="contactForm" data-bs-toggle="validator" class="shake">

                            @include("myViews.shared.formErrors")

                            {{ csrf_field() }}
                            <div class="row">
                                <div class="form-group col-sm-6">
                                    <input type="text"  id="name" name="nomPren" value="{{ old("nomPren") }}" placeholder="Entrez votre nom complet" required data-error="Please fill Out">
                                    {{--<div class="help-block with-errors"></div>--}}
                                    @error('nomPren')
                                    <ul class="text-danger">
                                        @foreach($errors->get("nomPren") as $error)
                                            <li> {{ $error }} </li>
                                        @endforeach
                                    </ul>
                                    @enderror
                                </div>
                                <div class="form-group col-sm-6">
                                    <input type="email"  id="email" name="email" value="{{ old("email") }}" placeholder="Entrez votre email" required>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-sm-12">
                                    <input type="text" id="object" name="objet" value="{{ old("objet") }}" placeholder="Entrez l'objet du message" required data-error="Please fill Out">
                                    <div class="help-block with-errors"></div>
                                </div>
                                {{--<div class="form-group col-sm-6">
                                    <select name="Dtype" id="Dtype" required>
                                        <option value="">Select Requirement</option>
                                        <option value="web">web</option>
                                        <option value="graphic">graphic</option>
                                        <option value="video">video</option>
                                    </select>
                                    <div class="help-block with-errors"></div>
                                </div>--}}
                            </div>
                            <div class="form-group">
                                <textarea id="message" rows="5" name="message" placeholder="Entrez votre message" required>{{ old("message") }}</textarea>
                                <div class="help-block with-errors"></div>
                            </div>
                            <button type="submit" id="form-submit" class="btn lnk btn-main bg-btn">
                                <span class="fas fa-paper-plane-o"></span>
                                Envoyer<span class="circle"></span>
                            </button>
                            <div id="msgSubmit" class="h3 text-center hidden"></div>
                            <div class="clearfix"></div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-5 offset-lg-1 v-center">

                    <h4 class="text-black text-center">Contacter le coordinateur de VISApasseport : CHRISTIAN MASITU</h4>

                    <img src="{{ asset("myFiles/images/christian.png") }}" class="img-fluid" title="CHRISTIAN MASITU" alt="CHRISTIAN MASITU">

                    <p class="text-dark text-center lh-2">
                        Congolais résident au Maroc. Ingénieur d’Etat et Co-fondateur de PLANNINGCLIENT
                    </p>

                    <p class="text-center lh-2">
                        <i class="fas fa-envelope fa-2x"></i> <a class="text-dark" href="mailto:cal01.application@gmail.com">cal01.application@gmail.com</a>
                    </p>

                    <p class="text-center lh-2">
                        <i class="fab fa-twitter fa-2x c-secondary"></i> <a class="text-dark" href="https://twitter.com/christian_masit" target="_blank">@christian_masit</a>
                    </p>

                    {{--
                    <div class="contact-details">
                        <div class="contact-card wow fadeIn" data-wow-delay=".2s">
                            <div class="info-card v-center">
                                <span><i class="fas fa-phone-alt"></i> Téléphone :</span>
                                <div class="info-body">
                                    <p>Heures d'assistance: Lundi – Vendredi, 09 AM à 05 PM</p>
                                    <a href="tel:+10000000000">(+91) 0000 000 000</a>
                                </div>
                            </div>
                        </div>
                        <div class="email-card mt30 wow fadeIn" data-wow-delay=".5s">
                            <div class="info-card v-center">
                                <span><i class="fas fa-envelope"></i> Email :</span>
                                <div class="info-body">
                                    <p>Notre équipe vous fera un retour dans les 24 heures ouvrables qui suivent votre message.</p>
                                    <a href="mailto:cal01.application@gmail.com">cal01.application@gmail.com</a>
                                </div>
                            </div>
                        </div>
                        <div class="skype-card mt30 wow fadeIn" data-wow-delay=".9s">
                            <div class="info-card v-center">
                                <span><i class="fab fa-twitter"></i> Twitter :</span>
                                <div class="info-body">
                                    <p>Heures d'assitance : Lundi – Vendredi, 09 AM à 05 PM</p>
                                    <a href="skype:christian_masit?call">@christian_masit</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    --}}

                </div>
            </div>
        </div>
    </section>
    <!--End Enquire Form-->


@endsection