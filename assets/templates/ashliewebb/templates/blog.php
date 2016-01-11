<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en-us">
<?php include_once('includes/head.tpl.php'); ?>
<body itemscope itemtype="http://schema.org/WebPage" class="[[*alias]] blog-homepage">

<?php include_once('includes/header.tpl.php'); ?>

<div class="main-wrapper">
    <main class="main" id="main" role="main">
        [[!getResources? &tpl=`teaser` &limit=`0`]]
    </main>
</div>

<?php include_once('includes/footer.tpl.php'); ?>

[[$scripts]]
</body>
</html>