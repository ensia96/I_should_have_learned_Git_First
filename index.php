<?php require('lib/top.php');?>
        <h1><a href="index.php">문서띠</a></h1>
        <ol><?=title_list();?></ol>
        <p><a href="write.php">글쓰기</a></p>
        <?php
        if (isset($_GET['id'])) { ?>
            <a href="edit.php?id=<?=$_GET['id']?>">수정쓰</a>
            <form action="delete_.php" method="post">
                <input type="hidden" name="id" value="<?=$_GET['id']?>">
                <input type="submit" value="삭ㅡ제">
            </form>
        <?php }?>
        <h2><?=title();?></h2>
        <pre><?=contents();?></pre>
<?php require('lib/btm.php');?>