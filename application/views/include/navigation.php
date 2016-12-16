<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

<header class="header" style="width: 100%">
	<div class="nav-container">
		<section class="logo">
			<h1 class="readable-hidden">씀 로고(메인화면으로 바로가기)</h1>

			<a class="logo-but-white" href="/Home/main">
				<span class="logo-main">벗</span>
				<span class="logo-text">Your writing Friend</span>
			</a>
		</section>

		<!-- btn menu -->
		<button id="btn-menu"><img src="/static/images/icons/ic_menu_white.svg"></button>

		<!-- dim effect -->
		<div id="mask"></div>

		<!--  Menu displayed on the Desktop / Mobile -->
		<nav class="navigation">
			<h1 class="readable-hidden">씀 메뉴</h1>

			<section class="menu">
				<div class="profile-box">
					<h2 class="readable-hidden">사용자 프로필</h2>

					<a class="profile" href="#">
						<img class="user-profile" src="<?= $this->session->userdata('user_profile')?>" alt="사용자 프로필 사진">
						<p class="pen-name"><?= $this->session->userdata('user_name')?></p>
					</a>
				</div>

				<ul class="menu-list">
					<!-- <li class="list"><a href="#">공개 씀</a></li> -->
					<li class="list"><a href="/Home/openSsmList">공개 씀</a></li>
					<li class="list"><a href="/Home/mySsmList">나의 씀</a></li>
					<li class="list"><a href="/Home/bringInSsm">책갈피</a></li>
				</ul>

				<!-- 검색 클릭 시, -->
				<!-- <div class="search-bar">
					<h1 class="readable-hidden">search</h1>

					<form class="" action="" method="post">
						<fieldset>
							<label class="" for="search">search</label>
							<input id="search" type="text">
						</fieldset>
						<button class="search" type="submit"><img src="" alt="검색"></button>
					</form>
				</div> -->

				<div class="option-box">
					<?php if($this->session->userdata('is_login')) { ?>
						<form action="/Member/logout" method="POST">
							<fieldset>
								<input name="return_url" type="hidden" value="<?="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];?>">
							</fieldset>
							<button class="btn-option btn-logout" type="submit">로그아웃</button>
						</form>
					<?php  } else { ?>
					<a href="/Member/login_page" class="btn-option btn-login">로그인</a>
					<?php } ?>
					<a class="btn-option btn-setting" href="/Member/my_page">설 정</a>
				</div >

				<div class="footer">
					<div class="sns-box">
						<h2 class="readable-hidden">SSUM SNS</h2>

						<a class="sns-twitter" href="#"><img src="/static/images/icons/sns_twitter-logo.svg" alt="트위터"></a>
						<a class="sns-facebook" href="#"><img src="/static/images/icons/sns_facebook-logo.svg" alt="페이스북"></a>
						<a class="sns-instagram" href="#"><img src="/static/images/icons/sns_instagram-logo.svg" alt="인스타그램"></a>
					</div>
					<p class="copyright">
						<span>copyright But project,</span>
						All right reserved.
					</p>
				</div>
			</section>

			<button id="nav-btn-close" class="btn-close" type="button">X</button>
		</nav>

		<button id="btn-date" class="" type="button">
			<img src="/static/images/icons/ic_date_range_white.svg" alt="date range">
		</button>
		<!-- Aside menu, 'diplay:none' on mobile -->
		<aside class="aside" data-ng-controller="TodayTopic">
			<section class="search-date">
				<h2 class="readable-hidden">날짜 필터 검색</h2>

				<form action="">
					<label for="">
						<img src="/static/images/icons/ic_date_range.svg" alt="date range">
					</label>
					<div class="search">
						<input id="datepicker" type="text" data-ng-model="range.startDate" placeholder="2016-11-22">
						<input id="datepicker2" type="text" data-ng-model="range.endDate" placeholder="2016-11-30">
					</div>
				</form>
			</section>

			<section class="slide-box">
        <div class="slide-content" data-ng-cloak data-ng-repeat="List in TopicList.topicData | dateRange: range.startDate : range.endDate">
            <h1 class="slide-day">{{List.day}}</h1>
            <div class="slide-topic-box">
                <p class="slide-day-topic" ng-switch on="List.category1"><span ng-switch-when="0">낮</span><span ng-switch-default>밤</span>의 주제</p>
                <a href="/Home/write_page/{{List.seq1}}" class="slide-topic">"{{List.topic1}}"</a>
            </div>
            <div class="slide-topic-box">
                <p class="slide-day-topic" ng-switch on="List.category2"><span ng-switch-when="0">낮</span><span ng-switch-default>밤</span>의 주제</p>
                <a href="/Home/write_page/{{List.seq2}}" class="slide-topic slide-last-topic">"{{List.topic2}}"</a>
            </div>
        </div>
			</section>

			<section class="static-btn-bottom-aside">
				<div class="page-number">
					<div class="line"></div>
					<p class="number">1/4</p>
					<div class="line"></div>
				</div>

				<div class="static-btn">
					<button class="btn-up" type="button">
						<img src="/static/images/icons/ic_arrow_up.svg" alt="arrow up">
					</button>
					<button class="btn-down" type="button">
						<img src="/static/images/icons/ic_arrow_down.svg" alt="arrow down">
					</button>
				</div>
			</section>

			<button id="aside-btn-close" class="btn-close" type="button">X</button>
		</aside>
	</div>
</header>
