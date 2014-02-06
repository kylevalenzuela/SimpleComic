var blinkWave = function(){
    $('nav .header-wrap span').toggle();
};

$(document).ready(function() {
	setInterval(blinkWave, 1000);
});