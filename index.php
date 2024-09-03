<!doctype html>
<html lang="ko">
<head>
<meta charset="utf-8">
<meta http-equiv="imagetoolbar" content="no">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<title>㈜지앤지씨앤씨</title>
<link rel="stylesheet" href="http://www.bizsmart.store/bizsmart/theme/basic/css/default_shop.css?ver=161020">
<link rel="stylesheet" href="http://www.bizsmart.store/bizsmart/theme/basic/skin/shop/basic/style.css?ver=161020">
<!--[if lte IE 8]>
<script src="http://www.bizsmart.store/bizsmart/js/html5.js"></script>
<![endif]-->
<script>
// 자바스크립트에서 사용하는 전역변수 선언
var g5_url       = "http://www.bizsmart.store/bizsmart";
var g5_bbs_url   = "http://www.bizsmart.store/bizsmart/bbs";
var g5_is_member = "";
var g5_is_admin  = "";
var g5_is_mobile = "";
var g5_bo_table  = "";
var g5_sca       = "";
var g5_editor = "";
var g5_cookie_domain = "";
</script>
<script src="http://www.bizsmart.store/bizsmart/js/jquery-1.8.3.min.js"></script>
<script src="http://www.bizsmart.store/bizsmart/js/jquery.shop.menu.js?ver=161020"></script>
<script src="http://www.bizsmart.store/bizsmart/js/common.js?ver=161020"></script>
<script src="http://www.bizsmart.store/bizsmart/js/wrest.js?ver=161020"></script>
</head>
<body>
<style>
	#hd>div.navbar>div>div>div>ul>li:nth-child(n+2):nth-child(-n+6) {
		display: none;
	}
	#wrapper { margin: -10px auto !important}
	#wrapper_title { display: none; }
</style>
<script>
	function imsi() {
		alert("준비중입니다")
	}
</script>
<link rel="stylesheet" type="text/css" href="http://www.bizsmart.store/bizsmart/theme/basic/shop/shop.css" />
<link href="http://www.bizsmart.store/bizsmart/css/bootstrap.min.css" rel="stylesheet" media="screen">
<script src="http://www.bizsmart.store/bizsmart/js/bootstrap.min.js"></script>
<style>
	#stv_list h2 {
		font-size: 1.0rem;
		margin-top: 0px;
	}
