$(window).load(function() {
    
    // Tooltip
    $('.tooltipped').tooltip({delay: 50});
    
});

// Modals
$(document).ready(function() {
    $('.modal').modal();
});

// Background interactive
window.onload = function() {
    document.onmousemove = function(e) {
        var x = -(e.clientX/50);
        var y = -(e.clientY/50);
        this.body.style.backgroundPosition = x + 'px ' + y + 'px';
    };
};

// Form
$(document).ready(function(){
	$("#fcontacto").submit(function(event){
		event.preventDefault();

		$.ajax({
			type: 'POST',
			url: 'enviar.php',
			data: $(this).serialize(),
			success: function(data){
				$("#respuesta").slideDown();
				$("#respuesta").html(data);
			}
		});

		return false;
	});
});
