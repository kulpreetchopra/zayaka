function order(){

      var name = document.getElementById('name').value;
      var email=document.getElementById('email').value;
      var mobile=document.getElementById('mobile').value;
      var add=document.getElementById('add').value;
      var oname = document.getElementById('oname').value;
      var onumber=document.getElementById('onumber').value;
      var oqty=document.getElementById('oqty').value;
      var oprice=document.getElementById('oprice').value;
      
      

      //user
      if(name == ""){
        document.getElementById('sname').innerHTML =" ** Please fill the username field";
        return false;
      }
      if((name.length <= 2) || (name.length > 20)) {
        document.getElementById('sname').innerHTML =" ** Username lenght must be between 2 and 20";
        return false; 
      }
            if(!isNaN(name)){
        document.getElementById('sname').innerHTML =" ** only characters are allowed";
        return false;
      }
      // email
      if(email == ""){
        document.getElementById('semail').innerHTML =" ** Please fill the email id field";
        return false;
      }
      if(email.indexOf('@') <= 0 ){
        document.getElementById('semail').innerHTML =" ** @ Invalid Position";
        return false;
      }

      if((email.charAt(email.length-4)!='.') && (email.charAt(email.length-3)!='.')){
        document.getElementById('semail').innerHTML =" ** . Invalid Position";
        return false;
      }
      // mobile
      if(mobile == ""){
        document.getElementById('smobile').innerHTML =" ** Please fill the Mobile Number";
        return false;
      }
      if(mobile.length != 10) {
        document.getElementById('smobile').innerHTML =" ** Mobile Number must be 10 digit number";
        return false; 
      }
            if(isNaN(mobile)){
        document.getElementById('smobile').innerHTML =" ** only digits are allowed";
        return false;
      }
      
      //address
      if(add == ""){
        document.getElementById('sadd').innerHTML =" ** Please fill the address field";
        return false;
      }
      if((add.length <= 8) || (add.length > 150)) {
        document.getElementById('sadd').innerHTML =" ** Address lenght must be between 8 and 150";
        return false; 
      }
      
      //order name
      if(oname == ""){
        document.getElementById('soname').innerHTML =" ** Please fill the Order Name field";
        return false;
      }
      // order no
      if(onumber == ""){
        document.getElementById('sonumber').innerHTML =" ** Please fill the Order Number";
        return false;
      }
      if(onumber.length != 4) {
        document.getElementById('sonumber').innerHTML =" ** Order Number must be 4 digit number";
        return false; 
      }
            if(isNaN(onumber)){
        document.getElementById('sonumber').innerHTML =" ** only digits are allowed";
        return false;
      }
      //quantity
      if(oqty == "-1"){
        document.getElementById('soqty').innerHTML =" ** Please choose the quantity feild ";
        return false;
      }
      //price
      if(oprice == ""){
        document.getElementById('soprice').innerHTML =" ** Please fill the Price";
        return false;
      }

      
      else{
      alert("Order Registered Successfully!!");
      }

    
    
    }