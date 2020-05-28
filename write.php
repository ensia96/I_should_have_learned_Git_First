<?php require('lib/top.php');?>
        <div>
            <h3>글 쓰기</h3>
            <form action="_write.php" method="post">
                <p><input class = "wrap" type="text" name="title" placeholder="여기에 제목을 적어주세요." size="55"></p>
                <p><textarea class = "wrap" name="contents" placeholder="여기엔 내용을 적어주세요." rows="20"></textarea></p>
                <p><input type="submit" value="저장 쓰 !"></p>
            </form>
        </div>
    </div>
<?php require('lib/btm.php');?>