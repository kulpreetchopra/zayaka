function userlogin(){

      var user=document.getElementById('user').value;
      var pass=document.getElementById('pass').value;

      if(user == ""){
        document.getElementById('suser').innerHTML =" ** Please fill the username field";
        return false;
      }
      if((user.length <= 2) || (user.length > 30)) {
        document.getElementById('suser').innerHTML =" ** Username lenght must be between 2 and 20";
        return false; 
      }
            if(!isNaN(user)){
        document.getElementById('suser').innerHTML =" ** only characters are allowed";
        return false;
      }
      // password
      if(pass == ""){
        document.getElementById('spass').innerHTML =" ** Please fill the password field";
        return false;
      }
      if((pass.length <= 4) || (pass.length > 9)) {
        document.getElementById('spass').innerHTML =" ** Password lenght must be between 4 and 9";
        return false; 
      }
            if(!isNaN(pass)){
        document.getElementById('spass').innerHTML =" ** only characters are allowed";
        return false;
      }
      // password confirm
      // if(confpass == ""){
      //   document.getElementById('sconfpass').innerHTML =" ** Please fill the confirmpassword field";
      //   return false;
      // }
      // if(pass!=confpass){
      //   document.getElementById('sconfpass').innerHTML =" **Entered Password does not match";
      //   return false;
      // }
      else{
      alert("User Login Successfully!!");
      }

    
    
    }
