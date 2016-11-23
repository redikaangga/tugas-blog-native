<?php
include ("../koneksi.php");
?>
<?php
$id = $_GET['id'];

$sql = " SELECT konten.isi_main as isi,
                konten.judul ,
                konten.tanggal,
                konten.id
         FROM   konten 
         WHERE id=$id";

$ambil = mysql_query($sql, $con);
$row = mysql_fetch_array($ambil);
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

                    <div class="blog-item">
                        <h1 class="blog-title"><?php echo $row["judul"] ?></h1>
                        <div class="blog-meta"><?php echo $row["tanggal"]?></div>
                        <p class="blog-content">
                            <?php echo $row["isi"] ?>
                        </p>
                    </div>
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