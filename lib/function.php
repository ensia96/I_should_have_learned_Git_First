<?php
function title_list() {
    $list = scandir('./data'); $i = 0;
    while ($i<count($list)) {
        $list_ = htmlspecialchars($list[$i]);
        if ($list[$i] != '.') {
            if($list[$i] != '..') { ?>
                <li><a href="index.php?id=<?=$list_?>"><?=$list_?></a></li>
            <?php }
        }
        $i = $i + 1;
    }
}
function title() {
    if (isset($_GET['id'])) {
        echo htmlspecialchars($_GET['id']);
    } else {
        echo "코딩생활지침서!";
    }
}
function contents() {
    if (isset($_GET['id'])) {
        $basename = basename($_GET['id']);
        echo htmlspecialchars(file_get_contents('data/'.$basename));
        if (basename($_SERVER['PHP_SELF'])== "index.php") {
            echo "<p class='no5power'> - 노오력 : ".strlen(file_get_contents('data/'.$_GET['id']))."점</p>";
        }
    } else {
        echo "
시간약속, 책임감, 팀워크, 새로운 도전

코딩습관
- sprint 단위로 task 를 관리하자.
- waterfall 방식으로 구현 후 테스트 하지말자.
- scrum 방식으로 구간구간 테스트하면서 코딩하자.

팀 프로젝트
- PR, merge 로 버젼단위 scrum
- 스탠드업 미팅 습관화하기
    - 어제 한 것, 오늘 할 것, 막혀있는 부분

Pull Request
- 테스트 해본 뒤 올리기
- commit message 는 디테일있게 '제목, 내용'
- 요청 템플릿 제대로 작성하기
- 피드백 확인하기
";
    }
}
?>