</style>
<!-- 상단 시작 { -->
	<div id="co_head_top">
		<div id="co_topmenu">
			<li><a href="http://www.bizsmart.store/bizsmart/shop/">HOME</a></li>
			<li>|</li>
			<li><a href="javascript:imsi();"> 즐겨찾기</a></li>
			<li>|</li>
			<li><a href="javascript:imsi();">H임직원몰URL문자/mail전송하기</a></li>
			<li>|</li>
			<li><a href="http://www.bizsmart.store/">로그아웃</a></li>
			<li style="margin-top: -5px;">
				<div class="btn-group">
					<button class="btn btn-small" data-toggle="dropdown">커뮤니티
						<span class="caret"></span>
					</button>
					<ul class="dropdown-menu">
						<li><a href="http://www.bizsmart.store/bizsmart/bbs/board.php?bo_table=notice">공지사항</a></li>
						<li><a href="http://www.bizsmart.store/bizsmart/bbs/board.php?bo_table=faq"> FAQ</a></li>
						<li><a href="#">구매후기</a></li>
						<li><a href="#">중고매입</a></li>
					</ul>
				</div>
			</li>
		</div>
	</div>

<div id="hd">
	<h1 id="hd_h1">㈜지앤지씨앤씨</h1>

	<div id="skip_to_container"><a href="#container">본문 바로가기</a></div>

	
<!-- 팝업레이어 시작 { -->
<div id="hd_pop">
    <h2>팝업레이어 알림</h2>

<span class="sound_only">팝업레이어 알림이 없습니다.</span></div>

<script>
$(function() {
    $(".hd_pops_reject").click(function() {
        var id = $(this).attr('class').split(' ');
        var ck_name = id[1];
        var exp_time = parseInt(id[2]);
        $("#"+id[1]).css("display", "none");
        set_cookie(ck_name, 1, exp_time, g5_cookie_domain);
    });
    $('.hd_pops_close').click(function() {
        var idb = $(this).attr('class').split(' ');
        $('#'+idb[1]).css('display','none');
    });
    $("#hd").css("z-index", 1000);
});
</script>
<!-- } 팝업레이어 끝 -->	<div id="hd_wrapper" style="display:flex; justify-content: space-between;align-items:baseline;padding: 10px 0;">
		<div><a href="http://www.bizsmart.store/bizsmart/shop/"><img src='http://www.bizsmart.store/bizsmart/data/company/669dc96b6abad.png'></a></div>
		<div>
			<form id="c_form" name="frmsearch1" action="http://www.bizsmart.store/bizsmart/shop/search.php" onsubmit="return search_submit(this);">
				<label for="sch_str" class="sound_only">검색어<strong class="sound_only"> 필수</strong></label>
				<input type="text" style="width: 300px; height: 35px;" name="q" value="" id="sch_str">
				<button type="submit" class="btn btn-primary" style="line-height:35px; margin-top: -12px;">Search</button>
			</form>
			<script>
				function search_submit(f) {
					if (f.q.value.length < 2) {
						alert("검색어는 두글자 이상 입력하십시오.");
						f.q.select();
						f.q.focus();
						return false;
					}

					return true;
				}
			</script>
		</div>
		<div><a href="#myModal" data-toggle="modal">
				<img src="http://www.bizsmart.store/bizsmart/pimage/card.jpg" width="220px;"></a>
			<img src="http://www.bizsmart.store/bizsmart/shop/sktlogo.png" style="cursor: pointer; width: 80px;" onclick="return; window.open('http://www.ictmarket.or.kr/agent/pop_AgentCertIcon.do?AGENT_REQ_ID=AGT0000197658&AGENT_CD=D00981','_blank','width=600, height=400, toolbar=no, menubar=no, scrollbars=no, resizable=no' )" />
		</div>
	</div>
	<div class="navbar">
		<div class="navbar-inner">
			<div class="container" style="width: 1100px;">
				<div class="nav-collapse collapse navbar-inverse-collapse">
					<ul class="nav" style="font-weight: bold;font-family: inherit;">
						<li><a href="http://www.bizsmart.store/bizsmart/shop/list.php?ca_id=10" style="font-size:15px; line-height: 40px; padding-left:120px">휴대폰</a></li>
						<li><a href="http://www.bizsmart.store/bizsmart/shop/list.php?ca_id=20" style="line-height: 40px; padding-left:70px">태블릿</a></li>
						<li><a href="http://www.bizsmart.store/bizsmart/shop/list.php?ca_id=30" style="line-height: 40px; padding-left:80px">스마트워치</a></li>
						<li><a href="http://www.bizsmart.store/bizsmart/shop/list.php?ca_id=40" style="line-height: 40px; padding-left:70px">키즈폰</a></li>
						<li><a href="http://www.bizsmart.store/bizsmart/shop/list.php?ca_id=50" style="line-height: 40px; padding-left:80px">무전기</a></li>
						<li><a href="http://www.bizsmart.store/bizsmart/shop/list.php?ca_id=60" style="line-height: 40px; padding-left:80px">포켓파이</a></li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" style="line-height: 40px; padding-left:80px">커뮤니티</a>
							<ul class="dropdown-menu">
								<li style="padding-top: 15px;"><a href="http://www.bizsmart.store/bizsmart/bbs/board.php?bo_table=notice">공지사항</a></li>
								<li><a href="http://www.bizsmart.store/bizsmart/bbs/board.php?bo_table=faq">FAQ</a></li>
								<li><a href="http://www.bizsmart.store/bizsmart/bbs/board.php?bo_table=history">구매후기</a></li>
								<li style="padding-bottom: 15px"><a href="http://www.bizsmart.store/bizsmart/bbs/board.php?bo_table=sell">중고매입</a></li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>

	<div id="wrapper">
		
<!-- 오늘 본 상품 시작 { -->
<aside id="stv">
    <div id="stv_list">
        <h2>
            오늘 본 상품
            <span id="stv_pg"></span>
        </h2>

        
        <div id="stv_btn"></div>

        <ul id="stv_ul">
<li class="stv_item c1">
<a href="http://www.bizsmart.store/bizsmart/shop/item.php?it_id=1721638837"><img src="http://www.bizsmart.store/bizsmart/data/item/1721638837/thumb-7Y065Oc6_70x70.png" width="70" height="70" alt="갤럭시 Z폴드6 256G"></a><br>갤럭시 Z폴드6 2
</li>
</ul>

        <script>
        $(function() {
            var itemQty = 1; // 총 아이템 수량
            var itemShow = 3; // 한번에 보여줄 아이템 수량
            if (itemQty > itemShow)
            {
                $('#stv_btn').append('<button type="button" id="up">이전</button><button type="button" id="down">다음</button>');
            }
            var Flag = 1; // 페이지
            var EOFlag = parseInt(1/itemShow); // 전체 리스트를 3(한 번에 보여줄 값)으로 나눠 페이지 최댓값을 구하고
            var itemRest = parseInt(1%itemShow); // 나머지 값을 구한 후
            if (itemRest > 0) // 나머지 값이 있다면
            {
                EOFlag++; // 페이지 최댓값을 1 증가시킨다.
            }
            $('.c'+Flag).css('display','block');
            $('#stv_pg').text(Flag+'/'+EOFlag); // 페이지 초기 출력값
            $('#up').click(function() {
                if (Flag == 1)
                {
                    alert('목록의 처음입니다.');
                } else {
                    Flag--;
                    $('.c'+Flag).css('display','block');
                    $('.c'+(Flag+1)).css('display','none');
                }
                $('#stv_pg').text(Flag+'/'+EOFlag); // 페이지 값 재설정
            })
            $('#down').click(function() {
                if (Flag == EOFlag)
                {
                    alert('더 이상 목록이 없습니다.');
                } else {
                    Flag++;
                    $('.c'+Flag).css('display','block');
                    $('.c'+(Flag-1)).css('display','none');
                }
                $('#stv_pg').text(Flag+'/'+EOFlag); // 페이지 값 재설정
            });
        });
        </script>

        
        <!-- <ul id="stv_nb">
            <li><a href="http://www.bizsmart.store/bizsmart/shop/cart.php"><img src="http://www.bizsmart.store/bizsmart/shop/img/hd_nb_cart.gif" alt="장바구니"></a></li>
            <li><a href="http://www.bizsmart.store/bizsmart/shop/wishlist.php"><img src="http://www.bizsmart.store/bizsmart/shop/img/hd_nb_wish.gif" alt="위시리스트"></a></li>
            <li><a href="http://www.bizsmart.store/bizsmart/shop/orderinquiry.php"><img src="http://www.bizsmart.store/bizsmart/shop/img/hd_nb_deli.gif" alt="주문/배송조회"></a></li>
        </ul> -->
    </div>
</aside>

<script src="http://www.bizsmart.store/bizsmart/js/scroll_oldie.js"></script>
<!-- } 오늘 본 상품 끝 -->		<!-- } 상단 끝 -->
		<!-- 콘텐츠 시작 { -->
		<div id="container">
			<link rel="stylesheet" href="http://www.bizsmart.store/bizsmart/theme/basic/shop/simpleBanner.css">
<script src="http://www.bizsmart.store/bizsmart/theme/basic/shop/simpleBanner.js"></script>
<style>
	#wrapper { margin: 10px auto;}
	li {
		list-style: none;
	}

	#container {
		margin-top: -10px
	}
	.sct_wrap header {  margin: 0 0 10px }
	header {
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      height: 100px; /* 원하는 높이로 설정 */
      text-align: center;
      background-color: #f8f9fa;
      border-bottom: 1px solid #dee2e6;
      padding: 0px;
    }
		.sct_wrap {margin: 0 0 0px }
		.sit_icon { display: none; }
		.sct_20 .sct_li {border: 1px solid #d9d9d9;    margin: 0 24px 15px 0;}
		.sct_wrap { margin-top: -30px }
</style>
<!-- 메인이미지 시작 { -->
<table>
	<tr>
		<td width="700px" align="top ">

<script>
(function($) {
    var intervals = {};

    var methods = {
        init: function(option)
        {
            if(this.length < 1)
                return false;

            var $bnnr = this.find("li:has(img)");
            var count = $bnnr.size();
            var $bnnr_a = $bnnr.find("a");
            var width = 0;
            var height = 0;
            var wrap_width = this.parent().width();
            var c_idx = o_idx = 0;
            var el_id = this[0].id;
            var $this = this;

            if(width > wrap_width) {
                height = parseInt(height * (wrap_width / width));
            }
            width = wrap_width;

            this.width(wrap_width).height(height)
                .find("ul").width(width).height(height)
                .find("li").width(width).height(height);

            $bnnr.not(".sbn_first").css("left", width+"px");

            $bnnr.each(function() {
                var $img = $(this).find("img");
                var img_width = parseInt($img.attr("width"));
                if(img_width > width)
                    img_width = width;

                $img.removeAttr("width");
                $img.width(img_width);
            });

            // 기본 설정값
            var settings = $.extend({
                interval: 5000,
                duration: 1500
            }, option);

            if(count > 1) {
                var slide_button = "<div id=\"sbn_btn_p\" class=\"sbn_btn\"><button type=\"button\" id=\"sbn_btn_prev\" class=\"sbn_btn_slide\"><span></span>이전</button></div>\n";
                slide_button += "<div id=\"sbn_btn_n\" class=\"sbn_btn\"><button type=\"button\" id=\"sbn_btn_next\" class=\"sbn_btn_slide\"><span></span>다음</button></div>";

                this.find("ul").before(slide_button);

                var $bnnr_btn = this.find(".sbn_btn_slide");

                $bnnr_btn.on("focusin", function() {
                    clear_interval();
                });

                $bnnr_btn.on("focusout", function() {
                    set_interval();
                });
            }

            set_interval();

            $(".sbn_btn_slide").on("click", function() {
                if($this.find(":animated").size() > 0)
                    return false;

                clear_interval();

                var id = $(this).attr("id");
                if(id.search("prev") > -1) {
                    right_rolling();
                } else {
                    left_rolling();
                }
            });

            $bnnr.hover(
                function() {
                    clear_interval();
                },
                function() {
                    set_interval();
                }
            );

            $bnnr_a.on("focusin", function() {
                clear_interval();
            });

            $bnnr_a.on("focusout", function() {
                set_interval();
            });

            function left_rolling() {
                $bnnr.each(function(index) {
                    if($(this).is(":visible")) {
                        o_idx = index;
                        return false;
                    }
                });

                $bnnr.not(":visible").css({
                    display: "none",
                    left: "+"+width+"px"
                });

                $bnnr.eq(o_idx).animate(
                    { left: "-="+width+"px" }, settings.duration,
                    function() {
                        $(this).css("display", "none").css("left", width+"px");
                    }
                );

                c_idx = (o_idx + 1) % count;

                $bnnr.eq(c_idx).css("display", "block").animate(
                    { left: "-="+width+"px" }, settings.duration,
                    function() {
                        o_idx = c_idx;
                    }
                );
            }

            function right_rolling() {
                $bnnr.each(function(index) {
                    if($(this).is(":visible")) {
                        o_idx = index;
                        return false;
                    }
                });

                $bnnr.not(":visible").css({
                    display: "none",
                    left: "-"+width+"px"
                });

                $bnnr.eq(o_idx).animate(
                    { left: "+="+width+"px" }, settings.duration,
                    function() {
                        $(this).css("display", "none").css("left", "-"+width+"px");
                    }
                );

                c_idx = (o_idx + 1) % count;

                $bnnr.eq(c_idx).css("display", "block").animate(
                    { left: "+="+width+"px" }, settings.duration,
                    function() {
                        o_idx = c_idx;
                    }
                );
            }

            function set_interval() {
                if(count > 1) {
                    clear_interval();

                    intervals[el_id] = setInterval(left_rolling, settings.interval);
                }
            }

            function clear_interval() {
                if(intervals[el_id]) {
                    clearInterval(intervals[el_id]);
                }
            }
        },
        stop: function()
        {
            var el_id = this[0].id;
            if(intervals[el_id])
                clearInterval(intervals[el_id]);
        }
    };

    $.fn.bannerRolling = function(option) {
        if (methods[option])
            return methods[option].apply(this, Array.prototype.slice.call(arguments, 1));
        else
            return methods.init.apply(this, arguments);
    }
}(jQuery));

$(function() {
    $("#sbn_idx").bannerRolling();
    // 기본 설정값을 변경하려면 아래처럼 사용
    //$("#sbn_idx").leftRolling({ interval: 6000, duration: 2000 });
});
</script> </td>
		<td>
			<div class="simple_banner_wrap banner02" data-type="vslide" data-interval="3000">
				<ul>
					<li style='padding-botton:150px;'><a href='#'><img src='./../data/item/1721638837/7Y065Oc6.png' width=290 ></a></li>				</ul>
			</div>
		</td>
	</tr>
	<tr>
		<td colspan="2" >
			<!-- 회사별 배너  -->
						<!-- 회사별 배너 끝  -->
		</td>
	</tr>
</table>
<!-- } 메인이미지 끝 -->

	<!-- 히트상품 시작 { -->
	<section class="sct_wrap">
		<header>
			<h2>추천상품</h2>
			<p class="sct_wrap_hdesc" style="padding-top: 10px;">㈜지앤지씨앤씨추천상품 모음</p>
		</header>
		
<!-- 상품진열 10 시작 { -->
<ul class="sct sct_20">
<li class="sct_li sct_clear" style="width:230px">
<div class="sct_img"><a href="http://www.bizsmart.store/bizsmart/shop/item.php?it_id=1721638837" class="sct_a">
<img src="http://www.bizsmart.store/bizsmart/data/item/1721638837/thumb-7Y065Oc6_230x230.png" width="230" height="230" alt="갤럭시 Z폴드6 256G">
</a></div>
<div class="sct_txt"><a href="http://www.bizsmart.store/bizsmart/shop/item.php?it_id=1721638837" class="sct_a">
갤럭시 Z폴드6 256G
</a></div>
<div class="sct_icon"><span class="sit_icon"><img src="http://www.bizsmart.store/bizsmart/shop/img/icon_hit.gif" alt="히트상품"><img src="http://www.bizsmart.store/bizsmart/shop/img/icon_rec.gif" alt="추천상품"></span></div>
<div class="sct_cost">
<strike>2,229,700원</strike>
<a href="http://www.bizsmart.store/bizsmart/shop/item.php?it_id=1721638837" class="sct_a"><font color='red'>특가확인하기</font></a></div>
</li>
<li class="sct_li " style="width:230px">
<div class="sct_img"><a href="http://www.bizsmart.store/bizsmart/shop/item.php?it_id=1721786815" class="sct_a">
<img src="http://www.bizsmart.store/bizsmart/data/item/1721786815/thumb-7ZSM66a96_230x230.png" width="230" height="230" alt="갤럭시 Z플립6 256G">
</a></div>
<div class="sct_txt"><a href="http://www.bizsmart.store/bizsmart/shop/item.php?it_id=1721786815" class="sct_a">
갤럭시 Z플립6 256G
</a></div>
<div class="sct_icon"><span class="sit_icon"><img src="http://www.bizsmart.store/bizsmart/shop/img/icon_hit.gif" alt="히트상품"></span></div>
<div class="sct_cost">
<strike>1,485,000원</strike>
<a href="http://www.bizsmart.store/bizsmart/shop/item.php?it_id=1721786815" class="sct_a"><font color='red'>특가확인하기</font></a></div>
</li>
<li class="sct_li " style="width:230px">
<div class="sct_img"><a href="http://www.bizsmart.store/bizsmart/shop/item.php?it_id=1721784404" class="sct_a">
<img src="http://www.bizsmart.store/bizsmart/data/item/1721784404/thumb-S24_230x230.png" width="230" height="230" alt="갤럭시 S24 256G">
</a></div>
<div class="sct_txt"><a href="http://www.bizsmart.store/bizsmart/shop/item.php?it_id=1721784404" class="sct_a">
갤럭시 S24 256G
</a></div>
<div class="sct_icon"><span class="sit_icon"><img src="http://www.bizsmart.store/bizsmart/shop/img/icon_hit.gif" alt="히트상품"></span></div>
<div class="sct_cost">
<strike>1,155,000원</strike>
<a href="http://www.bizsmart.store/bizsmart/shop/item.php?it_id=1721784404" class="sct_a"><font color='red'>특가확인하기</font></a></div>
</li>
<li class="sct_li sct_last" style="width:230px">
<div class="sct_img"><a href="http://www.bizsmart.store/bizsmart/shop/item.php?it_id=1721785354" class="sct_a">
<img src="http://www.bizsmart.store/bizsmart/data/item/1721785354/thumb-S24_230x230.jpg" width="230" height="230" alt="갤럭시 S24 Plus 256G">
</a></div>
<div class="sct_txt"><a href="http://www.bizsmart.store/bizsmart/shop/item.php?it_id=1721785354" class="sct_a">
갤럭시 S24 Plus 256G
</a></div>
<div class="sct_icon"><span class="sit_icon"><img src="http://www.bizsmart.store/bizsmart/shop/img/icon_hit.gif" alt="히트상품"></span></div>
<div class="sct_cost">
<strike>1,353,000원</strike>
<a href="http://www.bizsmart.store/bizsmart/shop/item.php?it_id=1721785354" class="sct_a"><font color='red'>특가확인하기</font></a></div>
</li>
<li class="sct_li sct_clear" style="width:230px">
<div class="sct_img"><a href="http://www.bizsmart.store/bizsmart/shop/item.php?it_id=1721786271" class="sct_a">
<img src="http://www.bizsmart.store/bizsmart/data/item/1721786271/thumb-S24U_230x230.png" width="230" height="230" alt="갤럭시S24울트라 256G">
</a></div>
<div class="sct_txt"><a href="http://www.bizsmart.store/bizsmart/shop/item.php?it_id=1721786271" class="sct_a">
갤럭시S24울트라 256G
</a></div>
<div class="sct_icon"><span class="sit_icon"><img src="http://www.bizsmart.store/bizsmart/shop/img/icon_hit.gif" alt="히트상품"></span></div>
<div class="sct_cost">
<strike>1,698,400원</strike>
<a href="http://www.bizsmart.store/bizsmart/shop/item.php?it_id=1721786271" class="sct_a"><font color='red'>특가확인하기</font></a></div>
</li>
<li class="sct_li " style="width:230px">
<div class="sct_img"><a href="http://www.bizsmart.store/bizsmart/shop/item.php?it_id=1721787177" class="sct_a">
<img src="http://www.bizsmart.store/bizsmart/data/item/1721787177/thumb-15_230x230.png" width="230" height="230" alt="아이폰15_256G">
</a></div>
<div class="sct_txt"><a href="http://www.bizsmart.store/bizsmart/shop/item.php?it_id=1721787177" class="sct_a">
아이폰15_256G
</a></div>
<div class="sct_icon"><span class="sit_icon"><img src="http://www.bizsmart.store/bizsmart/shop/img/icon_hit.gif" alt="히트상품"></span></div>
<div class="sct_cost">
<strike>1,397,000원</strike>
<a href="http://www.bizsmart.store/bizsmart/shop/item.php?it_id=1721787177" class="sct_a"><font color='red'>특가확인하기</font></a></div>
</li>
<li class="sct_li " style="width:230px">
<div class="sct_img"><a href="http://www.bizsmart.store/bizsmart/shop/item.php?it_id=1721787452" class="sct_a">
<img src="http://www.bizsmart.store/bizsmart/data/item/1721787452/thumb-15P_230x230.png" width="230" height="230" alt="아이폰15프로_256G">
</a></div>
<div class="sct_txt"><a href="http://www.bizsmart.store/bizsmart/shop/item.php?it_id=1721787452" class="sct_a">
아이폰15프로_256G
</a></div>
<div class="sct_icon"><span class="sit_icon"><img src="http://www.bizsmart.store/bizsmart/shop/img/icon_hit.gif" alt="히트상품"></span></div>
<div class="sct_cost">
<strike>1,694,000원</strike>
<a href="http://www.bizsmart.store/bizsmart/shop/item.php?it_id=1721787452" class="sct_a"><font color='red'>특가확인하기</font></a></div>
</li>
<li class="sct_li sct_last" style="width:230px">
<div class="sct_img"><a href="http://www.bizsmart.store/bizsmart/shop/item.php?it_id=1721787724" class="sct_a">
<img src="http://www.bizsmart.store/bizsmart/data/item/1721787724/thumb-15PM_230x230.png" width="230" height="230" alt="아이폰15프로맥스_256G">
</a></div>
<div class="sct_txt"><a href="http://www.bizsmart.store/bizsmart/shop/item.php?it_id=1721787724" class="sct_a">
아이폰15프로맥스_256G
</a></div>
<div class="sct_icon"><span class="sit_icon"><img src="http://www.bizsmart.store/bizsmart/shop/img/icon_hit.gif" alt="히트상품"></span></div>
<div class="sct_cost">
<strike>1,892,000원</strike>
<a href="http://www.bizsmart.store/bizsmart/shop/item.php?it_id=1721787724" class="sct_a"><font color='red'>특가확인하기</font></a></div>
</li>
</ul>
<!-- } 상품진열 10 끝 -->	</section>
	<!-- } 히트상품 끝 -->

<div>
	<!-- <ui style="float: left; padding-right: 15px;">
</ui> -->
	<ui style="display: flex; justify-content: space-between; margin:30px 0 10px" >
<li>
<img src="http://www.bizsmart.store/bizsmart/data/banner/65" alt="" width="480" height="248"></li>
</ul></aside>
</ui>
</div>

    </div>
    <!-- } 콘텐츠 끝 -->

