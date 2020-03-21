<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>문서띠</title>
</head>
<body>
    <h1>문서띠</h1>
    <ol>
        <li><a href="index.php?id="></a></li>
    </ol>
    <h2><?=$_GET['id']?></h2>
    <?=nl2br(file_get_contents('data/'.$_GET['id']))?>
    <p>노오력 : <?=strlen(file_get_contents('data/'.$_GET['id']))?> 점</p>
</body>
</html>