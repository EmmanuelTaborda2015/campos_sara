$("#campos").validationEngine({
promptPosition : "centerRight", 
scroll: false,
autoHidePrompt: true,
autoHideDelay: 2000
});

$(function() {
	$("#campos").submit(function() {
		$resultado=$("#campos").validationEngine("validate");
		if ($resultado) {
			return true;
		}
		return false;
	});
});

$("#camposRegistrar").validationEngine({
	promptPosition : "centerRight", 
	scroll: false,
	autoHidePrompt: true,
	autoHideDelay: 2000
});

$(function() {
$("#camposRegistrar").submit(function() {
$resultado=$("#camposRegistrar").validationEngine("validate");

if ($resultado) {

return true;
}
return false;
});
});

$(function () {
    $("button").button().click(function (event) { 
        event.preventDefault();
    });
});

$(function() {
	$("#camposModificar").submit(function() {
		$resultado=$("#camposModificar").validationEngine("validate");
		if ($resultado) {
			return true;
		}
		return false;
	});
});

$("#camposModificar").validationEngine({
	promptPosition : "centerRight", 
	scroll: false,
	autoHidePrompt: true,
	autoHideDelay: 2000
});

$('#<?php echo $this->campoSeguro('lista1')?>').width(300);
$('#<?php echo $this->campoSeguro('lista1')?>').select2();
