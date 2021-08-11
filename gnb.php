<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="ko" xml:lang="ko">


<style>
::selection {color:#fa263e;}
.gnb_wrap{width: 100%; text-align: center; height: 80px; border-bottom: solid 1px #e9e9e9;}
.gnb_box{max-width: 1400px; margin: auto;}
.logo_box{float: left; margin-top: 10px;}
.catebox_l{float: left;}
.catebox_l>ul{margin-left: 59px;}
.catebox_l>ul>li{float: left; margin-right: 55px; margin-top: 29px;}
.first_dep_00{padding-bottom: 31px;}
.first_dep_01{padding-bottom: 31px;}
.first_dep_02{padding-bottom: 31px;}
.first_dep_03{padding-bottom: 31px;}
.first_dep_04{padding-bottom: 31px;}
.first_dep_05{padding-bottom: 31px;}
.first_dep_06{padding-bottom: 31px;}
.depth_line_text{font-size: 1.28em; font-family: "noto-sans"; color: #000; font-weight: 600; letter-spacing: -0.04em; word-spacing: -0.06em;}


.catebox_r{float: right;}
.catebox_r>ul>li{float: left; margin-right: 55px; margin-top: 29px;}
.catebox_r>ul>li>a>h1{font-size: 11.5pt; font-family: "noto-sans"; color: #000; font-weight: 600; letter-spacing: -0.04em; word-spacing: -0.06em;}



.depth_info_01{position: absolute;background: #fff; width: 100%; height: 650px; left: 0px; top: 80px; z-index: 100; border-bottom: solid 1px #e9e9e9}
.depth_info_01>ul{width: 1400px; background: sandybrown; margin: auto; text-align: left; margin-top: 65px;}

.depth_info_02{position: absolute;background: #fff; width: 100%; height: 650px; left: 0px; top: 80px; z-index: 100; border-bottom: solid 1px #e9e9e9}
.depth_info_02>ul{width: 1400px; background: sandybrown; margin: auto; text-align: left; margin-top: 65px;}

.depth_info_03{position: absolute;background: #fff; width: 100%; height: 650px; left: 0px; top: 80px; z-index: 100; border-bottom: solid 1px #e9e9e9}
.depth_info_03>ul{width: 1400px; background: sandybrown; margin: auto; text-align: left; margin-top: 65px;}

.depth_info_04{position: absolute;background: #fff; width: 100%; height: 650px; left: 0px; top: 80px; z-index: 100; border-bottom: solid 1px #e9e9e9}
.depth_info_04>ul{width: 1400px; background: sandybrown; margin: auto; text-align: left; margin-top: 65px;}

.depth_info_05{position: absolute;background: #fff; width: 100%; height: 650px; left: 0px; top: 80px; z-index: 100; border-bottom: solid 1px #e9e9e9}
.depth_info_05>ul{width: 1400px; background: sandybrown; margin: auto; text-align: left; margin-top: 65px;}

.depth_info_06{position: absolute;background: #fff; width: 100%; height: 650px; left: 0px; top: 80px; z-index: 100; border-bottom: solid 1px #e9e9e9}
.depth_info_06>ul{width: 1400px; background: sandybrown; margin: auto; text-align: left; margin-top: 65px;}

.shop_bt{font-size: 16px; color: #000; background-color: #000; border-radius: 500px; text-decoration: none; outline: 0px;text-align: center; font-family: "noto sans"; padding: 13px 23px 13px 24px;}



.depth_info_01>ul>a>p{font-family: "noto-sans"; font-size: 1.5em; letter-spacing: -1.2px; color: #000; font-weight: 400; float: left;}
.depth_info_02>ul>a>p{font-family: "noto-sans"; font-size: 1.5em; letter-spacing: -1.2px; color: #000; font-weight: 400; float: left;}
.depth_info_03>ul>a>p{font-family: "noto-sans"; font-size: 1.5em; letter-spacing: -1.2px; color: #000; font-weight: 400; float: left;}
.depth_info_04>ul>a>p{font-family: "noto-sans"; font-size: 1.5em; letter-spacing: -1.2px; color: #000; font-weight: 400; float: left;}
.depth_info_05>ul>a>p{font-family: "noto-sans"; font-size: 1.5em; letter-spacing: -1.2px; color: #000; font-weight: 400; float: left;}
.depth_info_06>ul>a>p{font-family: "noto-sans"; font-size: 1.5em; letter-spacing: -1.2px; color: #000; font-weight: 400; float: left;}


.menu1_1>p{font-family: "noto-sans"; font-size: 1.5em; letter-spacing: -1.2px; color: #000; float: left; margin-bottom: 20px;}
.menu1_2>p{font-family: "noto-sans"; font-size: 1.5em; letter-spacing: -1.2px; color: #000; float: left; margin-bottom: 20px;}
.menu1_3>p{font-family: "noto-sans"; font-size: 1.5em; letter-spacing: -1.2px; color: #000; float: left; margin-bottom: 20px;}
.menu1_4>p{font-family: "noto-sans"; font-size: 1.5em; letter-spacing: -1.2px; color: #000; float: left; margin-bottom: 20px;}
.menu1_5>p{font-family: "noto-sans"; font-size: 1.5em; letter-spacing: -1.2px; color: #000; float: left; margin-bottom: 20px;}

.menu2_1>p{font-family: "noto-sans"; font-size: 1.5em; letter-spacing: -1.2px; color: #000; float: left; margin-bottom: 20px;}
.menu2_2>p{font-family: "noto-sans"; font-size: 1.5em; letter-spacing: -1.2px; color: #000; float: left; margin-bottom: 20px;}
.menu2_3>p{font-family: "noto-sans"; font-size: 1.5em; letter-spacing: -1.2px; color: #000; float: left; margin-bottom: 20px;}
.menu2_4>p{font-family: "noto-sans"; font-size: 1.5em; letter-spacing: -1.2px; color: #000; float: left; margin-bottom: 20px;}
.menu2_5>p{font-family: "noto-sans"; font-size: 1.5em; letter-spacing: -1.2px; color: #000; float: left; margin-bottom: 20px;}

.menu3_1>p{font-family: "noto-sans"; font-size: 1.5em; letter-spacing: -1.2px; color: #000; float: left; margin-bottom: 20px;}
.menu3_2>p{font-family: "noto-sans"; font-size: 1.5em; letter-spacing: -1.2px; color: #000; float: left; margin-bottom: 20px;}
.menu3_3>p{font-family: "noto-sans"; font-size: 1.5em; letter-spacing: -1.2px; color: #000; float: left; margin-bottom: 20px;}
.menu3_4>p{font-family: "noto-sans"; font-size: 1.5em; letter-spacing: -1.2px; color: #000; float: left; margin-bottom: 20px;}

.menu4_1>p{font-family: "noto-sans"; font-size: 1.5em; letter-spacing: -1.2px; color: #000; float: left; margin-bottom: 20px;}
.menu4_2>p{font-family: "noto-sans"; font-size: 1.5em; letter-spacing: -1.2px; color: #000; float: left; margin-bottom: 20px;}
.menu4_3>p{font-family: "noto-sans"; font-size: 1.5em; letter-spacing: -1.2px; color: #000; float: left; margin-bottom: 20px;}
.menu4_4>p{font-family: "noto-sans"; font-size: 1.5em; letter-spacing: -1.2px; color: #000; float: left; margin-bottom: 20px;}
.menu4_5>p{font-family: "noto-sans"; font-size: 1.5em; letter-spacing: -1.2px; color: #000; float: left; margin-bottom: 20px;}
.menu4_6>p{font-family: "noto-sans"; font-size: 1.5em; letter-spacing: -1.2px; color: #000; float: left; margin-bottom: 20px;}
.menu4_7>p{font-family: "noto-sans"; font-size: 1.5em; letter-spacing: -1.2px; color: #000; float: left; margin-bottom: 20px;}

.menu5_1>p{font-family: "noto-sans"; font-size: 1.5em; letter-spacing: -1.2px; color: #000; float: left; margin-bottom: 20px;}
.menu5_2>p{font-family: "noto-sans"; font-size: 1.5em; letter-spacing: -1.2px; color: #000; float: left; margin-bottom: 20px;}

.menu6_1>p{font-family: "noto-sans"; font-size: 1.5em; letter-spacing: -1.2px; color: #000; float: left; margin-bottom: 20px;}
.menu6_2>p{font-family: "noto-sans"; font-size: 1.5em; letter-spacing: -1.2px; color: #000; float: left; margin-bottom: 20px;}



.top{float: left;}

.sub1_1{position: absolute; margin-left: 100px; z-index: 100; padding-left: 72px;}
.sub1_1>a>p{font-family: "noto-sans"; font-size: 1.5em; letter-spacing: -1.2px; color: #000;font-weight: 400; margin-left: 62px; margin-bottom: 20px;}
.sub1_1>a>p:hover{font-weight: 600;}

.sub1_2{position: absolute; margin-left: 100px; z-index: 100; padding-left: 72px;}
.sub1_2>a>p{font-family: "noto-sans"; font-size: 1.5em; letter-spacing: -1.2px; color: #000;font-weight: 400; margin-left: 62px; margin-bottom: 20px;}
.sub1_2>a>p:hover{font-weight: 600;}

.sub1_3{position: absolute; margin-left: 100px; z-index: 100; padding-left: 72px;}
.sub1_3>a>p{font-family: "noto-sans"; font-size: 1.5em; letter-spacing: -1.2px; color: #000;font-weight: 400; margin-left: 62px; margin-bottom: 20px;}
.sub1_3>a>p:hover{font-weight: 600;}

.sub1_4{position: absolute; margin-left: 100px; z-index: 100; padding-left: 72px;}
.sub1_4>a>p{font-family: "noto-sans"; font-size: 1.5em; letter-spacing: -1.2px; color: #000;font-weight: 400; margin-left: 62px; margin-bottom: 20px;}
.sub1_4>a>p:hover{font-weight: 600;}

.sub1_5{position: absolute; margin-left: 100px; z-index: 100; padding-left: 72px;}
.sub1_5>a>p{font-family: "noto-sans"; font-size: 1.5em; letter-spacing: -1.2px; color: #000;font-weight: 400; margin-left: 62px; margin-bottom: 20px;}
.sub1_5>a>p:hover{font-weight: 600;}




.sub2_1{position: absolute; margin-left: 100px; z-index: 100; padding-left: 72px;}
.sub2_1>a>p{font-family: "noto-sans"; font-size: 1.5em; letter-spacing: -1.2px; color: #000;font-weight: 400; margin-left: 62px; margin-bottom: 20px;}
.sub2_1>a>p:hover{font-weight: 600;}

.sub2_2{position: absolute; margin-left: 100px; z-index: 100; padding-left: 72px;}
.sub2_2>a>p{font-family: "noto-sans"; font-size: 1.5em; letter-spacing: -1.2px; color: #000;font-weight: 400; margin-left: 62px; margin-bottom: 20px;}
.sub2_2>a>p:hover{font-weight: 600;}

.sub2_3{position: absolute; margin-left: 100px; z-index: 100; padding-left: 72px;}
.sub2_3>a>p{font-family: "noto-sans"; font-size: 1.5em; letter-spacing: -1.2px; color: #000;font-weight: 400; margin-left: 62px; margin-bottom: 20px;}
.sub2_3>a>p:hover{font-weight: 600;}

.sub2_4{position: absolute; margin-left: 100px; z-index: 100; padding-left: 72px;}
.sub2_4>a>p{font-family: "noto-sans"; font-size: 1.5em; letter-spacing: -1.2px; color: #000;font-weight: 400; margin-left: 62px; margin-bottom: 20px;}
.sub2_4>a>p:hover{font-weight: 600;}

.sub2_5{position: absolute; margin-left: 100px; z-index: 100; padding-left: 72px;}
.sub2_5>a>p{font-family: "noto-sans"; font-size: 1.5em; letter-spacing: -1.2px; color: #000;font-weight: 400; margin-left: 62px; margin-bottom: 20px;}
.sub2_5>a>p:hover{font-weight: 600;}




.sub3_1{position: absolute; margin-left: 100px; z-index: 100; padding-left: 72px;}
.sub3_1>a>p{font-family: "noto-sans"; font-size: 1.5em; letter-spacing: -1.2px; color: #000;font-weight: 400; margin-left: 62px; margin-bottom: 20px;}
.sub3_1>a>p:hover{font-weight: 600;}

.sub3_2{position: absolute; margin-left: 100px; z-index: 100; padding-left: 72px;}
.sub3_2>a>p{font-family: "noto-sans"; font-size: 1.5em; letter-spacing: -1.2px; color: #000;font-weight: 400; margin-left: 62px; margin-bottom: 20px;}
.sub3_2>a>p:hover{font-weight: 600;}

.sub3_3{position: absolute; margin-left: 100px; z-index: 100; padding-left: 72px;}
.sub3_3>a>p{font-family: "noto-sans"; font-size: 1.5em; letter-spacing: -1.2px; color: #000;font-weight: 400; margin-left: 62px; margin-bottom: 20px;}
.sub3_3>a>p:hover{font-weight: 600;}

.sub3_4{position: absolute; margin-left: 100px; z-index: 100; padding-left: 72px;}
.sub3_4>a>p{font-family: "noto-sans"; font-size: 1.5em; letter-spacing: -1.2px; color: #000;font-weight: 400; margin-left: 62px; margin-bottom: 20px;}
.sub3_4>a>p:hover{font-weight: 600;}




.sub4_1{position: absolute; margin-left: 100px; z-index: 100; padding-left: 72px;}
.sub4_1>a>p{font-family: "noto-sans"; font-size: 1.5em; letter-spacing: -1.2px; color: #000;font-weight: 400; margin-left: 62px; margin-bottom: 20px;}
.sub4_1>a>p:hover{font-weight: 600;}

.sub4_2{position: absolute; margin-left: 100px; z-index: 100; padding-left: 72px;}
.sub4_2>a>p{font-family: "noto-sans"; font-size: 1.5em; letter-spacing: -1.2px; color: #000;font-weight: 400; margin-left: 62px; margin-bottom: 20px;}
.sub4_2>a>p:hover{font-weight: 600;}

.sub4_3{position: absolute; margin-left: 100px; z-index: 100; padding-left: 72px;}
.sub4_3>a>p{font-family: "noto-sans"; font-size: 1.5em; letter-spacing: -1.2px; color: #000;font-weight: 400; margin-left: 62px; margin-bottom: 20px;}
.sub4_3>a>p:hover{font-weight: 600;}

.sub4_4{position: absolute; margin-left: 100px; z-index: 100; padding-left: 72px;}
.sub4_4>a>p{font-family: "noto-sans"; font-size: 1.5em; letter-spacing: -1.2px; color: #000;font-weight: 400; margin-left: 62px; margin-bottom: 20px;}
.sub4_4>a>p:hover{font-weight: 600;}

.sub4_5{position: absolute; margin-left: 100px; z-index: 100; padding-left: 72px;}
.sub4_5>a>p{font-family: "noto-sans"; font-size: 1.5em; letter-spacing: -1.2px; color: #000;font-weight: 400; margin-left: 62px; margin-bottom: 20px;}
.sub4_5>a>p:hover{font-weight: 600;}

.sub4_6{position: absolute; margin-left: 100px; z-index: 100; padding-left: 72px;}
.sub4_6>a>p{font-family: "noto-sans"; font-size: 1.5em; letter-spacing: -1.2px; color: #000;font-weight: 400; margin-left: 62px; margin-bottom: 20px;}
.sub4_6>a>p:hover{font-weight: 600;}

.sub4_7{position: absolute; margin-left: 100px; z-index: 100; padding-left: 72px;}
.sub4_7>a>p{font-family: "noto-sans"; font-size: 1.5em; letter-spacing: -1.2px; color: #000;font-weight: 400; margin-left: 62px; margin-bottom: 20px;}
.sub4_7>a>p:hover{font-weight: 600;}




.sub5_1{position: absolute; margin-left: 100px; z-index: 100; padding-left: 72px;}
.sub5_1>a>p{font-family: "noto-sans"; font-size: 1.5em; letter-spacing: -1.2px; color: #000;font-weight: 400; margin-left: 62px; margin-bottom: 20px;}
.sub5_1>a>p:hover{font-weight: 600;}

.sub5_2{position: absolute; margin-left: 100px; z-index: 100; padding-left: 72px;}
.sub5_2>a>p{font-family: "noto-sans"; font-size: 1.5em; letter-spacing: -1.2px; color: #000;font-weight: 400; margin-left: 62px; margin-bottom: 20px;}
.sub5_2>a>p:hover{font-weight: 600;}




.sub6_1{position: absolute; margin-left: 100px; z-index: 100; padding-left: 72px;}
.sub6_1>a>p{font-family: "noto-sans"; font-size: 1.5em; letter-spacing: -1.2px; color: #000;font-weight: 400; margin-left: 62px; margin-bottom: 20px;}
.sub6_1>a>p:hover{font-weight: 600;}

.sub6_2{position: absolute; margin-left: 100px; z-index: 100; padding-left: 72px;}
.sub6_2>a>p{font-family: "noto-sans"; font-size: 1.5em; letter-spacing: -1.2px; color: #000;font-weight: 400; margin-left: 62px; margin-bottom: 20px;}
.sub6_2>a>p:hover{font-weight: 600;}




.more{margin-top: 3px; margin-right: 52px;}
.more_1{margin-top: 3px; margin-right: 52px;}
.more_2{margin-top: 46.75px; margin-right: 52px;}
.more_3{margin-top: 90.5px; margin-right: 52px;}
.more_4{margin-top: 134.25px; margin-right: 52px;}
.more_5{margin-top: 178px; margin-right: 52px;}      
.more_6{margin-top: 221.75px; margin-right: 52px;}
.more_7{margin-top: 265.5px; margin-right: 52px;}       


.footer{position: absolute; border-top: solid 1px #e2e2e2; width: 100%; bottom: 0;}
.footer .footer_inner{width: 1400px; margin: 0 auto; padding: 0 40px;}
.footer ul li{float: left; list-style: none; margin-right: 75px; margin-top: 100px;}
.footer_info{font-family: "noto-sans"; font-size: 14pt; color: #777777;}

.perhover{color: #000;}
.perhover:hover{color:#ff3500; text-decoration:underline;}

.footer_detail>ul>li>p>a{font-family: noto-sans; font-size: 13px; color: #777777; line-height: 1.4em;}
.footer_detail>ul>li>p>a:hover{color: #000;}
.footer_navi>ul>li>a>p:hover{text-decoration: underline;}


.gnb_mo_wrap{display: none;}


.contents_detail{width: 1400px;}
.contents_detail>img {width: 100%;}

.prd_item_2 {width: calc(33.23%)!important;}


.nanumsquare {
    font-family: 'NanumSquare', sans-serif !important;
}


@import url(//fonts.googleapis.com/earlyaccess/notosanskr.css);

.notosanskr * { 
 font-family: 'Noto Sans KR', sans-serif;
}




@media(min-width : 100px) and (max-width : 999px){

	.contents_detail{width: 100%;}
	.gnb_wrap{display: none;}
	.gnb_mo_wrap{display: block; background: #fff; height: 150px; border-bottom: solid 3px #f2f2f2;}
	.thumnail_box{width: 100%; border: none;}
	.mo_logo_wrap{float: left; margin: auto;}
	.mo_logo_wrap>a>img{margin: auto; padding: 15px 20px 0 20px; height: 120px;}
	.mo_menu{float: right;}
	.mo_menu>img{height: 58px; padding: 46px;}



	.mo_category_wrap{position: absolute; z-index: 1; top: 0; height: 100%; width: 100%; left: 0;}
	.mo_category_top{background: #fff; width: 100%; height: 150px; position: fixed; z-index: 1; border-bottom: solid 15px #f2f2f2;}
	.mo_category_top>img{height: 58px; padding: 46px; float: right;}


	.mo_gnb{position: relative; background: #fff; padding: 225px 0 100px 75px;}
	
	.mo_first_depth>a{font-family: "noto-sans"; font-size: 40pt; letter-spacing: -1.2px; color: #000; font-weight: 600; line-height: 100px;}
	.mo_first_depth{font-family: "noto-sans"; font-size: 40pt; letter-spacing: -1.2px; color: #000; font-weight: 600; line-height: 100px; padding-bottom: 100px;}
	.mo_second_depth>a{font-family: "noto-sans"; font-size: 36pt; letter-spacing: -1.2px; color: #000; font-weight: 400; line-height: 120px;}
	.mo_second_depth{font-family: "noto-sans"; font-size: 36pt; letter-spacing: -1.2px; color: #000; font-weight: 400; line-height: 120px;  padding-left: 45px; padding-bottom: 30px;}

	.mo_gnb p{font-family: "noto-sans"; font-size: 32pt; letter-spacing: -1.2px; color: #000; font-weight: 400; padding-left: 80px; line-height: 90px;}

	
	.prd_item_2 {width: calc(49.89%)!important;}

	.button h5 {font-size: 40px !important;}

}



@media(min-width : 1100px) and (max-width : 1199px){
	.catebox_l>ul>li:not(:last-child){margin-right: 42px;}
	.catebox_l>ul>li:last-child{margin-right: 0px;}
	.catebox_r>ul>li{margin-right: 42px;}
}



@media(min-width : 1000px) and (max-width : 1099px){
	.catebox_l>ul>li:not(:last-child){margin-right: 30px;}
	.catebox_l>ul>li:last-child{margin-right: 0px;}
	.catebox_r>ul>li{margin-right: 30px;}
}

@media(min-width : 100px) and (max-width : 1410px){
	.gnb_box{padding-left: 10px;}
}




</style>

<head>

  <link rel="stylesheet" type="text/css" href="slick/slick.css">
  <link rel="stylesheet" type="text/css" href="slick/slick-theme.css">

<link rel="stylesheet" type="text/css" href="https://cdn.rawgit.com/moonspam/NanumSquare/master/nanumsquare.css">



<meta name="generator" content="editplus" />
<meta name="author" content="" />
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta charset="utf-8">
<meta http-equiv="Content-Type" content="textml; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=8" />
<title>Good morning CTS | LG전자 공식 커머셜 전문점</title>
<link rel="stylesheet" type="text/css" href="/css/style.css" />
<link rel="stylesheet" type="text/css" href="/css/slider.banner.css" />
<link rel="shortcut icon" href="http://gmcts.co.kr/image/favicon.ico">
<script type="text/javascript" src="/js/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="/js/jquery.kinMaxShow-1.0.src.js"></script>
<script type="text/javascript" src="/js/slider.banner.js"></script>
<script type="text/javascript" src="/js/menu.js"></script>
<script type="text/javascript"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="http://code.jquery.com/jquery-latest.js"></script>


<script>

	$(document).ready(function(){

		$('.top .sub1_1').hide();
		$('.menu1_1').css("font-weight", "400");

		$('.menu1_1').mouseover(function(){
			$('.sub1_1').show();
			$('.sub1_2').hide();
			$('.sub1_3').hide();
			$('.sub1_4').hide();
			$('.sub1_5').hide();
			
			$('.menu1_1').css("font-weight", "600");
			$('.menu1_2').css("font-weight", "400");
			$('.menu1_3').css("font-weight", "400");
			$('.menu1_4').css("font-weight", "400");
			$('.menu1_5').css("font-weight", "400");

		});
		$('.menu1_1').mouseleave(function(){
			$('.sub1_1').hide();
			$('.menu1_1').css("font-weight", "400");
		});
	});



	$(document).ready(function(){

		$('.top .sub1_2').hide();
		$('.menu1_2').css("font-weight", "400");

		$('.menu1_2').mouseover(function(){
			$('.sub1_1').hide();
			$('.sub1_2').show();
			$('.sub1_3').hide();
			$('.sub1_4').hide();
			$('.sub1_5').hide();
			
			$('.menu1_1').css("font-weight", "400");
			$('.menu1_2').css("font-weight", "600");
			$('.menu1_3').css("font-weight", "400");
			$('.menu1_4').css("font-weight", "400");
			$('.menu1_5').css("font-weight", "400");

		});
		$('.menu1_2').mouseleave(function(){
			$('.sub1_2').hide();
			$('.menu1_2').css("font-weight", "400");
		});
	});


	$(document).ready(function(){

		$('.top .sub1_3').hide();
		$('.menu1_3').css("font-weight", "400");

		$('.menu1_3').mouseover(function(){
			$('.sub1_1').hide();
			$('.sub1_2').hide();
			$('.sub1_3').show();
			$('.sub1_4').hide();
			$('.sub1_5').hide();
			
			$('.menu1_1').css("font-weight", "400");
			$('.menu1_2').css("font-weight", "400");
			$('.menu1_3').css("font-weight", "600");
			$('.menu1_4').css("font-weight", "400");
			$('.menu1_5').css("font-weight", "400");

		});
		$('.menu1_3').mouseleave(function(){
			$('.sub1_3').hide();
			$('.menu1_3').css("font-weight", "400");
		});
	});


	$(document).ready(function(){

		$('.top .sub1_4').hide();
		$('.menu1_4').css("font-weight", "400");

		$('.menu1_4').mouseover(function(){
			$('.sub1_1').hide();
			$('.sub1_2').hide();
			$('.sub1_3').hide();
			$('.sub1_4').show();
			$('.sub1_5').hide();
			
			$('.menu1_1').css("font-weight", "400");
			$('.menu1_2').css("font-weight", "400");
			$('.menu1_3').css("font-weight", "400");
			$('.menu1_4').css("font-weight", "600");
			$('.menu1_5').css("font-weight", "400");

		});
		$('.menu1_4').mouseleave(function(){
			$('.sub1_4').hide();
			$('.menu1_4').css("font-weight", "400");
		});
	});



	$(document).ready(function(){

		$('.top .sub1_5').hide();
		$('.menu1_5').css("font-weight", "400");

		$('.menu1_5').mouseover(function(){
			$('.sub1_1').hide();
			$('.sub1_2').hide();
			$('.sub1_3').hide();
			$('.sub1_4').hide();
			$('.sub1_5').show();
			
			$('.menu1_1').css("font-weight", "400");
			$('.menu1_2').css("font-weight", "400");
			$('.menu1_3').css("font-weight", "400");
			$('.menu1_4').css("font-weight", "400");
			$('.menu1_5').css("font-weight", "600");

		});
		$('.menu1_5').mouseleave(function(){
			$('.sub1_5').hide();
			$('.menu1_5').css("font-weight", "400");
		});
	});






	$(document).ready(function(){

		$('.top .sub2_1').hide();
		$('.menu2_1').css("font-weight", "400");

		$('.menu2_1').mouseover(function(){
			$('.sub2_1').show();
			$('.sub2_2').hide();
			$('.sub2_3').hide();
			$('.sub2_4').hide();
			$('.sub2_5').hide();
			
			$('.menu2_1').css("font-weight", "600");
			$('.menu2_2').css("font-weight", "400");
			$('.menu2_3').css("font-weight", "400");
			$('.menu2_4').css("font-weight", "400");
			$('.menu2_5').css("font-weight", "400");

		});
		$('.sub2_1').mouseleave(function(){
			$('.sub2_1').hide();
			$('.menu2_1').css("font-weight", "400");
		});
	});



	$(document).ready(function(){

		$('.top .sub2_2').hide();
		$('.menu2_2').css("font-weight", "400");

		$('.menu2_2').mouseover(function(){
			$('.sub2_1').hide();
			$('.sub2_2').show();
			$('.sub2_3').hide();
			$('.sub2_4').hide();
			$('.sub2_5').hide();
			
			$('.menu2_1').css("font-weight", "400");
			$('.menu2_2').css("font-weight", "600");
			$('.menu2_3').css("font-weight", "400");
			$('.menu2_4').css("font-weight", "400");
			$('.menu2_5').css("font-weight", "400");

		});
		$('.menu2_2').mouseleave(function(){
			$('.sub2_2').hide();
			$('.menu2_2').css("font-weight", "400");
		});
	});


	$(document).ready(function(){

		$('.top .sub2_3').hide();
		$('.menu2_3').css("font-weight", "400");

		$('.menu2_3').mouseover(function(){
			$('.sub2_1').hide();
			$('.sub2_2').hide();
			$('.sub2_3').show();
			$('.sub2_4').hide();
			$('.sub2_5').hide();
			
			$('.menu2_1').css("font-weight", "400");
			$('.menu2_2').css("font-weight", "400");
			$('.menu2_3').css("font-weight", "600");
			$('.menu2_4').css("font-weight", "400");
			$('.menu2_5').css("font-weight", "400");

		});
		$('.sub2_3').mouseleave(function(){
			$('.sub2_3').hide();
			$('.menu2_3').css("font-weight", "400");
		});
	});


	$(document).ready(function(){

		$('.top .sub2_4').hide();
		$('.menu2_4').css("font-weight", "400");

		$('.menu2_4').mouseover(function(){
			$('.sub2_1').hide();
			$('.sub2_2').hide();
			$('.sub2_3').hide();
			$('.sub2_4').show();
			$('.sub2_5').hide();
			
			$('.menu2_1').css("font-weight", "400");
			$('.menu2_2').css("font-weight", "400");
			$('.menu2_3').css("font-weight", "400");
			$('.menu2_4').css("font-weight", "600");
			$('.menu2_5').css("font-weight", "400");

		});
		$('.sub2_4').mouseleave(function(){
			$('.sub2_4').hide();
			$('.menu2_4').css("font-weight", "400");
		});
	});



	$(document).ready(function(){

		$('.top .sub2_5').hide();
		$('.menu2_5').css("font-weight", "400");

		$('.menu2_5').mouseover(function(){
			$('.sub2_1').hide();
			$('.sub2_2').hide();
			$('.sub2_3').hide();
			$('.sub2_4').hide();
			$('.sub2_5').show();
			
			$('.menu2_1').css("font-weight", "400");
			$('.menu2_2').css("font-weight", "400");
			$('.menu2_3').css("font-weight", "400");
			$('.menu2_4').css("font-weight", "400");
			$('.menu2_5').css("font-weight", "600");

		});
		$('.menu2_5').mouseleave(function(){
			$('.sub2_5').hide();
			$('.menu2_5').css("font-weight", "400");
		});
	});






$(document).ready(function(){

	$('.top .sub3_1').hide();
	$('.menu3_1').css("font-weight", "400");

	$('.menu3_1').mouseover(function(){
		$('.sub3_1').show();
		$('.sub3_2').hide();
		$('.sub3_3').hide();
		$('.sub3_4').hide();
		
		$('.menu3_1').css("font-weight", "600");
		$('.menu3_2').css("font-weight", "400");
		$('.menu3_3').css("font-weight", "400");
		$('.menu3_4').css("font-weight", "400");

	});
	$('.sub3_1').mouseleave(function(){
		$('.sub3_1').hide();
		$('.menu3_1').css("font-weight", "400");
	});
});



$(document).ready(function(){

	$('.top .sub3_2').hide();
	$('.menu3_2').css("font-weight", "400");

	$('.menu3_2').mouseover(function(){
		$('.sub3_1').hide();
		$('.sub3_2').show();
		$('.sub3_3').hide();
		$('.sub3_4').hide();
		
		$('.menu3_1').css("font-weight", "400");
		$('.menu3_2').css("font-weight", "600");
		$('.menu3_3').css("font-weight", "400");
		$('.menu3_4').css("font-weight", "400");

	});
	$('.sub3_2').mouseleave(function(){
		$('.sub3_2').hide();
		$('.menu3_2').css("font-weight", "400");
	});
});


$(document).ready(function(){

	$('.top .sub3_3').hide();
	$('.menu3_3').css("font-weight", "400");

	$('.menu3_3').mouseover(function(){
		$('.sub3_1').hide();
		$('.sub3_2').hide();
		$('.sub3_3').show();
		$('.sub3_4').hide();
		
		$('.menu3_1').css("font-weight", "400");
		$('.menu3_2').css("font-weight", "400");
		$('.menu3_3').css("font-weight", "600");
		$('.menu3_4').css("font-weight", "400");

	});
	$('.sub3_3').mouseleave(function(){
		$('.sub3_3').hide();
		$('.menu3_3').css("font-weight", "400");
	});
});


$(document).ready(function(){

	$('.top .sub3_4').hide();
	$('.menu3_4').css("font-weight", "400");

	$('.menu3_4').mouseover(function(){
		$('.sub3_1').hide();
		$('.sub3_2').hide();
		$('.sub3_3').hide();
		$('.sub3_4').show();
		
		$('.menu3_1').css("font-weight", "400");
		$('.menu3_2').css("font-weight", "400");
		$('.menu3_3').css("font-weight", "400");
		$('.menu3_4').css("font-weight", "600");

	});
	$('.menu3_4').mouseleave(function(){
		$('.sub3_4').hide();
		$('.menu3_4').css("font-weight", "400");
	});
});






$(document).ready(function(){

	$('.top .sub4_1').hide();
	$('.menu4_1').css("font-weight", "400");

	$('.menu4_1').mouseover(function(){
		$('.sub4_1').show();
		$('.sub4_2').hide();
		$('.sub4_3').hide();
		$('.sub4_4').hide();
		$('.sub4_5').hide();
		$('.sub4_6').hide();
		$('.sub4_7').hide();
		
		$('.menu4_1').css("font-weight", "600");
		$('.menu4_2').css("font-weight", "400");
		$('.menu4_3').css("font-weight", "400");
		$('.menu4_4').css("font-weight", "400");
		$('.menu4_5').css("font-weight", "400");
		$('.menu4_6').css("font-weight", "400");
		$('.menu4_7').css("font-weight", "400");

	});
	$('.sub4_1').mouseleave(function(){
		$('.sub4_1').hide();
		$('.menu4_1').css("font-weight", "400");
	});
});



$(document).ready(function(){

	$('.top .sub4_2').hide();
	$('.menu4_2').css("font-weight", "400");

	$('.menu4_2').mouseover(function(){
		$('.sub4_1').hide();
		$('.sub4_2').show();
		$('.sub4_3').hide();
		$('.sub4_4').hide();
		$('.sub4_5').hide();
		$('.sub4_6').hide();
		$('.sub4_7').hide();
		
		$('.menu4_1').css("font-weight", "400");
		$('.menu4_2').css("font-weight", "600");
		$('.menu4_3').css("font-weight", "400");
		$('.menu4_4').css("font-weight", "400");
		$('.menu4_5').css("font-weight", "400");
		$('.menu4_6').css("font-weight", "400");
		$('.menu4_7').css("font-weight", "400");

	});
	$('.sub4_2').mouseleave(function(){
		$('.sub4_2').hide();
		$('.menu4_2').css("font-weight", "400");
	});
});


$(document).ready(function(){

	$('.top .sub4_3').hide();
	$('.menu4_3').css("font-weight", "400");

	$('.menu4_3').mouseover(function(){
		$('.sub4_1').hide();
		$('.sub4_2').hide();
		$('.sub4_3').show();
		$('.sub4_4').hide();
		$('.sub4_5').hide();
		$('.sub4_6').hide();
		$('.sub4_7').hide();
		
		$('.menu4_1').css("font-weight", "400");
		$('.menu4_2').css("font-weight", "400");
		$('.menu4_3').css("font-weight", "600");
		$('.menu4_4').css("font-weight", "400");
		$('.menu4_5').css("font-weight", "400");
		$('.menu4_6').css("font-weight", "400");
		$('.menu4_7').css("font-weight", "400");

	});
	$('.menu4_3').mouseleave(function(){
		$('.sub4_3').hide();
		$('.menu4_3').css("font-weight", "400");
	});
});


$(document).ready(function(){

	$('.top .sub4_4').hide();
	$('.menu4_4').css("font-weight", "400");

	$('.menu4_4').mouseover(function(){
		$('.sub4_1').hide();
		$('.sub4_2').hide();
		$('.sub4_3').hide();
		$('.sub4_4').show();
		$('.sub4_5').hide();
		$('.sub4_6').hide();
		$('.sub4_7').hide();
		
		$('.menu4_1').css("font-weight", "400");
		$('.menu4_2').css("font-weight", "400");
		$('.menu4_3').css("font-weight", "400");
		$('.menu4_4').css("font-weight", "600");
		$('.menu4_5').css("font-weight", "400");
		$('.menu4_6').css("font-weight", "400");
		$('.menu4_7').css("font-weight", "400");

	});
	$('.menu4_4').mouseleave(function(){
		$('.sub4_4').hide();
		$('.menu4_4').css("font-weight", "400");
	});
});



$(document).ready(function(){

	$('.top .sub4_5').hide();
	$('.menu4_5').css("font-weight", "400");

	$('.menu4_5').mouseover(function(){
		$('.sub4_1').hide();
		$('.sub4_2').hide();
		$('.sub4_3').hide();
		$('.sub4_4').hide();
		$('.sub4_5').show();
		$('.sub4_6').hide();
		$('.sub4_7').hide();
		
		$('.menu4_1').css("font-weight", "400");
		$('.menu4_2').css("font-weight", "400");
		$('.menu4_3').css("font-weight", "400");
		$('.menu4_4').css("font-weight", "400");
		$('.menu4_5').css("font-weight", "600");
		$('.menu4_6').css("font-weight", "400");
		$('.menu4_7').css("font-weight", "400");

	});
	$('.menu4_5').mouseleave(function(){
		$('.sub4_5').hide();
		$('.menu4_5').css("font-weight", "400");
	});
});



$(document).ready(function(){

	$('.top .sub4_6').hide();
	$('.menu4_6').css("font-weight", "400");

	$('.menu4_6').mouseover(function(){
		$('.sub4_1').hide();
		$('.sub4_2').hide();
		$('.sub4_3').hide();
		$('.sub4_4').hide();
		$('.sub4_5').hide();
		$('.sub4_6').show();
		$('.sub4_7').hide();
		
		$('.menu4_1').css("font-weight", "400");
		$('.menu4_2').css("font-weight", "400");
		$('.menu4_3').css("font-weight", "400");
		$('.menu4_4').css("font-weight", "400");
		$('.menu4_5').css("font-weight", "400");
		$('.menu4_6').css("font-weight", "600");
		$('.menu4_7').css("font-weight", "400");

	});
	$('.sub4_6').mouseleave(function(){
		$('.sub4_6').hide();
		$('.menu4_6').css("font-weight", "400");
	});
});



$(document).ready(function(){

	$('.top .sub4_7').hide();
	$('.menu4_7').css("font-weight", "400");

	$('.menu4_7').mouseover(function(){
		$('.sub4_1').hide();
		$('.sub4_2').hide();
		$('.sub4_3').hide();
		$('.sub4_4').hide();
		$('.sub4_5').hide();
		$('.sub4_6').hide();
		$('.sub4_7').show();
		
		$('.menu4_1').css("font-weight", "400");
		$('.menu4_2').css("font-weight", "400");
		$('.menu4_3').css("font-weight", "400");
		$('.menu4_4').css("font-weight", "400");
		$('.menu4_5').css("font-weight", "400");
		$('.menu4_6').css("font-weight", "400");
		$('.menu4_7').css("font-weight", "600");

	});
	$('.sub4_7').mouseleave(function(){
		$('.sub4_7').hide();
		$('.menu4_7').css("font-weight", "400");
	});
});






$(document).ready(function(){

	$('.top .sub5_1').hide();
	$('.menu5_1').css("font-weight", "400");

	$('.menu5_1').mouseover(function(){
		$('.sub5_1').show();
		$('.sub5_2').hide();
		
		$('.menu5_1').css("font-weight", "600");
		$('.menu5_2').css("font-weight", "400");

	});
	$('.menu5_1').mouseleave(function(){
		$('.sub5_1').hide();
		$('.menu5_1').css("font-weight", "400");
	});
});



$(document).ready(function(){

	$('.top .sub5_2').hide();
	$('.menu5_2').css("font-weight", "400");

	$('.menu5_2').mouseover(function(){
		$('.sub5_1').hide();
		$('.sub5_2').show();

		$('.menu5_1').css("font-weight", "400");
		$('.menu5_2').css("font-weight", "600");

	});
	$('.menu5_2').mouseleave(function(){
		$('.sub5_2').hide();
		$('.menu5_2').css("font-weight", "400");
	});
});





$(document).ready(function(){

$('.top .sub6_1').hide();
$('.menu6_1').css("font-weight", "400");

$('.menu6_1').mouseover(function(){
	$('.sub6_1').show();
	$('.sub6_2').hide();
	
	$('.menu6_1').css("font-weight", "600");
	$('.menu6_2').css("font-weight", "400");

});
$('.menu6_1').mouseleave(function(){
	$('.sub6_1').hide();
	$('.menu6_1').css("font-weight", "400");
});
});




$(document).ready(function(){

$('.top .sub6_2').hide();
$('.menu6_2').css("font-weight", "400");

$('.menu6_2').mouseover(function(){
	$('.sub6_1').hide();
	$('.sub6_2').show();

	$('.menu6_1').css("font-weight", "400");
	$('.menu6_2').css("font-weight", "600");

});
$('.menu6_2').mouseleave(function(){
	$('.sub6_2').hide();
	$('.menu6_2').css("font-weight", "400");
});
});








</script>




<script>

	$(document).ready(function(){

	$('#depth_line .depth_info_01').hide();

	$('.first_dep_01').mouseover(function(){
		$('.depth_info_01').show();

	});
	$('.first_dep_01').mouseleave(function(){
		$('.depth_info_01').hide();
});
});



	$(document).ready(function(){

	$('#depth_line .depth_info_02').hide();

	$('.first_dep_02').mouseover(function(){
		$('.depth_info_02').show();

	});
	$('.first_dep_02').mouseleave(function(){
		$('.depth_info_02').hide();
});
});



	$(document).ready(function(){

	$('#depth_line .depth_info_03').hide();

	$('.first_dep_03').mouseover(function(){
		$('.depth_info_03').show();

	});
	$('.first_dep_03').mouseleave(function(){
		$('.depth_info_03').hide();
});
});



	$(document).ready(function(){

	$('#depth_line .depth_info_04').hide();

	$('.first_dep_04').mouseover(function(){
		$('.depth_info_04').show();

	});
	$('.first_dep_04').mouseleave(function(){
		$('.depth_info_04').hide();
});
});



	$(document).ready(function(){

	$('#depth_line .depth_info_05').hide();

	$('.first_dep_05').mouseover(function(){
		$('.depth_info_05').show();

	});
	$('.first_dep_05').mouseleave(function(){
		$('.depth_info_05').hide();
});
});



	$(document).ready(function(){

	$('#depth_line .depth_info_06').hide();
	$('.bg_bk').hide();

	$('.first_dep_06').mouseover(function(){
		$('.depth_info_06').show();

	});
	$('.first_dep_06').mouseleave(function(){
		$('.depth_info_06').hide();
	});
});


$(document).ready(function(){

$('.mo_category_wrap').hide();

$('.mo_menu').click(function(){
	$('.mo_category_wrap').show();
	$(this).unbind();
});

$('.mo_category_hidebt').click(function(){
	$('.mo_category_wrap').fadeOut();
});

});


</script>



</head>

<body topmargin="0" leftmargin="0" marginheight="0" marginwidth="0">

	<div class="gnb_mo_wrap">
		<div class="mo_logo_wrap"><a href="http://gmcts.co.kr/index.php">
			<img src="http://gmcts.co.kr/image/logo_m_for_LG.png"></a></div>
		<div class="mo_menu">
			<img src="http://gmcts.co.kr/image/icon_nav.png">


			<div class="mo_category_wrap">
				<div class="mo_category_top">
					<img class="mo_category_hidebt" src="http://gmcts.co.kr/image/icon_nav_hide.png">
				</div>

				<div class="mo_gnb">
					<ul>
						<li>
							<a href="http://gmcts.co.kr/company/company.php">
								<h1 class="mo_first_depth">회사소개
									<ul>
										<li>
											<a href="http://gmcts.co.kr/company/company.php">
												<h2 class="mo_second_depth">굿모닝CTS 소개</h2>
											</a>
										</li>

										<li>
											<a href="http://gmcts.co.kr/company/history.php">
												<h2 class="mo_second_depth">연혁 및 실적</h2>
											</a>
										</li>

										<li>
											<a href="http://gmcts.co.kr/company/maps.php">
												<h2 class="mo_second_depth">찾아오시는 길</h2>
											</a>
										</li>
									</ul>
								</h1>
							</a>
						</li>



						<li>
							<a href="http://gmcts.co.kr/product/laptop.php">
								<h1 class="mo_first_depth">IT 솔루션
									<ul>
										<li>
											<a href="http://gmcts.co.kr/product/laptop.php">
												<h2 class="mo_second_depth">노트북
													<ul>
														<li>
															<a href="http://gmcts.co.kr/product/LGgram.php">
																<p>LG 그램</p>
															</a>
														</li>
														<li>
															<a href="http://gmcts.co.kr/product/LGultra.php">
																<p>LG 울트라</p>
															</a>
														</li>
													</ul>
												</h2>
											</a>
										</li>

										<li>
											<a href="http://gmcts.co.kr/product/allinonePC.php">
												<h2 class="mo_second_depth">일체형 PC</h2>
											</a>
										</li>

										<li>
											<a>
												<h2 class="mo_second_depth">데스크톱
													<ul>
														<li>
															<a href="http://gmcts.co.kr/product/desktop.php">
																<p>타워형 PC</p>
															</a>
														</li>
														<li>
															<a href="http://gmcts.co.kr/product/desktop/slimPC.php">
																<p>슬림형 PC</p>
															</a>
														</li>
													</ul>
												</h2>
											</a>
										</li>

										<li>
											<a href="http://gmcts.co.kr/product/monitor.php">
												<h2 class="mo_second_depth">모니터
													<ul>
														<li>
															<a href="http://gmcts.co.kr/product/monitor/ultrageargaming.php">
																<p>울트라기어 게이밍 모니터</p>
															</a>
														</li>
														<li>
															<a href="http://gmcts.co.kr/product/monitor/ultrawide.php">
																<p>울트라와이드 모니터</p>
															</a>
														</li>
														<li>
															<a href="http://gmcts.co.kr/product/monitor/ultraHD.php">
																<p>울트라HD 모니터</p>
															</a>
														</li>
														<li>
															<a href="http://gmcts.co.kr/product/monitor/PCmonitor.php">
																<p>PC 모니터</p>
															</a>
														</li>
														<li>
															<a href="http://gmcts.co.kr/product/monitor/TVmonitor.php">
																<p>TV 모니터</p>
															</a>
														</li>
														<li>
															<a href="http://gmcts.co.kr/product/monitor/healthcare.php">
																<p>의료용 모니터</p>
															</a>
														</li>
													</ul>
												</h2>
											</a>
										</li>

										<li>
											<a href="http://gmcts.co.kr/product/clouddevice.php">
												<h2 class="mo_second_depth">클라우드</h2>
											</a>
										</li>
									</ul>
								</h1>
							</a>
						</li>



						<li>
							<a href="http://gmcts.co.kr/product/signage/digitalsignage.php">
								<h1 class="mo_first_depth">디스플레이
									<ul>
										<li>
											<a href="http://gmcts.co.kr/product/signage/digitalsignage.php">
												<h2 class="mo_second_depth">사이니지
													<ul>
														<li>
															<a href="http://gmcts.co.kr/product/signage/digitalsignage.php">
																<p>디지털 사이니지</p>
															</a>
														</li>
														<li>
															<a href="http://gmcts.co.kr/product/signage/oledsignage.php">
																<p>올레드 사이니지</p>
															</a>
														</li>
														<li>
															<a href="http://gmcts.co.kr/product/signage/ledsignage.php">
																<p>LED 사이니지</p>
															</a>
														</li>
													</ul>
												</h2>
											</a>
										</li>

										<li>
											<a href="http://gmcts.co.kr/product/TV.php">
												<h2 class="mo_second_depth">TV
													<ul>
														<li>
															<a href="http://gmcts.co.kr/product/TV/commercialTV.php">
																<p>커머셜 TV</p>
															</a>
														</li>
														<li>
															<a href="http://gmcts.co.kr/product/TV/hotelTV.php">
																<p>호텔 TV</p>
															</a>
														</li>
													</ul>
												</h2>
											</a>
										</li>

										<li>
											<a href="http://gmcts.co.kr/product/projector.php">
												<h2 class="mo_second_depth">프로젝터</h2>
											</a>
										</li>

										<li>
											<a href="http://gmcts.co.kr/product/digitalboard.php">
												<h2 class="mo_second_depth">전자칠판</h2>
											</a>
										</li>
									</ul>
								</h1>
							</a>
						</li>



						<li>
							<a href="#">
								<h1 class="mo_first_depth">가전
									<ul>
										<li>
											<a href="http://gmcts.co.kr/product/appliance/refrigerator.php">
												<h2 class="mo_second_depth">냉장고</h2>
											</a>
										</li>

										<li>
											<a href="http://gmcts.co.kr/product/appliance/styler.php">
												<h2 class="mo_second_depth">스타일러</h2>
											</a>
										</li>

										<li>
											<a href="http://gmcts.co.kr/product/appliance/washingmachine.php">
												<h2 class="mo_second_depth">세탁기</h2>
											</a>
										</li>

										<li>
											<a href="http://gmcts.co.kr/product/appliance/pralintro.php">
												<h2 class="mo_second_depth">프라엘</h2>
											</a>
										</li>

										<li>
											<a href="http://gmcts.co.kr/product/appliance/puricare.php">
												<h2 class="mo_second_depth">공기청정기</h2>
											</a>
										</li>

										<li>
											<a href="http://gmcts.co.kr/product/appliance/cleaner.php">
												<h2 class="mo_second_depth">청소기</h2>
											</a>
										</li>
									</ul>
								</h1>
							</a>
						</li>


						<li>
							<a href="http://gmcts.co.kr/rental/rentalguide.php">
								<h1 class="mo_first_depth">렌탈</h1>
							</a>
						</li>

						<li>
							<a href="http://gmcts.co.kr/caresolution/caresolution_guide.php">
								<h1 class="mo_first_depth">케어솔루션</h1>
							</a>
						</li>

						<li>
							<a href="http://gmcts.co.kr/customer/contactus.html">
								<h1 class="mo_first_depth">온라인 견적</h1>
							</a>
						</li>

						<li>
							<a href="http://gmcts.co.kr/notice.php">
								<h1 class="mo_first_depth">공지사항</h1>
							</a>
						</li>

					</ul>
				</div>
	
			</div>











		</div>

		






	</div>

	<div class="gnb_wrap">
		<div class="gnb_box"> <!--w1400-->
		<ul>
			<li class="logo_box">
				<a href="http://gmcts.co.kr/index.php">
					<!--<img src="http://gmcts.co.kr/image/CI.jpg">-->
					<img style="margin-top: 12px;" src="http://gmcts.co.kr/image/CI_for_LG.png">
				</a>	
			</li>
			<li class="catebox_l">
				<ul id="depth_line">
					<li>
						<a class="depth_line_text" href="http://gmcts.co.kr/company/company.php">
							<h1 class="first_dep_01">회사소개
																
								<div class="depth_info_01"><!--w100%-->
									<div class="bg_bk"></div>
									<ul><!--w1400-->
									<a href="http://gmcts.co.kr/company/company.php" style="float: left;">
										<p style="font-weight: 600; margin-right: 104px;height: 582px;">
											회사 소개
										</p>
										<img class="more" src="http://gmcts.co.kr/image/here.jpg">
									</a>
										<li>
											<ul class="top">
												<li><!--2뎁스 SET 01-->
													<a class="menu1_1" href="http://gmcts.co.kr/company/company.php">
														<p>굿모닝CTS 소개
															<li><!--3뎁스 SET 01-->
																<!--
																<a class="sub1_1">
																	<p>
																		<img class="more_1" src="http://gmcts.co.kr/image/here.jpg">
																	</p>
																</a>-->
															
															<!--3뎁스 리스트-->
															<!--
																<li class="sub1_1">
																	<a href="###">
																		<p>3depth_1</p>
																	</a>
																	<a href="#">
																		<p>3depth_2</p>
																	</a>
																	<a href="#">
																		<p>3depth_3</p>
																	</a>
																</li> -->
															</li>
														</p>
													</a>
												</li>

												<!--<li><!--2뎁스 SET 01-->
													<!--<a class="menu1_2" href="http://gmcts.co.kr/company/ceotalk.php">
														<p>인사말
															<li><!--3뎁스 SET 01-->
																<!--
																<a class="sub1_2">
																	<p>
																		<img class="more_2" src="http://gmcts.co.kr/image/here.jpg">
																	</p>
																</a>-->
															
															<!--3뎁스 리스트-->
															<!--
																<li class="sub1_2">
																	<a href="###">
																		<p>3depth_21</p>
																	</a>
																	<a href="#">
																		<p>3depth_22</p>
																	</a>
																	<a href="#">
																		<p>3depth_23</p>
																	</a>
																</li>-->
															<!--</li>
														</p>
													</a>
												</li>-->

												<!--<li>2뎁스 SET 01-->
													<!--<a class="menu1_3" href="http://gmcts.co.kr/company/vision_value.php">
														<p>비전 & 가치
															<li><!--3뎁스 SET 01-->
																<!--
																<a class="sub1_3">
																	<p>
																		<img class="more_3" src="http://gmcts.co.kr/image/here.jpg">
																	</p>
																</a>-->
															
															<!--3뎁스 리스트-->
															<!--
																<li class="sub1_3">
																	<a href="###">
																		<p>3depth_1</p>
																	</a>
																	<a href="#">
																		<p>3depth_2</p>
																	</a>
																	<a href="#">
																		<p>3depth_3</p>
																	</a>
																</li>-->
															<!--</li>
														</p>
													</a>
												</li>-->

												<li><!--2뎁스 SET 01-->
													<a class="menu1_4" href="http://gmcts.co.kr/company/history.php">
														<p>연혁 및 실적
															<li><!--3뎁스 SET 01-->
																<!--
																<a class="sub1_4">
																	<p>
																		<img class="more_4" src="http://gmcts.co.kr/image/here.jpg">
																	</p>
																</a>-->
															
															<!--3뎁스 리스트-->
															<!--
																<li class="sub1_4">
																	<a href="###">
																		<p>3depth_1</p>
																	</a>
																	<a href="#">
																		<p>3depth_2</p>
																	</a>
																	<a href="#">
																		<p>3depth_3</p>
																	</a>
																</li>-->
															</li>
														</p>
													</a>
												</li>

												<li><!--2뎁스 SET 01-->
													<a class="menu1_5" href="http://gmcts.co.kr/company/maps.php">
														<p>찾아오시는 길
															<li><!--3뎁스 SET 01-->
																<!--
																<a class="sub1_5">
																	<p>
																		<img class="more_5" src="http://gmcts.co.kr/image/here.jpg">
																	</p>
																</a>-->
															
															<!--3뎁스 리스트-->
															<!--
																<li class="sub1_5">
																	<a href="###">
																		<p>3depth_1</p>
																	</a>
																	<a href="#">
																		<p>3depth_2</p>
																	</a>
																	<a href="#">
																		<p>3depth_3</p>
																	</a>
																</li>-->
															</li>
														</p>
													</a>
												</li>
											</ul>
										</li>
									</ul>
								</div>
							</h1>
						</a>
					</li>





					<li>
						<a class="depth_line_text" href="http://gmcts.co.kr/product/laptop.php">
							<h1 class="first_dep_02">IT 솔루션
																
								<div class="depth_info_02"><!--w100%-->
									<ul><!--w1400-->
									<a href="http://gmcts.co.kr/product/laptop.php" style="float: left;">
										<p style="font-weight: 600; margin-right: 103px; height: 582px;">
											<b style="font-weight: 600; font-family: noto-sans; color: #000; font-size: 20.5px;">IT</b> 솔루션
										</p>
										<img class="more" src="http://gmcts.co.kr/image/here.jpg">
									</a>
										<li>
											<ul class="top">
												<li><!--2뎁스 SET 01-->
													<a class="menu2_1" href="http://gmcts.co.kr/product/laptop.php">
														<p>노트북
															<li><!--3뎁스 SET 01-->
																<a class="sub2_1">
																	<p>
																		<img class="more_1" src="http://gmcts.co.kr/image/here.jpg">
																	</p>
																</a>
															
															<!--3뎁스 리스트-->
																<li class="sub2_1">
																	<a href="http://gmcts.co.kr/product/LGgram.php">
																		<p>LG 그램</p>
																	</a>
																	<a href="http://gmcts.co.kr/product/LGultra.php">
																		<p>LG 울트라</p>
																	</a>
																</li>
															</li>
														</p>
													</a>
												</li>

												<li><!--2뎁스 SET 01-->
													<a class="menu2_2" href="http://gmcts.co.kr/product/allinonePC.php">
														<p>일체형 PC
															<li><!--3뎁스 SET 01-->
																<!--
																<a class="sub2_2">
																	<p>
																		<img class="more_2" src="http://gmcts.co.kr/image/here.jpg">
																	</p>
																</a>-->
															
															<!--3뎁스 리스트-->
																
																<!--
																<li class="sub2_2">
																	<a href="###">
																		<p></p>
																	</a>
																	<a href="#">
																		<p>3depth_22</p>
																	</a>
																	<a href="#">
																		<p>3depth_23</p>
																	</a>
																</li> -->
															</li>
														</p>
													</a>
												</li>

												<li><!--2뎁스 SET 01-->
													<a class="menu2_3" href="http://gmcts.co.kr/product/desktop.php">
														<p>데스크톱
															<li><!--3뎁스 SET 01-->
																<a class="sub2_3">
																	<p>
																		<img class="more_3" src="http://gmcts.co.kr/image/here.jpg">
																	</p>
																</a>
															
															<!--3뎁스 리스트-->
																<li class="sub2_3">
																	<a href="http://gmcts.co.kr/product/desktop/towerPC.php">
																		<p>타워형 PC</p>
																	</a>
																	<a href="http://gmcts.co.kr/product/desktop/slimPC.php">
																		<p>슬림형 PC</p>
																	</a>
																	<a>
																		<p>&nbsp;&nbsp;</p>
																	</a>
																</li>
															</li>
														</p>
													</a>
												</li>

												<li><!--2뎁스 SET 01-->
													<a class="menu2_4" href="http://gmcts.co.kr/product/monitor.php">
														<p>모니터
															<li><!--3뎁스 SET 01-->
																<a class="sub2_4">
																	<p>
																		<img class="more_4" src="http://gmcts.co.kr/image/here.jpg">
																	</p>
																</a>
															
															<!--3뎁스 리스트-->
																<li class="sub2_4">
																	<a href="http://gmcts.co.kr/product/monitor/ultrageargaming.php">
																		<p>울트라기어 게이밍 모니터</p>
																	</a>
																	<a href="http://gmcts.co.kr/product/monitor/ultrawide.php">
																		<p>울트라와이드 모니터</p>
																	</a>
																	<a href="http://gmcts.co.kr/product/monitor/ultraHD.php">
																		<p>울트라HD 모니터</p>
																	</a>
																	<a href="http://gmcts.co.kr/product/monitor/PCmonitor.php">
																		<p>PC 모니터</p>
																	</a>
																	<a href="http://gmcts.co.kr/product/monitor/TVmonitor.php">
																		<p>TV 모니터</p>
																	</a>
																	<a href="http://gmcts.co.kr/product/monitor/healthcare.php">
																		<p>의료용 모니터</p>
																	</a>
																</li>
															</li>
														</p>
													</a>
												</li>

												<li><!--2뎁스 SET 01-->
													<a class="menu2_5" href="http://gmcts.co.kr/product/clouddevice.php">
														<p>클라우드
															<li><!--3뎁스 SET 01-->
																<!--
																<a class="sub2_5">
																	<p>
																		<img class="more_5" src="http://gmcts.co.kr/image/here.jpg">
																	</p>
																</a>-->
															
															<!--3뎁스 리스트-->
															<!--
																<li class="sub1_5">
																	<a href="###">
																		<p>3depth_1</p>
																	</a>
																	<a href="#">
																		<p>3depth_2</p>
																	</a>
																	<a href="#">
																		<p>3depth_3</p>
																	</a>
																</li>-->
															</li>
														</p>
													</a>
												</li>
											</ul>
										</li>
									</ul>
								</div>
							</h1>
						</a>
					</li>





					<li>
						<a class="depth_line_text" href="http://gmcts.co.kr/product/signage/digitalsignage.php">
							<h1 class="first_dep_03">디스플레이
																
								<div class="depth_info_03"><!--w100%-->
									<ul><!--w1400-->
									<a href="http://gmcts.co.kr/product/signage/digitalsignage.php" style="float: left;">
										<p style="font-weight: 600; margin-right: 92px;height: 582px;">
											디스플레이
										</p>
										<img class="more" src="http://gmcts.co.kr/image/here.jpg">
									</a>
										<li>
											<ul class="top">
												<li><!--2뎁스 SET 01-->
													<a class="menu3_1" href="http://gmcts.co.kr/product/signage/digitalsignage.php">
														<p>사이니지
															<li><!--3뎁스 SET 01-->
																<a class="sub3_1">
																	<p>
																		<img class="more_1" src="http://gmcts.co.kr/image/here.jpg">
																	</p>
																</a>
															
															<!--3뎁스 리스트-->
																<li class="sub3_1">
																	<a href="http://gmcts.co.kr/product/signage/digitalsignage.php">
																		<p>디지털 사이니지</p>
																	</a>
																	<a href="http://gmcts.co.kr/product/signage/oledsignage.php">
																		<p>올레드 사이니지</p>
																	</a>
																	<a href="http://gmcts.co.kr/product/signage/ledsignage.php">
																		<p>LED 사이니지</p>
																	</a>
																</li>
															</li>
														</p>
													</a>
												</li>

												<li><!--2뎁스 SET 01-->
													<a class="menu3_2" href="http://gmcts.co.kr/product/TV.php">
														<p>TV
															<li><!--3뎁스 SET 01-->
																<a class="sub3_2">
																	<p>
																		<img class="more_2" src="http://gmcts.co.kr/image/here.jpg">
																	</p>
																</a>
															
															<!--3뎁스 리스트-->
																<li class="sub3_2">
																	<a href="http://gmcts.co.kr/product/TV/commercialTV.php">
																		<p>커머셜 TV</p>
																	</a>
																	<a href="http://gmcts.co.kr/product/TV/hotelTV.php">
																		<p>호텔 TV</p>
																	</a>
																</li>
															</li>
														</p>
													</a>
												</li>

												<li><!--2뎁스 SET 01-->
													<a class="menu3_3" href="http://gmcts.co.kr/product/projector.php">
														<p>프로젝터
															<li><!--3뎁스 SET 01-->
																<!--<a class="sub3_3">
																	<p>
																		<img class="more_3" src="http://gmcts.co.kr/image/here.jpg">
																	</p>
																</a>-->
															
															<!--3뎁스 리스트-->
																<!--<li class="sub3_3">
																	<a href="https://www.lge.co.kr/kr/business/product/display/projector-list.do?cateId1=CT00000690" target="_blank">
																		<p>프로빔</p>
																	</a>
																	<a>
																		<p>&nbsp;&nbsp;</p>
																	</a>
																	<a>
																		<p>&nbsp;&nbsp;</p>
																	</a>
																</li>-->
															</li>
														</p>
													</a>
												</li>

												<li><!--2뎁스 SET 01-->
													<a href="http://gmcts.co.kr/product/digitalboard.php" class="menu3_4">
														<p>전자칠판
															<li><!--3뎁스 SET 01-->
																<!--
																<a class="sub3_4">
																	<p>
																		<img class="more_4" src="http://gmcts.co.kr/image/here.jpg">
																	</p>
																</a>-->
															
															<!--3뎁스 리스트-->
															<!--
																<li class="sub3_4">
																	<a href="###">
																		<p>3depth_1</p>
																	</a>
																	<a href="#">
																		<p>3depth_2</p>
																	</a>
																	<a href="#">
																		<p>3depth_3</p>
																	</a>
																</li>-->
															</li>
														</p>
													</a>
												</li>
											</ul>
										</li>
									</ul>
								</div>
							</h1>
						</a>
					</li>





					<li>
						<a class="depth_line_text" href="http://gmcts.co.kr/product/appliance.php">
							<h1 class="first_dep_04">가전
																
								<div class="depth_info_04"><!--w100%-->
									<ul><!--w1400-->
									<a href="http://gmcts.co.kr/product/appliance.php" style="float: left;">
										<p style="font-weight: 600; margin-right: 140px;height: 582px;">
											가전
										</p>
										<img class="more" src="http://gmcts.co.kr/image/here.jpg">
									</a>
										<li>
											<ul class="top">
												<!--<li><!--2뎁스 SET 01-->
													<!--<a class="menu4_1" href="##">
														<p>에어컨
															<li><!--3뎁스 SET 01-->
																<!--a class="sub4_1">
																	<p>
																		<img class="more_1" src="http://gmcts.co.kr/image/here.jpg">
																	</p>
																</a>
															
															<!--3뎁스 리스트-->
																<!--<li class="sub4_1">
																	<a>
																		<p>스탠드형 에어컨</p>
																	</a>
																	<a>
																		<p>벽걸이형 에어컨</p>
																	</a>
																	<a>
																		<p>이동식 에어컨</p>
																	</a>
																	<a>
																		<p>상업용</p>
																	</a>
																</li>
															</li>
														</p>
													</a>
												</li>

												<li><!--2뎁스 SET 01-->
													<a class="menu4_2" href="http://gmcts.co.kr/product/appliance/refrigerator.php">
														<p>냉장고
															<li><!--3뎁스 SET 01-->
																<!--<a class="sub4_2">
																	<p>
																		<img class="more_2" src="http://gmcts.co.kr/image/here.jpg">
																	</p>
																</a>
															
															<!--3뎁스 리스트-->
																<!--<li class="sub4_2">
																	<a href="https://www.lge.co.kr/kr/business/product/builtin/cooling-list.do?cateId1=CT00020105" target="">
																		<p>정수기형</p>
																	</a>
																	<a href="https://www.lge.co.kr/kr/business/product/kitchen/refrigerator-list.do?cateId1=CT00023500" target="_blank">
																		<p>상냉장/ 하냉동</p>
																	</a>
																	<a href="https://www.lge.co.kr/kr/business/product/kitchen/refrigerator-list.do?cateId1=CT00000718" target="_blank">
																		<p>양문형</p>
																	</a>
																	<a href="https://www.lge.co.kr/kr/business/product/kitchen/refrigerator-list.do?cateId1=CT00000719" target="_blank">
																		<p>일반형</p>
																	</a>
																	<a href="https://www.lge.co.kr/kr/business/product/kitchen/refrigerator-list.do?cateId1=CT00000577&cateId2=" target="_blank">
																		<p>비즈니스</p>
																	</a>
																	<a href="https://www.lge.co.kr/kr/business/product/builtin/cooling-list.do?cateId1=CT00020123" target="_blank">
																		<p>와인셀러</p>
																	</a>
																</li>-->
															</li>
														</p>
													</a>
												</li>

												<li><!--2뎁스 SET 01-->
													<a class="menu4_3" href="http://gmcts.co.kr/product/appliance/washingmachine.php">
														<p>세탁기
															<li><!--3뎁스 SET 01-->
																<!--
																<a class="sub4_3">
																	<p>
																		<img class="more_3" src="http://gmcts.co.kr/image/here.jpg">
																	</p>
																</a>-->
															
															<!--3뎁스 리스트-->
															<!--
																<li class="sub4_3">
																	<a href="###">
																		<p>3depth_1</p>
																	</a>
																	<a href="#">
																		<p>3depth_2</p>
																	</a>
																	<a href="#">
																		<p>3depth_3</p>
																	</a>
																</li>-->
															</li>
														</p>
													</a>
												</li>

												<li><!--2뎁스 SET 01-->
													<a class="menu4_4" href="http://gmcts.co.kr/product/appliance/pralintro.php">
														<p>프라엘
															<li><!--3뎁스 SET 01-->
																
																<!--<a class="sub4_4">
																	<p>
																		<img class="more_3" src="http://gmcts.co.kr/image/here.jpg">
																	</p>
																</a>
															
															<!--3뎁스 리스트-->
															
																<!--<li class="sub4_4">
																	<a href="http://gmcts.co.kr/product/appliance/pral/HGN1.php">
																		<p>메디헤어</p>
																	</a>
																	<a href="http://gmcts.co.kr/product/appliance/pral/EWN1.php">
																		<p>아이케어</p>
																	</a>
																</li>
															</li>
														</p>
													</a>
												</li>

												<li><!--2뎁스 SET 01-->
													<a class="menu4_5" href="http://gmcts.co.kr/product/appliance/styler.php">
														<p>스타일러
															<li><!--3뎁스 SET 01-->
																<!--
																<a class="sub4_5">
																	<p>
																		<img class="more_3" src="http://gmcts.co.kr/image/here.jpg">
																	</p>
																</a>-->
															
															<!--3뎁스 리스트-->
															<!--
																<li class="sub4_5">
																	<a href="###">
																		<p>3depth_1</p>
																	</a>
																	<a href="#">
																		<p>3depth_2</p>
																	</a>
																	<a href="#">
																		<p>3depth_3</p>
																	</a>
																</li>-->
															</li>
														</p>
													</a>
												</li>

												<li><!--2뎁스 SET 01-->
													<a class="menu4_6" href="http://gmcts.co.kr/product/appliance/puricare.php">
														<p>공기청정기
															<li><!--3뎁스 SET 01-->
																<!--<a class="sub4_6">
																	<p>
																		<img class="more_4" src="http://gmcts.co.kr/image/here.jpg">
																	</p>
																</a>
															
															<!--3뎁스 리스트-->
																<!--<li class="sub4_6">
																	<a href="https://www.lge.co.kr/kr/business/product/household-appliances/air-cleaner-list.do?cateId1=CT00000736" target="_blank">
																		<p>공기청정기</p>
																	</a>
																	<a href="https://www.lge.co.kr/kr/business/product/household-appliances/air-cleaner-list.do?cateId1=CT00024299" target="_blank">
																		<p>휴대용 공기청정기</p>
																	</a>
																	<a>
																		<p>&nbsp;&nbsp;</p>
																	</a>
																	<a>
																		<p>&nbsp;&nbsp;</p>
																	</a>
																	<a>
																		<p>&nbsp;&nbsp;</p>
																	</a>
																	<a>
																		<p>&nbsp;&nbsp;</p>
																	</a>
																</li>-->
															</li>
														</p>
													</a>
												</li>

												<li><!--2뎁스 SET 01-->
													<a class="menu4_7" href="http://gmcts.co.kr/product/appliance/cleaner.php">
														<p>청소기
															<!--<li><!--3뎁스 SET 01-->
																<!--<a class="sub4_7">
																	<p>
																		<img class="more_5" src="http://gmcts.co.kr/image/here.jpg">
																	</p>
																</a>
															
															<!--3뎁스 리스트-->
																<!--<li class="sub4_7">
																	<a href="https://www.lge.co.kr/kr/business/product/household-appliances/vacuum-list.do?cateId1=CT00025339" target="_blank">
																		<p>코드제로 A9S</p>
																	</a>
																	<a href="https://www.lge.co.kr/kr/business/product/household-appliances/vacuum-list.do?cateId1=CT00025340" target="_blank">
																		<p>코드제로 R9</p>
																	</a>
																	<a href="https://www.lge.co.kr/kr/business/product/household-appliances/vacuum-list.do?cateId1=CT00025341" target="_blank">
																		<p>코드제로 M9</p>
																	<a href="https://www.lge.co.kr/kr/business/product/household-appliances/vacuum-list.do?cateId1=CT00000761" target="_blank">
																		<p>코드제로 로보킹</p>
																	</a>
																	<a href="https://www.lge.co.kr/kr/business/product/household-appliances/vacuum-list.do?cateId1=CT00021743" target="_blank">
																		<p>비즈니스 청소기</p>
																	</a>
																	<a>
																		<p>&nbsp;&nbsp;</p>
																	</a>
																	<a>
																		<p>&nbsp;&nbsp;</p>
																	</a>
																</li>
															</li>-->
														</p>
													</a>
												</li>
											</ul>
										</li>
									</ul>
								</div>
							</h1>
						</a>
						
					</li>





					<li>
						<a class="depth_line_text" href="http://gmcts.co.kr/rental/rentalguide.php">
							<h1 class="first_dep_05">렌탈
																
								<div class="depth_info_05"><!--w100%-->
									<ul><!--w1400-->
									<a href="http://gmcts.co.kr/rental/rentalguide.php" style="float: left;">
										<p style="font-weight: 600; margin-right: 139px;height: 582px;">
											렌탈
										</p>
										<img class="more" src="http://gmcts.co.kr/image/here.jpg">
									</a>
										<li>
											<ul class="top">
												<li><!--2뎁스 SET 01-->
													<a class="menu5_1" href="http://gmcts.co.kr/rental/rentalguide.php">
														<p>렌탈 가이드
															<li><!--3뎁스 SET 01-->
																<!--
																<a class="sub5_2">
																	<p>
																		<img class="more_2" src="http://gmcts.co.kr/image/here.jpg">
																	</p>
																</a>-->
															
															<!--3뎁스 리스트-->
															<!--
																<li class="sub5_2">
																	<a href="###">
																		<p>3depth_21</p>
																	</a>
																	<a href="#">
																		<p>3depth_22</p>
																	</a>
																	<a href="#">
																		<p>3depth_23</p>
																	</a>
																</li>-->
															</li>
														</p>
													</a>
												</li>

												<!--<li>2뎁스 SET 01-->
													<!--<a class="menu5_2" href="https://www.korearental.co.kr/product/office-equipment/notebook" target="_blank">
														<p>렌탈 제품 카탈로그
															<li><!--3뎁스 SET 01-->
																<!--
																<a class="sub5_1">
																	<p>
																		<img class="more_1" src="http://gmcts.co.kr/image/here.jpg">
																	</p>
																</a>-->
															
															<!--3뎁스 리스트-->
															<!--
																<li class="sub1_1">
																	<a href="###">
																		<p>3depth_1</p>
																	</a>
																	<a href="#">
																		<p>3depth_2</p>
																	</a>
																	<a href="#">
																		<p>3depth_3</p>
																	</a>
																</li>-->
															</li>
														</p>
													</a>
												</li>
											</ul>
										</li>
									</ul>
								</div>
							</h1>
						</a>	
					</li>





					<li>
						<a class="depth_line_text" href="http://gmcts.co.kr/caresolution/caresolution_guide.php">
							<h1 class="first_dep_06">케어솔루션
																
								<div class="depth_info_06"><!--w100%-->
									<ul><!--w1400-->
									<a href="http://gmcts.co.kr/caresolution/caresolution_guide.php" style="float: left;">
										<p style="font-weight: 600; margin-right: 91px;height: 582px;">
											케어솔루션
										</p>
										<img class="more" src="http://gmcts.co.kr/image/here.jpg">
									</a>
										<li>
											<ul class="top">
												<li><!--2뎁스 SET 01-->
													<a class="menu6_1" href="http://gmcts.co.kr/caresolution/caresolution_guide.php">
														<p>케어솔루션
															<li><!--3뎁스 SET 01-->
																<!--
																<a class="sub6_1">
																	<p>
																		<img class="more_1" src="http://gmcts.co.kr/image/here.jpg">
																	</p>
																</a>-->
															
															<!--3뎁스 리스트-->
															<!--
																<li class="sub6_1">
																	<a href="###">
																		<p>3depth_1</p>
																	</a>
																	<a href="#">
																		<p>3depth_2</p>
																	</a>
																	<a href="#">
																		<p>3depth_3</p>
																	</a>
																</li>-->
															</li>
														</p>
													</a>
												</li>
												<!--<li><!--2뎁스 SET 01-->
													<!--<a class="menu6_2" href="https://www.lge.co.kr/care-solutions?utm_medium=banner&utm_source=naverbs&utm_campaign=20200226_caresolution_bs&utm_content=maintext" target="_blank">
														<p>케어십
															<li><!--3뎁스 SET 01-->
																<!--
																<a class="sub6_1">
																	<p>
																		<img class="more_1" src="http://gmcts.co.kr/image/here.jpg">
																	</p>
																</a>-->
															
															<!--3뎁스 리스트-->
															<!--
																<li class="sub6_1">
																	<a href="###">
																		<p>3depth_1</p>
																	</a>
																	<a href="#">
																		<p>3depth_2</p>
																	</a>
																	<a href="#">
																		<p>3depth_3</p>
																	</a>
																</li>-->
															</li>
														</p>
													</a>
												</li>
											</ul>
										</li>
									</ul>
								</div>
							</h1>
						</a>
					</li>
				</ul>
			</li>
	
			




			<li class="catebox_r">
				<ul id="depth_line">
					<li>
						<a href="http://gmcts.co.kr/customer/contactus.html">
							<h1 class="first_dep_00">
								온라인 견적
							</h1>
						</a>
						
					</li>
					<li class="shop_bt" style="margin-top: 16px;margin-right: 26px;">
						<a href="http://gmcts.co.kr/customer/contactus.html" target="blank">
							<h1 style="color: #ffffff; font-weight: 800;">
								구매하기
							</h1>
						</a>
						
					</li>
				</ul>
			</li>
		</ul>
		</div>
		
	</div>
