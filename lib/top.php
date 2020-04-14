<?php require_once('lib/function.php');?>
<!DOCTYPE html>
<html lang="ko">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?=title();?></title>
        <?php require('lib/fonts-link.php');?>
        <?php require('lib/css.php');?>
    </head>
    <body>
        <div id=head>
            <h1><a href="index.php">1일 1커밋!</a></h1>
            <pre id="super">	탭←→↑↓↔↕⟳⟲&#13;&#10;git log --all --graph --oneline&#13;&#10;/usr/local/mysql/bin/mysql -uroot -p</pre>
        </div>
        <div id="grid">
            <ul>
            <div class="butt">
            <button id="butw" onclick="location.href='write.php'">글쓰기</button>
            <?php require('lib/edde.php');?></div>
            <?=title_list();?>
            </ul>