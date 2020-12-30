$(document).ready(function () {
  // Checkboxes
  $('.ui.checkbox').checkbox();
  
  // Close messages
  $('.message .close').on('click', function() {
    $(this).closest('.message').transition('fade');
  });
  
  // Post actions
  $('#post-actions.menu .item').tab();
});
