<?php

    $active = "";
    if($_GET["p"]==2)
    {
        $active="class='hhactive'";
    }

?>


<style type="text/css">
    .hhactive{
        color:red!important;
    }

</style>

<div class="navbar-collapse collapse ">
    <ul class="nav navbar-nav">
        <li class="active"><a href="index.php">Home</a></li>
        <li class="dropdown">
            <a href="" class="dropdown-toggle " data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false">Features <b class=" icon-angle-down"></b></a>
            <ul class="dropdown-menu">
                <li><a <?= $active; ?> href="?p=2">Typography</a></li>
                <li><a href="components.html">Components</a></li>
				<li><a href="pricingbox.html">Pricing box</a></li>
            </ul>
        </li>
        <li><a href="portfolio.html">Portfolio</a></li>
        <li><a href="blog.html">Blog</a></li>
        <li><a href="contact.html">Contact</a></li>
    </ul>
</div>