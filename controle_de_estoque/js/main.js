(function () {
	// Obtendo a modal
	var modal = document.getElementById('myModal');

	document.getElementsByClassName('form')[0].addEventListener("submit", function(event){
		event.preventDefault();
		modal.style.display = "block";
	})

	// Obtendo a <span> elemento que fecha a modal
	var span = document.getElementsByClassName("close")[0];

	// Quando o usuário clica em <span> (x), fecha a modal
	span.onclick = function() {
	    modal.style.display = "none";
	}

	// Quando o usuário clica em qualquer lugar fora do modal, fecha a modal
	window.onclick = function(event) {
	    if (event.target == modal) {
	        modal.style.display = "none";
	    }
	}   
})();