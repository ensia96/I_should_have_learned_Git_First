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
        echo "<pre>".file_get_contents('data/'.$_GET['id'])."</pre>";
        if (basename($_SERVER['PHP_SELF'])== "index.php") {
            echo "<p>노오력 : ".strlen(file_get_contents('data/'.$_GET['id']))."점</p>";
        }
    } else {
        echo "Git 공부 늦게해서 공부한 내용 정리한거 올리는 사람입니다.";
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
        <h1><a href="index.php">문서띠</a></h1>
        <ol><?=title_list();?></ol>
        <p><a href="write.php">글쓰기</a></p>
        <?php
        if (isset($_GET['id'])) { ?>
            <a href="edit.php?id=<?=$_GET['id']?>">수정쓰</a>
        <?php }?>
        <h2><?=title();?></h2>
        <?=contents();?>
    </body>
</html>