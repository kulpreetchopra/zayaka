function reservation(){

      var rname = document.getElementById('rname').value;
      var remail=document.getElementById('remail').value;
      var rmobile=document.getElementById('rmobile').value;
      var date = document.getElementById('date').value;
      var time=document.getElementById('time').value;
      var pers=document.getElementById('pers').value;
      
      

      //name
      if(rname == ""){
        document.getElementById('srname').innerHTML =" ** Please fill the Name field";
        return false;
      }
      if((rname.length <= 2) || (rname.length > 20)) {
        document.getElementById('srname').innerHTML =" ** Name lenght must be between 2 and 20";
        return false; 
      }
            if(!isNaN(rname)){
        document.getElementById('srname').innerHTML =" ** only characters are allowed";
        return false;
      }
      // email
      if(remail == ""){
        document.getElementById('sremail').innerHTML =" ** Please fill the email id field";
        return false;
      }
      if(remail.indexOf('@') <= 0 ){
        document.getElementById('sremail').innerHTML =" ** @ Invalid Position";
        return false;
      }

      if((remail.charAt(remail.length-4)!='.') && (remail.charAt(remail.length-3)!='.')){
        document.getElementById('sremail').innerHTML =" ** . Invalid Position";
        return false;
      }
      // mobile
      if(rmobile == ""){
        document.getElementById('srmobile').innerHTML =" ** Please fill the Mobile Number";
        return false;
      }
      if(rmobile.length != 10) {
        document.getElementById('srmobile').innerHTML =" ** Mobile Number must be 10 digit number";
        return false; 
      }
            if(isNaN(rmobile)){
        document.getElementById('srmobile').innerHTML =" ** only digits are allowed";
        return false;
      }
      // res date
      if(date == ""){
        document.getElementById('sdate').innerHTML =" ** Please fill the Date";
        return false;
      }
      //res time
      if(time == "-1"){
        document.getElementById('stime').innerHTML =" ** Please choose the Time feild ";
        return false;
      }
      //persons
      if(pers == "-1"){
        document.getElementById('spers').innerHTML =" ** Please choose the Persons feild ";
        return false;
      }

      
      else{
      alert("Table Registered Successfully!!");
      }

    
    
    }