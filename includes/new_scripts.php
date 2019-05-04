<!-- Bootstrap Core JavaScript -->
<script src="public/Frontend/js/minicart.min.js"></script>
<script src="public/Frontend/js/bootstrap.min.js"></script>
<!-- flexSlider -->
<script defer src="public/Frontend/js/jquery.flexslider.js"></script>
<script>
// Mini Cart
paypal.minicart.render({
  action: '#'
});
if (~window.location.search.indexOf('reset=true')) {
  paypal.minicart.reset();
}
$(document).ready(function(){
  $(".dropdown").hover(
    function() {
      $('.dropdown-menu', this).stop( true, true ).slideDown("fast");
      $(this).toggleClass('open');
    },
    function() {
      $('.dropdown-menu', this).stop( true, true ).slideUp("fast");
      $(this).toggleClass('open');
    }
  );

  //script-for sticky-nav
  var navoffeset=$(".agileits_header").offset().top;
  $(window).scroll(function(){
    var scrollpos=$(window).scrollTop();
    if(scrollpos >=navoffeset){
      $(".agileits_header").addClass("fixed");
    }else{
      $(".agileits_header").removeClass("fixed");
    }
  });

  // here stars scrolling icon -->
  $().UItoTop({ easingType: 'easeOutQuart' });
  // here ends scrolling icon
});
</script>

<script type="text/javascript">
  $(window).load(function(){
    $('.flexslider').flexslider({
      animation: "slide",
      start: function(slider){
        $('body').removeClass('loading');
      }
    });
  });
</script>
<!-- //flexSlider -->
