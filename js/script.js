'use strict';

$(function() {
  
  // Responsive navigation menu
  $('.toggle-icon').click(function() {
    $('.toggle-icon').toggle();
    $('#navbar-nav').slideToggle('slow', function() {
      $(this).toggleClass('nav-expanded').css('display', '');
    });
  });

  // Disable enter key submitting a form
  $('#contact-form').keypress(function(e) {
    if ((e.which == 13) && ($(e.target)[0] != $('textarea')[0]) && ($(e.target)[0] != $('#submit')[0])) {
      return false;
    }
  })
});

// Previous page link
const goBack = () => {
  window.history.back();
}

// Reset button to reload page
const reset = document.getElementById('reset');
if (reset) {
  reset.addEventListener('click', () => {
    location.replace(location.href);
  });
}

// Show alert before confirmation page reloaded or refreshed
const confirmPage = document.getElementById('confirm-page');
if (confirmPage) {
  window.addEventListener('beforeunload', (e) => {
    e.preventDefault();
    e.returnValue = '';
  });
}