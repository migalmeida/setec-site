<?php
?>
 <!-- Footer -->
    <footer class="text-center">
        <div class="footer-above" style="background-color: #2F292B;">
            <div class="container">
                <div class="row">
                    <div class="footer-col col-md-4">
                        <h3>Location</h3>
                        <p>Oporto<br>
                    </div>
                    <div class="footer-col col-md-4">
                        <h3>Around the Web</h3>
                        <ul class="list-inline">
                            <li>
                                <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-facebook"></i></a>
                            </li>
                            <li>
                                <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-twitter"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="footer-col col-md-4">
                        <h3>About Us</h3>
                        <p>Group A SETEC <a href="http://startbootstrap.com"></a>.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-below" style="background-color: rgba(47, 41, 43, 0.9);">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        Copyright &copy; Group A 2015
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-top page-scroll visible-xs visible-sm">
        <a class="btn btn-primary" href="#page-top">
            <i class="fa fa-chevron-up"></i>
        </a>
    </div>

    <script src="js/parallax.js"></script>
    <script>

        // Pretty simple huh?
        var scene = document.getElementById('scene');
        var parallax = new Parallax(scene);

    </script>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="js/classie.js"></script>
    <script src="js/cbpAnimatedHeader.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/freelancer.js"></script>
    <script>
        function changeBackground() {
            function changeBackground() {
                $(".bg").first().fadeIn("slow", function showNext() {
                    var next = $(this).next('div').length ? $(this).next('div') : $(".bg").first();
                    $(this).fadeOut('slow').delay(1000);
                    next.fadeIn("slow", showNext);
                });
            }
        }


        $(document).ready(function () {
            setTimeout(changeBackground, 1000);
        });
    </script>



</body>

</html>
