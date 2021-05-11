<?php
define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/index.php');
    return;
}

include_once(G5_THEME_PATH.'/head.php');
?>


<!-- 테마 : ety_theme_company -->






<!-- 이벤트 게시판 -->
<?php echo latest('theme/pic_basic_owl','event1',3,100); ?>


<!-------------------------- 연회 및 행사 -------------------------->
<section id="mainPlace">
  <div class="inner">
    <div class="callbox">
    	<div class="container">
    	<h3 class="text-left ko1">연회 및 행사</h3>
    	  <div class="row">
    		<div class="col-md-8">
    		  <p class="ko_17">
    		  한채당의 연회/행사는 고객님이 우리나라 전통의 멋과 함께 아름다운 추억을 만드실 수 있도록</br> 최선의 노력을 다하고 있습니다. 소중한 순간을 한채당과 함께 만들어 보세요.
    		  </p>
    		</div>
    		<div class="col-md-4">
    		  <a class="btn btn-lg btn-secondary btn-block ko" href="//deap13.dothome.co.kr/html/han/bbs/content.php?co_id=Banquetandevents" target="_blank">자세히 보기</a>
    		</div>
    	  </div>
    	</div>
    </div>
    <div class="branch_list">
  				<div class="item">
							<a href="//deap13.dothome.co.kr/html/han/bbs/content.php?co_id=Banquetandevents" class="inner">
								<div class="img">
									<img src="/html/han/img/event1.jpg" class="pc-view" alt="돌잔치">
								</div>
								<div class="cover">
									<div>
										<div class="tit">돌잔치</div>
										<div class="toAbout">돌잔치 바로가기 <span class="arr"></span></div>
									</div>
								</div>
								<div class="hover">
									<div>
										<div class="txt">한채당은 돌잔치를 전통 문화와 함께 향유할 수 있는 공간으로 고객님의 소중한 자리에 차별화된 고품격의 서비스를 제공합니다.</div>
										<div class="toAbout"></div>
									</div>
								</div>
							</a>
  				</div>
  				<div class="item">
							<a href="//deap13.dothome.co.kr/html/han/bbs/content.php?co_id=Banquetandevents" class="inner">
								<div class="img">
									<img src="/html/han/img/event2.jpg" class="pc-view" alt="고희연/산수연">
								</div>
								<div class="cover">
									<div>
										<div class="tit">고희연/산수연</div>
										<div class="toAbout">고희연/산수연 바로가기 <span class="arr"></span></div>
									</div>
								</div>
								<div class="hover">
									<div>
										<div class="txt">한채당은 고객님의 소중한 순간들이 아름답게 빛날 수 있도록 정성을 다해 모십니다. 더욱 귀한 자리가 될 수 있도록 최선을 다하겠습니다.</div>
										<div class="toAbout"></div>
									</div>
								</div>
							</a>
  				</div>
  				<div class="item">
							<a href="//deap13.dothome.co.kr/html/han/bbs/content.php?co_id=Banquetandevents" class="inner">
								<div class="img">
									<img src="/html/han/img/event3.jpg" class="pc-view" alt="상견례">
								</div>
								<div class="cover">
									<div>
										<div class="tit">상견례</div>
										<div class="toAbout">상견례 바로가기<span class="arr"></span></div>
									</div>
								</div>
								<div class="hover">
									<div>
										<div class="txt">한채당은 많은 유명인사들의 상견례 장소로 유명합니다</div>
										<div class="toAbout"></div>
									</div>
								</div>
							</a>
  				</div>
  				<div class="item">
							<a href="//deap13.dothome.co.kr/html/han/bbs/content.php?co_id=Banquetandevents" class="inner">
								<div class="img">
									<img src="/html/han/img/event4.jpg" class="pc-view" alt="소규모 결혼식">
								</div>
								<div class="cover">
									<div>
										<div class="tit">소규모 결혼식</div>
										<div class="toAbout">소규모 결혼식 바로가기<span class="arr"></span></div>
									</div>
								</div>
								<div class="hover">
									<div>
										<div class="txt">한채당은 스몰웨딩부터 다양한 실내 및 야외 행사를 진행합니다. 한국 고유의 전통가옥인 한옥의 멋과 아름다움을 느껴보세요.</div>
										<div class="toAbout"></div>
									</div>
								</div>
							</a>
  				</div>
    </div>
  </div>
