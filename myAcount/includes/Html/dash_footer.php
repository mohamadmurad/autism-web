
    <script src="../<?php echo Config::get("target/jquery"); ?>jquery.min.js"></script>
    <script src="../<?php echo Config::get("target/bootstrap"); ?>js/bootstrap.min.js"></script>
    <script src="../<?php echo Config::get("target/js"); ?>main.js"></script>
    <script src="../dashboard/<?php echo Config::get("target/js"); ?>dashboard.js"></script>
    <script>
     $("#all-user").on('click','.clickable-row', function (e, row, $element) {
    window.location = $(this).data('href');
});
    </script>
   
</body>

</html>
<?php ob_end_flush(); ?>