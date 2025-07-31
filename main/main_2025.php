<?php include "../inc/header_2025.php"; ?>
<?php include "../inc/top_2025.php"; ?>

<!--메인상단-->		

<div class="content" id="main_banner">
  <div class="main_swiper_2025">
	<div class="swiper h-100">
		<div class="swiper-wrapper">
			<div class="swiper-slide companyswiper">
				<div class="max-width d-flex mx-auto h-100">
					<div class="active-bg-90 d-flex flex-column justify-content-center text-white  px-4 letter-spacing-0-5 line-height-1">
						<p class="mb-2 fs-25 fw400 title_01">20년경력, 누적시공 4500건이상</p>
						<h2 class="fs-40 fw400 mb-4 pb-2  title_02">바닥재 전문기업 <span class="fw800">강화카페트매트</span></h2>
						<p class="mb-4 pb-2 line-height-1-2 fs-28 fw400  title_03">경쟁력 있는 제품, 합리적인 가격,<br>
							최고의 퀄리티를 약속합니다.</p>
							<div class="btnwrap d-flex gap-3 letter-spacing-0-5 title_04">
								<a href="../product/product_list.php" class="btn bg-white rounded-pill  fs-20 fw700">회사소개 바로가기</a>
								<a href="../product/product_custom.php" class="btn orange-bg text-white rounded-pill  fw800 fs-20">1661-8849</a>

							</div>
					</div>

				</div>
			</div>
			<div class="swiper-slide eventswiper active-bg">
				<div class="max-width d-flex mx-auto h-100">
					<div class="active-bg-90 d-flex flex-column justify-content-center text-white  px-4 letter-spacing-0-5 line-height-1">
						<p class="mb-2 fs-25 fw400 title_01">20년경력, 누적시공 4500건이상</p>
						<h2 class="fs-40 fw400 mb-4 pb-2  title_02">바닥재 전문기업 <span class="fw800">강화카페트매트</span></h2>
						<p class="mb-4 pb-2 line-height-1-2 fs-28 fw400  title_03">경쟁력 있는 제품, 합리적인 가격,<br>
							최고의 퀄리티를 약속합니다.</p>
							<div class="btnwrap d-flex gap-3 letter-spacing-0-5 title_04">
								<a href="../product/product_list.php" class="btn bg-white rounded-pill  fs-20 fw700">회사소개 바로가기</a>
								<a href="../product/product_custom.php" class="btn orange-bg text-white rounded-pill  fw800 fs-20">1661-8849</a>

							</div>
					</div>
				</div>
			</div>
			<div class="swiper-slide qnaswiper orange-bg">
				<div class="max-width d-flex mx-auto h-100">
					<div class="active-bg-90 d-flex flex-column justify-content-center text-white  px-4 letter-spacing-0-5 line-height-1">
						<p class="mb-2 fs-25 fw400 title_01">20년경력, 누적시공 4500건이상</p>
						<h2 class="fs-40 fw400 mb-4 pb-2  title_02">바닥재 전문기업 <span class="fw800">강화카페트매트</span></h2>
						<p class="mb-4 pb-2 line-height-1-2 fs-28 fw400  title_03">경쟁력 있는 제품, 합리적인 가격,<br>
							최고의 퀄리티를 약속합니다.</p>
							<div class="btnwrap d-flex gap-3 letter-spacing-0-5 title_04">
								<a href="../product/product_list.php" class="btn bg-white rounded-pill  fs-20 fw700">회사소개 바로가기</a>
								<a href="../product/product_custom.php" class="btn orange-bg text-white rounded-pill  fw800 fs-20">1661-8849</a>

							</div>
					</div>

				</div>
			</div>
		</div>
		<div class="swiper-pagination"></div>
	</div>

  </div>
</div>
<script>

	const kw_main_swiper = new Swiper('.main_swiper_2025 .swiper', {
		loop: true,
		autoplay: {
			delay: 8000,
			disableOnInteraction: false,
		},
		pagination: {
			el: '.swiper-pagination',
			clickable: true,
		},
		navigation: {
			nextEl: '.swiper-button-next',
			prevEl: '.swiper-button-prev',
		},
		// 추가 옵션 필요시 여기에 작성
	});

</script>




<section id="privateQna" class='gray-bg py-5'>
	<div class="max-width mx-auto">
		<div class="titlemore d-flex justify-content-between align-items-center mb-4">
			<h2 class='fs-33 fw600'>1:1 견적문의</h2>
			<a href="../product/product_custom.php" class="btn   fs-20 fw500">+ 전체보기</a>
		</div>
		<div>
			<ul class='d-flex flex-column gap-2 fw500 fs-20'>
				<li class="bg-white rounded-4 line-height-1-8 px-2 py-2 d-flex gap-4 align-items-center">
					<a href="" class='d-flex gap-4 align-items-center fs-18'>
						<span class='text-white active-bg rounded-3 px-2'>제품문의</span>
						TINO5 매장 발매트 제작 관련 문의 
						
					</a>
					<span class='ms-auto fs-14 gray-text'>Sample ID***</span>
					<span class='fs-14 gray-text'>2025.06.04</span>
					<span class=' active-color me-4'>답변완료</span>
					
				</li>
				
			</ul>
		</div>
		

	</div>
</section>

<?php include "../inc/footer_2025.php"; ?>