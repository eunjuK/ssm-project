<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no">
    <title>But: Topic-List</title>
    <?php include_once("./application/views/include/style/style.php") ?>
    <link rel="stylesheet" type="text/css" href="/static/css/view.css">
</head>
<body class="" data-ng-app="ButProjectApp">
<div class="grid-box base-line"></div>
<div class="outer"
     data-ng-cloak
     data-ng-controller="TopicListController">
    <?php include_once("./application/views/include/navigation.php") ?>
    <main class="main">
        <section  data-ng-cloak data-ng-repeat="List in TopicList.topicData track by $index" ng-show="$last">
            <div class="container">
                <div class="row">
                    <div class="main-content xs-col-4 sm-col-11 md-col-11">
                        <section class="row">
                            <div class="md-col-9 sm-col-9 xs-col-4 one-card-align">
                                <article class="md-col-9 sm-col-9 xs-col-4">
                                    <div class="setting-card">
                                        <h1 class="readable-hidden">Set Profile</h1>
                                        <button class="setting-profile-btn" type="button">
                                            <img class="setting-profile-img" src="/src/images/userprofile/user_0005.png" alt="사용자 사진">
                                        </button>
                                        <form class="form-layout" action="" method="post">
                                            <filedset>
                                                <div>
                                                    <label for="pen-name" class="setting-title pen-name">작가명</label>
                                                    <input class="setting-input" type="text" id="pen-name" maxlength="8" placeholder="작가명을 지어주세요" required>
                                                </div>
                                                <div>
                                                    <label for="my-introduction" class="setting-title">내 소개</label>
                                                    <input class="setting-input" type="text" id="my-introduction" maxlength="32" placeholder="소개글을 입력해주세요" required>
                                                </div>
                                                <div>
                                                    <label for="email" class="setting-title">이메일 주소</label>
                                                    <input class="setting-input setting-email" type="email" id="email" placeholder="butmanager@gmali.com" readonly required>
                                                </div>
                                                <div>
                                                    <label for="password" class="setting-title">비밀번호 변경</label>
                                                    <input class="setting-input" type="password" id="password" maxlength="16" placeholder="비밀번호를 입력해주세요" required>
                                                </div>
                                                <div>
                                                    <label for="password" class="setting-title">비밀번호 확인</label>
                                                    <input class="setting-input" type="password" id="password" maxlength="16" placeholder="비밀번호를 확인해주세요" required>
                                                </div>
                                                <div class="setting-btn-wrap">
                                                    <button class="secession btn-danger" type="submit">탈퇴하기</button>
                                                    <button class="modified btn-default" type="submit">수정하기</button>
                                                </div>
                                            </filedset>
                                        </form>
                                    <div>
                                </article>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </section>
    </main>
</div>
<?php include_once("./application/views/include/script/script.php") ?>
<script src="/static/js/module.js"></script>
</body>
</html>