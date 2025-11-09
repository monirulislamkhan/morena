var SITE_PATH   = window.location.origin;
$(".contactform").submit(function(e) {
    var valData = 1;
	e.preventDefault();
	$(".addenqsubmit").attr('disabled', true);
	$.ajax({
		url: "/properties/SubmitPopupForm/"+valData+"/",
		type: 'POST',
		contentType: false,
		processData: false,
		data: new FormData(this),
		dataType: "json",
		success: function(results) {
			if (results.class == "invalid_name") {
				$(".invalid_name").show();
				$(".invalid_email").hide();
				$(".invalid_phone").hide();
				$(".addenqsubmit").attr('disabled', false);
			} else if (results.class == "invalid_email") {
				$(".invalid_name").hide();
				$(".invalid_email").show();
				$(".invalid_phone").hide();
				$(".addenqsubmit").attr('disabled', false);
			} else if (results.class == "invalid_phone") {
				$(".invalid_name").hide();
				$(".invalid_email").hide();
				$(".invalid_phone").show();
				$(".addenqsubmit").attr('disabled', false);
			} else if (results.class == "blank_comment") {
				$(".invalid_name").hide();
				$(".invalid_email").hide();
				$(".invalid_phone").hide();
				$(".fail").show();
				$(".addenqsubmit").attr('disabled', false);
			} else if (results.class == "fail") {
				$(".invalid_name").hide();
				$(".invalid_email").hide();
				$(".invalid_phone").hide();
				$(".fail").show();
				$(".addenqsubmit").attr('disabled', false);
			} else {
			    window.location.href = SITE_PATH+'/thank-you/';
			
			}
		},
		error: function() {
			alert("Network Error, Please try again.");
			$(".addenqsubmit").attr('disabled', false);
		}
	});
});