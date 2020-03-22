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