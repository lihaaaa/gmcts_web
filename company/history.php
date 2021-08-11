<? /*START_BEGIN*/
 include $_SERVER['DOCUMENT_ROOT']."/head_edit2.php";
/*END_BEGIN*/?>
<style>
	.contents_wrap{width: 100%; text-align: center; margin: 0; padding: 0;}
	.w1400{max-width: 1400px; margin: auto; text-align:center;}
	.navigation{float: left; width: 100%; margin-bottom: 20px;}
	.navigation>ul{margin: auto;}
	.navigation>ul>li{float: left; margin: 18px 0 19px; }
	.navigation>ul>li>a {font-family: "Malgun Gothic","맑은 고딕"; font-size: 13px; letter-spacing: -0.5px;}
	.navigation>ul>li>a:hover{text-decoration: underline;}
	.navigation>ul>li+li:before{content:">"; margin: 0 20px;font-family: "dotum"; font-size: 12px; font-weight: 600; color: #999;}
	
	.navi_info{text-align:left; width: 1000px; margin:auto;}


	.w1400>h2{font-size: 36px; font-family: "noto-sans"; color: #000; font-weight: 600; letter-spacing: -0.06em; word-spacing: -0.06em; margin-bottom: 72px;}
	.content_box{border: solid 1px #e2e2e2; text-align: center; position: relative; height: 3643px;}
	.content_box>img{margin-top: 80px; width: 100%;}

	.mcontent_box{display:none;}

	@media(min-width : 100px) and (max-width : 999px){
	.mcontent_box{display:block;}
	.mcontent_box img{width: 100%; padding: 40px 0 200px;}
	.content_box{display:none;}
	
	.navigation>ul>li>a{font-size: 2.3em;}
	.navigation>ul>li>a:first-child{margin-left: 18px;}
	.navigation>ul>li+li:before{font-size:2.5em;}
	.top_line{border-top: solid 2px #e2e2e2;}
	.w1400>h2{font-size: 4em; font-family: "noto-sans"; color: #000; font-weight: 400; letter-spacing: -0.06em; word-spacing: -0.06em; margin: 0 auto 15px;}
	}

</style>
<html>
<head>
	<meta charset="UTF-8">
    <title></title>
</head>
<!-- body -->

<div class="contents_wrap">
	<div class="w1400">
		<div class="navigation">
			<ul>
				<li><a href="http://gmcts.co.kr">홈</a></li>
				<li><a href="http://gmcts.co.kr/company/company.php">회사소개</a></li>
				<li><a>연혁 및 실적</a></li>
			</ul>
		</div>

		<h2>연혁 및 실적</h2>
		<div class="content_box">
			<img src="http://gmcts.co.kr/image/20210430_history.jpg">
		</div>
		<div class="mcontent_box">
			<img src="http://gmcts.co.kr/image/20210719_historym.png">
		</div>

	</div>
</div>
</html>
<? /*START_END*/
 include $_SERVER['DOCUMENT_ROOT']."/tail_edit.php";
/*END_END*/?>