function myfunc(event){

     let element_mustbe_close=document.getElementsByClassName('open');

     if(element_mustbe_close.length>0)
     {
      element_mustbe_close[0].parentElement.children[0].style.visibility="visible";
      element_mustbe_close[0].classList.remove("open");
     }

      event.target.parentElement.children[1].classList.add("open");
      event.target.parentElement.children[0].style.visibility="hidden";
      event.target.parentElement.classList.remove("close");

}

function handleclose(event){
event.target.parentElement.classList.add("close")
event.target.parentElement.classList.remove("open")
event.target.parentElement.parentElement.children[0].style.visibility="visible";
}

function show(event){


  let element_mustbe_close=document.getElementsByClassName('show');

  if(element_mustbe_close.length>0)
    {
         element_mustbe_close[0].parentElement.children[0].children[1].style.visibility="visible";
         element_mustbe_close[0].classList.remove('show')

    }


event.target.style.visibility="hidden";
event.target.style.height="0";
event.target.parentElement.style.height="auto";
event.target.parentElement.parentElement.children[1].classList.add('show');
}


function SendMail(params) {
     let name=document.getElementById('name').value;
     let email=document.getElementById('email').value;
     let message=document.getElementById('message').value;
     let number=document.getElementById('number').value;
     
   if(name=="" || email=="" || message=="" || number==""){
       alert('You must fill all this fields')
   }
else{
     var params={
          from_name:name,
          email:email,
          message:message,
          number:number,
      }
      emailjs.send("service_qr6759h","template_g42na66",params).then(function(res){
        alert("Your infos has been sent successfully")
      })
}
   

}