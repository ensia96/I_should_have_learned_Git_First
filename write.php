<?php require('lib/top.php');?>
        <h1><a href="index.php">글 쓰기</a></h1>
        <ol><?=title_list();?></ol>
        <h2>돌아가려면 글 쓰기를 누르세요</h2>
        <form action="write_.php" method="post">
            <p><input type="text" name="title" placeholder="여기에 제목을 적어주세요." size="55"></p>
            <p><textarea class = "wrap" name="contents" placeholder="여기엔 내용을 적어주세요." rows="25"></textarea></p>
            <p><input type="submit" value="저장 쓰 !"></p>
        </form>
<?php require('lib/btm.php');?>