!function() {
	$("#signup-signin-nav li").click(function(){
		$("#signup-signin-nav li").removeClass("active");
		$(this).addClass("active");

		if($(this).text() === "注册")
		{
			$(".view-signup").removeClass("hide");
			$(".view-signin").addClass("hide");
		}
		else if($(this).text() === "登陆")
		{
			$(".view-signin").removeClass("hide");
			$(".view-signup").addClass("hide");
		}
	});
}();