<!-- 하단 시작 { -->
</div>
<link rel="stylesheet" type="text/css" href="http://www.bizsmart.store/bizsmart/theme/basic/shop/shop1.css" />
<div id="fup">
    <ul class="ft_com">    	
        <li><a href="#myModal" data-toggle="modal">회사소개</a></li>
        <li><a href="#yagoan" data-toggle="modal">서비스이용약관</a></li>
        <li><a href="#gain" data-toggle="modal">개인정보 취급방침</a></li> 
    </ul>
</div>

<!-- Modal -->
<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3 id="myModalLabel">준비중입니다.</h3>
  </div>
  <div class="modal-body">
    <p>One fine body…</p>
  </div>
  <div class="modal-footer">
    <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>    
  </div>
</div>
<!-- Modal end -->



<!-- 서비스이용약관 -->
<div id="yagoan" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3 id="myModalLabel">서비스이용약관</h3>
  </div>
<div class="modal-body">
<p align="left"><strong>서비스 1. 약관의 승락 </strong><br>
  <strong>&nbsp;</strong><strong>저희 웹사이트 (주)지앤지씨앤씨를  방문하신 것을 환영하며, (주)지앤지씨앤씨는 다음 서비스  약관을 조건으로 하여 귀하에게 본 서비스를 제공합니다. 본 서비스 약관은 사전 게재를 통하여 본 서비스의  약관의 전부 또는 일부를 수정, 변경, 그리고 추가할 수  있습니다. 또한, (주)지앤지씨앤씨의&nbsp; 특정서비스를 이용하실 경우에는 그러한 서비스에  해당되는 게재된 가이드라인이 적용되며, 그러한 모든 가이드라인은 본 서비스 약관에 언급됨으로써 본 서비스  약관의 일부가 됩니다.</strong><br>
  <strong>&nbsp;</strong><br>
  <strong>2. </strong><strong>서비스의 개요.</strong><br>
  <strong>(</strong><strong>주)지앤지씨앤씨  웹사이트는 자신의 네트워크를 통하여 현재 이용자들에게 여러 가지 통신 수단, 온라인 포럼, 쇼핑 서비스, 개인화된 내용 및 생생한 프로그래밍을 포함하여 풍부한  온라인 정보의 집합체(&quot;서비스&quot;)에 접속할  수 있게 해줍니다. 달리 명시적으로 설명되어 있지 않는 한 새로운 (주)지앤지씨앤씨 사이트를 개설하는 것을 포함하여 현재의 서비스를 확대하거나 향상시키는 새로운 기능도 본 서비스 약관의  적용을 받게 됩니다. 귀하는 서비스가 &quot;있는 그대로&quot; 제공되며, 그 시기 적절함, 삭제, 잘못 전송되거나 사용자 통신 또는 개별화된 환경을 저장하지  못한데 대하여 (주)지앤지씨앤씨가 어떠한 책임도 부담하지  않음을 이해합니다. 본 서비스를 이용하기 위하여 귀하는 월드와이드웹(WWW)에  직접 또는 웹에 기반한 내용을 액세스하는 장치를 통한 접속을 확보하여야 하며, 그러한 접속과 관련하여  요구되는 서비스 비용을 지불하여야 합니다. 또한, 컴퓨터와  모뎀이나 기타 액세스 장치를 포함하여 월드와이드웹에 접속하기 위하여 필요한 모든 장비를 스스로 마련하여야 합니다.  성인용 내용을 포함하고 있는 서비스에는 일정한 구역을 설정하였음을 유의하시기 바랍니다. 만 18세 이상만이 그러한 구역에 접속하여 내용을 볼 수 있습니다.</strong><br>
  <strong>&nbsp;</strong><br>
  <strong>3. </strong><strong>사용자의 등록의무.</strong><br>
  <strong>본 서비스를 이용하기 위하여 귀하는  다음의 내용에 동의합니다. <br>
  &nbsp;</strong><br>
  <strong>1. </strong><strong>등록양식에서 요구되는, 귀하에 대한 진실하고, 정확하며,  현재의 사실과 일치하는 완전한 정보(&quot;등록정보&quot;)를  제공할 것.<br>
  &nbsp;</strong><br>
  <strong>2. </strong><strong>등록정보를 진실하고, 정확하며, 현재의 사실과 일치하는 완전한 정보가 되도록유지하고 이를  갱신할 것.<br>
    귀하가 제공한 정보가 진실하지 않거나, 부정확하고, 현재의  사실과 일치하지 않으며 완전하지 않은 경우, 또는 그러하다고 (주)지앤지씨앤씨 가 의심할 만한 합리적인 이유가 있는 경우 (주)지앤지씨앤씨 는 귀하의 계정을 중지하거나 해지할 수 있으며, 현재  또는 장래의 모든 서비스 이용 (혹은 그 일부)을 거절할  수 있습니다. (주)지앤지씨앤씨 는 모든 사용자, 특히 어린들의 안전 및 프라이버시에 대해 관심을 가지고 있습니다. (주)지앤지씨앤씨 가족 계정을 설정하고 자녀의 이름을 계정에 추가하면, 귀하는  귀하가 만 18세 이상이고 (주)지앤지씨앤씨 가족 계정에 열거되어 있는 자녀(들)의 법적 보호자임을 보증하게 됩니다. 또한 (주)지앤지씨앤씨 가족 계정에 자녀의 이름을 추가함으로써 귀하는 자녀로  하여금 전자메일, 게시판, 동호회, 인스턴트 메시지(instant message), 특히 대화를 포함한  모든 서비스에 접속할 수 있도록 허락하시게 됩니다. 본 서비스는 광범위한 대중을 대상으로 한 것임을  유념하시고, 따라서 본 서비스가 귀하의 자녀에게 적합한지 여부를 판단하는 것은 법적 보호자인 귀하의  책임입니다.</strong><br>
  <strong>&nbsp;</strong><br>
  <strong>4. (</strong><strong>주)지앤지씨앤씨의  프라이버시 정책 </strong></p>
<p align="left"><strong>&nbsp;(</strong><strong>주)지앤지씨앤씨 의 프라이버시 정책에 의하면 (주)지앤지씨앤씨 는 귀하의 등록정보 또는 관련 자료에 포함된 일정한  총체적인 정보를 제3자에게 제공할 수 있습니다. 다만 그러한  정보에는, 귀하가 특별히 승인하거나 그러한 조치가 법, 소송, 또는 본 서비스 약관을 실행하기 위하여 합리적으로 필요하다고 신의성실에 의해 사료되는 경우를 제외하고는, 개인적으로 식별할 수 있는 정보는 포함되지 않습니다.</strong><br>
  <strong>&nbsp;</strong><br>
  <strong>5. </strong><strong>사용자 계정, 비밀번호 및 보안 </strong><br>
  <strong>&nbsp;(</strong><strong>주)지앤지씨앤씨 의 회원에 가입을 하실때  (주)지앤지씨앤씨 는 회원의 기존 등록정보에 대한 철저한 보안을 약속드립니다. 또한, 메일 보안 등의 문제로 인한 개인 Privacy 침해를 미연에 방지하고자 회원ID 중복여부를 체크하여  회원께서 (주)지앤지씨앤씨 에 가입하실 때 중복여부를 알려드리는데  동의합니다. 본 서비스의 등록 절차를 완료하면 귀하는 비밀번호와 사용자 계정을 지정받게 됩니다. 귀하는 비밀번호와 사용자 계정의 비밀을 유지할 책임이 있으며, 귀하의  비밀번호와 계정을 사용하여 발생하는 모든 결과에 대해 전적인 책임이 있습니다. 귀하는 (i) 귀하의 승인 없이 비밀번호나 계정이 사용되었거나 또는 기타 보안 위반에 대하여 즉시 (주)지앤지씨앤씨 에 신고하며,  (ii) 매 접속 종료 시 귀하의 계정으로부터 확실히 사용 종료 할 것을 동의합니다. (주)지앤지씨앤씨 는 귀하가 본 조항을 이행하지 않음으로 인하여 발생하는 모든 손실 또는 손해에 대해 책임을 지지  않습니다.</strong><br>
  <strong>&nbsp;</strong><br>
  <strong>6. </strong><strong>사용자의 행동규범 </strong><br>
  <strong>&nbsp;</strong><strong>귀하는 모든 정보, 데이터, 텍스트, 소프트웨어, 음악, 소리, 사진, 그래픽, 비디오, 메시지 또는 기타 자료(이하  &quot;내용&quot;)들이, 공식적으로  게재되었거나 개인적으로 전송 되었거나에 관계없이, 그러한 내용이 비롯된 사람의 전적인 책임임을 이해합니다. 즉, 귀하가 본 서비스를 통하여 게시, 게재, 전자메일 또는 달리 전송한 모든 내용에 대해 서는 (주)지앤지씨앤씨 가 아닌 귀하가 전적으로 책임을 지게 됩니다. 귀하는 어떠한 경우에도 내용상의 오류 또는 생략, 본 서비스를 통하여  게재되거나, 전자메일 또는 달리 전송된 내용을 이용함으로 인하여 발생한 모든 종류의 손실이나 손해를  포함하되 이에 제한되지 않는 일체의 내용에 대해 어떠한 방식으로든 (주)지앤지씨앤씨 가 책임을 지지 않음을 이해하며 귀하는 다음과 같은 행위를 하는데 본 서비스를 이용하지 않기로 동의합니다. <br>
&nbsp;</strong></p>
<p><strong>1) 불법적이거나,  해를 입히거나, 타인을 위협하거나, 욕설을 사용하거나, 타인을 괴롭히거나 타인의 명예를 훼손하거나, 저속 또는 음란하거나, 모욕적이거나, 타인의 프라이버시를 침해하거나 악의에 차거나 인종적이거나, 또는 기타 불유쾌한 내용을 게시, 게재, 전자메일 또는 달리 전송하는 행위 <br>
  2) 어떠한 방법으로든 소수를 해하는 행위 <br>
  3) (주)지앤지씨앤씨 직원, 포럼 리더, 가이드 또는 호스트를 포함하여(이에 제한되지 않음) 개인 또는 단체를 가장하거나, 개인 또는 단체와의 관계를 잘못 진술하거나  달리 부정 확하게 전하는 행위 <br>
  4) 서비스를 통하여 전송된 내용의 출처를 위장하기 위하여 발송인을 위조하거나 달리 동일인 식별장치를 조작하는 행위 <br>
  5) 법률에 의하거나 계약상 또는 위임에 의하여 전송할 수 있는 권리가 없는 내용 <br>
  (예를 들어, 고용관계의 일환으로 또는 기밀준수계약에 의해 알게 되거나 공개된 내부정보, 독점적인 기밀정보)을 게시, 게재, 전자메일 또는 달리 전송하는 행위 <br>
  6) 타인의 특허, 상표, 영업비밀, 저작권, 기타 지적재산권을 침해하는 내용을 게시, 게재, 전자메일 또는 달리 전송하는 행위 <br>
  7) 불필요하거나 승인되지 않은 광고, 판촉물,  &quot;정크 메일(junk mail)&quot;, &quot;스팸(spam)&quot;, &quot;행운의 편지(chain  letters)&quot;, </strong></p>
