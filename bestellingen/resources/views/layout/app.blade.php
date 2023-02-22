<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="title" content="Ultimatum">
    <meta name="description" content="Ultimatum App Web Page">
    <title>Ultimatum | @yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    @yield('css')
</head>

<body>
    <!--Navbar-->
    <nav>
        <div class="nav-left">
            <div class="pizza-logo">
                <a href="/">
                    <img src="{{ asset('assets/img/pizza_logo_4.png') }}" alt="pizza_logo" width="60"
                        height="60">
                </a>
            </div>
        </div>
        <div class="nav-right">
            <button id="menu-button" class="nav-responsive-sidebar" type="button" title="sidebar"
                onclick="toggleSidebar()">
                <img src="{{ asset('assets/img/icons/navbar/responsive/more.png') }}" alt="" width="32"
                    height="32">
            </button>
            <div class="responsive-ultimatum-logo">
                <img src="{{ asset('assets/img/icons/navbar/responsive/Logo.png') }}" alt="" width="87"
                    height="14">
            </div>
            <div class="ultimatum-logo">
                <img src="{{ asset('assets/img/ultimatum_logo.png') }}" alt="ultimatum_logo" width="174.02"
                    height="27.25">
            </div>
            <div class="nav-right-right">
                <button class="voorraad-button" type="button" title="button">
                    <img src="{{ asset('assets/img/icons/navbar/alert.png') }}" alt="" width="20"
                        height="20">
                    <p>4 product is niet op voorraad.</p>
                </button>
                <div class="header-buttons-div">
                    <button class="header-buttons" type="button" title="button">
                        <img src="{{ asset('assets/img/icons/navbar/tv.png') }}" alt="" width="20"
                            height="20">
                    </button>
                    <button class="header-buttons" type="button" title="button">
                        <img src="{{ asset('assets/img/icons/navbar/cellphone.png') }}" alt="" width="20"
                            height="20">
                    </button>
                    <button class="geopend-button" type="button" title="button">
                        <img src="{{ asset('assets/img/icons/navbar/check.png') }}" alt="" width="20"
                            height="20">
                        <p>Geopend</p>
                    </button>
                    <button class="header-buttons" type="button" title="button">
                        <img src="{{ asset('assets/img/icons/navbar/user.png') }}" alt="" width="20"
                            height="20">
                    </button>
                    <button class="header-buttons" type="button" title="button">
                        <img src="{{ asset('assets/img/icons/navbar/search.png') }}" alt="" width="20"
                            height="20">
                    </button>
                </div>
            </div>
        </div>
    </nav>
    <!--#Navbar-->
    <!--Main-->
    <main>
        <!--Sidebar-->
        <aside>
            <a href="/statistieken">
                <div class="sidebar-div">
                    <div class="sidebar-content-div">
                        <div class="icon-div">
                            <img src="{{ asset('assets/img/icons/sidebar/static.png') }}" alt="" width="32"
                                height="32">
                        </div>
                        <p>Statistieken</p>
                    </div>
                </div>
            </a>
            <a href="/bestellingen">
                <div class="sidebar-div">
                    <div class="sidebar-content-div">
                        <div class="icon-div">
                            <img src="{{ asset('assets/img/icons/sidebar/list.png') }}" alt="" width="32"
                                height="32">
                        </div>
                        <p>Bestellingen</p>
                    </div>
                </div>
            </a>
            <a href="/kassa">
                <div class="sidebar-div">
                    <div class="sidebar-content-div">
                        <div class="icon-div">
                            <img src="{{ asset('assets/img/icons/sidebar/cash.png') }}" alt=""
                                width="32" height="32">
                        </div>
                        <p>Kassa</p>
                    </div>
                </div>
            </a>
            <div class="sidebar-div">
                <div class="sidebar-content-div">
                    <div class="icon-div">
                        <img src="{{ asset('assets/img/icons/sidebar/people.png') }}" alt="" width="32"
                            height="32">
                    </div>
                    <p>Klanten</p>
                </div>
            </div>
            <div class="sidebar-div justify-content-space-between">
                <div class="sidebar-content-div">
                    <div class="icon-div">
                        <img src="{{ asset('assets/img/icons/sidebar/wallet.png') }}" alt="" width="32"
                            height="32">
                    </div>
                    <p>
                        Financieel
                    </p>
                </div>
                <img src="{{ asset('assets/img/icons/sidebar/plus.png') }}" class="margin-right" alt=""
                    width="15" height="15">
            </div>
            <div class="sidebar-div justify-content-space-between">
                <div class="sidebar-content-div">
                    <div class="icon-div">
                        <img src="{{ asset('assets/img/icons/sidebar/page.png') }}" alt="" width="32"
                            height="32">
                    </div>
                    <p>
                        Menukaart
                    </p>
                </div>
                <img src="{{ asset('assets/img/icons/sidebar/plus.png') }}" class="margin-right" alt=""
                    width="15" height="15">
            </div>
            <div class="sidebar-div justify-content-space-between">
                <div class="sidebar-content-div">
                    <div class="icon-div">
                        <img src="{{ asset('assets/img/icons/sidebar/flag.png') }}" alt="" width="32"
                            height="32">
                    </div>
                    <p>
                        Reclame
                    </p>
                </div>
                <img src="{{ asset('assets/img/icons/sidebar/plus.png') }}" class="margin-right" alt=""
                    width="15" height="15">
            </div>
            <div class="sidebar-div">
                <div class="sidebar-content-div">
                    <div class="icon-div">
                        <img src="{{ asset('assets/img/icons/sidebar/box.png') }}" alt="" width="32"
                            height="32">
                    </div>
                    <p>
                        Voorraad
                    </p>
                </div>
            </div>
            <div class="sidebar-div justify-content-space-between">
                <div class="sidebar-content-div">
                    <div class="icon-div">
                        <img src="{{ asset('assets/img/icons/sidebar/gear.png') }}" alt="" width="32"
                            height="32">
                    </div>
                    <p>
                        Instellingen
                    </p>
                </div>
                <img src="{{ asset('assets/img/icons/sidebar/plus.png') }}" class="margin-right" alt=""
                    width="15" height="15">
            </div>
        </aside>
        <!--#Sidebar-->
        <!--Section-->
        <section>
            @yield('section')
        </section>
        <!--#Section-->
    </main>
    <!--#Main-->
    <!--JavaScript-->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/script.js') }}"></script>
    @yield('js')
    <!--#JavaScript-->
</body>

</html>
