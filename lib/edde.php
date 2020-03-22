<?php
if (isset($_GET['id'])) { ?>
    <a href="edit.php?id=<?=$_GET['id']?>">수정쓰</a>
    <form class="deles" action="_delete.php" method="post">
        <input type="hidden" name="id" value="<?=$_GET['id']?>">
        <input type="submit" value="삭 - 제">
    </form>
<?php }?>