<p align="left"><strong>&quot;</strong><strong>피라미드 조직&quot;, 기타 다른 형태의 권유를 게시, 게재, 전자메일 또는 달리 전송하는 행위. 단, 쇼핑룸과 같이 그러한 목적으로 지정된 구역은 제외 <br>
  9) 컴퓨터 소프트웨어, 하드웨어, 전기통신  장비를 방해하거나 파괴, 그 기능을 제한 하기 위해 고안된 소프트웨어 바이러스, 기타 다른 컴퓨터 코드, 파일, 프로그램을  포함하고 있는 자료를 게시, 게재, 전자메일 또는 달리 전송하는  행위 <br>
  10) 대화의 정상적인 흐름을 방해하거나, 서비스의 다른 사용자들이 타이프할 수 있는 것보다  빨리 스크린이 &quot;스크롤(scroll)&quot;하도록  하거나, 기타 실시간 교환에 참가할 수 있는 다른 사용자들의 능력에 부정적으로 영향을 미치는 방법으로  행동하는 행위 <br>
  11) 서비스 또는 서비스에 연결되어 있는 서버나 네트워크를 방해 또는 간섭하거나, 서비스에  관련된 네트워크의 요건, 절차, 정책 또는 규정을 불 준수하는  행위 <br>
  12) 타인을 &quot;스톡(stalk)&quot;하거나  달리 괴롭히는 행위 <br>
  13) 다른 사용자에 대한 개인정보를 수집 또는 저장하는 행위 <br>
  &nbsp;(주)지앤지씨앤씨  은 위 각호의 행위를 한 회원에 대하여는 이용제한조치를 취할 수 있으며, 당해 회원의 위반행위가 중대하거나  반복적인 경우에는 당해 회원의 아이디를 삭제할 수 있으며, 이 경우  (주)지앤지씨앤씨 은 당해 회원에 대하여 현재 또는 장래의 모든 서비스의 이용을 금지할  수 있습니다.</strong><br>
  <strong>&nbsp;</strong><br>
  <strong>7. </strong><strong>국제적인 사용을 위한 특별규정 </strong><br>
  <strong>&nbsp;</strong><strong>귀하는 인터넷의 전세계적인 성격을 인정하여 온라인상의 행위 및 수락할 수 있는 내용에 대한 모든 현지 규정을 준수할  것을 동의합니다.</strong><br>
  <strong>&nbsp;</strong><br>
  <strong>8. (</strong><strong>주)지앤지씨앤씨  에 제출된 내용 </strong><br>
  <strong>&nbsp;</strong><strong>귀하가 내용을 제출하기 전에 달리 귀하에게 특별히 말하지 않은 이상,&nbsp; (주)지앤지씨앤씨 은 귀하가  제출한 내용을 소유하지 않습니다. 귀하는 (주)지앤지씨앤씨 의 네트워크상에 그러한 내용을 전시하고 배포하기 위한 목적으로, 그리고 (주)지앤지씨앤씨 의 서비스를 판촉하고 마케팅하기 위하여 아래에 명시된  바와 같이 (주)지앤지씨앤씨 에게 그러한 내용에 대한 사용권을  허가하는 것입니다. (주)지앤지씨앤씨 에 내용을 제출함으로써  귀하는 자동적으로 그러한 내용의 소유자로서 명시적으로 (주)지앤지씨앤씨  에게 사용료 없는, 영구적이고, 취소 불가능하며, 비독점적이고 재라이센스 할 수 있는 권한 및 그러한 내용(전부 또는  일부)을 전세계적으로 사용, 복제, 수정, 개조, 출판, 번역, 창작물을 제작하거나 배포,  실행 또는 전시할 수 있고, 현재 알려져 있거나 (주)지앤지씨앤씨 에 개발되는 모든 형태, 매체 또는 기술로 다른 작품에  포함시킬 수 있는 사용권을 부여하거나 이를 보장하게 됩니다. 귀하는,  제출되는 내용을 (주)지앤지씨앤씨 가 미리 검열하지  않으며, (주)지앤지씨앤씨 및 그 지정인은 재량에 의해 본  서비스를 통하여 공개적으로 이용가능한 내용을 거절, 편집, 이동  또는 삭제할 수 있는 권리를 가짐(의무는 아님)을 인정합니다. 전술한 내용을 제한함이 없이 (주)지앤지씨앤씨  및 그 지정인은 본 서비스 약관을 위반하거나 달리 불유쾌한 내용을 삭제할 수 있는 권리를 가집니다. 귀하는  제출하는 내용의 정확성, 완전성, 또는 유용성에 대한 신뢰를  포함하여 내용의 이용과 관련된 일체의 위험을 평가하고 부담하여야 함에 동의합니다. 이 점에 있어서 귀하는 (주)지앤지씨앤씨 게시판, (주)지앤지씨앤씨 동호회 및 기타 본 서비스의 다른 부분에 있는 정보를 포함하여(이에  제한되지 않음) (주)지앤지씨앤씨 가 제작하거나 (주)지앤지씨앤씨 에 제출된 내용을 신뢰할 수 없음을 인정합니다.</strong><br>
  <strong>&nbsp;</strong><br>
  <strong>9. </strong><strong>면책 </strong></p>
