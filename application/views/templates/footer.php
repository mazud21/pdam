<!DOCTYPE html>

<html>
 <head>

  <!-- My CSS -->
  <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/css/style.css">
   <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="<?= base_url(); ?>assets/js/sweetalert2.all.min.js"></script>
    <script src="<?= base_url(); ?>assets/js/myscript.js"></script> 
        
    <script>
    var baseurl = "<?php echo base_url("index.php/"); ?>"; // Buat variabel baseurl untuk nanti di akses pada file config.js
    </script>
    
    <script src="<?php echo base_url("js/jquery.min.js"); ?>"></script> <!-- Load library jquery -->
    <script src="<?php echo base_url("js/config.js"); ?>"></script> <!-- Load file process.js -->
 </head>

<body>
 
<!-- Footer -->
<footer class="page-footer font-small blue mt-4">

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3" style="color: #ffffff; background-color: #4c7ce3;">© 2019 Copyright:
    <a href="#" style="color: #ffffff;"> hmazud@gmail.com</a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->
</body>

</html>