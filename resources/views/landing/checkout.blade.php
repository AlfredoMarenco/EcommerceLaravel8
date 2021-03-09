@extends('layouts.template-landing')
@section('content')
    <!-- ============================ COMPONENT PAYMENT  ================================= -->
    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" id="openpay-tab" data-toggle="tab" href="#openpay" role="tab" aria-controls="openpay"
                aria-selected="true">OpenPay</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="conekta-tab" data-toggle="tab" href="#conekta" role="tab" aria-controls="conekta"
                aria-selected="false">Conekta</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="mercadopago-tab" data-toggle="tab" href="#mercadopago" role="tab"
                aria-controls="mercadopago" aria-selected="false">Mercado Pago</a>
        </li>
    </ul>
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="openpay" role="tabpanel" aria-labelledby="openpay-tab">
            <!-- ============================ COMPONENT PAYMENT OPENPAY  ================================= -->
            <div class="card mb-4 p-5">
                <div class="card-body">
                    <h4 class="card-title mb-4">OpenPay</h4>
                    <form action="{{ route('checkout.chargeOpenpay') }}" method="POST" role="form" id="payment-form">
                        @csrf
                        <input type="hidden" name="token_id" id="token_id">
                        <input type="hidden" name="use_card_points" id="use_card_points" value="false">
                        <div class="form-group">
                            <label for="username">Name on card</label>
                            <input type="text" class="form-control" name="username" placeholder="Ejemplo. John Smith"
                                autocomplete="off" data-openpay-card="holder_name">
                        </div>
                        {{-- Start Adress Shipping --}}
                        <div class="row">
                            <div class="form-group col-3">
                                <label for="street">Street</label>
                                <input type="text" class="form-control" name="street">
                            </div>
                            <div class="form-group col-3">
                                <label for="crosses">Crosses</label>
                                <input type="text" class="form-control" name="crosses">
                            </div>
                            <div class="form-group col-3">
                                <label for="suburb">uburb</label>
                                <input type="text" class="form-control" name="suburb">
                            </div>
                            <div class="form-group col-3">
                                <label for="state">State</label>
                                <input type="text" class="form-control" name="state">
                            </div>
                            <div class="form-group col-3">
                                <label for="city">City</label>
                                <input type="text" class="form-control" name="city">
                            </div>
                            <div class="form-group col-3">
                                <label for="postal_code">Postal Code</label>
                                <input type="text" class="form-control" name="postal_code">
                            </div>
                            <div class="form-group col-6">
                                <label for="reference">Reference</label>
                                <input type="text" class="form-control" name="reference">
                            </div>
                        </div>
                        {{-- End Adress Shipping --}}
                        <!-- form-group.// -->
                        <div class="form-group">
                            <label for="cardNumber">Card number</label>
                            <div class="input-group">
                                <input type="text" class="form-control" name="cardNumber" autocomplete="off"
                                    data-openpay-card="card_number">
                                <div class="input-group-append">
                                    <span class="input-group-text">
                                        <i class="fab fa-cc-visa"></i> &nbsp; <i class="fab fa-cc-amex"></i> &nbsp;
                                        <i class="fab fa-cc-mastercard"></i>
                                    </span>
                                </div>
                            </div> <!-- input-group.// -->
                        </div> <!-- form-group.// -->

                        <div class="row">
                            <div class="col-md-6 flex-grow-0">
                                <div class="form-group">
                                    <label><span class="hidden-xs">Expiration</span> </label>
                                    <div class="form-inline" style="min-width: 220px">
                                        <input class="form-control" type="text" placeholder="ex. 01"
                                            data-openpay-card="expiration_month">
                                        <span style="width:20px; text-align: center"> / </span>
                                        <input class="form-control" type="text" placeholder="ex. 2021"
                                            data-openpay-card="expiration_year">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label data-toggle="tooltip" title=""
                                        data-original-title="3 digits code on back side of the card">CVV <i
                                            class="fa fa-question-circle"></i></label>
                                    <input class="form-control" type="text" data-openpay-card="cvv2">
                                </div> <!-- form-group.// -->
                            </div>
                        </div> <!-- row.// -->

                        <p class="alert alert-success"> <i class="fa fa-lock"></i> Some secureity information Lorem ipsum
                            dolor
                            sit
                            amet, consectetur adipisicing elit, sed do eiusmod</p>
                        <button class="subscribe btn btn-primary btn-block" id="pay-button"> Confirm </button>
                    </form>
                </div> <!-- card-body.// -->
            </div> <!-- card .// -->
            <!-- ============================ COMPONENT PAYMENT OPENPAY.// ================================= -->
        </div>
        <div class="tab-pane fade" id="conekta" role="tabpanel" aria-labelledby="conekta-tab">
            <!-- ============================ COMPONENT PAYMENT CONEKTA  ================================= -->
            <div class="card mb-4">
                <div class="card-body">
                    <h4 class="card-title mb-4">Conekta</h4>
                    <form action="{{ route('checkout.chargeConekta') }}" method="POST" id="card-form">
                        @csrf
                        <span class="card-errors"></span>
                        <div class="form-group">
                            <label for="username">Name on card</label>
                            <input type="text" class="form-control" name="username" placeholder="Ejemplo. John Smith"
                                autocomplete="off" data-conekta="card[name]">
                        </div> <!-- form-group.// -->

                        <div class="form-group">
                            <label for="cardNumber">Card number</label>
                            <div class="input-group">
                                <input type="text" class="form-control" name="cardNumber" autocomplete="off"
                                    data-conekta="card[number]">
                                <div class="input-group-append">
                                    <span class="input-group-text">
                                        <i class="fab fa-cc-visa"></i> &nbsp; <i class="fab fa-cc-amex"></i> &nbsp;
                                        <i class="fab fa-cc-mastercard"></i>
                                    </span>
                                </div>
                            </div> <!-- input-group.// -->
                        </div> <!-- form-group.// -->

                        <div class="row">
                            <div class="col-md-5 flex-grow-0">
                                <div class="form-group">
                                    <label><span class="hidden-xs">Expiration</span> </label>
                                    <div class="form-inline" style="min-width: 220px">
                                        <input class="form-control" type="text" placeholder="ex. 01"
                                            data-conekta="card[exp_month]">
                                        <span style="width:20px; text-align: center"> / </span>
                                        <input class="form-control" type="text" placeholder="ex. 2021"
                                            data-conekta="card[exp_year]">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label data-toggle="tooltip" title=""
                                        data-original-title="3 digits code on back side of the card">CVV <i
                                            class="fa fa-question-circle"></i></label>
                                    <input class="form-control" type="text" data-conekta="card[cvc]">
                                </div> <!-- form-group.// -->
                            </div>
                        </div> <!-- row.// -->

                        <p class="alert alert-success"> <i class="fa fa-lock"></i> Some secureity information Lorem ipsum
                            dolor
                            sit
                            amet, consectetur adipisicing elit, sed do eiusmod</p>
                        <button class="subscribe btn btn-primary btn-block" id="processPayment" class="btn btn-success"
                            type="submit"> Confirm </button>
                    </form>
                </div> <!-- card-body.// -->
            </div> <!-- card .// -->
            <!-- ============================ COMPONENT PAYMENT CONEKTA.// ================================= -->
        </div>
        <div class="tab-pane fade" id="mercadopago" role="tabpanel" aria-labelledby="mercadopago-tab">
            <!-- ============================ COMPONENT PAYMENT MERCADOPAGO  ================================= -->
            <form action="{{ route('checkout.chargeMercadoPago') }}" method="POST">
                @csrf
                <script src="https://www.mercadopago.com.mx/integrations/v1/web-tokenize-checkout.js"
                    data-public-key="TEST-00d1db82-ccd9-4cbc-b92e-66ad0079742b"
                    data-transaction-amount="{{ (int) str_replace(',', '', Cart::total()) }}">
                </script>
            </form>
            <!-- ============================ COMPONENT PAYMENT MERCADOPAGO// ================================= -->
        </div>
    </div>
    <!-- ============================ COMPONENT PAYMENT END.// ================================= -->