<p align="left"><strong>&nbsp;귀하는 귀하가 제출한 내용 또는 본 서비스를 이용하거나 본 서비스에 접속하거나, 또는 귀하가 본 서비스 약관을 위배하거나 제3자의 권리를 침해함으로  인하여 제3자가 제기하는, 합리적인 변호사 비용을 포함한  모든 청구 또는 요구로부터 (주)지앤지씨앤씨&nbsp; 및 그 자회사들, 계열회사들, 임직원, 대리인, 공동사업자, 또는 파트너 및 종업원들을 면책 하고 해를 입지 않도록  할 것을 동의합니다.</strong><br>
  <strong>&nbsp;</strong><br>
  <strong>10. </strong><strong>서비스의 재판매 금지 </strong><br>
  <strong>&nbsp;</strong><strong>귀하는 상업적인 목적을 위하여 본 서비스 자체, 서비스 이용 또는 서비스  내용의 일부 또는 전부를 복사, 복제, 판매, 재판매 또는 이용하지 않을 것에 동의합니다.</strong><br>
  <strong>&nbsp;</strong><br>
  <strong>11. </strong><strong>사용 및 저장에 관한 일반 관례 </strong><br>
  <strong>&nbsp;</strong><strong>귀하는 (주)지앤지씨앤씨&nbsp; 서비스의 이용에 관한 일반 관례 및 제한을  제정할 수 있음을 인정합니다. 서비스의 이용에 관한 일반 관례 및 제한에는 전자메일 메시지, 게시판 게시물 또는 기타 게재된 내용이 서비스에 의해 보유되는 최대 일수, 서비스  상의 계 정에서 송 수신할 수 있는 전자메일 메시지의 최대수, 서비스 상의 계정에서 송 수신 할 수  있는 전자메일 메시지의 최대 크기, 귀하를 위하여 (주)지앤지씨앤씨 의 서버에 할당되는 최대 디스크 공간 및 정해진 기간동안 서비스에 접속할 수 있는 최대한의 수 (최대 기간)이 포함됩니다. 귀하는  본 서비스에 보관되거나 전송된 메시지 및 기타 통신 또 는 내용을 삭제하거나 저장하지 못한데 대해 (주)지앤지씨앤씨과 아무런 책임을 지지 않음에 동의 합니다. 귀하는 (주)지앤지씨앤씨의 상당한 기간 동안 활동이 없는 계정을 해지할 수  있으며, 또한 언제든지 재량에 의해 본 일반 관례 및 제한을 변경할 수 있음을 인정합니다.</strong><br>
  <strong>&nbsp;</strong><br>
  <strong>12. </strong><strong>서비스 변경 </strong><br>
  <strong>&nbsp;(</strong><strong>주)지앤지씨앤씨은 언제든지, 그리고  수시로 본 서비스 (혹은 그 일부)를, 통지하거나 또는 통지함이 없이, 일시 또는 영구적으로 수정하거나  중단할 수 있습니다. 귀하는 서비스의 수정, 중단 또는 중지에  대해 (주)지앤지씨앤씨 은 귀하 또는 제3자에 대하여 어떠한 책임도 지지않음에 동의합니다.</strong><br>
  <strong>&nbsp;</strong><br>
  <strong>13. </strong><strong>해지 </strong><br>
  <strong>&nbsp;</strong><strong>귀하는 언제든지 온라인 또는 (주)지앤지씨앤씨  이 정한 별도의 이용방법을 통해 (주)지앤지씨앤씨 서비스  해지를 신청할 수 있습니다. 귀하는 (주)지앤지씨앤씨 이 위 요청을 받은 즉시 (주)지앤지씨앤씨 이 정한 절차에 따라 해지를 진행함에 동의합니다. 또한, 귀하는 사용 부족 또는 귀하가 본 서비스 약관의 내용 또는 기본 정신에 부합하지 않는 행동을 하였거나 이를  위반하였다고 판단되는 경우를 포함하되 이에 제한되지 않고, (주)지앤지씨앤씨  이&nbsp; 어떠한 이유로든 임의로 귀하의  비밀번호, 계정 또는 서비스 이용을 중지시키거나 서비스 내에 포함되어 있는 내용을 삭제할 수 있음에  동의합니다. 또한, (주)지앤지씨앤씨  은 재량으로 언제든지 서비스 또는 그 일부의 제공을, 통지를 하거나 통지함이 없이 중단할 수 있습니다. 귀하는 (주)지앤지씨앤씨  이 본 서비스 약관의 조항에 따라 사전통보없이 귀하의 서비스에 대한 접속을 해지할 수 있고, 귀하의  계정 및 동 계정에 포함되어 있는 모든 관련 정보 및 파일을 즉시 삭제할 수 있으며, 그러한 파일 또는  서비스에 대한 더 이상의 접속을 금지할 수 있음을 인정하고 동의합니다.</strong><br>
  <strong>&nbsp;</strong><br>
  <strong>14. </strong><strong>광고주와의 거래 </strong></p>
