$(document).ready(function () {
  $(".buttonWideBoxes .buttonWrapping button").click(function () {
    //   Check if the siblings has the same class
    if ($(this).hasClass("blueButton")) {
      $(this).toggleClass(
        "transparentButton blackText blueButton shadow border"
      );
      $(this).find("i").toggleClass("hiddenIcon active");
    } else {
      $(this).toggleClass(
        "transparentButton blackText blueButton shadow border"
      );
      $(this).find("i").toggleClass("hiddenIcon active");

      $(this)
        .parent()
        .siblings("div")
        .children(".blueButton")
        .toggleClass("transparentButton blackText blueButton shadow border");
      // chose b/w siblings
      $(this)
        .siblings(".blueButton")
        .toggleClass("transparentButton blackText blueButton shadow border");
      $(this)
        .parent()
        .siblings("div")
        .find(".active")
        .toggleClass("hiddenIcon active");
      $(this).siblings().find(".active").toggleClass("hiddenIcon active");
    }
  });

  //   Sliding
  $(".main nav div button").click(function () {
    $(".form").slideToggle(400);
  });
  //   form operations
  $(".topDownButtons").click(function () {
    $(this).toggleClass("transparentButton whiteText blueButton shadow border");
    $(this).siblings(".blueButton").toggleClass("transparentButton whiteText blueButton shadow border");
    $(this).find("i").toggleClass("hiddenIcon active");
    $(this).siblings().children(".active").toggleClass("hiddenIcon active");
  });
});
