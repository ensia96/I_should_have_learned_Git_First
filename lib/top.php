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
        <h1><a href="index.php">문서띠</a></h1>
        <div id="grid">
            <ul>
            <div class="butt">
            <button id="butw" onclick="location.href='write.php'">글쓰기</button>
            <?php require('lib/edde.php');?></div>
            <?=title_list();?>
            </ul>