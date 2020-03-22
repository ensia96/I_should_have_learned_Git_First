<?php require('lib/top.php');?>
        <h1><a href="index.php">문서띠</a></h1>
        <ul><?=title_list();?></ul>
        <p><a href="write.php">글쓰기</a></p>
        <?php require('lib/edde.php');?>
        <h2><?=title();?></h2>
        <pre><?=contents();?></pre>
<?php require('lib/btm.php');?>