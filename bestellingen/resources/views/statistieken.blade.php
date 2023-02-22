@extends('layout.app')
@section('title')
    Statistieken
@endsection
@section('css')
    <link rel="stylesheet" href="{{ asset('css/statistieken.css') }}">
@endsection
@section('section')
    {{-- Table Platform--}}
    <div id="table-platform" class="table-1">
        <div class="header platform-header">
            <p>Platform</p>
            <button class="up-icon-button" type="button" onclick="closeTablePlatform()">
                <img src="{{ asset('assets/img/statistieken/icons/up-arrow.png') }}" alt="">
            </button>
        </div>
        <div id="table-platform-body" class="body platform">
            <div class="platform-body-left-div">
                <div class="platform-textboxes">
                    <div class="platform-textbox">
                        <p>Datum van</p>
                        <input type="text">
                    </div>
                    <div class="platform-textbox">
                        <p>Datum t/m</p>
                        <input type="text">
                    </div>
                    <div class="platform-textbox">
                        <p>Periode</p>
                        <select id="periode" name="periode">
                            <option value="periode1">Periode 1</option>
                            <option value="periode2">Periode 2</option>
                        </select>
                    </div>
                </div>
                <button type="button" title="filteren">
                    <img src="{{ asset('assets/img/statistieken/icons/search.png') }}" alt="">
                    <p>Filteren</p>
                </button>
            </div>
            <div class="platform-body-right-div">
                <div>
                    <p>Where</p>
                    <label class="container-ch">Website
                        <input type="checkbox" checked="checked">
                        <span class="checkmark"></span>
                    </label>
                    <label class="container-ch">POS Systeem
                        <input type="checkbox" checked="checked">
                        <span class="checkmark"></span>
                    </label>
                    <label class="container-ch">Apps
                        <input type="checkbox" checked="checked">
                        <span class="checkmark"></span>
                    </label>
                    <label class="container-ch">Thuisbezorgd
                        <input type="checkbox" checked="checked">
                        <span class="checkmark"></span>
                    </label>
                    <label class="container-ch">Uber eats
                        <input type="checkbox" checked="checked">
                        <span class="checkmark"></span>
                    </label>
                </div>
                <div>
                    <p>Betalingsmethode</p>
                    <label class="container-ch">Bank
                        <input type="checkbox" checked="checked">
                        <span class="checkmark"></span>
                    </label>
                    <label class="container-ch">Contant
                        <input type="checkbox" checked="checked">
                        <span class="checkmark"></span>
                    </label>
                    <label class="container-ch">Contant/Pin
                        <input type="checkbox" checked="checked">
                        <span class="checkmark"></span>
                    </label>
                </div>
                <div>
                    <p>Afhalen/Bezorgen</p>
                    <label class="container-ch">Bezorging
                        <input type="checkbox" checked="checked">
                        <span class="checkmark"></span>
                    </label>
                    <label class="container-ch">Afhalen
                        <input type="checkbox" checked="checked">
                        <span class="checkmark"></span>
                    </label>
                    <label class="container-ch">In de winkel
                        <input type="checkbox" checked="checked">
                        <span class="checkmark"></span>
                    </label>
                </div>
            </div>
        </div>
    </div>
    {{-- #Table Platform--}}

    <div class="four-cards">
        <div class="cards light-orange">
            <img src="{{ asset('assets/img/statistieken/icons/shoppingcart.png') }}" alt="" width="50" height="50">
            <p>
                Bestellingen<br>16
            </p>
        </div>
        <div class="cards dark-blue">
            <img src="{{ asset('assets/img/statistieken/icons/product.png') }}" alt="" width="50" height="50">
            <p>
                Producten<br>4
            </p>
        </div>
        <div class="cards pink">
            <img src="{{ asset('assets/img/statistieken/icons/bezorgers.png') }}" alt="" width="50" height="50">
            <p>
                Bezorger<br>0
            </p>
        </div>
        <div class="cards green">
            <img src="{{ asset('assets/img/statistieken/icons/euro.png') }}" alt="" width="50" height="50">
            <p>
                Verkoop<br>40,00
            </p>
        </div>
    </div>

    {{-- Table Original--}}
    <x-statistieken-table />
    {{-- #Table Original--}}

    {{-- Table Populairs--}}
    <div id="table-populairs" class="table-1">
        <div class="header space-between">
            <p class="extra-text">Top 5 populairste producten</p>
            <div>
                <button class="extra-button" type="button" title="extra-button">
                    <p>Alles bekijken</p>
                </button>
                <button class="up-icon-button" type="button" onclick="closeTablePopulairs()">
                    <img src="{{ asset('assets/img/statistieken/icons/up-arrow.png') }}" alt="">
                </button>
            </div>
        </div>
        <div id="table-populairs-body" class="body zero-pad">
            <x-populairs-table/>
        </div>
    </div>
    {{-- #Table Populairs--}}

    {{-- Table Verkochte--}}
    <div id="table-verkochte" class="table-1">
        <div class="header space-between bg-red">
            <p class="extra-text">Top 5 minst verkochte producten</p>
            <div>
                <button class="extra-button" type="button" title="extra-button">
                    <p>Alles bekijken</p>
                </button>
                <button class="up-icon-button" type="button" onclick="closeTableVerkochte()">
                    <img src="{{ asset('assets/img/statistieken/icons/up-arrow.png') }}" alt="">
                </button>
            </div>
        </div>
        <div id="table-verkochte-body" class="body zero-pad">
            <x-populairs-table/>
        </div>
    </div>
    {{-- #Table Verkochte--}}

    {{-- Table Postcodes --}}
    <div id="table-codes" class="table-1">
        <div class="header space-between bg-green">
            <p class="extra-text">Top 5 populairste postcodes</p>
            <div>
                <button class="extra-button" type="button" title="extra-button">
                    <p>Alles bekijken</p>
                </button>
                <button class="up-icon-button" type="button" onclick="closeTableCodes()">
                    <img src="{{ asset('assets/img/statistieken/icons/up-arrow.png') }}" alt="">
                </button>
            </div>
        </div>
        <div id="table-codes-body" class="body zero-pad">
            <table>
                <thead>
                    <tr>
                        <th>Postcode</th>
                        <th>Totaal</th>
                        <th>Populariteit</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>2284</td>
                        <td>
                            <p class="green-bg">
                                1%
                            </p>
                        </td>
                        <td>
                            <p class="blue-bg">
                                1%
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <td>2284</td>
                        <td>
                            <p class="green-bg">
                                1%
                            </p>
                        </td>
                        <td>
                            <p class="blue-bg">
                                1%
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <td>2284</td>
                        <td>
                            <p class="green-bg">
                                1%
                            </p>
                        </td>
                        <td>
                            <p class="blue-bg">
                                1%
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <td>2284</td>
                        <td>
                            <p class="green-bg">
                                1%
                            </p>
                        </td>
                        <td>
                            <p class="blue-bg">
                                1%
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <td>2284</td>
                        <td>
                            <p class="green-bg">
                                1%
                            </p>
                        </td>
                        <td>
                            <p class="blue-bg">
                                1%
                            </p>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    {{-- #Table Postcodes --}}
    
    {{-- Table Email --}}
    <div id="table-email" class="table-1 margin-bottom">
        <div class="header space-between bg-yellow">
            <p class="extra-text">Top 5 Bezorging E-mails <span class="red-text">(Bevat geen gegevens over "Thuisbezorgd.nl" en "Uber Eats")</span></p>
            <div>
                <button class="extra-button" type="button" title="extra-button">
                    <p>Alles bekijken</p>
                </button>
                <button class="up-icon-button" type="button" onclick="closeTableEmail()">
                    <img src="{{ asset('assets/img/statistieken/icons/up-arrow.png') }}" alt="">
                </button>
            </div>
        </div>
        <div id="table-email-body" class="body zero-pad">
            <table>
                <thead>
                    <tr>
                        <th>E-mail</th>
                        <th>Klantnaam</th>
                        <th>Totaal</th>
                        <th>Populariteit</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>BERKAN.WASSENAAR6@HOTMAIL.COM</td>
                        <td>TEST BERKAY</td>
                        <td>
                            <p class="green-bg">
                                34
                            </p>
                        </td>
                        <td>
                            <p class="blue-bg">
                                1%
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <td>R.THIELE@QUICKNET.NL</td>
                        <td>RENE THIELE</td>
                        <td>
                            <p class="green-bg">
                                32
                            </p>
                        </td>
                        <td>
                            <p class="blue-bg">
                                1%
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <td>VINCEVERHOEF@GMAIL.COM</td>
                        <td>VINCENT VINCENT</td>
                        <td>
                            <p class="green-bg">
                                31
                            </p>
                        </td>
                        <td>
                            <p class="blue-bg">
                                1%
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <td>FARIDA-29@HOTMAIL.COM</td>
                        <td>FARIDA FARIDA</td>
                        <td>
                            <p class="green-bg">
                                29
                            </p>
                        </td>
                        <td>
                            <p class="blue-bg">
                                1%
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <td>COLIN.VOSSE@GMAIL.COM</td>
                        <td>C VOSSELMAN</td>
                        <td>
                            <p class="green-bg">
                                29
                            </p>
                        </td>
                        <td>
                            <p class="blue-bg">
                                1%
                            </p>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    {{-- #Table Email --}}
@endsection
@section('js')
    <script src="{{ asset('js/statistieken.js') }}"></script>
@endsection
