<!-- First Blog Post -->
<h2>
    <a href="article.php?id=<?php echo $id; ?>"><?php echo $title; ?></a>
</h2>
<p><span class="glyphicon glyphicon-time"></span> Posted on <?php echo $date; ?></p>
<?php echo $content; ?>
<br>
<br>
<a class="btn btn-primary" href="article.php?id=<?php echo $id; ?>">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>
<hr>