<?php require('lib/top.php');?>
        <h1><a href="index.php">글 수정하기</a></h1>
        <ul><?=title_list();?></ul>
        <h3>돌아가려면 글 수정하기를 누르세요</h3>
        <form action="_edit.php" method="post">
            <input type="hidden" name="b_title" value="<?=$_GET['id']?>">
            <p><input class = "wrap" type="text" name="title" placeholder="여기에 제목을 적어주세요." value="<?php title();?>"></p>
            <p><textarea class = "wrap" name="contents" placeholder="여기엔 내용을 적어주세요." rows="25"><?php contents();?></textarea></p>
            <p><input type="submit" value="저장 쓰 !"></p>
        </form>
<?php require('lib/btm.php');?>