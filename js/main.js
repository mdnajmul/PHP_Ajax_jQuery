$(document).ready(function(){ 
    
    //Check username availability
    $('#username').blur(function(){
        var username = $(this).val();
        
            $.ajax({
                url: "check/check_user.php",
                method: "POST",
                data: {username:username},
                dataType: "text",
                success: function(data){
                    $('#userstatus').html(data);
                }
            });
    });
    
    
    
    //Auto fetch data from database without page refresh
    $('#skill').keyup(function(){
        var skill = $(this).val();
        
        if(skill != ""){
           $.ajax({
                url: "check/check_skill.php",
                method: "POST",
                data: {skill:skill},
                dataType: "text",
                success: function(data){
                    $('#skillstatus').fadeIn();
                    $('#skillstatus').html(data);
                }
            }); 
        }
    });
    //for fadeOut (when click data is selected inside input feild)
    $(document).on('click', 'li', function(){
        $('#skill').val($(this).text());
        $('#skillstatus').fadeOut();
    });
    
    
    
    
    //Show/Hide Password Option
    $('#showpassword').on('click', function(){
        var pass = $('#password');
        var fieldType = pass.attr('type');
        
        if(fieldType == 'password'){
            pass.attr('type', 'text');
            $(this).text("Hide Password");
        } else{
            pass.attr('type', 'password');
            $(this).text("Show Password");
        }
        return false;
    });
    
    
    
    
    //Insert Data without page refresh
    $('#autosubmit').click(function(){
        var text = $('#content').val();
        
        if($.trim(text) != ""){
           $.ajax({
                url: "check/check_insert.php",
                method: "POST",
                data: {cont:text},
                dataType: "text",
                success: function(data){
                    $('#content').val("");
                }
            });
            return false;
        }
    });
    //Show Data from Database without page refresh
    setInterval(function(){
        $('#autostatus').load('check/check_select_or_show.php').fadeIn('slow');
    },1000);
    
    
    
    
    
    //Live Data Search & show/fetch data without page reload
    $('#livedata').keyup(function(){
        var live_data = $(this).val();
        
        if(live_data != ""){
           $.ajax({
                url: "check/check_livedata.php",
                method: "POST",
                data: {search_data:live_data},
                dataType: "text",
                success: function(data){
                    $('#livesearchdata').html(data);
                }
            }); 
        } else{
            $('#livesearchdata').html("");
        }
    });
    
    
    
    
    
    //Auto Save & Update Data Inside Database
    function autoSave(){
        //hold data from content feild
        var content = $('#content').val();
        //hold content id
        var contentid = $('#contentid').val();
        
        if(content != ""){
           $.ajax({
                    url: "check/check_autosave.php",
                    method: "POST",
                    data: {content:content,contentid:contentid},
                    dataType: "text",
                    success: function(data){
                        if(data != ''){
                           $('#contentid').val(data); 
                        }
                        //show message after save content
                        $('#contentsave').text("Content Save as Draft !");
                        //delete message after 2000 milisecond
                        setInterval(function(){
                            $('#contentsave').text("");
                        }, 2000);
                    }
                }); 
         }
    }
    //auto update data every 10000 milisecond on last contentid
    setInterval(function(){
        autoSave()
    }, 10000);
    
    
});  