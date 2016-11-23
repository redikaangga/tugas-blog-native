<?php

// include("../koneksi.php");

use konek\con as con;

$show = new con;

$ambil = mysql_query($show->show());
// $row = mysql_fetch_array($ambil);

?>
<section id="mainbar">

    <div class="blog-wrapper">
        <?php
        while($row = mysql_fetch_array($ambil)) {
            ?>

            <div class="blog-item">
                <h1 class="blog-title"><?php echo $row["judul"] ?></h1>
                <div class="blog-meta"><?php echo $row["tanggal"] ?></div>
                <p class="blog-content">
                    <?php echo $row["isi"] ?>
                </p>
<!--                 <?php
                // if($row["id"] == 1)
    { ?> -->
    <a href="../php/atk.php?id=<?php echo $row['id'] ?>">Read More</a>
<!--     <?php 
} 
?> -->
</div>

<?php 
}
?>
</div>
</section>