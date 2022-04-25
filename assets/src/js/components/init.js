import $ from "jquery";
import AOS from "aos";
window.jQuery = $;
window.$ = $;


// Init
(function () {

	// Scoll Animation Lib
	AOS.init({
		duration: 950,
	});

	// remove empty content
	let item = $(".main").find("div[itemprop=articleBody]");
	if (item.children().length == 0) {
		item.parent().parent().parent().parent().remove();
	}

	//Preloader
	let preloaderFadeOutTime = 800;
	function hidePreloader() {
		var preloader = $(".spinner-wrapper");
		preloader.delay(500).fadeOut(preloaderFadeOutTime);
	}
	hidePreloader();

	// Scroll to Top
	let topBtn = document.querySelector(".top-btn");
	topBtn.onclick = () => window.scrollTo({ top: 0, behavior: "smooth" });
});
