document.addEventListener("DOMContentLoaded", function () {
  /* ALL*/
  M.AutoInit();

  /* SLIDER */
  var elems = document.querySelectorAll(".slider");
  var instances = M.Slider.init(elems, {
    indicators: false,
  });
});
