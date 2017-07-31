$(function(){
	$('[data-toggle="tooltip"]').tooltip();
	$('[data-toggle="popover"]').popover();

	var checkBoxes = $('tbody .contol-checkbox');
	checkBoxes.change(function () {
	    $('.btn-control').prop('disabled', checkBoxes.filter(':checked').length < 1);
	    $(this).closest('tr').toggleClass("check",this.checked);
	    $('.sidebar').toggleClass("active",checkBoxes.filter(':checked').length > 0);
	    $(".wrapmenu").toggleClass("hidden-xs-up",checkBoxes.filter(':checked').length > 0);
	    $("#ad-chose").toggleClass("hidden-xs-up",checkBoxes.filter(':checked').length < 1);
	});

	checkBoxes.change();

	$(".sidebar-item").click(function(){
		$(".sidebar-content").animate({width:'toggle'},400);
		$(".preloader").delay(1500).fadeOut(200);
		/*$.ajax({
			url: "demo_test.txt", 
			success: function(result){
            $("#div1").html(result);
        }});
        */
	})

	$("#more").hover(function(){
		$(".dropdown-main .dropdown-menu").stop().animate({width:'100%'},300).promise().done(
	    function(){
	        $(".card-sub").fadeIn();
	        $(".card-more").addClass("open");
	        $(".card-des").fadeIn();
	    	})
	});

	var p_default = $(".card-des").find('p').html();
	
	$(".dropdown-main").find(".card").find("a").hover(function(){
		var text = $(this).data('des');
		$(".card-des").find('p').html(text);
	}, function(){
		$(".card-des").find('p').html(p_default);
	});



})
