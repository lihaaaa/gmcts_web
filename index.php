<? /*START_BEGIN*/
 include $_SERVER['DOCUMENT_ROOT']."/head_edit2.php";
/*END_BEGIN*/?>

<!-- body -->

<style>
	.contents_wrap{width: 100%; text-align: center; margin: 0; padding: 0;}
	.w1920{max-width: 1920px; margin: auto;}
	.w1920 img{width: 100%;}
	.w1400{max-width: 1400px; margin: auto; text-align: center;}
	
	.solu_categoty {text-align: inherit; width: 100%;}
	.w1400 h1{font-family: "NanumSquare"; font-size: 46px; font-weight: 700; color: #000000; margin-top: 90px; margin-bottom: 50px; letter-spacing: -1px;}
	.solution_bt{text-align: center; padding: 0 120px;}
	.solution_bt>ul>a>li{margin-right: 74px; float: left;}
	.solution_bt>ul>a:last-child li{margin-right: 0;}
	.solution_icon img{width: 80px; height: 50px;}
	.solution_icon p{font-family:"NanumSquare"; font-size: 17px; font-weight: bold; color: #000; margin-top: 15px; letter-spacing: -1px;}
	.solution_btm{display: none;}


	.main_partner{width: 100%; float: left;}


	.mainbanner{display: block;}
	.mainbannerm{display: none;}



	.button li{float: left;}
	.bt_buy{font-size: 15px; background-color: #000000; border-radius: 500px; text-decoration: none; outline: 0px; border: solid 2px #000000; text-align: center; font-family: "noto sans"; padding: 12px 30px;}
	.bt_buy h5{color: #ffffff;}
	.bt_purchase{font-size: 15px; background-color: #ffffff; border-radius: 500px; text-decoration: none; border: solid 2px #000000; text-align: center; font-family: "noto sans"; padding: 12px 30px; margin-right: 10px;}
	.bt_purchase h5{color: #000000;}
	.button h5{margin: auto; font-family: "noto-sans","본고딕","noto-sans","Malgun Gothic","맑은 고딕",helvetica,"Apple SD Gothic Neo","sans-serif"; font-size: 15px;}

	.main_product>ul>li>a>h3 {font-family: "NanumSquare"; font-size: 24px; line-height: 38px; font-weight: 600; letter-spacing: -0.5px; color: #000;}
	.main_product>ul>li>ul>a>li>h5{font-family: "NanumSquare"; font-size: 15px; font-weight: 400; letter-spacing: -0.5px; color: #333333; padding-top: 118px; margin-bottom: 13px;}
	.main_product>ul>li>ul>a>li>h2{font-family: "NanumSquare"; font-size: 24px; font-weight: 600; letter-spacing: -1px; color: #000; margin-bottom: 17px;}
	.main_product>ul>li>ul>a>li>p{font-family: "dotum"; font-size: 13px; color: #555555; letter-spacing: -0.5px; line-height: 24px;}
	.main_product>ul>li>ul>a>li{text-align: left;}


	.main_productm>ul>li>a>h3 {font-family: "NanumSquare"; font-size: 52px; line-height: 64px; font-weight: 600; letter-spacing: -0.2px; color: #000;}
	.main_productm>ul>li>ul>a>li>h5{font-family: "NanumSquare"; font-size: 32px; font-weight: 400; letter-spacing: -0.7px; color: #333333; padding-top: 70px; margin-bottom: 25px;}
	.main_productm>ul>li>ul>a>li>h2{font-family: "NanumSquare"; font-size: 50px; font-weight: 600; letter-spacing: -1px; color: #000; margin-bottom: 35px;}
	.main_productm>ul>li>ul>a>li>p{font-family: "dotum"; font-size: 30px; color: #555555; letter-spacing: -0.7px; line-height: 45px;}
	.main_productm>ul>li>ul>a>li{text-align: left;}



	.main_product{display: block;}
	.main_productm{display: none;}


	.slider {
        width: 1400px;
        margin: 0 auto;
    }

    .slick-slide {
      margin: 0px 10px;
    }

    .slick-slide img {
      width: 100%;
    }

    .slick-prev:before,
    .slick-next:before {
      color: black;
	  display: none;
    }


    .slick-slide {
      transition: all ease-in-out .1s;
    }
    
    .slick-active {
      opacity: .5;
    }

    .slick-current {
      opacity: 1;
    }



	@media(min-width : 100px) and (max-width : 999px){
		.slide_width{width: 95%; margin-bottom: 100px; padding-bottom: 20px;}
		.slider {width: 100%;}
		.slick-slide img{border: solid 1px #ddd;}

		.solution_bt{display: none;}
		.solution_btm{display: block; text-align: center; padding: 0; position: inherit; height: 310px;}
		.solution_btm>ul{position: absolute; padding: 0px 10%;margin-top:20px;}
		.solution_btm>ul:last-child{margin-top: 180px;}
		.solution_btm>ul>a>li{margin: 0 37px; float: left;}
		.solution_btm>ul>a:last-child li{margin-right: 0;}
		.solution_icon img {width: 120px; height: 75px;}
		.solution_icon p{font-size: 26px;}

		.mainbanner{display: none;}
		.mainbannerm{display: block;}

		.main_product{display: none;}
		.main_productm{display: block;}

		.w1400 h1 {font-size: 60px; letter-spacing: -3px; line-height: 78px !important;}
		.main_partner span{font-size: 30px !important;}
		.main_partner b{font-size: 42px !important;}

	}











</style>






<div class="contents_wrap">
	<div class="w1920">
		<div class="mainbanner">
			<a href="http://gmcts.co.kr/event/20210701_officialsite_renewal_promotion.php" target="_blank">
			<img src="http://gmcts.co.kr/event/img/20210701_mainbanner.png"></a>
		</div>
		<div class="mainbannerm">
			<a href="http://gmcts.co.kr/event/20210701_officialsite_renewal_promotion.php" target="_blank">
			<img src="http://gmcts.co.kr/event/img/20210702_mainbannerm.png"></a>
		</div>
		<div class="w1400">
			<div class="solu_categoty">
				<h1>맞춤 솔루션 제안</h1>


				<div class="solution_btm">
					<ul>
						<a href="http://gmcts.co.kr/product/laptop.php">
							<li class="solution_icon">
								<img src="http://gmcts.co.kr/image/20210419_main_solution_icon_001.jpg">
								<p>IT</p>
							</li>
						</a>
						<a href="http://gmcts.co.kr/product/signage/digitalsignage.php">
							<li class="solution_icon">
								<img src="http://gmcts.co.kr/image/20210419_main_solution_icon_002.jpg">
								<p>디스플레이</p>
							</li>
						</a>
						<a>
							<li class="solution_icon">
								<img src="http://gmcts.co.kr/image/20210419_main_solution_icon_003.jpg">
								<p>로봇</p>
							</li>
						</a>
						<a href="http://gmcts.co.kr/product/appliance.php">
							<li class="solution_icon">
								<img src="http://gmcts.co.kr/image/20210419_main_solution_icon_004.jpg">
								<p>가전</p>
							</li>
						</a>
					</ul>
					<ul>
						<a href="http://gmcts.co.kr/rental/rentalguide.php">
							<li class="solution_icon">
								<img src="http://gmcts.co.kr/image/20210419_main_solution_icon_005.jpg">
								<p>렌탈</p>
							</li>
						</a>
						<a href="http://gmcts.co.kr/caresolution/caresolution_guide.php">
							<li class="solution_icon">
								<img src="http://gmcts.co.kr/image/20210419_main_solution_icon_006.jpg">
								<p>케어솔루션</p>
							</li>
						</a>
						<a href="http://gmcts.co.kr/product/appliance/pralintro.php">
							<li class="solution_icon">
								<img src="http://gmcts.co.kr/image/20210419_main_solution_icon_007.jpg">
								<p>의료</p>
							</li>
						</a>
						<a href="http://gmcts.co.kr/present.php">
							<li class="solution_icon">
								<img src="http://gmcts.co.kr/image/20210419_main_solution_icon_008.jpg">
								<p>선물제안</p>
							</li>
						</a>
					</ul>
				</div>




				<div class="solution_bt">
					<ul>
						<a href="http://gmcts.co.kr/product/laptop.php">
							<li class="solution_icon">
								<img src="http://gmcts.co.kr/image/20210419_main_solution_icon_001.jpg">
								<p>IT</p>
							</li>
						</a>
						<a href="http://gmcts.co.kr/product/signage/digitalsignage.php">
							<li class="solution_icon">
								<img src="http://gmcts.co.kr/image/20210419_main_solution_icon_002.jpg">
								<p>디스플레이</p>
							</li>
						</a>
						<a>
							<li class="solution_icon">
								<img src="http://gmcts.co.kr/image/20210419_main_solution_icon_003.jpg">
								<p>로봇</p>
							</li>
						</a>
						<a href="http://gmcts.co.kr/product/appliance.php">
							<li class="solution_icon">
								<img src="http://gmcts.co.kr/image/20210419_main_solution_icon_004.jpg">
								<p>가전</p>
							</li>
						</a>
						<a href="http://gmcts.co.kr/rental/rentalguide.php">
							<li class="solution_icon">
								<img src="http://gmcts.co.kr/image/20210419_main_solution_icon_005.jpg">
								<p>렌탈</p>
							</li>
						</a>
						<a href="http://gmcts.co.kr/caresolution/caresolution_guide.php">
							<li class="solution_icon">
								<img src="http://gmcts.co.kr/image/20210419_main_solution_icon_006.jpg">
								<p>케어솔루션</p>
							</li>
						</a>
						<a href="http://gmcts.co.kr/product/appliance/pralintro.php">
							<li class="solution_icon">
								<img src="http://gmcts.co.kr/image/20210419_main_solution_icon_007.jpg">
								<p>의료</p>
							</li>
						</a>
						<a href="http://gmcts.co.kr/present.php">
							<li class="solution_icon">
								<img src="http://gmcts.co.kr/image/20210419_main_solution_icon_008.jpg">
								<p>선물제안</p>
							</li>
						</a>
					</ul>
				</div>
				
			</div>

			<div class="main_product" style="background-color: #fff; width: 100%; height: 724px; float: right; margin-top: 100px;">
				<ul>
					
					<li style="float: left; width: 49.8%; height: 724px; vertical-align: middle; margin-right: 0.4%; background-color: #f9f9f9; text-align: center;">
						<a href="http://gmcts.co.kr/product/LGgram/16Z90P.php" target="blank">
							<img style="width: 440px; margin-top: 72px;" src="http://gmcts.co.kr/image/20210614_main_info_banner_001.jpg">
							<h3>노트북<br>LG그램 16</h3>
						</a>
					</li>
					
					<li style="float: left; width: 49.8%; height: 724px;">
						<ul>
							<a href="http://gmcts.co.kr/product/laptop.php" target="blank">
								<li style="height: 359px; margin-bottom: 6px; background-color: #f9f9f9;">
									<img style="width: 250px; margin: 50px 47px 50px 50px; float: left;" src="http://gmcts.co.kr/image/20210419_main_info_banner_002.jpg">
									<h5>디자인과 성능, 스타일까지 하나에!</h5>
									<h2>IT 솔루션</h2>
									<p>노트북, 일체형PC, 데스크톱 까지! IT 업무에 필요한<br>모든 제품을 모아 보다 편리한 업무환경을 제공합니다.</p>
								</li>
							</a>
							<a>
								<li style="height: 359px; background-color: #f9f9f9;">
									<img style="width: 250px; margin: 50px 47px 50px 50px; float: left;" src="http://gmcts.co.kr/image/20210419_main_info_banner_003.jpg">
									<h5>사람과 공존하는 스마트 로봇 솔루션</h5>
									<h2>로봇 솔루션</h2>
									<p>사람과 로봇이 공존하는 사회에서 서비스의 질적 향상과<br>더 가치있는 일을 할 수 있도록 합니다.</p>
								</li>
							</a>
						</ul>
					</li>
				</ul>


			</div>


			<div class="main_productm" style="background-color: #fff; width: 100%; height: 1690px; float: right; margin-top: 100px;">
				<ul>
					
					<li style="float: left; width: 100%; height: 440px; vertical-align: middle; margin: 0 0 10px 0; background-color: #f9f9f9; text-align: center; padding: 80px 0;"}>
						<a href="http://gmcts.co.kr/product/LGgram/16Z90P.php" target="blank">
							<img style="width: 440px; margin-bottom: 20px;" src="http://gmcts.co.kr/image/20210625_main_info_banner_001m.png">
							<h3>노트북<br>LG그램 16</h3>
						</a>
					</li>
					
					<li style="float: left; width: 100%; height: 810px; ">
						<ul>
							<a href="http://gmcts.co.kr/product/laptop.php" target="blank">
								<li style="height: 400px; margin-bottom: 10px; background-color: #f9f9f9; padding: 60px 40px;">
									<img style="width: 360px; margin:0 20px 0 0; float: left;" src="http://gmcts.co.kr/image/20210419_main_info_banner_002.jpg">
									<h5>디자인과 성능, 스타일까지 하나에!</h5>
									<h2>IT 솔루션</h2>
									<p>노트북, 일체형PC, 데스크톱 까지! IT 업무에 필요한 모든 제품을 모아 보다 편리한 업무환경을 제공합니다.</p>
								</li>
							</a>
							<a>
								<li style="height: 400px; background-color: #f9f9f9;padding: 60px 40px;">
									<img style="width: 360px; margin:0 20px 0 0px; float: left;" src="http://gmcts.co.kr/image/20210419_main_info_banner_003.jpg">
									<h5>사람과 공존하는 스마트 로봇 솔루션</h5>
									<h2>로봇 솔루션</h2>
									<p>사람과 로봇이 공존하는 사회에서 서비스의 질적 향상과 더 가치있는 일을 할 수 있도록 합니다.</p>
								</li>
							</a>
						</ul>
					</li>
				</ul>


			</div>








			<div class="main_partner">
				<h1 style="line-height:54px;">지금, 우리와 함께하는 기업/ 공공기관<br>
					<span style="font-family: NanumSquare; font-size: 18px; font-weight: 700; color: #000000; margin-top: 90px; margin-bottom: 50px; letter-spacing: -0.5px;">
						<b style="font-family: NanumSquare; font-size: 25px; font-weight: 700; color: #ff3500; margin-top: 90px; margin-bottom: 50px; letter-spacing: -1.5px;">2,493</b> 개의 기업 및 공공기관이 우리와 함께하고 있습니다.</span>
				</h1>
				<h5></h5>
			</div>

			
			<div class="slide_width" style="float: left;">

				<section class="variable slider">
					<div>
					  <img src="http://gmcts.co.kr/image/slidelogo_gsretail.jpg">
					</div>
					<div>
					  <img src="http://gmcts.co.kr/image/slidelogo_seah.jpg">
					</div>
					<div>
					  <img src="http://gmcts.co.kr/image/slidelogo_ourhome.jpg">
					</div>
					<div>
					  <img src="http://gmcts.co.kr/image/slidelogo_korearental.jpg">
					</div>
					<div>
					  <img src="http://gmcts.co.kr/image/slidelogo_mireaasset.jpg">
					</div>
					<div>
					  <img src="http://gmcts.co.kr/image/slidelogo_nongshim.jpg">
					</div>
					<div>
					  <img src="http://gmcts.co.kr/image/slidelogo_kolonindustries.jpg">
					</div>
					<div>
					  <img src="http://gmcts.co.kr/image/slidelogo_nl.jpg">
					</div>
					<div>
					  <img src="http://gmcts.co.kr/image/slidelogo_ekr.jpg">
					</div>
					<div>
					  <img src="http://gmcts.co.kr/image/slidelogo_kimchang.jpg">
					</div>
				  </section>
				
				
				  <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
				  <script src="slick/slick.js" type="text/javascript" charset="utf-8"></script>
				  <script type="text/javascript">
					$(document).on('ready', function() {
					  $(".variable").slick({
						dots: false,
						infinite: true,
						variableWidth: true,
						autoplay: true
					  });
					  
					});
				</script>
			</div>















		</div>
	</div>
</div>





		



<? /*START_END*/
 include $_SERVER['DOCUMENT_ROOT']."/tail_edit.php";
/*END_END*/?>