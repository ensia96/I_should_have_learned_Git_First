<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>문서띠</title>
</head>
<body>
    <h1><a href="index.php">문서띠</a></h1>
    <ol>
    <?php
    $list = scandir('data');
    $i = 0;
    while ($i<count($list)) {
        if ($list[$i] != '.') {
            if($list[$i] != '..') {
                ?>
                <li><a href="index.php?id=<?=$list[$i]?>"><?=$list[$i]?></a></li>
                <?php
            }
        }
        $i = $i + 1;
    }
    ?>  
    </ol>
    <h2>
        <?php
        if (isset($_GET['id'])) {
            echo $_GET['id'];
        } else {
            echo "어서오세요";
        }
        ?>
    </h2>
    <?php
    if (isset($_GET['id'])) {
        echo nl2br(file_get_contents('data/'.$_GET['id']));
        echo "<p>노오력 : ".strlen(file_get_contents('data/'.$_GET['id']))."점</p>";
    } else {
        echo "Git 공부 늦게해서 지금부터 공부내용 정리한거 올리는 사람입니다.";
    }
    ?>
</body>
</html>