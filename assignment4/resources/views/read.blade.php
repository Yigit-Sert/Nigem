<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>NigemAssignment2</title>
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
                        <button class="buttonTemplate shadow" style="background-color: #4CAF50;">
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
        <div class="pageContent">
            <button id="terugButton" class="buttonTemplate blueButton shadow">
                <p style="margin:0;">Terug</p>
                <i class="fa-solid fa-chevron-left"></i>
            </button>
            <nav>
                <section>
                    <p>Top producten popular</p>
                </section>
                <div class="navbarButtons" style="color:white">
                    27-09-2022 00:00:00 ~ 23-11-2022 23:59:59
                </div>
            </nav>
            <div class="tableDiv">
                <table cellspacing="0">
                    <tr>
                        <th>Productnaam</th>
                        <th>Verkocht</th>
                        <th>Populariteit</th>
                        <th>Omzet</th>
                        <th>Percentage totaal</th>
                    </tr>
                    <!-- copy table elements -->
                    @foreach($table as $_table)
                    <tr>
                        <td>{{ $_table->productnaam }}</td>
                        <td>{{ $_table->verkocht }}</td>
                        <td><button class="smallButton" style="background-color:#4CAF50; border:none; padding:0 10px; color:white;">{{ $_table->populariteit }} %</button></td>
                        <td>€ {{ $_table->omzet }}</td>
                        <td><button class="smallButton" style="background-color:#2196F3; border:none; padding:0 10px; color:white;">{{ $_table->percentageTotaal }} %</button></td>
                    </tr>
                    @endforeach
                </table>
                <footer>
                    <div class="footerDiv">Toont 1 tot 1 van de 1 items</div>
                    <div class="footerButtons">
                        <button class="disabled">Vorige</button>
                        <button class="number">1</button>
                        <button class="number">2</button>
                        <button class="number">3</button>
                        <button class="next">Volgende</button>
                    </div>
                </footer>
            </div>
        </div>
	</div>

	<script>
		$(document).ready(function () {
			$(".collapsible").click(function () {
				$(".tableDiv, footer").slideToggle(400);
				var collapseButton = document.getElementById("upDownArrowIcon");

				if (collapseButton.className == "fa-solid fa-chevron-up") {
					collapseButton.className = "fa-solid fa-chevron-down";
					console.log("if statement launched");
				} else {
					collapseButton.className = "fa-solid fa-chevron-up";
					console.log("if statement didnt launched");
				}
			});
		});
	</script>
</body>

</html>
