// JavaScript Document

	$(function() {
		$( "#selectable" ).selectable({
			stop: function() {
				var result = $( "#select-result" ).empty();
				$( ".ui-selected", this ).each(function() {
					var index = $( "#selectable li" ).index( this );
					var counter = index + 1;
					if( counter == 1){
						result.append("<div class=\"list-detail\"><ul><li class=\"list-header\">Star Starter Pack</li><li>Custom Design</li><li>Full Cross Browser Compatibility</li><li>Maximum of 5 pages</li><li>Basic SEO</li><li>1 form</li><li>1 gallery – max 10 images/ Banner Slider</li><li>Complete in 5 - 7 Working Days</li><li> Industry Standard HTML/CSS3 code</li><li class=\"budget pull-right\">Ksh 15,000/=</li></ul></</div>");
						$("#radio1").prop("checked", true);
						
					}//end
					if( counter == 2){
						result.append("<div class=\"list-detail\"><ul><li class=\"list-header2\">Standard Pack</li><li>Custom Design</li><li>Full Cross Browser Compatibility</li><li>Maximum of 15 pages</li><li>Basic SEO</li><li>4 forms including contact us Form</li><li>1 gallery – max 25 images / Banner Slider</li><li>Complete in 5 - 7 Working Days</li><li> Industry Standard HTML/CSS3 code</li><li>CMS Intergretion Joomla / Wordpress</li><li>Custom Email account [2] based on domain</li><li class=\"budget pull-right\">Ksh 25,000/=</li></ul></</div>");
						$("#radio2").prop("checked", true);
						
						
					}//end
					if( counter == 3){
						result.append("<div class=\"list-detail\"><ul><li class=\"list-header3\">Pro Biz Pack</li><li>Custom Design</li><li>Full Cross Browser Compatibility</li><li>Maximum of 15 pages</li><li>Basic SEO</li><li>4 forms including contact us Form</li><li>1 gallery – max 25 images / Banner Slider</li><li>Complete in 10 - 25 Working Days</li><li> Industry Standard HTML/CSS3 code</li><li> CMS Intergration Joomla/Wordpress </li><li> Ecommerce Intergration prestashop( payPal checkout option)</li><li> Includes Domain & Hosting for 1 year</li><li>Custom Email account [5] based on domain</li><li class=\"budget pull-right\">Ksh 35,000/=</li></ul></</div>");
						$("#radio3").prop("checked", true);
						
					}//end
					if( counter == 4){
						result.append( "<div class=\"list-detail\"><ul><li class=\"list-header3\">Golden Star Pack</li><li>Custom Design</li><li>Full Cross Browser Compatibility</li><li>Maximum of 15 pages</li><li>Basic SEO</li><li>4 forms including contact us Form</li><li>1 gallery – max 25 images / Banner Slider</li><li>Complete in 10 - 30 Working Days</li><li> Industry Standard HTML/CSS3 code</li><li> CMS Intergration Joomla/Wordpress </li><li> Ecommerce(virtuematt/Prestashop) (payPal checkout option)</li><li> Includes Domain & Hosting for 1 year</li><li>Custom Email account [5] based on domain</li><li class=\"budget pull-right\">Ksh 65,000/=</li></ul></</div>");
						$("#radio4").prop("checked", true);
						
					}//end
					if( counter == 5){
						result.append("<div class=\"list-detail\"><ul><li class=\"list-header3\">Pro Biz Pack</li><li>Custom Design</li><li>Full Cross Browser Compatibility</li><li>Maximum of 15 pages</li><li>Basic SEO</li><li>4 forms including contact us Form</li><li>1 gallery – max 25 images / Banner Slider</li><li>Complete in 10 - 30 Working Days</li><li> Industry Standard HTML/CSS3 code</li><li> CMS Intergration Joomla/Wordpress </li><li> Ecommerce(virtuematt/Prestashop) (payPal checkout option)</li><li> Includes Domain & Hosting for 1 year</li><li>Custom Email account [5] based on domain</li><li class=\"budget pull-right\">Ksh 75,000/=</li></ul></</div>");
						
						$("#radio5").prop("checked", true);
					}//end
					if( counter == 6){
						result.append( " #" + "<div class=\"\">yea am trying bana am the last</<div");
						$("#radio6").prop("checked", true);
						
					}//end
				});
			}
		});
	});
