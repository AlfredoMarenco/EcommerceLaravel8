<div class="container mt-3">
    <div class="row text-center">
        <div class="col-md-4 my-3">
            <a wire:click="formOpenPay">
                <img src="{{ asset('images/openpay/logo-openpay.png') }}" width="30%" alt="">
            </a>
        </div>
        <div class="col-md-4 my-3">
            <a wire:click="formConekta">
                <img src="{{ asset('images/conekta/logo-conekta.png') }}" width="30%" alt="">
            </a>
        </div>
        <div class="col-md-4 my-3">
            <a wire:click="formMercadoPago">
                <img src="{{ asset('images/mercadopago/logo-mercadopago.png') }}" width="30%" alt="">
            </a>
        </div>
    </div>

    @switch($formvisible)
        @case(1)
        <!-- ============================ COMPONENT PAYMENT OPENPAY  ================================= -->
        <div class="card mb-4">
            <div class="card-body">
                <h4 class="card-title mb-4">Payment</h4>
                <form action="{{ route('checkout.directcharge') }}" method="POST" role="form" id="payment-form">
                    @csrf
                    <input type="hidden" name="token_id" id="token_id">
                    <input type="hidden" name="use_card_points" id="use_card_points" value="false">
                    <div class="form-group">
                        <label for="username">Name on card</label>
                        <input type="text" class="form-control" name="username" placeholder="Ejemplo. John Smith"
                            autocomplete="off" data-openpay-card="holder_name">
                    </div> <!-- form-group.// -->

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
                        <div class="col-md-5 flex-grow-0">
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

                    <p class="alert alert-success"> <i class="fa fa-lock"></i> Some secureity information Lorem ipsum dolor
                        sit
                        amet, consectetur adipisicing elit, sed do eiusmod</p>
                    <button class="subscribe btn btn-primary btn-block" id="pay-button"> Confirm </button>
                </form>
            </div> <!-- card-body.// -->
        </div> <!-- card .// -->
        <!-- ============================ COMPONENT PAYMENT OPENPAY.// ================================= -->
        @break
        @case(2)
        <!-- ============================ COMPONENT PAYMENT CONEKTA  ================================= -->
        <div class="card mb-4">
            <div class="card-body">
                <h4 class="card-title mb-4">Payment</h4>
                <form action="{{ route('checkout.directcharge') }}" method="POST" role="form" id="payment-form">
                    @csrf
                    <input type="hidden" name="token_id" id="token_id">
                    <input type="hidden" name="use_card_points" id="use_card_points" value="false">
                    <div class="form-group">
                        <label for="username">Name on card</label>
                        <input type="text" class="form-control" name="username" placeholder="Ejemplo. John Smith"
                            autocomplete="off" data-openpay-card="holder_name">
                    </div> <!-- form-group.// -->

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
                        <div class="col-md-5 flex-grow-0">
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

                    <p class="alert alert-success"> <i class="fa fa-lock"></i> Some secureity information Lorem ipsum dolor
                        sit
                        amet, consectetur adipisicing elit, sed do eiusmod</p>
                    <button class="subscribe btn btn-primary btn-block" id="pay-button"> Confirm </button>
                </form>
            </div> <!-- card-body.// -->
        </div> <!-- card .// -->
        <!-- ============================ COMPONENT PAYMENT CONEKTA.// ================================= -->
        @break
        @case(3)
        <!-- ============================ COMPONENT PAYMENT OPENPAY  ================================= -->
        <div class="card mb-4">
            <div class="card-body">
                <h4 class="card-title mb-4">Payment</h4>
                <form action="{{ route('checkout.directcharge') }}" method="POST" role="form" id="payment-form">
                    @csrf
                    <input type="hidden" name="token_id" id="token_id">
                    <input type="hidden" name="use_card_points" id="use_card_points" value="false">
                    <div class="form-group">
                        <label for="username">Name on card</label>
                        <input type="text" class="form-control" name="username" placeholder="Ejemplo. John Smith"
                            autocomplete="off" data-openpay-card="holder_name">
                    </div> <!-- form-group.// -->

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
                        <div class="col-md-5 flex-grow-0">
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

                    <p class="alert alert-success"> <i class="fa fa-lock"></i> Some secureity information Lorem ipsum dolor
                        sit
                        amet, consectetur adipisicing elit, sed do eiusmod</p>
                    <button class="subscribe btn btn-primary btn-block" id="pay-button"> Confirm </button>
                </form>
            </div> <!-- card-body.// -->
        </div> <!-- card .// -->
        <!-- ============================ COMPONENT PAYMENT OPENPAY.// ================================= -->
        @break
        @default

    @endswitch



</div>