</section>









<!-- MEDIA -->
<div class="mediatitle">MEDIA</div>
<div class="py-5">
	<div class="container margin-top-80">
	  <div class="row">
  		<div id="youtube" class="col-lg-6">
        <div>
  		      <iframe width="100%" height="100%" src="//www.youtube.com/embed/ZSd24My-qsc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
  		</div>
  		<div class="col-lg-6">
  		  <h2 class="media_tit">동영상으로 미리보는 한채당</h2>
  		  <p><strong>#한식 #한옥 #한채당 #외국인 #세계화</strong></p>
  		  <p class="media_contents">한채당은 우리나라 전통의 색채와 무늬를 가진 대표 전통궁중음식점입니다. 우리나라의 전통문화가 가진 아름다움을 의식주라는 세 가지 가치를 통해 내, 외국인 고객 여러분들께서 오감으로 우리나라의 전통을 느끼실 수 있도록 최선의 노력을 다하고 있습니다.</p>
        <div class="btn_wrap">
          <a href="//deap13.dothome.co.kr/html/han/bbs/content.php?co_id=reservation" class="reservation">예약하기</a>
          <a href="//www.youtube.com/results?search_query=%ED%95%9C%EC%B1%84%EB%8B%B9" target="_blank">영상 더보기</a>
        </div>
  		</div>
	  </div>
	</div>
</div>



<div class="koreanHouse">
  <div class="koreanHousetitle">한옥체험관</div>
  <div class="koreanHouseimg"></div>
    <p class="koreanHouse_contents">고객님들이 편안하고 여유로운 휴식이 될 수 있도록</br>
        다양한 편의 서비스를 제공해 드리고 있으며,</br>
        특색있는 태안 지역의 문화를 함께 즐기실 수 있습니다.</p>
    <div style="text-align:center;padding-top:30px;">
      <a href="//hancorp.co.kr/stay/" class="koreanHousebtn">한옥체험관 자세히보기</a>
    </div>
</div>







<!-------------------------- 위치 -------------------------->
    <div class="mapWrap">
      <div class="maptitle">위치</div>
      <script type="text/javascript" src="//openapi.map.naver.com/openapi/v3/maps.js?ncpClientId=kkdzfg5mvd&callback=initMap"></script>
      <script type="text/javascript">
        function initMap() {
            map = new naver.maps.Map('map', {
                center: new naver.maps.LatLng(37.5764030938655, 127.20350393137139),
                scaleControl: true,
                mapTypeControl: true,
                mapTypeControl: true,
                mapTypeControlOptions: {
                    style: naver.maps.MapTypeControlStyle.BUTTON,
                    position: naver.maps.Position.TOP_LEFT
                },
                zoomControl: true,
                zoomControlOptions: {
                    style: naver.maps.ZoomControlStyle.SMALL,
                    position: naver.maps.Position.TOP_RIGHT
                },
                zoom: 15
            });
            var marker = new naver.maps.Marker({
                position: new naver.maps.LatLng(37.57531469668913, 127.20075734934896),
                map: map
            });
        }
      </script>
      <div id="map" style="width: 100%; height:480px;"></div>
       <div class="mapinfo">
         <div class="mapinfo_logo">
           <img src="img\sungbin.png" alt="한채당로고">
         </div>
         <ul>
           <li>
             <div class="title">주소</div>
             <div class="content">경기도 하남시 미사동로 38</div>
           </li>
           <li>
             <div class="title">전화번호</div>
             <div class="content">031)792-8880, 791-1782</div>
           </li>
         </ul>
       </div>
   </div>





<?php
include_once(G5_THEME_PATH.'/tail.php');
?>
