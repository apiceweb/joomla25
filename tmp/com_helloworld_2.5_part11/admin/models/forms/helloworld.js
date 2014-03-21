window.addEvent('domready', function() {
	document.formvalidator.setHandler('greeting', //deve contenere il nome della classe dell'xml dopo validating
		function (value) {
			regex=/^[^0-9]+$/; //ritorna regex
			return regex.test(value);
	});
});

