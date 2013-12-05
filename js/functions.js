// JavaScript Document

 $(document).ready(function(){
            $(".SignupForm").formToWizard({ submitButton: 'SaveAccount' })
        });
		
//<![CDATA[
	//preloader
		$(window).load(function() {
			$('#status').fadeOut(); 
			$('#preloader').delay(350).fadeOut('slow'); 
			$('body').delay(350).css({'overflow':'visible'});
		})
	//]]>
	//send text drop down
     bootstrap_alert = function() {}
    bootstrap_alert.warning = function(message) {
            $('#alert_placeholder').html('<div class="alert alert-info"><a class="close" data-dismiss="alert">×</a><span>'+message+'</span></div>')
        }
$('#clickme').on('click', function() {
            bootstrap_alert.warning('<input type="text" name="phone"/>: Enter Number <br/> <input type="submit" value="Send Text" class="btn btn-large"/> ');
});

!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="https://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");
//tweens for animation
	$(document).ready(function() {
			var controller = $.superscrollorama();
			// individual element tween examples
			controller.addTween('#fade-it', TweenMax.from( $('#fade-it'), .5, {css:{opacity: 0}}));
			controller.addTween('#fly-it', TweenMax.from( $('#fly-it'), .25, {css:{right:'1000px'}, ease:Quad.easeInOut}));
			controller.addTween('#spin-it', TweenMax.from( $('#spin-it'), .25, {css:{opacity:0, rotation: 720}, ease:Quad.easeOut}));
			controller.addTween('#scale-it', TweenMax.fromTo( $('#scale-it'), .25, {css:{opacity:0, fontSize:'20px'}, immediateRender:true, ease:Quad.easeInOut}, {css:{opacity:1, fontSize:'240px'}, ease:Quad.easeInOut}));
			controller.addTween('#smush-it', TweenMax.fromTo( $('#smush-it'), .25, {css:{opacity:0, 'letter-spacing':'30px'}, immediateRender:true, ease:Quad.easeInOut}, {css:{opacity:1, 'letter-spacing':'-10px'}, ease:Quad.easeInOut}), 0, 100); // 100 px offset for better timing
		});
		//tinymce
		tinymce.init({
    selector: "textarea#elm1",
    theme: "modern",
    
    height: 300,
	paste_data_images: true,
	paste_as_text: true,
	  plugins: "save",
    toolbar: "save",
    save_enablewhendirty: true,
    plugins: [
         "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
         "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
         "save table contextmenu directionality emoticons template paste textcolor"
   ],
   content_css: "css/content.css",
   toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | l      ink image | print preview media fullpage | forecolor backcolor emoticons", 
   style_formats: [
        {title: 'Bold text', inline: 'b'},
        {title: 'Red text', inline: 'span', styles: {color: '#ff0000'}},
        {title: 'Red header', block: 'h1', styles: {color: '#ff0000'}},
        {title: 'Example 1', inline: 'span', classes: 'example1'},
        {title: 'Example 2', inline: 'span', classes: 'example2'},
        {title: 'Table styles'},
        {title: 'Table row 1', selector: 'tr', classes: 'tablerow1'}
    ]
 });
 
 