<strong>&nbsp;본 서비스상에 게재되어 있는, 또는 본 서비스를 통한  광고주의 판촉활동에 귀하가 참여하거나 그러한 광고주와 교신 또는 거래를 하는 것은 전적으로 귀하와 광고주 간의 문제이며, 이는 귀하와 광고주간의 거래와 </strong>
<p align="left"><strong>관련하여 발생하는 물건 및 서비스의  배달, 대금의 지급, 기타 거래의 조건 및 계약 내용, 보증, 대리권의 행사 등을 포함합니다. 귀하는 본 서비스상 그러한 광고주가 존재함으로 인하여 또는 그러한 거래의 결과로서 발생하는 모든 손실 또는  손해에 대해 (주)지앤지씨앤씨 은 책임을 지지 않음에 동의합니다.</strong><br>
  <strong>&nbsp;</strong><br>
  <strong>15. </strong><strong>링 크 </strong><br>
  <strong>&nbsp;</strong><strong>본 서비스 또는 제3자는 월드와이드웹 사이트 또는 자료에 대한 링크를 제공할  수 있습니다. (주)지앤지씨앤씨 은 그러한 사이트 및 자료에  대한 아무런 통제권이 없으므로, 귀하는 (주)지앤지씨앤씨 이 그와 같은 외부 사이트나 자료의 유용성에 대해 책임이 없으며,  그러한 사이트나 자료에 대한, 또는 그로부터 이용 가능한 내용, 광고, 제품이나 재료에 대해 (주)지앤지씨앤씨 과 아무런 보증도 하지 않고, 그에 대해 책임이 없음을  인정하고 이에 동의합니다. 또한, 귀하는 그러한 사이트나  자료에 대한, 또는 그를 통하여 이용 가능한 내용, 상품  또는 서비스를 이용하거나 이를 신뢰함으로 인해, 또는 이와 관련하여 야기되거나 야기되었다고 주장되는  어떠한 손해나 손실에 대하여 (주)지앤지씨앤씨 과 직접적  또는 간접적으로 책임을 지지 않음을 인정하고 이에 동의합니다.</strong><br>
  <strong>&nbsp;</strong><br>
  <strong>16. (</strong><strong>주)지앤지씨앤씨  의 소유권 </strong><br>
  <strong>&nbsp;</strong><strong>귀하는 본 서비스 또는 이와 관련하여 사용되는 필요한 소프트웨어와 관련 지적재산권 및 기타 법률에 의해 보호되는 전유적이고  기밀인 정보가 포함되어 있으며, 또한 후원 광고에 포함되어 있는 내용이나 본 서비스 또는 광고주를 통하여  귀하에게 제공 되는 정보는 저작권, 상표, 서비스 마크, 특허 또는 기타 소유권 및 법에 의해 보호됨을 인정하고 동의합니다. (주)지앤지씨앤씨 가나 광고주에 의해 명백하게 승인된 경우를 제외하고, 귀하는  본 서비스나 소프트웨어에 근거한 창작물을 전부 또는 일부라도 수정하거나 대여, 대출, 판매, 배포 또는 제작할 수 없음에 동의합니다. (주)지앤지씨앤씨 은 귀하에게 한 대의 컴퓨터에서 소프트웨어의 오브젝트  코드를 사용할 수 있는 개인적이고, 양도불가능하며, 비독점적인  권리 및 사용권을 부여합니다. 다만, 귀하는 소프트웨어를  복사, 수정, 창작물의 제작, 리버스 엔지니어, 리버스 어셈블 또는 소스코드를 발견하려고 시도하거나, 판매, 양도, 재라이센스, 담보권을 설정하거나 소프트웨어상의 어떠한 권리를 달리 양도하여서는 안되며, 제3자로 하여금 위와 같은 행위를 하도록 허락하여서도 안됩니다. 귀하는  승인받지 않은 본 서비스에 대한 접속을 하기 위한 목적을 포함하여(이에 제한되지않음), 어떤 방식으로든 소프트웨어를 수정하거나 소프트웨어의 수정본을 사용하지 않으며, 본 서비스에 접속하는데 사용하도록 (주)지앤지씨앤씨 이 제공한 인터페이스를 통하는 것 이외에 다른 방법으로 본 서비스에 접속하지 않기로 동의합니다.</strong><br>
  <strong>&nbsp;</strong><br>
  <strong>17. </strong><strong>보증의 부인 </strong><br>
  <strong>&nbsp;</strong><strong>귀하는 명시적으로 다음 사항을 이해하고 동의합니다.</strong><br>
  <strong>&nbsp;</strong></p>
