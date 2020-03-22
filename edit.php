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
        echo file_get_contents('data/'.$_GET['id']);
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
        <style>
            .wrap {
                width:100%;
	            box-sizing:border-box;
	            max-width:100%;
	            line-height:1.5;
	            padding:15px 15px 30px;
	            border-radius:3px;
	            font:13px Tahoma, cursive;
            }
        </style>
    </head>
    <body>
        <div id="font">
            <h1><a href="index.php">글 수정하기</a></h1>
            <ol><?=title_list();?></ol>
            <h2>돌아가려면 글 수정하기를 누르세요</h2>
            <form action="edit_.php" method="post">
                <input type="hidden" name="b_title" value="<?=$_GET['id']?>">
                <p><input type="text" name="title" placeholder="여기에 제목을 적어주세요." value="<?php title();?>"></p>
                <p><textarea class = "wrap" name="contents" placeholder="여기엔 내용을 적어주세요." rows="25"><?php contents();?></textarea></p>
                <p><input type="submit" value="저장 쓰 !"></p>
            </form>
        </div>
    </body>
</html>