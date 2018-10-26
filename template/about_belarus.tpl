<!DOCTYPE html>
<html lang="ru">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style.css">
	<title>{TITLE}</title>
	<meta name="description" content="{DESCRIPTION}">
	<meta name="keywords" content="{KEYWORDS}">

	<script src="js/jquery.js"></script>
	<script src="js/scrollBar.js"></script>
	<script src="js/index.js"></script>
</head>

<body>
	<header>
		<div class="slider">
			<img class="slider_img" src="images/{IMAGE}">
			<div class="header_container_secondary">
				{LOGO}
				<nav>
					<a id="touch-menu" class="mobile-menu" href="#">
						<i class="icon-reorder"></i>МЕНЮ</a>
					<ul class="menu">
						{MENU}
					</ul>
				</nav>
				<div class="title_secondary">
					<h2>{NAME}</h2>
				</div>
			</div>
		</div>
	</header>
	<div class="about_Belarus_razdel_container">
		<div class="about_Belarus_razdel_content">
			{UNDER_TEXT} {ABOUT_BELARUS}
		</div>
		<div class="about_Belarus_nav">
			<ul class="about_Belarus_navigation">
				{MENU_RAZDEL}
			</ul>
		</div>
	</div>
	{POPULAR_TRIP} {FOOTER}
</body>

</html>