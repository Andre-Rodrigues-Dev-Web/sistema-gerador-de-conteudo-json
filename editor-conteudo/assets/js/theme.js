//toogle
$(document).ready(function () {
  $(".sidebar-toggle").on("click", function () {
    $(".sidebar").toggleClass("collapsed");
    $(".content").toggleClass("collapsed-content");
    $(".list-unstyled").toggleClass("list-unstyled-none");
  });
});
