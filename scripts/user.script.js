var paramsChat = 'location=0,status=0,scrollbars=0,width=430,height=500';
var paramsSkype = 'location=0,status=0,scrollbars=0,width=450,height=350';
  
(function($) {
  
  // Popup Plugin
  $.fn.popup = function(params, href) {
		href = (typeof href == 'undefined') ? $(this).attr('href') : href;
		function clickHandler(e) {
			if (e.ctrlKey || e.shiftKey || e.metaKey)
				return;
			var w = window.open(href, '_blank', params);
			if (w && !w.closed) {
				w.focus();
				e.preventDefault();
			}
		}
		this
			.bind('click', clickHandler);
		return this;
	}

	var sharebarHandler = function() {
		ventana = $(window).width();
		// co es el tamanio de el espacio a cada lado del centro y se le resta 83 por el tamanio del sharebar
		// 83 es el tamanio de Share bar y 960 es el tamanio de #main
		co = parseInt((ventana-960)/2) - 91;
		// Posicionamos el Sharebar
		$('#sharebar').css('left', co);
	}

	Drupal.behaviors.qelluchaska = {
    attach: function (context) {
      //Tour prices tables
      $.ajax({
        url: "/sites/all/themes/qelluchaska/get.php",
        type:"GET",
        success:  function(cambio){
          $(".fprice", context).each(function(){
            $(this).css("font-size","11px");
            price=0;
            price=parseInt($(this).text());
            // Opera y reemplaza precios
            $(this).text("USD "+price).next("td").text("S/."+parseInt(price*cambio)).css("font-size","11px"); 
          });
        }
      })	

      // Popup
      $('.live-chat', context).popup(paramsChat);
      $('.live-skype', context).popup(paramsSkype);


      // Hide Blocks
      $('#welcome .hide', context).click(function() {
        $('#welcome', context).hide('slow');
        return false;
      }) ;

      $('#sharebar-links .hide', context).click(function() {
        $('#sharebar-links', context).hide('slow');
        $('#sharebar-show', context).show('slow');
        return false;
      }) ;

      $('#sharebar-show .hide', context).click(function() {
        $('#sharebar-show', context).hide('slow');
        $('#sharebar-links', context).show('slow');
        return false;
      }) ;

      sharebarHandler();
      
      // WhatsApp.
      $('#wap', context).click(function () {
        bu = $(this, context);
        inHT = '<div id="wac"><label>' + 
          Drupal.t('CellPhone Number') +
          ':</label> <input type="number" name="waid" id="waid" size="10" placeholder="' +
          Drupal.t('Only numbers') + 
          '" />';
        inHT += '<label>'+ Drupal.t('Message') +':</label> <input type="text" name="wamsg" id="wamsg" size="15" /></div>';
        but = $('<button id="wasend"></button>')
        .click(function () {
          $.ajax({
            url: "/sites/all/themes/qelluchaska/wa/wa.php",
            type: "GET",
            data: { num: $('#waid').val(), msg: $('#wamsg').val() },
            success: function() {
              $('#wac').html('<p>'+ Drupal.t('Message sent') +'</p>');
              $('#wasend').remove();
            } 
          })
        })
        .text(Drupal.t('Chat now!'));
        bu.parent().append($(inHT));
        $('#wac').parent().append(but);
        bu.remove();
        return false;
      });
    }
  }

	$(window).resize(function() {
    sharebarHandler();
  });

})(jQuery); 
