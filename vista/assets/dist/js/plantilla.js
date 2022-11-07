$(function() {
	validateLoginUsuarioBS4();
})
function fncSweetAlert(type, text, url){
	switch (type) {
		/*===ERROR===*/
		case "error":
		if(url == null){
		  	Swal.fire({
	            icon: 'error',
	            title: 'Error',
	            text: text
	        }) 
	    }else{
	    	Swal.fire({
	            icon: 'error',
	            title: 'Error',
	            text: text
	        }).then((result) => {
    	 		if (result.value) { 
    	 			window.open(url, "_top");
    	 		}
	        }) 
	    }
        break;
        /*===CORRECTO===*/
		case "success":
		if(url == null){
		  	Swal.fire({
	            icon: 'success',
	            title: 'Success',
	            text: text,
				allowOutsideClick: false,
    			allowEscapeKey: false
	        }) 
	    }else{
	    	Swal.fire({
	            icon: 'success',
	            title: 'Confirmación',
	            text: text,
				allowOutsideClick: false,
    			allowEscapeKey: false
	        }).then((result) => {
    	 		if (result.value) { 
    	 			window.open(url, "_top");
    	 		}
	        }) 
	    }
        break;
        /*===PRELOADING===*/
		case "loading":
		  Swal.fire({
            allowOutsideClick: false,
            icon: 'info',
            text:text
          })
          Swal.showLoading()
        break;  
        /*===CERRAR ALERTA===*/
		case "close":
		 	Swal.close()
		break;
	}
}

function validateLoginUsuarioBS4(){
	(function() {
	  'use strict';
	  window.addEventListener('load', function() {
		var forms = document.getElementsByClassName('needs-validation-login');
		var validation = Array.prototype.filter.call(forms, function(form) {
		  form.addEventListener('submit', function(event) {
			if (form.checkValidity() === false) {
			  event.preventDefault();
			  event.stopPropagation();
			}
			form.classList.add('was-validated');					 
		  }, false);
		});
	  }, false);
	})();
}