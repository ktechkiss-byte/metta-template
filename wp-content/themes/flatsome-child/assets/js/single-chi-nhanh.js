jQuery(document).ready(function($) {
	const galleryBtn = $('.room-image-3');
	const totalGallery = $('.total-galleryImg');
	const countGalleryLength = ($('#gallery a').length - 3);
	const numberShow = countGalleryLength > 0 ? countGalleryLength : "";
	if (numberShow == 0) {
		totalGallery.html('');
	} else {
		totalGallery.html('+' + numberShow);
	}

	galleryBtn.click(function () {
		const galleryItems = $('#gallery a').map(function () {
			return {
				src: $(this).attr('href'),
				thumb: $(this).find('img').attr('src'),
			};
		}).get();
		Fancybox.show(galleryItems);
	});
	
	
	document.querySelectorAll('.about-header').forEach(function(link) {
		link.addEventListener('click', function(e) {
			document.querySelectorAll('.about-header').forEach(el => el.classList.remove('active'));

			this.classList.add('active');
		});
	});

	$('.toggle-amenities-btn').on('click', function() {
		const $btn = $(this);
		const $hidden = $btn.closest('.amenities-container').find('.amenities-hidden');

		$hidden.slideToggle(250);

		const isExpanded = $btn.data('expanded') || false;

		$btn.text(isExpanded ? 'Xem thêm tiện ích' : 'Thu gọn');
		$btn.data('expanded', !isExpanded);
	});

	function toggleReadMore() {
		const container = document.getElementById("description");
		container.classList.toggle("expanded");

		const button = document.querySelector(".read-more-button");
		button.innerText = container.classList.contains("expanded") ? "Thu gọn" : "Xem thêm";
	}

	$('.read-more-button').on('click', toggleReadMore);
	
	var swiper = new Swiper(".section-service-swiper-1", {
		navigation: {
			nextEl: ".section-service-btn-next-1",
			prevEl: ".section-service-btn-prev-1",
		},
		pagination: {
			el: ".section-service-pagi-1",
		},
		breakpoints: {
			300: {
				slidesPerView: 1, 
				spaceBetween: 30,
				slidesPerGroup: 1
			},
			768: {
				slidesPerView: 2, 
				spaceBetween: 30,
				slidesPerGroup: 2
			},
			1024: {
				slidesPerView: 4, 
				spaceBetween: 40, 
			},
		},
	});
	
	var swiper_two = new Swiper(".video-slide", {
		navigation: {
			nextEl: ".video-btn-next",
			prevEl: ".video-btn-prev",
		},
		pagination: {
			el: ".section-service-pagi-1",
		},
		breakpoints: {
			300: {
				slidesPerView: 1, 
				spaceBetween: 30,
				slidesPerGroup: 1
			},
			768: {
				slidesPerView: 2, 
				spaceBetween: 30,
				slidesPerGroup: 2
			},
			1024: {
				slidesPerView: 3, 
				spaceBetween: 40, 
			},
		},
		
	});

});