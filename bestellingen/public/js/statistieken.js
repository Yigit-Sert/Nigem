var first_click = true;
var first_click_platform = true;
var first_click_populairs = true;
var first_click_verkochte = true;
var first_click_codes = true;
var first_click_mail = true;

function closeTableOne() {
    var table = document.getElementById("table-1");
    // var body = table.getElementsByClassName("body")[0];
    var icon = table.getElementsByTagName("img")[0];

    if (first_click) {
        // body.style.display = "none";
        $("#table-1-body").slideUp();
        icon.style.transform = "rotate(180deg)";
        first_click = false;
    } else {
        // body.style.display = "flex";
        $("#table-1-body").slideDown();
        icon.style.transform = "rotate(360deg)";
        first_click = true;
    }
}

function closeTablePlatform() {
    var table = document.getElementById("table-platform");
    var icon = table.getElementsByTagName("img")[0];

    if (first_click_platform) {
        $("#table-platform-body").slideUp();
        icon.style.transform = "rotate(180deg)";
        first_click_platform = false;
    } else {
        $("#table-platform-body").slideDown();
        icon.style.transform = "rotate(360deg)";
        first_click_platform = true;
    }
}

function closeTablePopulairs() {
    var table = document.getElementById("table-populairs");
    var icon = table.getElementsByTagName("img")[0];

    if (first_click_populairs) {
        $("#table-populairs-body").slideUp();
        icon.style.transform = "rotate(180deg)";
        first_click_populairs = false;
    }
    else {
        $("#table-populairs-body").slideDown();
        icon.style.transform = "rotate(360deg)";
        first_click_populairs = true;
    }
}

function closeTableVerkochte() {
    var table = document.getElementById("table-verkochte");
    var icon = table.getElementsByTagName("img")[0];

    if (first_click_verkochte) {
        $("#table-verkochte-body").slideUp();
        icon.style.transform = "rotate(180deg)";
        first_click_verkochte = false;
    } else {
        $("#table-verkochte-body").slideDown();
        icon.style.transform = "rotate(360deg)";
        first_click_verkochte = true;
    }
}

function closeTableCodes() {
    var table = document.getElementById("table-codes");
    var icon = table.getElementsByTagName("img")[0];

    if (first_click_codes) {
        $("#table-codes-body").slideUp();
        icon.style.transform = "rotate(180deg)";
        first_click_codes = false;
    } else {
        $("#table-codes-body").slideDown();
        icon.style.transform = "rotate(360deg)";
        first_click_codes = true;
    }
}

function closeTableEmail() {
    var table = document.getElementById("table-email");
    var icon = table.getElementsByTagName("img")[0];

    if (first_click_mail) {
        $("#table-email-body").slideUp();
        icon.style.transform = "rotate(180deg)";
        first_click_mail = false;
    } else {
        $("#table-email-body").slideDown();
        icon.style.transform = "rotate(360deg)";
        first_click_mail = true;
    }
}