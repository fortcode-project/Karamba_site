<div>
    <main id="main" style="margin-top: 5rem;">
        <section class="shopping-cart spad">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="shopping__cart__table">
                            <table>
                                <thead style="background: #F4C400;">
                                    <tr class="p-5 m-5">
                                        <th>Produto</th>
                                        <th>Quantidade</th>
                                        <th>Total</th>
                                        <th class="text-center">Remover</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($cartContent as $item)
                                        <tr>
                                            <td class="product__cart__item">
                                                <div class="product__cart__item__pic">
                                                    @if ($item->attributes['image'] != null)
                                                        <img style="width: 80px"
                                                            src="https://kytutes.com/storage/{{ $item->attributes['image'] }}"
                                                            class="img-fluid" alt="">
                                                    @else
                                                        <img style="width: 80px" src="/storage/notfound.png"
                                                            class="img-fluid" alt="">
                                                    @endif
                                                </div>

                                                <div class="product__cart__item__text">
                                                    <h6>{{ $item->name }}</h6>
                                                </div>
                                            </td>
                                            <td class="quantity__item">
                                                <div class="quantity">
                                                    <div class="pro-qty-2">
                                                        <input class="quantity-input" type="number" value="{{ $item->quantity }}" min="1" wire:change="updateQuantity('{{ $item->id }}', $event.target.value)">
</td>                                               </div>
                                                </div>
                                            </td>
                                            <td class="cart__price">
                                                {{ number_format($item->price * $item->quantity, 2, ',', '.') }} Kz</td>
                                            <td class="cart__close text-center">
                                                <a href="{{ route('cart.remove', $item->id) }}" style="color: red;">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="25"
                                                        height="25" fill="currentColor" class="bi bi-trash3-fill"
                                                        viewBox="0 0 16 16">
                                                        <path
                                                            d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5m-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5M4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06m6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528M8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5" />
                                                    </svg>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="continue__btn">
                                    <a href="{{ route('api.loja') }}" style="border: 1px solid #F4C400;">Continuar
                                        Comprar</a>
                                </div>
                            </div>
                            {{-- <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="continue__btn update__btn">
                                    <a href="#" style="background: #F4C400; color:#fff; border: none;"><i
                                            class="fa fa-spinner"></i>Actualizar Carrinho</a>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="cart__discount">
                            <form wire:submit.prevent='cuponDiscount'>
                                <input required type="text" wire:model="code" name="cupon" placeholder="Insira o codigo do cupon">   
                                <button  type="submit" style="background: #F4C400; color:#fff; border: none;">Aplicar</button>
                            </form>
                        </div>
                        <div class="cart__total">
                            <div class="line">
                                <h6>Total do Carrinho</h6>
                            </div>
                            <ul>
                                <li>Subtotal <span id="subtotal">{{ number_format(abs($getSubTotal), 2, ',', '.') }} Kz</span></li>
                                <li>Taxa PB <span>{{ number_format($taxapb, 2, ',', '.') }} Kz</span> </li>
                                <li>Total <span id="total">{{number_format($totalFinal - session("discountvalue"), 2, ',', '.')}} kz</span></li>
                            </ul>
                            @if (isset($locations) and $locations->count() > 0)
                                @foreach ($locations as $key => $item)
                                    <div class="form-check">
                                        <input wire:click="selectLocation({{ $item['price'] }})" class="form-check-input checked"
                                            type="radio" id="flexRadioDefault{{ $key + 1 }}" name="location" value="{{ $item['price'] }}">
                                        <label class="form-check-label" for="flexRadioDefault{{ $key + 1 }}" style="cursor: pointer">
                                            {{ $item['location'] }} - {{ $item['price'] }} kz
                                        </label>
                                    </div>
                                @endforeach
                            @endif
                            <a href="#" id="getLocationButton" class="primary-btn btn btn-primary mt-2"
                                style="background: #F4C400; color:#fff; border: none;" data-bs-toggle="modal"
                                data-bs-target="#exampleModal">Finalizar Compra</a>
                            @include('loja.checkout.App')
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</div>

<script>
    document.getElementById('getLocationButton').addEventListener('click', () => {
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(showPosition, showError);
        } else {
            document.getElementById('location').innerText = "Geolocalização não é suportada por este navegador.";
        }
    });

    function showPosition(position) {
        const latitude = position.coords.latitude;
        const longitude = position.coords.longitude;
        document.getElementById('location').innerText = `Latitude: ${latitude} <br> , Longitude: ${longitude}`;
    }

    function showError(error) {
        switch (error.code) {
            case error.PERMISSION_DENIED:
                document.getElementById('location').innerText = "Usuário negou a solicitação de Geolocalização.";
                break;
            case error.POSITION_UNAVAILABLE:
                document.getElementById('location').innerText = "As informações de localização não estão disponíveis.";
                break;
            case error.TIMEOUT:
                document.getElementById('location').innerText = "A solicitação para obter a localização expirou.";
                break;
            case error.UNKNOWN_ERROR:
                document.getElementById('location').innerText = "Ocorreu um erro desconhecido.";
                break;
        }
    }
</script>
<script src="https://code.jquery.com/jquery-3.7.1.js"></script>
@push('updatequantity')
    <script>
        $('.quantity').change(function(e) {
            e.preventDefault();
            let id = 0,
                value = 0;
            id = $(e.target).data('id');
            value = $(e.target).val();

            @this.updateQuantity(id, value);
        });
    </script>
@endpush