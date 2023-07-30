@extends('master.pages')

@section('page-title', 'Home Page')

@section('page-content')
    @include('components.elements.page_title', ['hierarchy' => ['Home' => '/', 'Cart' => 'current']])
    <section class="cart">
        <script src="{{ asset('assets/js/cartFunctions.js') }}"></script>
        <div class="row">
            <div class="col-xl-9 col-lg-7 col-md-6 col-12">
                <table class="table" id="cartTable">
                    <tr>
                        <th></th>
                        <th>Image</th>
                        <th>Product Name</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Total</th>
                        <th></th>
                    </tr>
                    <?php
                    $products = json_decode($page['products']);
                    $cartTotal = 0;
                    ?>
                    @for ($i = 0; $i < count($products); $i++)
                        <?php $cartTotal += $products[$i]->quantity * $products[$i]->price; ?>
                        <tr>
                            <td>{{ $i + 1 }}</td>
                            <td>
                                <label for="">{{ $products[$i]->image }}</label>
                            </td>
                            <td>
                                <label for="">{{ $products[$i]->name }}</label>
                            </td>
                            <td>
                                &#8377;&nbsp;<label for=""
                                    data-property="productPrice">{{ $products[$i]->price }}</label>
                            </td>
                            <td>
                                <div class="input-group">
                                    <button type="button" class="input-group-text" onclick="changeInt(this,'+')">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus">
                                            <line x1="12" y1="5" x2="12" y2="19"></line>
                                            <line x1="5" y1="12" x2="19" y2="12"></line>
                                        </svg>
                                    </button>
                                    <input type="number" name="quantity[]" class="form-control input-quantity"
                                        maxlength="4" minlength="1" min="1" onchange="changeInput(this)"
                                        max="{{ $products[$i]->stock }}" value="{{ $products[$i]->quantity }}"
                                        id="exampleInputQuantity">
                                    <button type="button" class="input-group-text" onclick="changeInt(this,'-')">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" class="feather feather-minus">
                                            <line x1="5" y1="12" x2="19" y2="12"></line>
                                        </svg>
                                    </button>
                                </div>
                            </td>
                            <td>
                                &#8377;&nbsp;<label
                                    data-property="productTotal">{{ $products[$i]->quantity * $products[$i]->price }}</label>
                            </td>
                            <td>
                                <button type="button" class="btn btn-danger" onclick="deleteNode(this)">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2">
                                        <polyline points="3 6 5 6 21 6"></polyline>
                                        <path
                                            d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                        </path>
                                        <line x1="10" y1="11" x2="10" y2="17"></line>
                                        <line x1="14" y1="11" x2="14" y2="17"></line>
                                    </svg>
                                </button>
                            </td>
                        </tr>
                    @endfor
                </table>
            </div>
            <div class="col-xl-3 col-lg-5 col-md-6 col-12">
                <h3>Cart Total</h3>
                <form action="" method="post">
                    <input type="hidden" name="cart_total" value="{{ $cartTotal }}" name="username" class="form-control"
                        id="totalPriceOfCart">
                    <div class="mb-3">
                        <div class="row justify-content-between">
                            <div class="col-auto">
                                <p class="form-label">Subtotal</p>
                            </div>
                            <div class="col-auto">
                                <p id="totalPriceOfCartLabel" class="form-label">{{ $cartTotal }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <p class="form-label"><strong>Shipping</strong></p>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault"
                                id="flexRadioDefault2" checked>
                            <label class="form-check-label" for="flexRadioDefault2">
                                Default checked radio
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault"
                                id="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault1">
                                Default radio
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault"
                                id="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault1">
                                Default radio
                            </label>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="accordion cart-accordion" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Change Address
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="flexRadioAddress"
                                                id="flexRadioAddress0" checked>
                                            <label class="form-check-label" for="flexRadioAddress0">
                                                <h5>Default Address</h5>
                                                <p>
                                                    Lorem ipsum dolor sit amet <br>
                                                    consectetur adipisicing elit. <br>
                                                    Inventore incidunt blanditiis <br>
                                                    sequi - 400 056.
                                                </p>
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="flexRadioAddress"
                                                id="flexRadioAddress1">
                                            <label class="form-check-label" for="flexRadioAddress1">
                                                <h5>Address #1</h5>
                                                <p>
                                                    Lorem ipsum dolor sit amet <br>
                                                    consectetur adipisicing elit. <br>
                                                    Inventore incidunt blanditiis <br>
                                                    sequi - 400 056.
                                                </p>
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="flexRadioAddress"
                                                id="flexRadioAddress2">
                                            <label class="form-check-label" for="flexRadioAddress2">
                                                <h5>Address #2</h5>
                                                <p>
                                                    Lorem ipsum dolor sit amet <br>
                                                    consectetur adipisicing elit. <br>
                                                    Inventore incidunt blanditiis <br>
                                                    sequi - 400 056.
                                                </p>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="row justify-content-between">
                            <div class="col-auto">
                                <p class="form-label"><strong>Total</strong></p>
                            </div>
                            <div class="col-auto">
                                <p id="totalPriceOfCartLabel" class="form-label">{{ $cartTotal }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-lg btn-theme-primary-rounded">Proceed to Checkout</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection
