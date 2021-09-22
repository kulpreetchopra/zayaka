function registration(){

      var rname1 = document.getElementById('rname1').value;
      var remail1=document.getElementById('remail1').value;
      var rmobile1=document.getElementById('rmobile1').value;
      var radd=document.getElementById('radd').value;
      var male=document.getElementById('gen1').value;
      var female=document.getElementById('gen2').value;
      var username=document.getElementById('username').value;
      var confusername=document.getElementById('confusername').value;
      var password=document.getElementById('password').value;
      var confpassword=document.getElementById('confpassword').value;
      var interest=document.getElementById('interest').value;

      //name
      if(rname1 == ""){
        document.getElementById('srname1').innerHTML =" ** Please fill the Name field";
        return false;
      }
      if((rname1.length <= 2) || (rname1.length > 20)) {
        document.getElementById('srname1').innerHTML =" ** Name lenght must be between 2 and 20";
        return false; 
      }
            if(!isNaN(rname1)){
        document.getElementById('srname1').innerHTML =" ** only characters are allowed";
        return false;
      }
      // email
      if(remail1 == ""){
        document.getElementById('sremail1').innerHTML =" ** Please fill the email id field";
        return false;
      }
      if(remail1.indexOf('@') <= 0 ){
        document.getElementById('sremail1').innerHTML =" ** @ Invalid Position";
        return false;
      }

      if((remail1.charAt(remail1.length-4)!='.') && (remail1.charAt(remail1.length-3)!='.')){
        document.getElementById('sremail1').innerHTML =" ** . Invalid Position";
        return false;
      }
      // mobile
      if(rmobile1 == ""){
        document.getElementById('srmobile1').innerHTML =" ** Please fill the Mobile Number";
        return false;
      }
      if(rmobile1.length != 10) {
        document.getElementById('srmobile1').innerHTML =" ** Mobile Number must be 10 digit number";
        return false; 
      }
            if(isNaN(rmobile1)){
        document.getElementById('srmobile1').innerHTML =" ** only digits are allowed";
        return false;
      }
      //address
      if(radd == ""){
        document.getElementById('sradd').innerHTML =" ** Please fill the address field";
        return false;
      }
      if((radd.length <= 8) || (radd.length > 150)) {
        document.getElementById('sradd').innerHTML =" ** Address lenght must be between 8 and 150";
        return false; 
      }
      //gender
      if(validsex(male,female)){
        
      }
      if(username == ""){
        document.getElementById('susername').innerHTML =" ** Please fill the username field";
        return false;
      }
      if((username.length <= 2) || (username.length > 30)) {
        document.getElementById('susername').innerHTML =" ** Username lenght must be between 2 and 20";
        return false; 
      }
            if(!isNaN(username)){
        document.getElementById('susername').innerHTML =" ** only characters are allowed";
        return false;
      }
      // conf username
      if(confusername == ""){
        document.getElementById('sconfusername').innerHTML =" ** Please fill the confirm username field";
        return false;
      }
      if(username!=confusername){
        document.getElementById('sconfusername').innerHTML =" ** Entered username does not match";
        return false;
      }
      // password
      if(password == ""){
        document.getElementById('spassword').innerHTML =" ** Please fill the password field";
        return false;
      }
      if((password.length <= 4) || (password.length > 9)) {
        document.getElementById('spassword').innerHTML =" ** Password lenght must be between 4 and 9";
        return false; 
      }
            if(!isNaN(password)){
        document.getElementById('spassword').innerHTML =" ** only characters are allowed";
        return false;
      }
      // password confirm
      if(confpassword == ""){
        document.getElementById('sconfpassword').innerHTML =" ** Please fill the confirmpassword field";
        return false;
      }
      if(password!=confpassword){
        document.getElementById('sconfpassword').innerHTML =" **Entered Password does not match";
        return false;
      }
      //occupation
      if(interest == "-1"){
        document.getElementById('sinterest').innerHTML =" ** Please choose the interest feild ";
        return false;
      }
      
      else{
      alert("Registered Successfully!!");
      }

    
    
    }

  function validsex(male,female){
  y=0;
  if(male.checked){
    y++;
  }
  else if(female.checked)
  {
    y++;
  }
   else if(y==0)
  {
    document.getElementById('gender').innerHTML =" ** Please choose the Gender field";
  }
  else{
    alert("Registered Successfully");
    }

}