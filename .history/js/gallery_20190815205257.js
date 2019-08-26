$(document).on("click", '[data-toggle="lightbox"]', function(event) {
  event.preventDefault();
  $(this).ekkoLightbox({
    alwaysShowClose: true,
    onShown: function() {
      console.log("Checking our the events huh?");
    }
  });
});
