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
	.content_box{border: solid 1px #e2e2e2; text-align: center; position: relative; height: 1830px;}
	.content_box .company_txt{padding: 0 110px; float: left;}
	.content_box .company_title{margin: 120px auto 100px;}
	.sign{float: right; position: absolute; top: 560px; right: 120px;}

	.onlyline{width: 1180px; height: 1px; background-color: #e5e5e5; position: absolute; top: 720px; margin: 0 110px;}
	.company_ci{position: absolute; top: 810px; left: 110px;}


	@media(min-width : 100px) and (max-width : 999px){
	.content_box{margin: auto 2%;}
	.content_box img{max-width: 100%;}
	.navigation>ul>li>a{font-size: 2.3em;}
	.navigation>ul>li>a:first-child{margin-left: 18px;}
	.navigation>ul>li+li:before{font-size:2.5em;}
	.content_box .company_txt{padding: 0; float: inherit;}
	.content_box .company_title{margin: 120px auto 100px;}
	.w1400>h2{font-size: 4em; font-family: "noto-sans"; color: #000; font-weight: 400; letter-spacing: -0.06em; word-spacing: -0.06em; margin: 0 auto 15px;}
	.company_ci {position: relative; top:0; left: 0; margin-top: 340px; width: 96%; padding-left: 4%;}
	.onlyline{width: 80%;}
	.content_box{height: 1700px;}
	.sign{right: 50px;}
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
				<li><a>굿모닝CTS 소개</a></li>
			</ul>
		</div>

		<h2>굿모닝CTS 소개</h2>
		<div class="content_box">
			<img class="company_title" src="http://gmcts.co.kr/image/20210430_company_title.jpg">
			<img class="company_txt" src="http://gmcts.co.kr/image/20210429_company_txt.jpg">
			<img class="sign" src="http://gmcts.co.kr/company/image/sub_text06.jpg">

			<div class="onlyline"></div>

			<img class="company_ci" src="http://gmcts.co.kr/image/20210430_company_ci.jpg">

		</div>

	</div>
</div>
</html>
<? /*START_END*/
 include $_SERVER['DOCUMENT_ROOT']."/tail_edit.php";
/*END_END*/?>