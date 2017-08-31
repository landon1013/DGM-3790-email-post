$(document).ready(function() {
  $('#frmemail').submit(function(event) {
    $.ajax({
      type: 'POST',
      url: 'email-php.php',
      data: $('#frmemail').serialize(),
      success: function() {
        $('.success').fadeIn(1000)
      }
    })
  })
})
