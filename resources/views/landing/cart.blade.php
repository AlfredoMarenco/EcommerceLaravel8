@extends('layouts.template-landing')

@section('content')
    <!-- ========================= SECTION CONTENT ========================= -->
    @if (Cart::count() > 0)
        <section class="section-content padding-y">
            <div class="container">
                <div class="row">
                    <main class="col-md-7">
                        <div class="card">
                            <table class="table table-borderless table-shopping-cart">
                                <thead class="text-muted">
                                    <tr class="small text-uppercase">
                                        <th scope="col">Product</th>
                                        <th scope="col" width="120">Quantity</th>
                                        <th scope="col" width="120">Price</th>
                                        <th scope="col" class="text-right" width="200"> </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach (Cart::content() as $item)
                                        <tr>
                                            <td>
                                                <figure class="itemside">

                                                    <div class="aside"><img
                                                            src="{{ Storage::url($item->model->image->url) }}"
                                                            class="img-sm"></div>
                                                    <figcaption class="info">
                                                        <a href="{{ route('landing.show.product', $item->id) }}" class="title text-dark">{{ $item->name }}</a>
                                                        {{-- <p class="text-muted small">Size: XL, Color: blue, <br> Brand: Gucci
                                                        </p> --}}
                                                    </figcaption>
                                                </figure>
                                            </td>
                                            <td>
                                                <form action="{{ route('cart.update', $item->rowId) }}">
                                                    @csrf
                                                    @method('PUT')
                                                    <input type="number" min="1" value="{{ $item->qty }}" name="qty" class="form-control" onchange="this.form.submit()">
                                                </form>
                                            </td>
                                            <td>
                                                <div class="price-wrap">
                                                    <var class="price">$ {{ number_format($item->price, 2) }}</var>
                                                </div> <!-- price-wrap .// -->
                                            </td>
                                            <td class="text-right">
                                                {{-- <a data-original-title="Save to Wishlist" title="" href=""
                                                    class="btn btn-light" data-toggle="tooltip"> <i
                                                        class="fa fa-heart"></i></a> --}}
                                                <a href="{{ route('cart.remove', $item->rowId) }}" class="btn btn-light">
                                                    Remove</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <div class="card-body border-top">
                                <a href="{{ route('checkout.index') }}" class="btn btn-primary float-md-right"> Make Purchase <i
                                        class="fa fa-chevron-right"></i></a>
                                <a href="{{ route('cart.destroy') }}" class="btn btn-light float-md-right mr-3"> <i
                                        class="far fa-trash-alt"></i> Empty Cart </a>
                                <a href="{{ route('landing.home') }}" class="btn btn-light"> <i
                                        class="fa fa-chevron-left"></i>
                                    Continue shopping </a>
                            </div>
                        </div> <!-- card.// -->
                        <div class="alert alert-success mt-3">
                            <p class="icontext"><i class="icon text-success fa fa-truck"></i> Free Delivery within 1-2 weeks
                            </p>
                        </div>
                    </main> <!-- col.// -->
                    <aside class="col-md-5">
                        <div class="card mb-3">
                            <div class="card-body">
                                <form>
                                    <div class="form-group">
                                        <label>Have coupon?</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" name="" placeholder="Coupon code">
                                            <span class="input-group-append">
                                                <button class="btn btn-primary">Apply</button>
                                            </span>
                                        </div>
                                    </div>
                                </form>
                            </div> <!-- card-body.// -->
                        </div> <!-- card .// -->
                        <div class="card">
                            <div class="card-body">
                                <dl class="dlist-align">
                                    <dt>Total price:</dt>
                                    <dd class="text-right">MXN {{ Cart::total() }}</dd>
                                </dl>
                                <dl class="dlist-align">
                                    <dt>Total:</dt>
                                    <dd class="text-right  h5"><strong>$ {{ Cart::total() }}</strong></dd>
                                </dl>
                                <hr>
                                <p class="text-center mb-3">
                                    <img src="images/misc/payments.png" height="26">
                                </p>
                            </div> <!-- card-body.// -->
                        </div> <!-- card .// -->
                    </aside> <!-- col.// -->
                </div>
            </div> <!-- container .//  -->
        </section>
    @else
        <div class="alert alert-danger mt-3">
            <p class="icontext"><i class="icon icon-sm rounded-circle border fa fa-shopping-cart"></i> Your cart is empty
            </p>
        </div>
    @endif
    <!-- ========================= SECTION CONTENT END// ========================= -->

    <!-- ========================= SECTION  ========================= -->
    <section class="section-name border-top padding-y">

    </section>
    <!-- ========================= SECTION  END// ========================= -->

@endsection
