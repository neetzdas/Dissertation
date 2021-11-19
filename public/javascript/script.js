jQuery(document).ready(function() {
  var $sidebar= $('.sidebar').css('top', $('.navbar'));
  
  // to dismiss sidebar 
  $('.dismiss, .overlay').on('click', function() {
    restore();
  });

  // to call sidebar
  $('.navbar-toggler').on('click', function(e) {
      e.preventDefault();
      collapse(); 
  });

  // making function to show sidebar menu
  function collapse(){
    $sidebar.addClass('active');
    $('.overlay').addClass('active');
    $('.navbar-collapse > ul').appendTo('.sidebar').addClass('w-100 text-center');
    $('.sidebar > ul .nav-link').addClass('w-100');
  }

  // making function to hide sidebar menu
  function restore() {
    $sidebar.removeClass('active');
    $('.overlay').removeClass('active');
    $('.sidebar > ul').appendTo('.navbar-collapse').removeClass('w-100 text-center');
    $('.sidebar > ul .nav-link').removeClass('w-100');
    $('.navbar-collapse').css('display', 'none');
  }

  // to hide sidebar menu automatically when window is resized
  $(window).resize(function() {
    if (window.innerWidth > 768) {
      restore();
    }
  });

});