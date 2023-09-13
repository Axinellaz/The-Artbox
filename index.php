 <?php include('header.php'); ?>



<?php include('oeuvres.php'); ?>
<div id="liste-oeuvres">

<?php foreach($oeuvres as $key => $valueTab){

    echo '<article class="oeuvre">
                <a href="oeuvre.php?id='.$key.'">'
                    . $valueTab['image'].
                   '<h2>' .$valueTab['title'].  '</h2>
                    <p class="description">'. $valueTab['author']. '</p>',
                '</a>',
            '</article>';
}

?>

</div>   
<?php include('footer.php'); ?>