<strong>1. 본 서비스의 이용은 전적으로 귀하의 책임이며, 서비스는 &quot;있는 그대로&quot;  그리고 &quot;이용 가능한 상태 그대로&quot; 제공됩니다. (주)지앤지씨앤씨 은 상품성, 특정목적에의  적합성 및 타인의 권리에 대한 비침해에 대한 묵시적 보증을 포함하여 이에 제한되지 않고 명시적이든 묵시적이든 모든 형태의 보증을 명시적으로 부인합니다. <br>
2. (주)지앤지씨앤씨 은 (i) 본 서비스가  귀하의 요구를 충족시키며, (ii) 본 서비스는 중단되지 않는다거나 시기 적절하다거나, 안전하다거나 오류가 없으며, (iii) 본 서비스의 이용으로 인해  취득할 수 있는 결과가 정확하다거나 믿을 수 있으며, (iv) 서비스를 통하 여 구매하거나 취득한 제품, 서비스, 정보 또는 다른 자료의 질이 귀하의 기대에 부응하고, (v) 소프트웨어상의 오류는 시정될 것이라는 점에 대하여 어떠한 보증도 하지 않습니다. <br>
</strong>
<p align="left"><strong>3. </strong><strong>본 서비스를 이용하여 어떠한 자료를  다운로드하는 행위는 귀하의 판단 및 위험에 의해 행하여지고, 그러한 자료와 다운로드로 인해 초래되는  컴퓨터 시스템에 대한 손해 및 데이터 손실에 대해서는 귀하가 전적으로 책임을 부담합니다. <br>
  4. 귀하가 (주)지앤지씨앤씨 으로부터 또는  본 서비스를 통하여 취득한 구두 또는 문서상의 모든 충고와 정보에 대하여서는 본 사용권 약관에 명시적으로 규정되어 있지 않은 어떠한 보증도 제공되지  않습니다.</strong><br>
  <strong>&nbsp;</strong><br>
  <strong>18. </strong><strong>책임의 제한 </strong><br>
  <strong>&nbsp;</strong><strong>귀하는 (i) 본 서비스의 이용 또는 이용 불가, (ii) 본 서비스를 통하거나 본 서비스로부터 구입하거나 취득한 상품, 데이터, 정보 또는 서비스, 수령한 메시지,  또는 체 결한 거래로 인한 대체 물건이나 서비스를 조달하기 위한 비용, (iii) 귀하의  메시지 또는 데이터에 대한 승인 받지 않은 접속 또는 변경, (iv) 본 서비스상의 제3자의 진술 또는 행위, 또는 (v)  본 서비스에 관련된 기타 다른 문제로 인하여 발생하는, 영업 이익의 손실, 영업권, 이용, 데이터  또는 기타 무형의 손실로 인한 손해를 포함하되 이에 제한되지 않고 모든 직접, 간접, 부수, 특별, 파생적  또는 징벌적인 손해에 대해 (주)지앤지씨앤씨 은 책임을 지지  않으며, 이는 (주)지앤지씨앤씨  과 그러한 손해의 가능성에 대해 미리 알고 있었던 경우라도 (주)지앤지씨앤씨  는 이로 인하여 이득을 얻기위한 경우가 아닌한 마찬가지임을 명시적으로 인정하고 동의합니다.</strong><br>
  <strong>&nbsp;</strong><br>
  <strong>19. </strong><strong>배제 및 제한 </strong><br>
  <strong>&nbsp;</strong><strong>일부 관할권에서는 부수적 또는 파생적 손해에 대한 보증의 배제 또는 책임의 제한이나 배제를 허용하지 않을 수 있으므로, 위 제17조 및 제18조  제한조항의 일부 규정은 귀하에게 적용되지 않을 수도 있습니다.</strong><br>
  <strong>&nbsp;</strong><br>
  <strong>20. </strong><strong>재정문제에 관련된 서비스에 대한 특별규정 </strong><br>
  <strong>&nbsp;</strong><strong>귀하가 회사, 주식시세, 투자나  증권에 관하여 어떠한 서비스를 제공하거나 그러한 서비스에 가입하거나, 또는 뉴스, 메시지, 경고나 기타 정보를 본 서비스로부터 받거나 요청하고자 하는  경우에는 위 제17조, 제18조를  다시 참조하시기 바랍니다. 위 조 항은 귀하에게 2중으로  적용됩니다. 게다가 이러한 종류의 정보에 대해서는 특히 &quot;투자가들이  조심하도록 하라&quot;는 표현이 적절합니다. 본 서비스는  정보적인 목적에서 제공 되는 것이며, 본 서비스에 포함된 어떠한 내용도 거래나 투자목적을 위해 제공되  는 것이 아닙니다. (주)지앤지씨앤씨 은 본 서비스를 통하여  전송되는 어떠한 정보의 정확성, 유용성 또는 효용에 대해서도 책임을 지지 않습니다.</strong><br>
  <strong>&nbsp;</strong><br>
  <strong>21. </strong><strong>통지 </strong><br>
  <strong>&nbsp;</strong><strong>귀하에 대한 통지는 전자메일 또는 정규메일을 통하여 보내질 것입니다. 또한, 본 서비스에 통지를 게재하거나 통지에 대한 링크를 게재함으로써 본 서비스 약관 또는 다른 사항의 변경내용을  통보할 수 있습니다.</strong><br>
  <strong>&nbsp;</strong><br>
  <strong>22. </strong><strong>저작권 및 저작권 대리인 </strong><br>
  <strong>&nbsp;(</strong><strong>주)지앤지씨앤씨 는 타인의 지적재산권을 존중하며, 본 서비스의 사용자들도 마찬가지로 행동해주실 것을 요청하는 바입니다. 귀하의  저작물이 저작권을 침해하는 방법으로 복사되었다고 생각되시는 경우 다음과 같은 정보를 (주)지앤지씨앤씨 의 저작권 대리인에게 보내주시기 바랍니다. <br>
  &nbsp;</strong></p>
<strong>1) 저작권자를 대리하여 행위할 수 있도록 권한을  부여받은 사람의 전자서명 또는 실제서명 <br>
2) 저작권이 침해되었다고 주장하는 저작물에 대한 설명 <br>
</strong>
<p align="left"><strong>3) </strong><strong>저작권을 침해하고 있다고 주장하는 자료가  위치해있는 사이트에 대한 설명 <br>
  4) 귀하의 주소, 전화번호 및 전자메일 주소 <br>
  5) 문제가 되고 있는 사용이 저작권자, 그 대리인 또는 법에 의해 승인된 것이 아니라고  귀하가 선의로 믿는데 대한 진술서 <br>
  6) 위증죄의 선서하에서, 귀하의 통지에 포함되어 있는 위와 같은 내용이 정확하며, 귀하가 저작권자이거나 저작권자를 대리하여 행위할 수 있음에 대한 진술서 </strong><br>
  <strong>&nbsp;</strong><br>
  <strong>23. </strong><strong>일반 조항 </strong><br>
  <strong>&nbsp;</strong><strong>본 서비스 약관은 귀하와 (주)지앤지씨앤씨  사이 체결되는 전체 계약으로서, 귀하의 본 서비스 사용을 규율하며, 귀하와 (주)지앤지씨앤씨 사이 이전에 체결된 모든 계약을 대체합니다. 귀하는, 관련 서비스, 제3자 제공내용 또는 제3자 소프트웨어를 사용할 경우 적용될 수 있는  추가 조건의 적용을 받습니다. 본 서비스 약관 및 귀하와 (주)지앤지씨앤씨 간의 관계는 법규정의 충돌에 관계없이 대한민국 법에 의해 규율됩니다. 본 서비스 약관의 어떤 조항이 관할 법원에 의해 무효로 판정된 경우, 당사자들은  그럼에도 불구하고 법원이 그 조항에 반영되어 있는 당사자들의 의도를 유효하게 하기 위하여 최대한 노력하며, 본  약관의 나머지 조항들은 전부 유효함에 동의합니다. 상충하는 법령 또는 법규에 관계없이 본 서비스의 이용  또는 본 서비스 약관으로 인하여 또는 이와 관련하여 발생하는 모든 청구 또는 소송원인은 그러한 청구 또는 소송원인이 발생한 날로부터 1년이내에 제기되어야 하며, 그렇지 않을 경우 영원히 제기할 수 없습니다. 본 서비스 약관의 조문 제목은 단지 편의를 위한 것이며 법적인 또는 계약적으로 아무런 효력도 없습니다.</strong><br>
  <strong>&nbsp;</strong><br>
  <strong>24. </strong><strong>위반 </strong><br>
  <strong>&nbsp;</strong><strong>본 서비스 약관의 위반은 (email : </strong><a href="mailto:jnjcnc@nate.com"><strong>jnjcnc@nate.com</strong></a><strong>)</strong><strong>로 알려주십시오 </strong></p>


  </div>
  <div class="modal-footer">
    <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>    
  </div>
