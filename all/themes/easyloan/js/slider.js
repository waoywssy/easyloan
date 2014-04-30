(function ($, Drupal, window, document, undefined) {


// To understand behaviors, see https://drupal.org/node/756722#behaviors
Drupal.behaviors.slider = {
  attach: function(context, settings) {
  		$('div.view-content li:not(.ui-slide01)').remove();
  		$('div.view-content ul').addClass('bjqs');
  		$('div.view-content li').each(function(){
  			//alert($(this).find('img').attr('src'));
  			$(this).css('background-image', 'url(' + $(this).find('img').attr('src') + ')');
  			$(this).css('background-position', '50% 50%');
  			$(this).find('img').remove();
  		});
		$('div.view-content').bjqs({
            height      : 356,
            width       : 1351,
            responsive  : true,
            showcontrols: false,
            usecaptions : false,
        });
        $('.bjqs-markers')
        	.css('margin-top', -100)
        	.css('padding', 3)
        	.css('z-index', 999);
  }
};


})(jQuery, Drupal, this, this.document);
