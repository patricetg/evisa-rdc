<div class="modal fade" id="methodesPaiementPrVisaPasseportModal" tabindex="-1" aria-labelledby="methodesPaiementPrVisaPasseportModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="methodesPaiementPrVisaPasseportModalLabel">Méthodes de paiement disponibles lors de la demande d'un e-Passeport</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <div class="row my-3">

                    {{--<div class="col-12 mb-2">
                        <h3 class="text-center">Méthodes de paiement disponibles </h3>
                    </div>--}}

                    @include("myViews.frontOffice.include.paymentMethods")

                </div>


            </div>
            {{--<div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>--}}
        </div>
    </div>
</div>