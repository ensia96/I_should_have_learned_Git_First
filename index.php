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
    <?=nl2br(상세내용띠)?>
    <p>노오력 : <?=strlen(상세내용띠)?> 점</p>
</body>
</html>