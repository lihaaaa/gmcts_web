<? /*START_BEGIN*/
 include $_SERVER['DOCUMENT_ROOT']."/head_edit2.php";
/*END_BEGIN*/?>
<style>
	.contents_wrap{width: 100%; text-align: center; margin: 0; padding: 0; text-align: center;}
	.w1400{max-width: 1400px; margin: auto; text-align:center;}
	.navigation{float: left; width: 100%; margin-bottom: 20px;}
	.navigation>ul{margin: auto;}
	.navigation>ul>li{float: left; margin: 18px 0 19px; }
	.navigation>ul>li>a {font-family: "Malgun Gothic","맑은 고딕"; font-size: 13px; letter-spacing: -0.5px;}
	.navigation>ul>li>a:hover{text-decoration: underline;}
	.navigation>ul>li+li:before{content:">"; margin: 0 20px;font-family: "dotum"; font-size: 12px; font-weight: 600; color: #999;}
	
	.navi_info{text-align:left; width: 1000px; margin:auto;}


	.w1400>h2{font-size: 36px; font-family: "noto-sans"; color: #000; font-weight: 600; letter-spacing: -0.06em; word-spacing: -0.06em; margin-bottom: 72px;}


	.rental_mainbanner{width: 100%; height: 500px; background: url("http://gmcts.co.kr/image/20210428_rental_mainbanner.jpg") 50% 0px / cover no-repeat; text-align: center; }
	.rental_merit{margin: 100px auto 0; max-width: 960px;}
	.rental_title{font-family: "NanumSquare"; font-size: 30px; color: #000; line-height: 1.27;}
	.rental_description{font-family: "NanumSquare"; font-size: 18px; color: #333; line-height: 1.44; margin-top: 12px;}

	.content{margin-top: 30px;}
	.item_img_01{background: url(http://gmcts.co.kr/image/20210428_rental_meritbanner_01.jpg) center top / 100% no-repeat; width: 100%; padding-bottom: 66%; margin-bottom: 20px;}
	.item_img_02{background: url(http://gmcts.co.kr/image/20210428_rental_meritbanner_02.jpg) center top / 100% no-repeat; width: 100%; padding-bottom: 66%; margin-bottom: 20px;}
	.item{width: 48%; float: left; padding: 0 1%; text-align: left; margin-bottom: 60px;}
	.item>span{font-family: "NanumSquare"; font-size: 24px; color: #000; line-height: 1.27; letter-spacing: -0.3px; padding-left: 2px;}
	.item>p{font-family: "NanumSquare"; font-size: 15px; font-weight: 400; color: #333; line-height: 1.63; letter-spacing: -0.5px; margin-top: 5px; padding-left: 2px}

	.rental_process{margin: auto; max-width: 960px;}
	.processbanner{margin: 30px auto 80px auto;}
	.processbanner_m{display: none;}
	

	.bt_rentalnow{width: 190px; font-size: 15px; background-color: #fff; border-radius: 500px; text-decoration: none; border: solid 2px #000000; text-align: center; font-family: "noto sans";  margin: 0 auto 60px;}
	.bt_rentalnow h2{color: #000; font-size: 18px; font-family: 'NanumSquare'; font-weight: 600; padding: 25px 22px 25px 31px;}
	.bt_rentalnow:hover{background-color: #000; border: solid 2px #000000;}
	.bt_rentalnow:hover h2{color: #fff;}
	.bt_wrap{text-align: center; max-width: 960px; margin: auto;}

	.rental_mainbanner .banner_wrap{max-width: 960px; margin: auto; text-align: left; position: relative;}
	.banner_title{font-family: "NanumSquare"; font-size: 39px; color: #fff; font-weight: 700; line-height: 1.5; letter-spacing: -1.3px; position: absolute; bottom: -150px;}
	.banner_txtbox{position: absolute; bottom: -300px;}
	.banner_txt_b{font-family: "NanumSquare"; font-size: 40px; color: #fff; font-weight: 700; line-height: 1.5; letter-spacing: -1.23px;}
	.banner_txt{font-family: "NanumSquare"; font-size: 40px; color: #fff; font-weight: 300; line-height: 1.5; letter-spacing: -1.23px;}

	.banner_bt{width: 190px; font-size: 15px; background-color: #fff; border-radius: 500px; text-align: center; font-family: "noto sans";  margin: 0 auto 60px; position: absolute; bottom: -485px;}
	.banner_bt h2{color: #000; font-size: 18px; font-family: 'NanumSquare'; font-weight: 600; padding: 25px 22px 25px 31px;}
	.banner_bt:hover h2{color: #ff3500;}


	@media(min-width : 100px) and (max-width : 999px){
		.item_img_01{margin-bottom: 16px;}
		.item_img_02{margin-bottom: 16px;}


		.processbanner{display: none;}
		.processbanner_m img{width: 95%;}
		.processbanner_m{display: block; padding: 30px 0;}

		.item{width: 90%; margin-bottom: 35px; padding: 0 5%;}
		.item:last-child{margin-bottom: 85px;}
		.item>span{font-size: 21px; line-height: 1.8; font-weight: 600; color: #333;}
		.item>p{font-size: 13.5px; font-weight: 400; color: #000; line-height: 1.5; }
		
		.rental_title{font-size: 24px; font-weight: 600;}
		.rental_description{font-size: 16px; font-weight: 400; color: #000;}

		.banner_wrap{padding-left: 10px; width:94%;}
		.banner_title{font-size: 28px;}
		.banner_txt_b{font-size: 30px;}
		.banner_txt{font-size: 30px;}

		.bt_rentalnow {margin-bottom: 100px;}
		
	}

	@media (min-width : 300px) and (max-width : 980px){
		.rental_mainbanner{height: 1250px;}
		.item_img_01{margin-bottom: 25px;}
		.item_img_02{margin-bottom: 25px;}

		.content{margin-top: 100px;}

		.processbanner{display: none;}
		.processbanner_m img{width: 95%;}
		.processbanner_m{display: block; padding: 30px 0 200px;}
		.item{width: 90%; margin-bottom: 85px; padding: 0 5%;}
		.item:last-child{margin-bottom: 200px;}
		.item>span{font-size: 4em; line-height: 2.4; font-weight: 600; color: #333; letter-spacing: -1px;}
		.item>p{font-size: 28pt; font-weight: 400; color: #000; line-height: 1.5; letter-spacing: -1px;}

		.rental_merit{margin-top: 200px;}
		
		.rental_title{font-size: 4.5em; font-weight: 600; line-height: 2;}
		.rental_description{font-size: 32px; font-weight: 400; color: #000;letter-spacing: -1px;}

		.banner_wrap{padding-left: 10px; width:94%;}
		.banner_title{font-size: 5.7em; bottom: -400px; font-weight: 800; letter-spacing: -1.8px; word-spacing: -3.5px;}
		.banner_txtbox{bottom: -720px;}
		.banner_txt_b{font-size: 5.7em; font-weight: 800; letter-spacing: -1.5px; word-spacing: -3.5px;}
		.banner_txt{font-size: 5.7em; letter-spacing: -2.4px; word-spacing: -3.5px;}

		.bt_rentalnow { margin: 0 19.4% 200px; width: 550px;}
		.bt_rentalnow h2{font-size: 50px; padding: 70px 22px 70px 31px;}
		
		.banner_bt{bottom: -1130px; margin: 0 19.4% 60px; width: 550px;}
		.banner_bt h2{font-size: 50px; padding: 70px 22px 70px 31px;}
	}
	
</style>
<html>
<head>
	<meta charset="UTF-8">
    <title></title>
</head>
<!-- body -->

<div class="contents_wrap">
	<!--
	<div class="w1400">
		<div class="navigation">
			<ul>
				<li><a href="http://gmcts.co.kr">홈</a></li>
				<li><a href="http://gmcts.co.kr/rental/rentalguide.php">렌탈</a></li>
				<li><a>렌탈가이드</a></li>
			</ul>
		</div>
		<h2>렌탈가이드</h2>
		<div style="background:#ddd; width: 100%; height: 1500px;"><img src=""></div>
	</div>-->

	<div class="rental_mainbanner">
		<div class="banner_wrap">
			<span class="banner_title">구매에서 구독으로, 렌탈의 시대</span>
			<div></div>
			<div class="banner_txtbox">
				<span class="banner_txt">힘들고 어려운 관리와 수리는</span>
				<div></div>
				<span class="banner_txt_b">저희가 다- 할께요.</span>
			</div>

			<div class="banner_bt">
				<a href="http://gmcts.co.kr/customer/contactus.html" target="_blank" alt="지금 렌탈 상담 신청하러 가기 >">
					<h2>렌탈 상담 신청&nbsp;&nbsp;&nbsp;&nbsp;></h2>
				</a>
			</div>

		</div>
	</div>
	<div class="rental_merit">
		<div>
			<span class="rental_title">필요한 때에 필요한 수량만</span>
			<p class="rental_description">구매 대비 실질적인 소요 비용이 절감되는<br>
			합리적인 렌탈 솔루션으로 직접 관리하지 않아도 됩니다.</p>
		</div>
		<div class="content">
			<div class="item">
				<div class="item_img_01"></div>
				<span>실질적인 비용 절감</span>
				<p>구매 대비 실질적인 소요비용의 절감으로<br>제품의 수리 또는 관리 부담을 덜어드립니다.</p>
			</div>

			<div class="item">
				<div class="item_img_02"></div>
				<span>업무 효율의 극대화</span>
				<p>실시간 사용 현황을 한눈에 파악할 수 있어서<br>자신에 업무에만 집중할 수 있도록 도와드립니다.</p>
			</div>
		</div>
	</div>
	<div class="rental_process">
		<span class="rental_title">렌탈 신청 방법</span>
		<div class="processbanner">
			<img src="http://gmcts.co.kr/image/20210429_rental_precess.png">
		</div>
		<div class="processbanner_m">
			<img src="http://gmcts.co.kr/image/20210429_rental_precess_m.png">
		</div>
	</div>

	<div class="bt_wrap">
		<div class="bt_rentalnow">
			<a href="http://gmcts.co.kr/customer/contactus.html" target="_blank" alt="지금 렌탈 상담 신청하러 가기 >">
				<h2>렌탈 상담 신청&nbsp;&nbsp;&nbsp;&nbsp;></h2>
			</a>
		</div>
	</div>
	

</div>
</html>
<? /*START_END*/
 include $_SERVER['DOCUMENT_ROOT']."/tail_edit.php";
/*END_END*/?>