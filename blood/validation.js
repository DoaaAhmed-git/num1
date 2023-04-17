function Validation(){
    this.errorColor = "#f7473f";
    this.submitColor = "gray";
    this.conf = function(info){
        
        var limiter = false;
        var t = document.getElementsByClassName(info["className"]);
        for(var i=0; i < t.length ;i++){
            limiter = this.check(t[i]);
            if(!limiter){
                break;
            }
        }
        return limiter;
    };
    
    this.check = function(data){
        /* step 1 : clean the space form text begin */
        for(var i =0; i < data.value.length;i++){
            if( data.value.charCodeAt(i) != 32 ){
                break;
            }
        }
        data.value = data.value.slice(i,data.value.length);
        
        /* step 2 : check text length */
        if(data.value.length > 0){
            return true;
        }else{
            return false;
        }
    };
    
    this.fullName = function(Element){
        var nameMatrix = Element.value.split(' ');
        if(nameMatrix.length > 2){
           this.setColor(Element,true);
        }else{
            this.setColor(Element,false);
        }
        
    };
    
    this.Text = function(Element){
        var pointer = true;
        if(this.check(Element)){
            var len = Element.value.length;
            var marks = "+*/`~@#$%^&()=<>?\\|.";
            for(var i =0; i < len ; i++){
                if(marks.indexOf(Element.value[i]) > 0){
                    pointer = false;
                    break;
                }
            }
        }else{
            pointer = false;
        }
        this.setColor(Element,pointer);  
    };
    
    this.setColor = function(Element,pointer){
        if(pointer){
            Element.style.borderColor = this.submitColor;
        }else{
            Element.style.borderColor = this.errorColor;
        }
    };
    
    this.startProcess = function(data){
        var req = data; // data is contain the command , table , type and other important keys
        $.post("control/control.php",req,function(res){
            if(data['command'] === 'logout'){
                if(res === '1'){
                    location.replace('index.php');
                }
            }else{
                if(data['type'] === 'delete'){
                    $("."+data['table']+data['id']).remove();
                }else if(data['type'] === "acceptSuit"){
                    userApi.acceptLawsuit(data);
                }else if(data['type'] === "openSession"){
                    userApi.openSession(data);
                }
            }
            
        });
    };
}
validate = new Validation();