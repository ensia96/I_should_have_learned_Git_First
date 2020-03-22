<?php require('lib/top.php');?>
        <h1><a href="index.php">글 수정하기</a></h1>
        <ol><?=title_list();?></ol>
        <h2>돌아가려면 글 수정하기를 누르세요</h2>
        <form action="edit_.php" method="post">
            <input type="hidden" name="b_title" value="<?=$_GET['id']?>">
            <p><input type="text" name="title" placeholder="여기에 제목을 적어주세요." value="<?php title();?>"></p>
            <p><textarea class = "wrap" name="contents" placeholder="여기엔 내용을 적어주세요." rows="25"><?php contents();?></textarea></p>
            <p><input type="submit" value="저장 쓰 !"></p>
        </form>
<?php require('lib/btm.php');?>