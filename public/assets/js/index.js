$(function() {
	

	
	/*--- Map ---*/
	$('#vmap2').vectorMap({
		map: 'usa_en',
		showTooltip: true,
		backgroundColor: '#fff',
		color: '#60adff',
		colors: {
			mo: '#9fceff',
			fl: '#60adff',
			or: '#409cff',
			ca: '#005cbf',
			tx: '#005cbf',
			wy: '#005cbf',
			ny: '#007bff'
		},
		hoverColor: '#222',
		enableZoom: false,
		borderWidth: 1,
		borderColor: '#fff',
		hoverOpacity: .85
	});
	/*--- Map closed ---*/
	
});