(function($){
    jQuery(document).ready(function(){

        //get login page into index page
        jQuery('.login').click(function(){
            $.ajax({
                'url' : 'login.php',
                'success' : function (output){
                    jQuery('.box').html(output);
                },
                'type' : 'POST',
                'data' : {
                    'login' : 'abkorim'
                }
             });
            return false;
        });
        
        //get registration into index page
        jQuery('.registration').click(function(){
            $.ajax({
                'url' : 'register.php',
                'success' : function(output){
                    jQuery('.box').html(output);
                },
                'type' : 'POST',
                'data' : {
                    'register' : 'ace',
                }
            });
            return false;
        });

        //get databese page into index page
        jQuery('.create-database').click(function(){
            $.ajax({
                'url'     :   'db.php',
                'success' :   function(output){
                    jQuery('p').html(output);
                },
                'type'    :    'POST',
                'data'    :    {
                    'createdb'   :   'ass',
                },
            });
            return false;
        });


        jQuery('.submitregister').submit(function(){
            var fname = jQuery('input[name=fname]').val();
            var email = jQuery('input[name=email]').val();
            var password = jQuery('input[name=password]').val();
            $.ajax({
                'url' : 'register.php',
                'type': 'POST',
                'success': function(){
                    jQuery('.registerinput').val('');
                },
            });

            $.ajax({
                'url' : 'config.php',
                'type': 'POST',
                'success': function(output){
                    jQuery('p').html(output);
                },
                'data' : {
                    'registerace' : 'ace',
                    'fname' : fname,
                    'email' : email,
                    'password' : password,
                },
            });

            return false;
        });

        jQuery('.submitlogin').submit(function(){
            var email = jQuery('input[name=email]').val();
            var password = jQuery('input[name=password]').val();
            $.ajax({
                'url' : 'login.php',
                'type': 'POST',
                'success': function(){
                    jQuery('.registerinput').val('');
                },
            });

            $.ajax({
                'url' : 'config.php',
                'type': 'POST',
                'success': function(output){
                    jQuery('body').html(output);
                },
                'data' : {
                    'loginace' : 'ace',
                    'email' : email,
                    'password' : password,
                },
            });

            return false;
        });


        jQuery('.sendform').submit(function(){
            var message = jQuery('input[name=message]').val();
            $.ajax({
                'url' : 'config.php',
                'type' : 'POST',
                'data'  : {
                    'havesendform' : 'have',
                    'message' : message,
                },
                'success' : function(){
                    jQuery('input[name=message]').val('');
                    setTimeout(function(){
                        jQuery(".message-fild").scrollTop(jQuery(".message-fild")[0].scrollHeight);
                    },60)
                }
            });


            return false;
        });

        setInterval(function(){

            $.ajax({
                url : 'config.php',
                type : 'POST',
                data : {
                    uploadhobe : '',
                },
                success : function(output){
                    jQuery('.message-fild').html(output);
                }
            });

        },50)



       jQuery('.create-database').click(function(){
            setTimeout(function(){
                location.reload();
            }, 5000);
       });
       

        

    });
}(jQuery));