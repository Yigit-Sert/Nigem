<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Layout Usage in Laravel</title>
	<!-- FONT -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200&display=swap" rel="stylesheet">
	<!-- ICONS -->
	<script src="https://kit.fontawesome.com/4ec4d43c69.js" crossorigin="anonymous"></script>
	<!-- JS CDN -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"
    integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
	<div class="main">
        <div class="pageNavbar shadow">
            <div class="pageNavbarHeaderLeft shadow">
                <img id="pizzaLogo" src="./image/logo2.png">
            </div>
            <div class="pageNavbarHeaderRight">
                <i class="fa-solid fa-bars hidden hiddenIcon"></i>
                <img id="defaultlogo" src="./image/defaultlogo.png">
                <div id="pageNavbarHeaderRightWrap" style="
                display: flex;
                width: 100%;
                flex-direction: row;
                justify-content: flex-end;
                ">
                    <div class="pageNavbarHeaderRightInside">
                        <button class="buttonTemplate redButton shadow">
                            <i class="fa-solid fa-circle-info"></i>
                            <p style="margin:0;">4 product is niet op voorraad.</p>
                        </button>
                    </div>
                    <div class="pageNavbarHeaderRightInside">
                        <button class="buttonTemplate whiteButton shadow">
                            <i class="fa-solid fa-display"></i>
                        </button>
                        <button class="buttonTemplate whiteButton shadow">
                            <i class="fa-solid fa-mobile-screen"></i>
                        </button>
                        <button id="geopend" class="buttonTemplate shadow" style="background-color: #4CAF50;">
                        <i class="fa-regular fa-circle-check"></i>
                            <p style="margin:0;">Geopend</p>
                        </button>
                        <button class="buttonTemplate whiteButton shadow">
                            <i class="fa-regular fa-user"></i>
                        </button>
                        <button class="buttonTemplate whiteButton shadow">
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="pageLeftMenu">
            <div class="sidebarElement">
            <i class="fa-solid fa-chart-simple"></i>
            Statistieken</div>
            <div class="sidebarElement">
            <i class="fa-solid fa-list-check"></i>
            Bestellingen</div>
            <div class="sidebarElement">
            <i class="fa-solid fa-cash-register"></i>
            Kassa</div>
            <div class="sidebarElement">
            <i class="fa-solid fa-user-group"></i>
            Klanten</div>
            <div class="sidebarElement">
            <i class="fa-solid fa-wallet"></i>
            Financieel</div>
            <div class="sidebarElement">
            <i class="fa-solid fa-sheet-plastic"></i>
            Menukaart</div>
            <div class="sidebarElement">
            <i class="fa-solid fa-flag"></i>
            Reclame</div>
            <div class="sidebarElement">
            <i class="fa-solid fa-box"></i>
            Voorraad</div>
            <div class="sidebarElement">
            <i class="fa-solid fa-gear"></i>
            Instellingen</div>
        </div>
        <!--  -->
        @yield('content')
        <!--  -->
	</div>

	@yield('js')
</body>

</html>
