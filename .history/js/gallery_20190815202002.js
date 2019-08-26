$(document).on("click", '[data-toggle="lightbox"]', function(event) {
  event.preventDefault();
  $(this).ekkoLightbox();
});

$(this).ekkoLightbox({
  alwaysShowClose: true,
  onShown: function() {
      console.log('Checking our the events huh?');
  },
  onNavigate: function(direction, itemIndex)
      console.log('Navigating '+direction+'. Current item: '+itemIndex);
  
});