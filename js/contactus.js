function Messageme(){

      var user4 = document.getElementById('user4').value;
      var email4=document.getElementById('email4').value;
      var mobile4=document.getElementById('mobile4').value;
      var mess1=document.getElementById('mess1').value;

      //user
      if(user4 == ""){
        document.getElementById('username4').innerHTML =" ** Please fill the username field";
        return false;
      }
      if((user4.length <= 2) || (user4.length > 20)) {
        document.getElementById('username4').innerHTML =" ** Username lenght must be between 2 and 20";
        return false; 
      }
            if(!isNaN(user4)){
        document.getElementById('username4').innerHTML =" ** only characters are allowed";
        return false;
      }
      
      // email
      if(email4 == ""){
        document.getElementById('emailid4').innerHTML =" ** Please fill the email id field";
        return false;
      }
      if(email4.indexOf('@') <= 0 ){
        document.getElementById('emailid4').innerHTML =" ** @ Invalid Position";
        return false;
      }

      if((email4.charAt(email4.length-4)!='.') && (email4.charAt(email4.length-3)!='.')){
        document.getElementById('emailid4').innerHTML =" ** . Invalid Position";
        return false;
      }
      // mobile
      if(mobile4 == ""){
        document.getElementById('mob4').innerHTML =" ** Please fill the Mobile Number";
        return false;
      }
      if(mobile4.length != 10) {
        document.getElementById('mob4').innerHTML =" ** Mobile Number must be 10 digit number";
        return false; 
      }
            if(isNaN(mobile4)){
        document.getElementById('mob4').innerHTML =" ** only digits are allowed";
        return false;
      }
      //message
      if(mess1 == ""){
        document.getElementById('message1').innerHTML =" ** Please fill the Message field";
        return false;
      }
      else{
      alert("Message Registered Successfully!!");
      }
}