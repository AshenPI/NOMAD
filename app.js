var check = ()=>{
    if(document.getElementById("exampleInputPassword1").value == document.getElementById("exampleInputPassword2").value){
       document.getElementById("message").style.color = 'green';
       document.getElementById("message").innerHTML = 'matching'; 
    }else{
        document.getElementById('message').style.color ='red';
        document.getElementById('message').innerHTML='not matching';
    }
}