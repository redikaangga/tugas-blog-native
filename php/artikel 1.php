<?php
include ("../koneksi.php")

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

    <section id="hero">
    </section>

    <section id="content">
        <div class="container">
        </div>

        <section id="mainbar">

            <div class="blog-wrapper">
                <?php
                while($row = mysql_fetch_array($ambil)) {
                    ?>

                    <div class="blog-item">
                        <h1 class="blog-title"><?php echo $row["judul"] ?></h1>
                        <div class="blog-meta">5 Oktober 2015</div>
                        <p class="blog-content">
                            <?php echo $row["isi"] ?>
                        </p>
                    </div>
                    <?php 
                }
                ?>
            </div>
        </section>

        <?php
        include ("../php/sidebar.php")
        ?>
    </section>

    <div class="clearfix">
        
    </div>
    
    <?php
    include("../php/footer.php")
    ?>

</body>

</html>