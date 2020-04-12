<footer class="footer-area">
      <div class="copyright-section">
        <p>Copyright &copy; Joinoffers</p>
      </div>
    </footer>
    <!--====== jquery js ======-->
    <script src="assets/js/jquery.min.js"></script>
    <!--====== Popper js ======-->
    <script src="assets/js/Popper.js"></script>
    <!--====== Bootstrap js ======-->
    <script src="assets/js/bootstrap.min.js"></script>
    <!--====== Jquery easing js ======-->
    <script src="assets/js/jquery.easing.min.js"></script>
    <!--====== wow js ======-->
    <script src="assets/js/wow.min.js"></script>
    <!--====== Owl carousel js ======-->
    <script src="assets/js/owl.carousel.min.js"></script>
    <!-- <script src="assets/js/mixitup.min.js"></script> -->
    <!--====== jquery ui js ======-->
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <!--====== Main js ======-->
    <script src="assets/js/clock.js"></script>
    <script src="assets/js/main.js"></script>

    <script>
  $( function() {
    $( "#slider-range" ).slider({
      range: true,
      min: 0,
      max: 2000,
      values: [ 0, 300 ],
      slide: function( event, ui ) {
        $( "#amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
      }
    });
    $( "#amount" ).val( "$" + $( "#slider-range" ).slider( "values", 0 ) +
      " - $" + $( "#slider-range" ).slider( "values", 1 ) );
  } );
  </script>
  </body>
</html>