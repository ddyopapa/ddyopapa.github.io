<!DOCTYPE html>
<html lang="ko">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>㈜지앤지씨앤씨</title>
	<link rel="stylesheet" href="./style.css?1" type="text/css">
	<style>
		body,
		html {
			margin: 0;
			padding: 0;
			height: 100%;
		}

		#intro {
			display: flex;
			justify-content: center;
			align-items: center;
			width: 100%;
			height: 100%;
		}

		.introWrap {
			text-align: center;
			width: 100%;
		}

		.logo {
			font-size: 1.7rem;
			/* 폰트 크기를 줄임 */
			margin: 10px 0 0;
			/* 위아래 간격 설정 */
			line-height: 1.5;
			/* 줄 간격 설정 */
		}

		.intro_con h1 {
			padding: 0 !important;
		}

		.btn_find {
			padding: 10px 20px;
			font-size: 16px;
			line-height: 30px;
			color: #fff;
			background-color: #8e8e8e;
			border: none;
			border-radius: 5px;
			cursor: pointer;
			transition: background-color 0.3s ease;
		}

		.btn_find:hover {
			background-color: #0056b3;
		}

		.copy {
			margin: 10px 0 30px;
		}
	</style>
</head>

<body>
	<div id="intro">
		<div class="introWrap">
			<div class="intro_con">
				<h1 class="logo">연세 동문 SKT 휴대폰 특가 <br /> <span style="font-size: 25px;">"입장코드를 입력해주세요"</span> </h1>
				<div style="padding-top: 20px;">( 입장코드는 <span style="text-decoration: underline;">총동문회</span> 홈페이지에서 확인해주세요 )</div>
				<div class="tit3">
					<h2></h2>
				</div>
				<ul class="intro_list">
					<li class="item4">
						<div>
							<div class="txt">
								<div>
									<form action="./bizsmart/passnumber_1.php?mb_no=" id="frm" method="post" onsubmit="return check()">
										<div class="total_search">
											<input type="text" id="pass" name="pass" title="인증번호입력"  placeholder="코드를 입력하세요">
										</div>
										<button type="submit" class="btn_find">입장코드 인증</button>
									</form>
								</div>
							</div>
						</div>
					</li>
				</ul>
			</div>
			<div class="copy">
				<p>Copyright © 2023.CHOBIZ All Rights Reserved.</p>
			</div>
		</div>
	</div>
	</div>
	<script>
		function check() {
			if (frm.pass.value == "") {
				alert("등록번호를 입력해 주세요.");
				frm.pass.focus();
				return false;
			}
		}
	</script>
</body>

</html>