$(document).ready(function() {
  //change the integers below to match the height of your upper dive, which I called
  //banner.  Just add a 1 to the last number.  console.log($(window).scrollTop())
  //to figure out what the scroll position is when exactly you want to fix the nav
  //bar or div or whatever.  I stuck in the console.log for you.  Just remove when
  //you know the position.

var $window = $(window),
    $stickyEl = $('#art-featuredsongs'),
    elTop = $stickyEl.offset().top;
    $replaceEl = $('#replaceDiv');

    $window.scroll(function() {
         $stickyEl.toggleClass('sticky', $window.scrollTop() > elTop);
        if ($window.scrollTop() > elTop) $('#replaceDiv').height($('#art-featuredsongs').outerHeight()); else $('#replaceDiv').height(0);
        alert("balls");
     });



  }