</div>
<!-- 서비스이용약관 end -->

<!-- 개인정보취급방침 -->
<div id="gain" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3 id="myModalLabel">개인정보취급방침</h3>
  </div>
<div class="modal-body">
<p>(주)지앤지씨앤씨는 고객님의 개인정보를 중요시하며, &quot;정보통신망 이용촉진 및 정보보호&quot;에 관한 법률을 준수하고 있습니다.<br />
  회사는 개인정보취급방침을 통하여 고객님께서 제공하시는 개인정보가 어떠한 용도와 방식으로 이용되고 있으며,<br />
  개인정보보호를 위해 어떠한 조치가 취해지고 있는지 알려드립니다.<br />
  회사는 개인정보취급방침을 개정하는 경우 웹사이트 공지사항(또는 개별공지)을 통하여 공지할 것입니다.<br />
  회사는 개인정보취급방침을 개정하는 경우 웹사이트 공지사항(또는 개별공지)을 통하여 공지할 것입니다.<br />
  &omicron; 본 방침은 : 2014 년 02 월 01 일 부터 시행됩니다.<br />
  1. 수집하는 개인정보 항목<br />
  회사는 회원가입, 상담, 서비스 신청 등을 위해 아래와 같은 개인정보를 수집하고 있습니다.<br />
  &omicron; 수집항목 :<br />
  (필수) 이름, 연락처, 주소 ,접속IP, 웹브라우저.<br />
  &omicron; 개인정보 수집방법 : 홈페이지(온라인상담,회원가입) 쿠키 등 인터넷 서비스 이용 시 자동 생성되는 정보.<br />
  2. 개인정보의 수집 및 이용목적<br />
  회사는 수집한 개인정보를 다음의 목적을 위해 활용합니다.<br />
  &omicron; 서비스 제공에 관한 계약 이행 및 1:1 맞춤상담 제공<br />
  3. 개인정보의 보유 및 이용기간<br />
  회사는 개인정보 수집 및 이용목적이 달성된 후에는 예외 없이 해당 정보를 지체 없이 파기합니다.<br />
  4. 개인정보의 파기절차 및 방법<br />
  회사는 원칙적으로 개인정보 수집 및 이용목적이 달성된 후에는 해당 정보를 지체없이 파기합니다. 파기절차 및 방법은 다음과 같습니다.<br />
  &omicron; 파기절차.<br />
  회원님이 회원가입 등을 위해 입력하신 정보는 목적이 달성된 후 별도의 DB로 옮겨져(종이의 경우 별도의 서류함)<br />
  내부 방침 및 기타 관련 법령에 의한 정보보호 사유에 따라(보유 및 이용기간 참조) 일정 기간 저장된 후 파기되어집니다.<br />
  별도 DB로 옮겨진 개인정보는 법률에 의한 경우가 아니고서는 보유되어지는 이외의 다른 목적으로 이용되지 않습니다.<br />
  &omicron; 파기방법<br />
  전자적 파일형태로 저장된 개인정보는 기록을 재생할 수 없는 기술적 방법을 사용하여 삭제합니다.<br />
  5. 개인정보 제공<br />
  회사는 이용자의 개인정보를 원칙적으로 외부에 제공하지 않습니다. 다만, 아래의 경우에는 예외로 합니다.<br />
  &omicron; 이용자들이 사전에 동의한 경우 <br />
  &omicron; 법령의 규정에 의거하거나, 수사 목적으로 법령에 정해진 절차와 방법에 따라 수사기관의 요구가 있는 경우</p>
<p>6. 이용자 및 법정대리인의 권리와 그 행사방법<br />
  14세 미만의 아동의 경우 사이트 이용이 제한되며, 회원가입을 했다하더라도 운영자가 그효력을 정지 할 수 있습니다. 이용자가 가입해지(동의철회)를 위해서는 &quot;회원탈퇴&quot;를 클릭하여<br />
  본인 확인 절차를 거치신 후 직접 열람, 정정 또는 탈퇴가 가능합니다. 혹은 개인정보관리책임자에게 서면, 전화 또는 이메일로 연락하시면 지체없이 조 치하겠습니다.<br />
  귀하가 개인정보의 오류에 대한 정정을 요청하신 경우에는 정정을 완료하기 전까 지 당해 개인정보를 이용 또는 제공하지 않습니다.<br />
  또한 잘못된 개인정보를 제3자 에게 이미 제공한 경우에는 정정 처리결과를 제3자에게 지체없이 통지하여 정정이 이루어지도록 하겠습니다.<br />
  회사는 이용자 혹은 법정 대리인의 요청에 의해 해지 또는 삭제된 개인정보는 &quot;회사 가 수집하는<br />
  개인정보의 보유 및 이용기간&quot;에 명시된 바에 따라 처리하고 그 외의 용도로 열람 또는 이용할 수 없도록 처리하고 있습니다.<br />
  7. 개인정보에 관한 민원서비스<br />
  회사는 고객의 개인정보를 보호하고 개인정보와 관련한 불만을 처리하기 위하여 아래와 같이 관련 부서 및 개인정보관리책임자를 지정하고 있습니다.<br />
  <br />
  개인정보관리책임자<br />
  - 성명: 이미숙<br />
  - 전화번호 :070-7706-1392 <br />
  - 이메일 :jnjcnc@nate.com<br />
  <br />
  귀하께서는 회사의 서비스를 이용하시며 발생하는 모든 개인정보보호 관련 민원을 개인정보관리책임자 혹은 담당부서로 신고하실 수 있습니다.<br />
  회사는 이용자들의 신고사항에 대해 신속하게 충분한 답변을 드릴 것입니다.<br />
  기타 개인정보침해에 대한 신고나 상담이 필요하신 경우에는 아래 기관에 문의하시기 바랍니다.<br />
  <br />
  1.개인분쟁조정위원회 (http://www.1336.or.kr/1336)<br />
  2.정보보호마크인증위원회 (http://www.eprivacy.or.kr/02-580-0533~4)<br />
  3.대검찰청 인터넷범죄수사센터 (http://www.icic.sppo.go.kr/02-3480-3600)<br />
  4.경찰청 사이버테러대응센터 (http://www.ctrc.go.kr/02-392-0330)<br />
  </div>
  <div class="modal-footer">
    <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>    
  </div>
</div>
<!-- 개인정보취급방침 end -->
<footer id="Foot">
    <!-- <h2 class="screen_out" style="font-size: 20px;" > 주소 서울 마포구 양화로 156,901(동교동,LG팰리스)</h2> -->
    <div class="footer_link" style="display: none;">
        사업자 등록번호 105-81-99245 대표 이미숙 전화  070-7725-8501 팩스 02-3141-7011
    </div>
    <div class="footer_info">
        <small class="txt_copyright">Copyright © 2001- . All Rights Reserved.</small>
    </div>    
</footer>
<button type="button" id="top_btn">
	<img src="http://www.bizsmart.store/bizsmart/theme/basic/img/top_btn.png" alt="상단으로">
</button>
<script>
	$(function() {
		$("#top_btn").on("click", function() {
			$("html, body").animate({
				scrollTop : 0
			}, '500');
			return false;
		});
	}); 
</script>

<script src="http://www.bizsmart.store/bizsmart/js/sns.js"></script>
<!-- } 하단 끝 -->



<!-- ie6,7에서 사이드뷰가 게시판 목록에서 아래 사이드뷰에 가려지는 현상 수정 -->
<!--[if lte IE 7]>
<script>
$(function() {
    var $sv_use = $(".sv_use");
    var count = $sv_use.length;

    $sv_use.each(function() {
        $(this).css("z-index", count);
        $(this).css("position", "relative");
        count = count - 1;
    });
});
</script>
<![endif]-->

</body>
</html>
