        <!--Scroll to top-->
        <button class="scroll-top scroll-to-target" data-target="html"><i class="flaticon-up-arrow-1"></i>Top</button>
    </div>


    <!-- jequery plugins -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/owl.js"></script>
    <script src="assets/js/wow.js"></script>
    <script src="assets/js/validation.js"></script>
    <script src="assets/js/jquery.fancybox.js"></script>
    <script src="assets/js/TweenMax.min.js"></script>
    <script src="assets/js/appear.js"></script>
    <script src="assets/js/jquery.countTo.js"></script>
    <script src="assets/js/scrollbar.js"></script>
    <script src="assets/js/jquery.nice-select.min.js"></script>
    <script src="assets/js/isotope.js"></script>
    <script src="assets/js/tilt.jquery.js"></script>

    <!-- map script -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA-CE0deH3Jhj6GN4YvdCFZS7DpbXexzGU"></script>
    <script src="assets/js/gmaps.js"></script>
    <script src="assets/js/map-helper.js"></script>

    <!-- main-js -->
    <script src="assets/js/script.js"></script>

        <!-- Custom Code -->
    <script type="text/javascript">
        $(document).ready(function () {
          function AddReadMore() {
            //This limit you can set after how much characters you want to show Read More.
            var carLmt = 174;
            // Text to show when text is collapsed
            var readMoreTxt = " MORE DETAILS";
            // Text to show when text is expanded
            var readLessTxt = " LESS DETAILS";

            //Traverse all selectors with this class and manupulate HTML part to show Read More
            $(".add-read-more").each(function () {
              if ($(this).find(".first-section").length) return;

              var allstr = $(this).text();
              if (allstr.length > carLmt) {
                var firstSet = allstr.substring(0, carLmt);
                var secdHalf = allstr.substring(carLmt, allstr.length);
                var strtoadd = firstSet + "<span class='second-section'>" + secdHalf + "</span><br><span class='read-more'><i class='flaticon-right-arrow'></i>" +
                readMoreTxt + "</span><br><span class='read-less'><i class='flaticon-right-arrow'></i>" + readLessTxt + "</span>";
                $(this).html(strtoadd);
              }
            });

            //Read More and Read Less Click Event binding
            $(document).on("click", ".read-more,.read-less", function () {
              $(this)
                .closest(".add-read-more")
                .toggleClass("show-less-content show-more-content");
            });
          }

          AddReadMore();
        });
    </script>




    

</body>
</html>
