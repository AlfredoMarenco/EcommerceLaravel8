@extends('layouts.bajce')

@section('css')
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script type="text/javascript" src="https://openpay.s3.amazonaws.com/openpay.v1.min.js"></script>
    <script type='text/javascript' src="https://openpay.s3.amazonaws.com/openpay-data.v1.min.js"></script>
@endsection


@section('content')
    <!-- ========================= SECTION CONTENT ========================= -->
    @if (Cart::count())
        <section class="section-content padding-y">
            <div class="container mb-3 mt-5 py-3">
                <div class="row">
                    <main class="col-md-8 mx-auto">
                        <div class="card p-5">
                            <h4>Dirección de envio</h4>
                            <form action="{{ route('checkout.chargeOpenpay') }}" method="POST" role="form" id="payment-form">
                                @csrf
                                <input type="hidden" name="token_id" id="token_id">
                                <input type="hidden" name="use_card_points" id="use_card_points" value="false">
                                {{-- Start Adress Shipping --}}
                                <div class="row mb-3">
                                    <div class="form-group col-4">
                                        <label for="street">Calle</label>
                                        <input type="text" class="form-control" name="street" placeholder="C. 473">
                                    </div>
                                    <div class="form-group col-4">
                                        <label for="crosses">Numero</label>
                                        <input type="text" class="form-control" name="number" placeholder="#605">
                                    </div>
                                    <div class="form-group col-4">
                                        <label for="crosses">Cruzamientos</label>
                                        <input type="text" class="form-control" name="crosses" placeholder="por 40 y 42">
                                    </div>
                                    <div class="form-group col-4">
                                        <label for="suburb">Colonia</label>
                                        <input type="text" class="form-control" name="suburb" placeholder="Col. Los heroes">
                                    </div>
                                    <div class="form-group col-4">
                                        <label for="state">Estado</label>
                                        <input type="text" class="form-control" name="state" placeholder="Mérida">
                                    </div>
                                    <div class="form-group col-4">
                                        <label for="city">Ciudad</label>
                                        <input type="text" class="form-control" name="city" placeholder="Yucatán">
                                    </div>
                                    <div class="form-group col-8">
                                        <label for="postal_code">Codigo postal</label>
                                        <input type="text" class="form-control" name="postal_code" placeholder="97000">
                                    </div>
                                    <div class="form-group col-12">
                                        <label for="reference">Referencias</label>
                                        <input type="text" class="form-control" name="reference"
                                            placeholder="Casa de 2 pisos de color blanco">
                                    </div>
                                </div>
                                {{-- End Adress Shipping --}}
                                <!-- form-group.// -->
                                <h4>Método de pago</h4>
                                <div class="form-group">
                                    <label for="username">Nombre del titular de la tarjeta</label>
                                    <input type="text" class="form-control" name="username"
                                        placeholder="Ejemplo. John Smith" autocomplete="off"
                                        data-openpay-card="holder_name">
                                </div>
                                <div class="form-group">
                                    <label for="cardNumber">Numero de tarjeta</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="cardNumber" autocomplete="off"
                                            data-openpay-card="card_number" placeholder="4242 4242 4242 4242"
                                            maxlength="16">
                                        <div class="input-group-append">
                                            <span class="input-group-text">
                                                <i class="fab fa-cc-visa"></i> &nbsp; <i class="fab fa-cc-amex"></i> &nbsp;
                                                <i class="fab fa-cc-mastercard"></i>
                                            </span>
                                        </div>
                                    </div> <!-- input-group.// -->
                                </div> <!-- form-group.// -->

                                <div class="row">
                                    <div class="col-md-8 flex-grow-0">
                                        <div class="form-group">
                                            <label><span class="hidden-xs">Fecha de expiracion</span> </label>
                                            <div class="form-inline" style="min-width: 220px">
                                                <input class="form-control" type="text" placeholder="01" maxlength="2"
                                                    data-openpay-card="expiration_month">
                                                <span style="width:20px; text-align: center"> / </span>
                                                <input class="form-control" type="text" placeholder="24" maxlength="2"
                                                    data-openpay-card="expiration_year">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label data-toggle="tooltip" title=""
                                                data-original-title="3 digits code on back side of the card">CVV <i
                                                    class="fa fa-question-circle"></i></label>
                                            <input class="form-control" type="text" data-openpay-card="cvv2"
                                                placeholder="123" maxlength="4">
                                        </div> <!-- form-group.// -->
                                    </div>
                                </div> <!-- row.// -->

                                <p class="alert alert-success"> <i class="fa fa-lock"></i> Some secureity information Lorem
                                    ipsum
                                    dolor
                                    sit
                                    amet, consectetur adipisicing elit, sed do eiusmod</p>
                                <button class="subscribe btn btn-primary btn-block" id="pay-button"> Confirmar
                                </button>
                            </form>
                        </div> <!-- card.// -->
                    </main> <!-- col.// -->
                </div>
            </div> <!-- container .//  -->
        </section>
    @else
        <section class="section-content padding-y">
            <div class="container mb-3 mt-5 py-3">

                <div class="row">
                    <main class="col-md-12">
                        <div class="d-flex justify-content-center font-weight-bold">
                            El carrito se encuentra vacio
                        </div>
                        <div class="my-5 text-center">
                            <a class="btn btn-dark btn-lg" href="">Ir al inicio</a>
                        </div>
                    </main>
                </div>
            </div>
        </section>
    @endif
    <!-- ========================= SECTION CONTENT END// ========================= -->
@endsection

@section('js')
    <script type="text/javascript">
        $(document).ready(function() {

            OpenPay.setId('mdfl2acxa4vwbrittxic');
            OpenPay.setApiKey('pk_4217280e28ca48ab897cbe4bbb978a1f');
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
@endsection
