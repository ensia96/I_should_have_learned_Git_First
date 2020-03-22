<?php
if (isset($_GET['id'])) { ?>
    <button id="bute" onclick="location.href='edit.php?id=<?=$_GET['id']?>'">수정쓰</button>
    <form class="deles" action="_delete.php" method="post">
        <input type="hidden" name="id" value="<?=$_GET['id']?>">
        <button id="butd" type="submit">삭제쓰</button>
    </form>
<?php }?>