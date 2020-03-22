<?php require('lib/top.php');?>
        <div>
            <h3>수정하기</h3>
            <form action="_edit.php" method="post">
                <input type="hidden" name="b_title" value="<?=$_GET['id']?>">
                <p><input class = "wrap" type="text" name="title" placeholder="여기에 제목을 적어주세요." value="<?php title();?>"></p>
                <p><textarea class = "wrap" name="contents" placeholder="여기엔 내용을 적어주세요." rows="20"><?php contents();?></textarea></p>
                <p><input type="submit" value="저장 쓰 !"></p>
            </form>
        </div>
    </div>
<?php require('lib/btm.php');?>