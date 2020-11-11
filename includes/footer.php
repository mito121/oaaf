<?php
/* ## Show footer nav if page is scanner ## */
if ($_GET['page'] == 'scanner' || empty($_GET['page'])) {
    $footer_menu = "
      <div id=\"footer-menu\">
         <div id=\"footer-nav-toggle\" class=\"nav-toggle footer-btn\"></div>
         <div class=\"footer-btn help-icon\"></div>
      </div>";
} else {
    $footer_menu = "";
}
?>
<footer>
    <?php echo $footer_menu; ?>
</footer>
<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<!-- axios -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.20.0/axios.min.js" integrity="sha512-quHCp3WbBNkwLfYUMd+KwBAgpVukJu5MncuQaWXgCrfgcxCJAq/fo+oqrRKOj+UKEmyMCG3tb8RB63W+EmrOBg==" crossorigin="anonymous"></script>
<!-- vue -->
<script src="assets/js/vue.js"></script>
<!-- custom -->
<script src="assets/js/main.js"></script>
</body>
</html>
