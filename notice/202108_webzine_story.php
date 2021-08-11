<? /*START_BEGIN*/
 include $_SERVER['DOCUMENT_ROOT']."/head_edit2.php";
/*END_BEGIN*/?>

<!-- body -->

<style>
    .box-wrap{ background-color: #f7f7f7;}
    body{text-align: center;}
    .contents_wrap{max-width: 1400px; position: relative; margin: auto; top: 70px; padding-bottom: 200px;}
    .imgwrap{width: 700px; margin: auto; position: relative; box-shadow: 10px 5px 45px #e2e2e2;}
    .storyimg{margin: 0; padding:0;}
    .topline{ background-image: linear-gradient(270deg,#fb5a72,#fa263e);}
    .topline>.storyimg{margin-bottom: 2px;}
    .navigation{float: left;}
	.navigation>ul{margin: auto;}
	.navigation>ul>li{float: left; margin: 18px 0 19px; }
	.navigation>ul>li>a {font-family: "Malgun Gothic","맑은 고딕"; font-size: 13px; letter-spacing: -0.5px;}
	.navigation>ul>li>a:hover{text-decoration: underline;}
	.navigation>ul>li+li:before{content:">"; margin: 0 20px;font-family: "dotum"; font-size: 12px; font-weight: 600; color: #999;}
	.item_wrap{text-align: center; margin: 0px;}
	.w1400{max-width: 1400px; margin: auto;}



@media(min-width : 100px) and (max-width : 999px){
	.mo_gnb h2,h1{text-align: left;}
    .w1400, .imgwrap, .storyimg{width: 100%;}

    .navigation{margin-left: 18px;}
	.navigation>ul>li>a{font-size: 2.3em;}
	.navigation>ul>li+li:before{font-size:2.5em;}

    .box-wrap{position: relative;}
    .contents_wrap{top: 0; float: left;}
    .topline>.storyimg{margin-bottom: 4px;}
    .imgwrap{background-image: linear-gradient(270deg,#fb5a72,#fa263e);}
}


</style>

<html>
    <body>


    <script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>

    <script src="http://mattstow.com/experiment/responsive-image-maps/jquery.rwdImageMaps.min.js"></script>

    <script type="text/javascript">
        $( document ).ready(function() {
        $('img[usemap]').rwdImageMaps();
    });

    </script>

        <div class="box-wrap">

            <div class="w1400">
                <div class="navigation">
                        <ul>
                            <li><a href="http://gmcts.co.kr">홈</a></li>
                            <li><a href="http://gmcts.co.kr/notice.php">공지사항</a></li>
                            <li><a>8월 웹진</a></li>
                        </ul>
                </div>
            </div>


            <div class="contents_wrap">
                <div class="imgwrap">
                    <a class="topline" href="http://gmcts.co.kr/index.php">
                        <img class="storyimg" src="http://gmcts.co.kr/webzine/2108/001.jpg">
                    </a>
                    
                    
                    <img class="storyimg" src="http://gmcts.co.kr/webzine/2108/006.jpg" usemap="#MAP1">
                    <img class="storyimg" src="http://gmcts.co.kr/webzine/2108/007.jpg" usemap="#MAP2">
                    <img class="storyimg" src="http://gmcts.co.kr/webzine/2108/008.jpg" usemap="#MAP3">

                    <img class="storyimg" src="http://gmcts.co.kr/webzine/2108/009.jpg" usemap="#MAP4">
                    <img class="storyimg" src="http://gmcts.co.kr/webzine/2108/012.jpg" usemap="#MAP5">
                </div>
            </div>
        </div>
    </body>


    <map name="MAP1">
        <area shape="rect" coords="33, 1461, 350, 1557" href="https://www.ibc.org/trends/nhk-confirms-plans-for-8k-broadcast-of-2020-olympics-and-paralympics/5559.article" target="blank">
        <area shape="rect" coords="350, 1461, 667, 1557" href="https://www.lge.co.kr/tvs?subCateId=CT50000028" target="blank">
    </map>

    <map name="MAP2">
        <area shape="rect" coords="95, 1438, 615, 1587" href="https://www.lge.co.kr/tvs/27art10akpl" target="blank">
    </map>


    <map name="MAP3">
        <area shape="rect" coords="33, 735, 350, 831" href="https://www.lge.co.kr/kr/business/product/it/robot-solution-fnb" target="blank">
        <area shape="rect" coords="350, 735, 667, 831" href="https://lge-robot-contest.com/" target="blank">
        <area shape="rect" coords="33, 1790, 350, 1886" href="https://www.lge.co.kr/kr/business/product/it/robot-solution-fnb" target="blank">
        <area shape="rect" coords="350, 1790, 667, 1886" href="https://lge-robot-contest.com/" target="blank">
    </map>


    <map name="MAP4">
        <area shape="rect" coords="74, 195, 226, 478" href="http://gmcts.co.kr/webzine/7_8월 B2B종카 온라인용.pdf" target="blank">
        <area shape="rect" coords="274,195, 426, 478" href="http://gmcts.co.kr/webzine/7_8월 조달 온라인용.pdf" target="blank">
        <area shape="rect" coords="477, 195, 622, 478" href="https://www.trigem.co.kr/eBook/index.html" target="blank">
    </map>

    <map name="MAP5">
        <area shape="rect" coords="20, 8, 111, 54" href="http://gmcts.co.kr/company/company.php" target="blank">
        <area shape="rect" coords="113, 8, 225, 54" href="http://gmcts.co.kr/customer/contactus.html" target="blank">
        <area shape="rect" coords="227, 8, 354, 54" href="http://gmcts.co.kr/company/maps.php" target="blank">
        <area shape="rect" coords="450, 8, 681, 54" href="tel: 02-3272-1140" target="blank">
        <area shape="rect" coords="292, 114, 347, 132" href="mailto:web@gmcts.co.kr" target="blank">
        <area shape="rect" coords="594, 186, 662, 204" href="mailto:web@gmcts.co.kr" alt="click here" target="blank">
    </map>


</html>                    

<? /*START_END*/
 include $_SERVER['DOCUMENT_ROOT']."/tail_edit.php";
/*END_END*/?>