$(document).ready(function(){
	$(".hili button").click(function(){
		$(".down-slide").stop().slideToggle();
	});
	$(".edit-user").css({
		height: $(document).height()
	});
	$(window).on("resize", function(){
		$(".round").css({
			height: $(".round").width(),
		});
		$("body .register-index").css({
			height: $(window).height()
		});
		$(".round-div").css({
			marginTop: - $(".round-div").height()/1.6 + 15 + "px"
		});
		$(".edit-user").css({
			height: $(document).height()
		});
		if($(window).width() < 992){
			$(".jqueryedit i").removeClass("fa-arrow-right").addClass("fa-arrow-down");
		}
		else{
			$(".jqueryedit i").removeClass("fa-arrow-down").addClass("fa-arrow-right");
		}
	});
	$(".round").css({
		height: $(".round").width()
	});
	$(".round-div").css({
		marginTop: - $(".round-div").height()/1.6 + 15 + "px"
	});
	$("body .register-index").css({
		height: $(window).height()
	});
	$(".submit").click(function(){
		if($(".loginform .password, .loginform .username").attr("required") != "required"){
			$(".loginform input").attr("required", "required");
		}
	})

	if($(window).width() < 992){
		$(".jqueryedit i").removeClass("fa-arrow-right").addClass("fa-arrow-down");
	}
	else{
		$(".jqueryedit i").removeClass("fa-arrow-down").addClass("fa-arrow-right");
	}

	$(".table_info td a").click(function(e){
		e.preventDefault();
		$(".edit-user").css({display: "block"}).stop().animate({
			opacity: 1
		}, 300);
		$(".edit-user").css({
			height: $(document).height()
		});
	});
	$(".edit-box>span").click(function(){
		$(".edit-user").css({display: "none"}).stop().animate({
			opacity: 0
		}, 300);
	})
});