@endsection
@section('scripts')
    <script type="text/javascript">
        $(document).ready(function() {

            OpenPay.setId('m4gx48zqyw8xs4en1z1u');
            OpenPay.setApiKey('pk_de55d471af484c4080a63e7463fc9cd4');
            OpenPay.setSandboxMode(true);
            //Se genera el id de dispositivo
            var deviceSessionId = OpenPay.deviceData.setup("payment-form", "deviceIdHiddenFieldName");
            //console.log(deviceSessionId);

            $('#pay-button').on('click', function(event) {
                event.preventDefault();
                $("#pay-button").prop("disabled", true);
                OpenPay.token.extractFormAndCreate('payment-form', sucess_callbak, error_callbak);
            });

            var sucess_callbak = function(response) {
                var token_id = response.data.id;
                $('#token_id').val(token_id);
                $('#payment-form').submit();
            };

            var error_callbak = function(response) {
                var desc = response.data.description != undefined ? response.data.description : response
                    .message;
                alert("ERROR [" + response.status + "] " + desc);
                $("#pay-button").prop("disabled", false);
            };
        });

    </script>

    <script type="text/javascript">
        Conekta.setPublicKey('key_FnVyzkeUo8Jvy5FMp1MjoYg');
        var conektaSuccessResponseHandler = function(token) {
            var $form = $("#card-form");
            //Inserta el token_id en la forma para que se envíe al servidor
            $form.append($('<input type="hidden" name="conektaTokenId" id="conektaTokenId">').val(token.id));
            $form.get(0).submit(); //Hace submit
            console.log(conektaSuccessResponseHandler);
        };
        var conektaErrorResponseHandler = function(response) {
            var $form = $("#card-form");
            $form.find(".card-errors").text(response.message_to_purchaser);
            $form.find("button").prop("disabled", false);
        };


        //jQuery para que genere el token después de dar click en submit
        $(function() {
            $("#card-form").submit(function(event) {
                var $form = $(this);
                // Previene hacer submit más de una vez
                $form.find("button").prop("disabled", true);
                Conekta.Token.create($form, conektaSuccessResponseHandler, conektaErrorResponseHandler);

                return false;
            });
        });

    </script>

@endsection
