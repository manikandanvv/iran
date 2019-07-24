$(function(){
 $("#frmm").validate({
 	rules: {
 		regno:'required',
 		Name:'required',
 		
 		
 	},
 	messages:{
 		regno:'Enter valid Input',
        Name:'Enter valid Input',
     
 	}
 	
 });
});