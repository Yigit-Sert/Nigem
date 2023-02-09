@extends('layouts.app')
@section('content')
        <div class="pageContent">
            <button id="terugButton" class="buttonTemplate blueButton shadow">
                <p style="margin:0;">Terug</p>
                <i class="fa-solid fa-chevron-left"></i>
            </button>
            <div id="navPlusTableDiv">
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
@endsection
