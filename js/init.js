$(document).ready(function () {
  $(".sidenav").sidenav();
  $(".parallax").parallax();

  //#region Tabs do Sobre
  var options = { swipeable: true, duration: 600 };
  var el = document.querySelector("#tabSobre");
  var instance = M.Tabs.init(el, options);
  console.log(instance);
  //#endregion
});
