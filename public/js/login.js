$(".icon").click(function(){ 
    let inputPassword = $("input")[1]; 
    inputPassword.type = inputPassword.type == "text" ? "password": "text";
})
