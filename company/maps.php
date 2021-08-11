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
	
	.map {margin: 0 auto; width:1000px; height:650px;}
	.navi_info{text-align:left; width: 1000px; margin:auto;}
	.navi_info h3{font-family: "NanumSquare"; font-size: 18px; color: #333; letter-spacing: -0.4px; line-height: 30px; border-bottom: solid 1px #e2e2e2; padding:35px 0;}
	.navi_info>h3>a{position:absolute; margin: 4px 12px;}
	
	.navi_info h4{font-family: "NanumSquare"; font-size: 20px; color: #333; letter-spacing: -0.4px; line-height: 22px; padding: 38px 0 20px 0;}
	.navi_info h5{font-family: "NanumSquare"; font-size: 17px; color: #333; letter-spacing: -0.4px; line-height: 22px; padding: 10px 0 10px 12px;}
	.navi_info>p{font-family: "NanumSquare"; font-size: 14px; color: #666; line-height: 22px; letter-spacing: -0.3px; padding-left: 12px;}
	.highlight_2 {color: #27d24f; font-family: "NanumSquare"; font-size: 14px; font-weight: 600; margin-right: 2px;}
	.highlight_5 {color: #8936e0; font-family: "NanumSquare"; font-size: 14px; font-weight: 600; margin-right: 2px;}

	.w1400>h2{font-size: 36px; font-family: "noto-sans"; color: #000; font-weight: 600; letter-spacing: -0.06em; word-spacing: -0.06em; margin-bottom: 72px;}

	.navi_info>p>span{font-family: "NanumSquare"; font-size: 14px;  line-height: 22px; letter-spacing: -0.3px;}

	li{list-style-type: none;}
	@media(min-width : 100px) and (max-width : 999px){
	.content_box img{width: 100%;}
	.navigation>ul>li>a{font-size: 2.3em;}
	.navigation>ul>li>a:first-child{margin-left: 18px;}
	.navigation>ul>li+li:before{font-size:2.5em;}
	.top_line{border-top: solid 2px #e2e2e2;}
	.w1400>h2{font-size: 4em; font-family: "noto-sans"; color: #000; font-weight: 400; letter-spacing: -0.06em; word-spacing: -0.06em; margin: 0 auto 15px;}
	.navi_info{max-width: 96%;}
	.map {width:96%; margin:0 2%; padding:0px; height: 820px; z-index: 0;}


	.navi_info h3{font-size: 22px; color: #333; letter-spacing: -1.2px; line-height: 36px; border-bottom: solid 1px #e2e2e2; padding: 65px 0 50px;}
	.navi_info>h3>a{position:absolute; margin: 4px 12px;}
	.navi_info h4{font-family: "NanumSquare"; font-size: 45px; color: #333; letter-spacing: -0.4px; line-height: 44px; padding: 70px 0 50px 0;}
	.navi_info h5{font-family: "NanumSquare"; font-size: 32px; color: #333; letter-spacing: -0.4px; line-height: 44px; padding: 10px 0 30px 12px;}
	.navi_info>p{font-family: "NanumSquare"; font-size: 24px; color: #666; line-height: 38px; letter-spacing: -1px; padding-left: 12px; padding-bottom: 30px;}
	.highlight_2 {color: #27d24f; font-family: "NanumSquare"; font-size: 24px; font-weight: 600; margin-right: 2px;}
	.highlight_5 {color: #8936e0; font-family: "NanumSquare"; font-size: 24px; font-weight: 600; margin-right: 2px;}

	.navi_info>p>span{font-family: "NanumSquare"; font-size: 24px; ; line-height: 38px; letter-spacing: -1px;}
	.navi_info>h3>a>img{height: 32px; padding-top: 5px;}
	}
	

</style>
<html>
<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">-->
    <title></title>
    <script type="text/javascript" src="https://openapi.map.naver.com/openapi/v3/maps.js?ncpClientId=3bbshmwv59"></script>
</head>
<!-- body -->

<div class="contents_wrap">
	<div class="w1400">
		<div class="navigation">
			<ul>
				<li><a href="http://gmcts.co.kr">홈</a></li>
				<li><a href="http://gmcts.co.kr/company/company.php">회사소개</a></li>
				<li><a>찾아오시는 길</a></li>
			</ul>
		</div>

		<h2>찾아오시는 길</h2>


		<div class="map" id="map"></div>
			
			</script>

			<script>
			var mapOptions = {
				center: new naver.maps.LatLng(37.51691568355931, 126.88978401206595),
				logoControl: false,
				zoom: 17,
			};


			var map = new naver.maps.Map('map', {
				minZoom: 6,
				logoControl: false,
				center: new naver.maps.LatLng(37.51691568355931, 126.88978401206595)
			});


			var mapOptions = {
				zoomControl: true,
				center: new naver.maps.LatLng(37.51691568355931, 126.88978401206595),
				zoomControlOptions: {
				style: naver.maps.ZoomControlStyle.LARGE,
				position: naver.maps.Position.RIGHT_CENTER,
				scaleControl: false,
				logoControl: false,
				mapDataControl: false,
				zoomControl: true,
			}
			};


			

			var map = new naver.maps.Map(document.getElementById('map'), mapOptions);


			
			</script>



			<script>
				
				var markerOptions = {
					position: new naver.maps.LatLng(37.51786529452798, 126.88718626487689),
					map: map
				};
				var marker = new naver.maps.Marker(markerOptions);
				
			</script>








			<div class="navi_info">
			<h3>서울특별시 영등포구 선유로9길 10 문래 SK V1 center 1401호
				<a href="https://map.naver.com/v5/directions/-/14125013.29356401,4511538.745947225,%EC%84%9C%EC%9A%B8%20%EC%98%81%EB%93%B1%ED%8F%AC%EA%B5%AC%20%EC%84%A0%EC%9C%A0%EB%A1%9C9%EA%B8%B8%2010,,ADDRESS_POI/-/transit?c=14124528.5385616,4511622.7404899,15,0,0,0,dh" target="_blank">
					<img src="http://gmcts.co.kr/company/image/20210422_maps_direct.png"></a><br>지번 주소: 문래동6가 19 (우) 07281</h3>
				<h4>자차로 오시는 길</h4>
					<h5>문래역 > 신도림역 방면</h5>
						<p><span style="color: #000;">· 문래역 사거리에서 신도림역 방면</span>
						으로 직진 - 문래공원 사거리에서 양화대교 방면으로 우회전하여 직진 - 근로자회관 사거리를 지나 전방 140m 우측에 위치</p>
					<h5>문래역 > 영등포구청역 방면</h5>
					<p><span style="color: #000;">· 문래역 사거리에서 영등포구청역 방면</span>
					으로 직진 - 진로아파트 사거리에서 오목교 방면으로 좌회전 후 직진 - 선유로 방면으로 비보호 좌회전 후 직진 <br>&nbsp;&nbsp;&nbsp;- 근로자회관 사거리에서 우회전 하여 전방 140m 우측에 위치</p>
						
				<h4>대중교통으로 오시는 길</h4>
				<h5>지하철</h5>
					<p><span class="highlight_2">· 2호선</span> '문래역' 하차 (1번 출구, 도보 12분)<br><span class="highlight_2">· 2호선</span> '도림천역' 하차 (2번 출구, 도보 14분)<br>
						<span class="highlight_5">· 5호선</span> '양평역' 하차 (2번 출구, 도보 18분)</p>
				<h5>버스</h5>
					<p><span class="highlight_2">· 문래역</span>에서 6625번 탑승 후, 동양볼링장에서 하차, 도보 3분<br><span class="highlight_5">· 양평역</span>에서 영등포05번 탑승 후, 영문초등학교에서 하차, 도보 7분</p>

			</div>
	</div>
</div>
</html>
<? /*START_END*/
 include $_SERVER['DOCUMENT_ROOT']."/tail_edit.php";
/*END_END*/?>