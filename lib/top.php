<?php require_once('lib/function.php');?>
<!DOCTYPE html>
<html lang="ko">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?=title();?></title>
        <link href="https://fonts.googleapis.com/css2?family=Gaegu:wght@700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Jua&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Black+Han+Sans&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Sunflower:wght@500&display=swap" rel="stylesheet">
        <style>
            body {
                margin:0;
            }
            a {
                color:black;
                text-decoration:none;
            }
            h1 {
                font:60px 'Gaegu', cursive;
                border-bottom:1px solid gray;
                margin:0;
                padding:17px;
            }
            ul {
                list-style:none;
                font:15px 'Jua', sans-serif;
                border-right:1px solid gray;
                width:130px;
                margin:0;
                padding:17px;
            }
            .butt {
                font:14px 'Jua', sans-serif;
                padding-bottom:10px;
                border-bottom:1px solid gray;
                margin-bottom:10px;
            }
            .deles {
                display:inline-block;
            }
            #grid {
                display:grid;
                grid-template-columns:200px 1fr;
                border-bottom:1px solid gray;
            }
            h2, h3 {
                font: Tahoma, cursive;
            }
            pre {
                font:13px Tahoma, cursive;
            }
            .no5power {
                font:17px 'Black Han Sans', sans-serif;
            }
            .wrap {
                width:95%;
	            box-sizing:border-box;
	            max-width:100%;
	            line-height:1.5;
	            padding:15px 15px 30px;
	            border-radius:3px;
                font:13px Tahoma, cursive;
            }
            .btm {
                font:12px 'Sunflower', sans-serif;
            }
        </style>
    </head>
    <body>
        <h1><a href="index.php">문서띠</a></h1>
        <div id="grid">
            <ul>
            <div class="butt"><a href="write.php">글쓰기</a>
            <?php require('lib/edde.php');?></div>
            <?=title_list();?>
            </ul>