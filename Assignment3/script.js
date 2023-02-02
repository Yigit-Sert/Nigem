$(document).ready(function () {
  $(".buttonWideBoxes .buttonWrapping button").click(function () {
    $(this).toggleClass("transparentButton blackText blueButton shadow border");
    $(this).find("i").toggleClass("hiddenIcon");
  });
  $("#ContantPIN").click(function () {
    $(this).toggleClass("transparentButton blackText blueButton shadow border");
    $(this).find("i").toggleClass("hiddenIcon");
  });
  $(".main nav div button").click(function () {
    $(".form").slideToggle(400);
  });
  //   form operations
  $(".topDownButtons").click(function () {
    $(this).toggleClass("transparentButton whiteText blueButton shadow border");
    $(this).find("i").toggleClass("hiddenIcon");
  });
});
