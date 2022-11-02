$(document).ready(function () {
    $("#thumb").click(function () {
      if ($("#thumb").hasClass("liked")) {
        $("#thumb").html('<i class="fa" aria-hidden="true" style="font-size:24px;">&#xf087</i>');
        $("#thumb").removeClass("liked");
      } else {
        $("#thumb").html('<i class="fa fa-thumbs-up" aria-hidden="true" style="font-size:24px;"></i>');
        $("#thumb").addClass("liked");
      }
    });
  });