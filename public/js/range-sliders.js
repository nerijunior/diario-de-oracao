(function($) {
	
	"use strict";
	
	//Price Range Slider Two
	if($('.range-slider-two').length){

		var priceRange2 = document.getElementById('range-slider-two');

		noUiSlider.create(priceRange2, {
			start: [ 2000, 6000 ],
			limit: 10000,
			behaviour: 'drag',
			connect: true,
			range: {
				'min': 10,
				'max': 10000
			}
		});

		var limitFieldMin = document.getElementById('minimum-value-price');
		var limitFieldMax = document.getElementById('maximum-value-price');
		
		priceRange2.noUiSlider.on('update', function( values, handle ){
			(handle ? limitFieldMax : limitFieldMin).value = values[handle];
		});
	}
	
	//Area Range Slider
	if($('.range-slider-three').length){

		var areaRange = document.getElementById('range-slider-three');

		noUiSlider.create(areaRange, {
			start: [ 400, 2500 ],
			limit: 4000,
			behaviour: 'drag',
			connect: true,
			range: {
				'min': 10,
				'max': 4000
			}
		});

		var limitFieldMin2 = document.getElementById('min-area-value');
		var limitFieldMax2 = document.getElementById('max-area-value');
		
		areaRange.noUiSlider.on('update', function( values, handle ){
			(handle ? limitFieldMin2 : limitFieldMax2).value = values[handle];
		});
	}
	

})(window.jQuery);