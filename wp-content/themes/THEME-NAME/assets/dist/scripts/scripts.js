$(function(){
  $('.nav-toggle').click(function(e){
    // Add class to element
    $(this).toggleClass('nav-toggle--active');
    // Select the next <ul> element that contains navigation links
    $(this).next('ul').slideToggle(function(){
      $('.nav-toggle .nav-toggle__label').text($(this).is(':visible') ? 'Close' : 'Menu');
    });
    // Prevent default behaviour of the <a> tag
    e.preventDefault();
  });

  var navToggle = '<span class="nav-item__toggle"><i class="fa fa-fw fa-caret-down"></i></span>';
  
  // Append dropdown items with the navToggle content to toggle dropdowns
  $('.nav .dropdown').has('ul').append(navToggle);

  // Slide toggle sub menus on click of the appended navToggle
  $('.nav-item__toggle').on('click', function(){
    // Select the previous <ul> element
    $(this).prev('ul').slideToggle(function(){
      $(this).parent().toggleClass('dropdown--active');
    });
    // Log click in console
    console.log('hey im clicking here');
  });

});