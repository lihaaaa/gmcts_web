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


	.rental_mainbanner{width: 100%; height: 500px; background: url("http://gmcts.co.kr/image/20210615_caresolution_mainbanner.jpg") 50% 0px / cover no-repeat; text-align: center; }
	.rental_merit{margin: 100px auto 0; max-width: 1400px;}
	.rental_title{font-family: "NanumSquare"; font-size: 30px; color: #000; line-height: 1.27;}
	.rental_description{font-family: "NanumSquare"; font-size: 18px; color: #333; line-height: 1.44; margin-top: 12px; margin-bottom: 20px;}



	.proddctlist{text-align: center;}
	.proddctlist ul{margin: auto; width: 100%;}
	.careitem_01{background: url(http://gmcts.co.kr/image/20210615_careproductimg001.jpg) center top / 100% no-repeat; width: 31.9%; height: 100%; padding-bottom: 10.5%; border-radius: 8px; float: left; margin:10px; text-align: left;}
	.careitem_01>span{font-family: "NanumSquare"; font-size: 34px; font-weight: 900; color: #FFF; line-height: 3; letter-spacing: -0.3px; padding-left: 20px;}
	
	.careitem_02{background: url(http://gmcts.co.kr/image/20210615_careproductimg002.jpg) center top / 100% no-repeat; width: 31.9%; height: 100%; padding-bottom: 10.5%; border-radius: 8px; float: left; margin:10px; text-align: left;}
	.careitem_02>span{font-family: "NanumSquare"; font-size: 34px; font-weight: 900; color: #FFF; line-height: 3; letter-spacing: -0.3px; padding-left: 20px;}
	
	.careitem_03{background: url(http://gmcts.co.kr/image/20210615_careproductimg003.jpg) center top / 100% no-repeat; width: 31.9%; height: 100%; padding-bottom: 10.5%; border-radius: 8px; float: left; margin:10px; text-align: left;}
	.careitem_03>span{font-family: "NanumSquare"; font-size: 34px; font-weight: 900; color: #FFF; line-height: 3; letter-spacing: -0.3px; padding-left: 20px;}
	
	.careitem_04{background: url(http://gmcts.co.kr/image/20210615_careproductimg004.jpg) center top / 100% no-repeat; width: 31.9%; height: 100%; padding-bottom: 10.5%; border-radius: 8px; float: left; margin:10px; text-align: left; margin-left: 18%; margin-bottom: 50px;}
	.careitem_04>span{font-family: "NanumSquare"; font-size: 34px; font-weight: 900; color: #FFF; line-height: 3; letter-spacing: -0.3px; padding-left: 20px;}
	
	.careitem_05{background: url(http://gmcts.co.kr/image/20210615_careproductimg005.jpg) center top / 100% no-repeat; width: 31.9%; height: 100%; padding-bottom: 10.5%; border-radius: 8px; float: left; margin:10px; text-align: left; margin-right: 10%; margin-bottom: 100px;}
	.careitem_05>span{font-family: "NanumSquare"; font-size: 34px; font-weight: 900; color: #FFF; line-height: 3; letter-spacing: -0.3px; padding-left: 20px;}



	.content{margin-top: 30px;}
	.item_img_01{background: url(http://gmcts.co.kr/image/20210428_rental_meritbanner_01.jpg) center top / 100% no-repeat; width: 100%; padding-bottom: 65%; margin-bottom: 20px; border-radius: 8px;}
	.item_img_02{background: url(http://gmcts.co.kr/image/20210428_rental_meritbanner_01.jpg) center top / 100% no-repeat; width: 100%; padding-bottom: 65%; margin-bottom: 20px; border-radius: 8px;}
	.item_img_03{background: url(http://gmcts.co.kr/image/20210428_rental_meritbanner_01.jpg) center top / 100% no-repeat; width: 100%; padding-bottom: 65%; margin-bottom: 20px; border-radius: 8px;}
	.item_img_04{background: url(http://gmcts.co.kr/image/20210428_rental_meritbanner_01.jpg) center top / 100% no-repeat; width: 100%; padding-bottom: 65%; margin-bottom: 20px; border-radius: 8px;}
	.item_img_05{background: url(http://gmcts.co.kr/image/20210428_rental_meritbanner_01.jpg) center top / 100% no-repeat; width: 100%; padding-bottom: 65%; margin-bottom: 20px; border-radius: 8px;}
	.item{width: 31.33%; float: left; padding: 0 1%; text-align: left;}
	.item>span{font-family: "NanumSquare"; font-size: 24px; color: #000; line-height: 1.27; letter-spacing: -0.3px; padding-left: 2px;}
	.item>p{font-family: "NanumSquare"; font-size: 15px; font-weight: 400; color: #333; line-height: 1.63; letter-spacing: -0.5px; margin-top: 5px; padding-left: 2px}

	.rental_process{margin: auto; max-width: 1400px; display: inline-block;}
	.processbanner{margin: 50px auto 80px auto;}
	.processbanner_m{display: none;}
	

	.bt_rentalnow{width: 203px; font-size: 15px; background-color: #fff; border-radius: 500px; text-decoration: none; border: solid 2px #000000; text-align: center; font-family: "noto sans";  margin: 0 auto 60px;}
	.bt_rentalnow h2{color: #000; font-size: 18px; font-family: 'NanumSquare'; font-weight: 600; padding: 28px 22px 28px 31px;}
	.bt_rentalnow:hover{background-color: #000; border: solid 2px #000000;}
	.bt_rentalnow:hover h2{color: #fff;}
	.bt_wrap{text-align: center; max-width: 960px; margin: auto;}

	.rental_mainbanner .banner_wrap{max-width: 960px; margin: auto; text-align: left; position: relative;}
	.banner_title{font-family: "NanumSquare"; font-size: 50px; color: #fff; font-weight: 700; line-height: 1.4; letter-spacing: 0px; position: absolute; bottom: -295px;}
	.banner_txtbox{position: absolute; bottom: -300px;}
	.banner_txt_b{font-family: "NanumSquare"; font-size: 40px; color: #fff; font-weight: 700; line-height: 1.5; letter-spacing: -1.23px;}
	.banner_txt{font-family: "NanumSquare"; font-size: 40px; color: #fff; font-weight: 300; line-height: 1.5; letter-spacing: -1.23px;}

	.banner_bt{width: 202px; font-size: 15px; background-color: #fff; border-radius: 500px; text-align: center; font-family: "noto sans";  margin: 0 auto 60px; position: absolute; bottom: -485px;}
	.banner_bt h2{color: #000; font-size: 18px; font-family: 'NanumSquare'; font-weight: 600; padding: 28px 22px 28px 31px;}
	.banner_bt:hover h2{color: #f01448;}

	.rentcare_wrap{width: 100%; background-color: #f4f4f4; text-align: center; margin-bottom: 90px;}
	.rentcare_wrapbox{width: 1000px; height: 140px; margin: auto; text-align: left; padding: 60px 0;}
	.rentcare_title{font-family: NanumSquare;font-size: 26px; color: #000; font-weight: 600;line-height: 70px;}
	.rentcare_txt{font-family: NanumSquare;font-size: 16px; color: #000; line-height: 25px;}




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
		.processbanner_m img{width: 100%;}
		.processbanner_m{display: block; padding: 30px 0 200px;}
		.item{width: 90%; margin-bottom: 85px; padding: 0 5%;}
		.item:last-child{margin-bottom: 200px;}
		.item>span{font-size: 4em; line-height: 2.4; font-weight: 600; color: #333; letter-spacing: -1px;}
		.item>p{font-size: 28pt; font-weight: 400; color: #000; line-height: 1.5; letter-spacing: -1px;}

		.rental_merit{margin-top: 200px;}
		.rental_process{display: block;}
		.rental_title{font-size: 4.5em; font-weight: 600; line-height: 2;}
		.rental_description{font-size: 32px; font-weight: 400; color: #000;letter-spacing: -1px; padding-bottom: 75px;}

		.banner_wrap{padding-left: 10px; width:94%;}
		.banner_title{font-size: 7em; bottom: -620px; left: 20px; font-weight: 800; letter-spacing: -1.8px; word-spacing: -3.5px; line-height: 1.7;}
		.banner_txtbox{bottom: -720px;}
		.banner_txt_b{font-size: 5.7em; font-weight: 800; letter-spacing: -1.5px; word-spacing: -3.5px;}
		.banner_txt{font-size: 5.7em; letter-spacing: -2.4px; word-spacing: -3.5px;}

		.bt_rentalnow { margin: 0 19.4% 200px; width: 550px; border: solid 4px #000000;}
		.bt_rentalnow h2{font-size: 50px; padding: 75px 18px 75px 31px;}
		.bt_rentalnow:hover{background-color: #000; border: solid 4px #000000;}
		
		.banner_bt{bottom: -1130px; margin: 0 19.4% 60px; width: 550px;}
		.banner_bt h2{font-size: 50px; padding: 75px 18px 75px 31px;}


		.proddctlist{text-align: center;}
		.proddctlist ul{margin: auto; width: 100%;}
		.careitem_01{background: url(http://gmcts.co.kr/image/20210615_careproductimg001.jpg) center top / 100% no-repeat; width: 98%; height: 100%; padding-bottom: 40%; border-radius: 20px; float: left; margin:10px 10px 12px 10px; text-align: left;}
		.careitem_01>span{font-family: "NanumSquare"; font-size: 54px; font-weight: 900; color: #FFF; line-height: 3; letter-spacing: -0.3px; padding-left: 30px;}
		
		.careitem_02{background: url(http://gmcts.co.kr/image/20210615_careproductimg002.jpg) center top / 125% no-repeat; width: 48.4%; height: 215px; padding-bottom: 13%; border-radius: 22px; float: left; margin: 0 5px 13px 10px; text-align: left;}
		.careitem_02>span{font-family: "NanumSquare"; font-size: 48px; font-weight: 900; color: #FFF; line-height: 3; letter-spacing: -0.3px; padding-left: 20px;}
		
		.careitem_03{background: url(http://gmcts.co.kr/image/20210615_careproductimg003.jpg) center top / 125% no-repeat; width: 48.4%; height: 215px; padding-bottom: 13%; border-radius: 22px; float: left; margin:0 10px 13px 5px; text-align: left;}
		.careitem_03>span{font-family: "NanumSquare"; font-size: 48px; font-weight: 900; color: #FFF; line-height: 3; letter-spacing: -0.3px; padding-left: 20px;}
		
		.careitem_04{background: url(http://gmcts.co.kr/image/20210615_careproductimg004.jpg) center top / 125% no-repeat; width: 48.4%; height: 215px; padding-bottom: 13%; border-radius: 22px; float: left; margin: 0 5px 200px 10px; text-align: left;}
		.careitem_04>span{font-family: "NanumSquare"; font-size: 48px; font-weight: 900; color: #FFF; line-height: 3; letter-spacing: -0.3px; padding-left: 20px;}
		
		.careitem_05{background: url(http://gmcts.co.kr/image/20210615_careproductimg005.jpg) center top / 125% no-repeat; width: 48.4%; height: 215px; padding-bottom: 13%; border-radius: 22px; float: left; margin:0 10px 200px 5px; text-align: left;}
		.careitem_05>span{font-family: "NanumSquare"; font-size: 48px; font-weight: 900; color: #FFF; line-height: 3; letter-spacing: -0.3px; padding-left: 20px;}



		.rentcare_wrap{width: 100%; background-color: #f4f4f4; text-align: center; margin-bottom: 90px;}
		.rentcare_wrapbox{width: auto; height: 290px; margin: auto; text-align: left; padding: 60px 0 60px 30px;}
		.rentcare_title{font-family: NanumSquare;font-size: 48px; color: #000; font-weight: 600; line-height: 150px;}
		.rentcare_txt{font-family: NanumSquare;font-size: 34px; color: #000; line-height: 55px;}




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
			<span class="banner_title">관리가 필요한<br>가전 제품의<br>렌탈과 케어를 동시에!</span>
			<div></div>

			<div class="banner_bt">
				<a href="http://gmcts.co.kr/customer/contactus.html" target="_blank" alt="케어솔루션 문의 >">
					<h2>케어솔루션 문의&nbsp;&nbsp;&nbsp;&nbsp;></h2>
				</a>
			</div>

		</div>
	</div>
	<div class="rental_merit">
		<div>
			<span class="rental_title">케어솔루션이란?</span>
			<p class="rental_description">케어솔루션은 관리가 필요한 가전 제품을<br>전문가의 케어를 통해 고객의 삶에 안전과 편리, 위생을 더하는<br>차원이 다른 가전 관리 서비스입니다.</p>
		</div>

		<div class="proddctlist">
			<ul>
				<li class="careitem_01">
					<span>정수기</span>
				</li>
				<li class="careitem_02">
					<span>공기청정기</span>
				</li>
				<li class="careitem_03">
					<span>안마의자</span>
				</li>
			</ul>
			<ul>
				<li class="careitem_04">
					<span>스타일러</span>
				</li>
				<li class="careitem_05">
					<span>건조기</span>
				</li>
		</div>


	</div>
	<div class="rental_process">
		<span class="rental_title">케어솔루션과 케어십</span>
		<div class="processbanner">
			<img src="http://gmcts.co.kr/image/20210615_caresolution_chart.png">
		</div>
		<div class="processbanner_m">
			<img src="http://gmcts.co.kr/image/20210615_caresolution_chartm.png">
		</div>
	</div>


	<div class="rentcare_wrap">
		<div class="rentcare_wrapbox">
			<span class="rentcare_title">렌탈과 케어솔루션의 차이</span><br>
			<span class="rentcare_txt">렌탈: PC, 모니터, 프린터 등 사무용 가전<br>
			케어솔루션: 정수기, 공기청정기, 스타일러 등 일반 가전</span>
		</div>

	</div>


	<div class="bt_wrap">
		<div class="bt_rentalnow">
			<a href="http://gmcts.co.kr/customer/contactus.html" target="_blank" alt="케어솔루션 문의하러 가기 >">
				<h2>케어솔루션 문의&nbsp;&nbsp;&nbsp;&nbsp;></h2>
			</a>
		</div>
	</div>
	

</div>
</html>
<? /*START_END*/
 include $_SERVER['DOCUMENT_ROOT']."/tail_edit.php";
/*END_END*/?>