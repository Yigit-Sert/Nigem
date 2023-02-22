@extends('layout.app')
@section('title')
    Bestellingen
@endsection
@section('css')
    <link rel="stylesheet" href="{{ asset('css/bestellingen.css') }}">
@endsection
@section('section')
    <div class="column-flex">
        <div class="bestellingen-first-row">
            <div class="bestellingen-buttons-div">
                <div class="bestellingen-left-buttons-div">
                    <button type="button" title="geopend" class="bestellingen-left-buttons bg-green">
                        <img src="assets/img/bestellingen/icons/geopend.png" alt="" width="20" height="20">
                        <p class="bestellingen-button-text">Bevestigd</p>
                        <p class="bestellingen-button-counter">0/1</p>
                    </button>
                    <button type="button" title="keuken" class="bestellingen-left-buttons bg-yellow">
                        <img src="assets/img/bestellingen/icons/keuken.png" alt="" width="20" height="20">
                        <p class="bestellingen-button-text">Keuken</p>
                        <p class="bestellingen-button-counter">0/1</p>
                    </button>
                    <button type="button" title="onderweg" class="bestellingen-left-buttons bg-pink">
                        <img src="assets/img/bestellingen/icons/box.png" alt="" width="20" height="20">
                        <p class="bestellingen-button-text">Onderweg</p>
                        <p class="bestellingen-button-counter">0/1</p>
                    </button>
                    <button type="button" title="verwerkt" class="bestellingen-left-buttons bg-blue">
                        <img src="assets/img/bestellingen/icons/reclame.png" alt="" width="20" height="20">
                        <p class="bestellingen-button-text">Verwerkt</p>
                    </button>
                </div>
                <div class="bestellingen-right-buttons-div">
                    <button type="button" title="filter" class="bestellingen-right-buttons">
                        <p class="bestellingen-button-text grey">Bestellingen Filter</p>
                    </button>
                    <div class="bestellingen-left-right-buttons-div">
                        <button type="button" title="left-arrow" class="left">
                            <img src="{{ asset('assets/img/bestellingen/icons/left-arrow.png') }}" alt=""
                                width="20" height="20">
                        </button>
                        <p>1/1</p>
                        <button type="button" title="right-arrow" class="right">
                            <img src="{{ asset('assets/img/bestellingen/icons/right-arrow.png') }}" alt=""
                                width="20" height="20">
                        </button>
                    </div>
                </div>
            </div>
            <div class="bestellingen-cards-div">
                <!--Card1-->
                <x-bestellingen-card />
                <!--#Card1-->
                {{-- Card2 --}}
                <div class="card-div">
                    <div class="left-upper-corner">
                        <div>
                            <p>1</p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="left-side">
                            <p>Buitenhof 4
                                2513AH
                                ‘s- gravemhage
                            </p>
                            <div>
                                <button type="button" title="money">
                                    <p>€12,00</p>
                                </button>
                                <img src="{{ asset('assets/img/bestellingen/icons/cash.png') }}" alt=""
                                    width="28" height="28">
                                <img src="{{ asset('assets/img/bestellingen/icons/thuisbeazorg.png') }}" alt=""
                                    width="28" height="28">
                            </div>
                        </div>
                        <div class="right-side">
                            <div class="right-side-left">
                                <div>
                                    <p>08:40</p>
                                </div>
                                <div>
                                    <p>z.s.m</p>
                                </div>
                                <div>
                                    <p style="width: 51px;">61.62 km</p>
                                </div>
                            </div>
                            <div class="right-side-right">
                                <div>
                                    <img src="{{ asset('assets/img/bestellingen/icons/geopend.png') }}" alt=""
                                        width="15" height="15">
                                </div>
                                <div>
                                    <img src="{{ asset('assets/img/bestellingen/icons/keuken.png') }}" alt=""
                                        width="15" height="15">
                                </div>
                                <div>
                                    <img src="{{ asset('assets/img/bestellingen/icons/bike.png') }}" alt=""
                                        width="15" height="15">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- #Card2 --}}
                {{-- Card3 --}}
                <div class="card-div">
                    <div class="left-upper-corner">
                        <div>
                            <p>2</p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="left-side">
                            <p>
                                Afhalen
                            </p>
                            <div>
                                <button type="button" title="money">
                                    <p>€12,00</p>
                                </button>
                                <img src="{{ asset('assets/img/bestellingen/icons/cash.png') }}" alt=""
                                    width="28" height="28">
                                <img src="{{ asset('assets/img/bestellingen/icons/pos.png') }}" alt=""
                                    width="28" height="28">
                            </div>
                        </div>
                        <div class="right-side">
                            <div class="right-side-left">
                                <div>
                                    <p>08:40</p>
                                </div>
                                <div>
                                    <p>z.s.m</p>
                                </div>
                                <div>
                                    <img src="{{ asset('assets/img/bestellingen/icons/desk.png') }}" alt=""
                                        width="15" height="15">
                                </div>
                            </div>
                            <div class="right-side-right">
                                <div>
                                    <img src="{{ asset('assets/img/bestellingen/icons/geopend.png') }}" alt=""
                                        width="15" height="15">
                                </div>
                                <div>
                                    <img src="{{ asset('assets/img/bestellingen/icons/keuken.png') }}" alt=""
                                        width="15" height="15">
                                </div>
                                <div>
                                    <img src="{{ asset('assets/img/bestellingen/icons/box.png') }}" alt=""
                                        width="15" height="15">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- #Card3 --}}
            </div>
        </div>
        <div class="bestellingen-second-row">
            <button type="button">
                <img src="{{asset('assets/img/bestellingen/icons/route.png')}}" alt="" width="20" height="20">
                <p>Route Planning</p>
            </button>
        </div>
    </div>
@endsection
