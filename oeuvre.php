<?php include('header.php'); ?>
 
<?php
include('oeuvres.php');

var_dump($_GET);

$oeuvre = $oeuvres[$_GET['id']];  

echo '<main>
        <article id="detail-oeuvre">
            <div id="img-oeuvre">'
            . $oeuvre['image'] . 
            '</div>
            <div id="contenu-oeuvre">
                <h1>' . $oeuvre['title']. '</h1>
                <p class="description">' . $oeuvre['author']. '</p>
                <p class="description-complete">' . $oeuvre['description'] .
                '</p>
            </div>
        </article>
    </main>';



?>
<?php include('footer.php'); ?>
