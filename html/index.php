<?php //session_start(); ?>

<?php
 include ("../koneksi.php")
 
?>
<?php 
    if(!(isset($_SESSION['user']))){
    echo "
    <script>
    alert ('Login terlebih dahulu');
    location.href='../admin/masuk.php';
    </script>";
    } 
    else {
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Kretek</title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <?php
    include("../php/header.php");
    ?>
    <a href="../admin/destroy.php">Logout</a>
    <section id="hero">
    </section>

    <section id="content">
        <div class="container">
        </div>
        
    <?php
        include ("../php/mainbar.php")
    ?>

    <?php
    include ("../php/sidebar.php")
    ?>
    </section>

    <div class="clearfix">
        
    </div>
    
    <?php
    include("../php/footer.php")
    ?>
<!--  
<?php //else :  

//     echo "
//     <script>
//     alert ('Login terlebih dahulu');
//     location.href='../admin/masuk.php';
//     </script>";

// endif; 
?> -->
<?php
    }
?>
</body>

</html>