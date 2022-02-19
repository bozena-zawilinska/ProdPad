(function(a,k,g){a.fn.tinyNav=function(l){var c=a.extend({active:"selected",header:"",indent:"- ",label:""},l);return this.each(function(){g++;var h=a(this),b="tinynav"+g,f=".l_"+b,e=a("<select/>").attr("id",b).addClass("tinynav "+b);if(h.is("ul,ol")){""!==c.header&&e.append(a("<option/>").text(c.header));var d="";h.addClass("l_"+b).find("a").each(function(){d+='<option value="'+a(this).attr("href")+'">';var b;for(b=0;b<a(this).parents("ul, ol").length-1;b++)d+=c.indent;d+=a(this).text()+"</option>"});
e.append(d);c.header||e.find(":eq("+a(f+" li").index(a(f+" li."+c.active))+")").attr("selected",!0);e.change(function(){k.location.href=a(this).val()});a(f).after(e);c.label&&e.before(a("<label/>").attr("for",b).addClass("tinynav_label "+b+"_label").append(c.label))}})}})(jQuery,this,0);

jQuery(document).ready(function($) {
	$('.triggerGDPR').click(function(){
   		$('#gdprModal').fadeIn();
   		$('body').addClass("modalOpen");
   		return false;
   	});

 	$('.btn--remove').click(function(){
   		$('#gdprModal').fadeOut();
   		$('#sharingModal').fadeOut();
   		$('#trialModal').fadeOut();
   		$('body').removeClass("modalOpen");
   		return false;
   	});

   	$('.modal-overlay').click(function(){
   		$('#gdprModal').fadeOut();
   		$('#sharingModal').fadeOut();
   		$('#trialModal').fadeOut();
   		$('body').removeClass("modalOpen");
   		return false;
   	});

   	 $('.input-checkbox label').click(function(){
   		if ($(this).find('input').is(":checked")) {
   			$(this).addClass('checked');
   		} else {
   			$(this).removeClass('checked');
   		}
   	});

   	 $("#enterpriseFeaturesBtn").click(function(){
		$(this).toggleClass("expanded");
		$(".enterprise-features").slideToggle();
		return false;
   	 });

   	
	$('.smooth-scroll').click(function(){
		if ($(this).hasClass("smooth-scroll--fast")) {
			var speedSet = 800;
		} else {
			var speedSet = 1600;
		}
		
		var scrollToHash = $(this).attr("href");
	    $("html, body").animate({ 
	    	scrollTop: $(scrollToHash).offset().top - 75
    	}, speedSet);
	    
	    return false;
	 });


	$(".primary-footer h4").click(function(){
		$(this).next("div").find("ul").slideToggle();
		$(this).toggleClass("active");
		return false;
	});

	$("#menuToggle").click(function(){
		$("body").toggleClass("menu-active");
		return false;
	})		

	if (($("body.home").length > 0) || ($("body.page-template-enterprise").length > 0)) {
		if($(window).scrollTop() > 0) {
	   		$("body").addClass("menu-white");
		} else  {
	   		$("body").removeClass("menu-white");
		}

		$(window).scroll(function(){
			if($(window).scrollTop() > 0) {
		   		$("body").addClass("menu-white");
			} else  {
		   		$("body").removeClass("menu-white");
			}
		});
	} else {
		//console.log("no home page");
	}


	if ($("#mainNav .menu-item-has-children.current_page_item > ul").length > 0) {
		$("#mainNav .menu-item-has-children.current_page_item > ul").tinyNav({
			 // header: 'Navigation', // String: Specify text for "header" and show header instead of the active item
			  indent: 'Features - ', // String: Specify text for indenting sub-items
			  active: 'current'
			  //label: 'Features -' // String: Sets the <label> text for the <select> (if not set, no label will be added) 
		});

		$("#tinynav1").appendTo("#secondaryNav");
		$("#secondaryNav").show();
		$("body").addClass("hasSubNav");
	}
	


	if ($("#mainNav .current-menu-parent > ul").length > 0) {
		$("#mainNav .current-menu-parent > ul").tinyNav({
			 // header: 'Navigation', // String: Specify text for "header" and show header instead of the active item
			  indent: 'Features - ', // String: Specify text for indenting sub-items
			  active: 'current'
			  //label: 'Features -' // String: Sets the <label> text for the <select> (if not set, no label will be added) 
		});
		$("#tinynav1").appendTo("#secondaryNav");
		$("#secondaryNav").show();
		$("body").addClass("hasSubNav");
	}

	$("#tinynav1 option").each(function () {
        if ($(this).val() == location.href) $(this).attr('selected','selected');
    });

	// $(window).resize(function() {
	//     delay(function(){
	//     		checkNav();
	//       //...
	//     }, 500);
	// });

	// $("#secondaryNav .is-active").click(function(){
	// 	$(this).toggleClass("is-open");
	// 	$("#secondaryNav li:not(.is-active)").fadeToggle();
	// 	return false;
	// });

	$(".subscription-plan .plan-details").hide();

	$(".toggleCompare").click(function(){
		if ($("#subscriptionPlans.plans-active").length > 0) {
			$(".toggleCompare").html("See what this plan includes");
			$(this).parent().removeClass("is-active");
			$("#subscriptionPlans").removeClass("plans-active");
			$(".subscription-plan .plan-details").fadeOut();
			$(".comparison-line .note").fadeIn();
		} else {
			$(".toggleCompare").html("Hide comparison");
			$(this).parent().addClass("is-active");
			$("#subscriptionPlans").addClass("plans-active");
			$(".subscription-plan .plan-details").fadeIn();
			$(".comparison-line .note").fadeOut();
		}

		return false;
	});

	$("#togglePricing").click(function(){
		if ($("#subscriptionPlans.monthly-pricing").length > 0) {
			$("#togglePricing .label-monthly").removeClass("is-active");
			$("#togglePricing .label-yearly").addClass("is-active");
			$("#subscriptionPlans").removeClass("monthly-pricing");
			$("#togglePricing button").removeClass("toggle-off");
			$("#togglePricing button").addClass("toggle-on");
			$("#subscriptionPlans .subscription-plan--standard .price__title .h2").html("$99");
			$("#subscriptionPlans .subscription-plan--premium .price__title .h2").html("$299");
			$("#subscriptionPlans .subscription-plan--unlimited .price__title .h2").html("$999");
			$("#subscriptionPlans .price__terms").css("visibility","visible");		

		} else {
			$("#togglePricing .label-monthly").addClass("is-active");
			$("#togglePricing .label-yearly").removeClass("is-active");
			$("#subscriptionPlans").addClass("monthly-pricing");
			$("#togglePricing button").removeClass("toggle-on");
			$("#togglePricing button").addClass("toggle-off");
			$("#subscriptionPlans .subscription-plan--standard .price__title .h2").html("$119");
			$("#subscriptionPlans .subscription-plan--premium .price__title .h2").html("$349");
			$("#subscriptionPlans .subscription-plan--unlimited .price__title .h2").html("$1199");
			$("#subscriptionPlans .price__terms").css("visibility","hidden");		
		}

		return false;
	});

});

jQuery(window).load(function($){
	//On Window Load
});
