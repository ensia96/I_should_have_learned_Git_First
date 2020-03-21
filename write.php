<?php
function title_list() {
    $list = scandir('./data'); $i = 0;
    while ($i<count($list)) {
        if ($list[$i] != '.') {
            if($list[$i] != '..') { ?>
                <li><a href="index.php?id=<?=$list[$i]?>"><?=$list[$i]?></a></li>
            <?php }
        }
        $i = $i + 1;
    }
}
function title() {
    if (isset($_GET['id'])) {
        echo $_GET['id'];
    } else {
        echo "어서오세요";
    }
}
function contents() {
    if (isset($_GET['id'])) {
        echo nl2br(file_get_contents('data/'.$_GET['id']));
        echo "<p>노오력 : ".strlen(file_get_contents('data/'.$_GET['id']))."점</p>";
    } else {
        echo "Git 공부 늦게해서 지금부터 공부내용 정리한거 올리는 사람입니다.";
    }
}
?>
<!DOCTYPE html>
<html lang="ko">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?=title();?></title>
    </head>
    <body>
        <h1><a href="index.php">글쓰기</a></h1>
        <ol><?=title_list();?></ol>
        <h2>돌아가려면 글쓰기를 누르세요</h2>
        <form action="write_.php" method="post">
            <p><input type="text" name="title" placeholder="여기에 제목을 적어주세요." size="55"></p>
            <p><textarea name="contents_" placeholder="여기엔 내용을 적어주세요. &#13;&#10;(오른쪽 밑을 당기면 더 크게볼 수 있어요~)" cols="53" rows="10"></textarea></p>
            <p><input type="submit" value="저장 쓰 !"></p>
        </form>
    </body>
</html>