//  Initialize Swiper
// let swiper = new Swiper(".mySwiper", {
// 	// //with Pagination
// 	pagination: {
// 		el: ".swiper-pagination",
// 	},
// 	// With Swiping Navigation
// 	navigation: {
// 		nextEl: ".swiper-button-next",
// 		prevEl: ".swiper-button-prev",
// 	},
// 	// With Scrollbar
// 	scrollbar: {
// 		el: ".swiper-scrollbar",
// 		hide: true,
// 	},
// });



//  Initialize Swiper
// let swiper = new Swiper(".mySwiper", {
// 	direction: "vertical",
// 	pagination: {
// 	  el: ".swiper-pagination",
// 	  clickable: true,
// 	  hide: true,
// 	},
//    });

   let swiper = new Swiper(".mySwiper", {
	spaceBetween: 50,
	pagination: {
	  el: ".swiper-pagination",
	  clickable: true,
	},
	navigation: {
		nextEl: ".swiper-button-next",
		prevEl: ".swiper-button-prev",
	},
	scrollbar: {
		el: ".swiper-scrollbar",
		hide: true,
	},
   });
   
   
   let swiper2 = new Swiper(".mySwiper2", {
	direction: "vertical",
	spaceBetween: 50,
	pagination: {
	  el: ".swiper-pagination",
	  clickable: true,
	},
   });
   