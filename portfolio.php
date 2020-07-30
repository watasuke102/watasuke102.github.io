<!DOCTYPE html>

<head>
	<meta charset="utf-8">


	<meta property="og:url"          content="https://watasuke.tk">
	<meta property="og:title"        content="Portfolio">
	<meta property="og:description"  content="My portfolio">
	<meta property="og:image"        content="https://watasuke.tk/pic/icon.jpg">

	<meta name="twitter:card"        content="summary">
	<meta name="twitter:site"        content="@Watasuke102">
	<meta name="twitter:title"       content="Welcome!">
	<meta name="twitter:url"         content="https://watasuke.tk/portfolio.php">
	<meta name="twitter:image"       content="https://watasuke.tk/pic/icon.jpg">
	<meta name="twitter:description" content="My portfolio">


	<title>Portfolio</title>

	<link rel="stylesheet"    href="https://fonts.googleapis.com/css2?family=Coda&family=Kosugi&display=swap">
	<link rel="stylesheet"    href="portfolio.css">
	<link rel="shortcut icon" href="pic/icon.jpg" type="image/jpg">


	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-118931206-3"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());
		gtag('config', 'UA-118931206-3');
	</script>

</head>

<html>

<body>

	<!--icon and name-->
	<div class="icon_name">
		<img src="pic/icon.jpg" alt="icon">
		<h2>わたすけ  (@Watasuke102)</h2>
		<p>
			watasuke102@gmail.com
		</p>
	</div>

	<hr>

	<!--Skill list-->
	<div class="item">
		<h2>Skill</h2>
		<div class="skill">

			<div class="skill_name">
				<p>
					C++           <br>
					Python        <br>
					Aviutl        <br>
					3DCG(Blender) <br>
				</p>
			</div>

			<div class="skill_proportion">
				<p>
					★★★★☆<br>
					★★☆☆☆<br>
					★★★★☆<br>
					★★★☆☆<br>
				</p>
			</div>

		</div>
	</div>

	<hr>

	<!--Works-->
	<div class="item">
		<h2>Works</h2>
		<!--Work1-->
		<div class="card_works">
			<img src="pic/timetree-noticebot.jpg" alt="works1">
			<div>
				<h3>TimeTree-NoticeBot</h3>
				<p>TimeTreeの予定を取得、Discordで通知するBot用スクリプト</p>
			</div>
			<hr>
			<a href="https://github.com/watasuke102/TimeTree-NoticeBot">Source code</a>
		</div>
		<!--Work2-->
		<div class="card_works">
			<img src="pic/MarkStudy.jpg" alt="works2">
			<div>
				<h3>MarkStudy</h3>
				<p>学習特化をうたう、マークアップによる装飾が可能なテキストエディタ</p>
			</div>
			<hr>
			<a href="http://menster.wp.xdomain.jp/markstudy-description/">Show more</a>
		</div>
		<!--Work3-->
		<div class="card_works">
			<img src="pic/manager.jpg" alt="works3">
			<div>
				<h3>AlterLinux i3 Manager</h3>
				<p>Alter Linux i3wm搭載エディションのためのパネル設定マネージャ</p>
			</div>
			<hr>
			<a href="https://github.com/FascodeNet/alterlinux-i3-manager">Source code</a>
		</div>
	</div>

	<a href="index.php">Return top page</a>
<body>
</html>