/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
//


//jquery validation. 
$(function(){
    $("form[name='registerForm']").validate({
        rules:{
            password:{
                required: true,
                minlength: 8
            },
            email:{
                required: true,
                email: true
            },
            userName:{
                required: true,
                minlength: 2
            }
            
        },
        messages: {
            email: "ange en giltig epost",
            password: "Minst 5 tecken krävs",
            userName: "Ditt namn behöver fler än 1 tecken"
        },
        submitHandler: function(form){
            form.submit();
        }
    });
});