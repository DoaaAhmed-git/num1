
function Notification (){
    
    this.msgTitle = function(Title){
        $(".window-notification").html(''); // make the window-notification html 
         var x = '<div class="window-notification">\
                    <div class="msg-title"><h5>'+Title+'</h5></div>\
                    <div class="msg-body"></div>\
                  </div>';
         $("body").prepend(x);
         
    };
    
    this.msg = function(data){
        this.msgTitle(data["title"]);
        $(".msg-body").html('<h3>'+data['msg']+'</h3>');
        this.removeMsg(3000);
    };
    
    this.confMsg = function(data){
        confMsgTmpData = data;
        this.msgTitle(data['title']);
        $(".msg-body").html('<h3>تأكيد العملية ؟</h3>\
                    <button class="subMitBtn" >نعم</button><button class="cancelBtn">لا</button>\
            ');
        
        $(".window-notification .subMitBtn").click(function(){
            $(".window-notification").remove();
            validate.startProcess(confMsgTmpData);
            
        });
        
        $(".window-notification .cancelBtn").click(function(){
            $(".window-notification").remove();
        });
    };
    
    this.removeMsg = function(timer){
        setTimeout(function(){
            $(".window-notification").remove();
        },timer);
    };
    
    this.tmpWindowNotif = function(data){
        $(".TmpalertNotifWindow").remove();
        var x = '<div class="TmpalertNotifWindow" >\
            <div class="alertNotifWindow-header">\
                <h4>'+data['title']+'</h4>\
            </div>\
            <div class="alertNotifWindow-body">\
                <h4>'+data['msg']+'</h4>\
            </div>';
        $("body").append(x);
        this.tmpWindowNotifHide();
    };
    
    this.tmpWindowNotifHide = function(){
        setTimeout(function(){
            $(".TmpalertNotifWindow").css({
                marginRight:"-100%",
            });
            //$(".TmpalertNotifWindow").remove();
        },3000);
    };
}
notif = new  Notification();
//notif.msg({tmpClass:"loginClass",title:"تسجيل دخول",msg:"فشلت العلية"});