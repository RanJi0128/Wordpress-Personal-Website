(function($) {
    "use strict";
        $('.collective_import').click(function(e){
            e.preventDefault();

            var $import_true = confirm('Are you sure to import dummy content ? it will overwrite the existing data');

            if($import_true == false) 
                return;
            
            var data = {
                'action': 'my_action',
                'version' : $( "#version option:selected").val()    
            };
             $('.importing').css("display","block");
           // since 2.8 ajaxurl is always defined in the admin header and points to admin-ajax.php
            $.post(ajaxurl, data, function(response) {
                $('.importing').css("display","none");
                $('.sth_message_success').html( response );
                $('.sth_message_success').css("display","block");
                //alert('Got this from the server: ' + response); <i class="fa fa-spinner fa-3x fa-spin"></i>
            });
    });
})(jQuery);