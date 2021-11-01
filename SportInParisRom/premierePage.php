<html>
    <head>
        <link href='Style2A.css' rel='stylesheet' type='text/css' />
        <meta http-equiv="content-type" content="text/html; charset=utf-8">
        <script language="javascript" src="calcul.js"></script>
      
    </head>
    <script>

        function validate(){
  var name = document.getElementById("name").value;
  var subject = document.getElementById("subject").value;
  var phone = document.getElementById("phone").value;
  var email = document.getElementById("email").value;
  var message = document.getElementById("message").value;
  var error_message = document.getElementById("error_message");
  
  error_message.style.padding = "10px";
  
  var text;
  if(name.length < 5){
    text = "Please Enter valid Name";
    error_message.innerHTML = text;
    return false;
  }
  if(subject.length < 10){
    text = "Please Enter Correct Subject";
    error_message.innerHTML = text;
    return false;
  }
  if(isNaN(phone) || phone.length != 10){
    text = "Please Enter valid Phone Number";
    error_message.innerHTML = text;
    return false;
  }
  if(email.indexOf("@") == -1 || email.length < 6){
    text = "Please Enter valid Email";
    error_message.innerHTML = text;
    return false;
  }
  if(message.length <= 140){
    text = "Please Enter More Than 140 Characters";
    error_message.innerHTML = text;
    return false;
  }
  alert("Form Submitted Successfully!");
  return true;
}

function traiterNom(){
    var nom =document.getElementById("nom").value;
    if(nom.length<3 ||nom.length>20){
        document.getElementById("nom").placeholder="votre nom n'est pas valide";
        document.getElementById("nom").style="background-color : FFD2D2";
        document.getElementById("nom").value=null;
    }
    else
    {
        document.getElementById("nom").style="background-color : #D2FFD6";

    }
}

function traiterPrenom(){
    var Prenom =document.getElementById("Prenom").value;
    if(Prenom.length<3 ||Prenom.length>20){
        document.getElementById("Prenom").placeholder="votre Prenom n'est pas valide";
        document.getElementById("Prenom").style="background-color : FFD2D2";
        document.getElementById("Prenom").value=null;
    }
    else
    {
        document.getElementById("Prenom").style="background-color : #D2FFD6";

    }
}

        
   function traiterEmail(){
                var mail = document.getElementById("email").value;         
               
             if(mail.indexOf("@") == -1 || mail.length < 6 || mail.indexOf(".")== -1) {
                document.getElementById("email").placeholder="votre email n'est pas valide";
                document.getElementById("email").style="background-color : FFD2D2";
                document.getElementById("email").value=null;

            }else{
                mail.value.trim();
                document.getElementById("email").style="background-color : #D2FFD6";

            }

   }
            function traiterNumero(){
    var num = document.getElementById("telephone").value;
    if(num.length != 10 || isNaN(num) )
    {
        document.getElementById("telephone").placeholder="votre telephone n'est pas valide";
        document.getElementById("telephone").style="background-color : FFD2D2";
        document.getElementById("telephone").value=null;

    }else{
        document.getElementById("telephone").style="background-color : #D2FFD6";

    }
}

   function traiterAge(){
    var age = document.getElementById("age").value;
    if(age < 18)
    {
        document.getElementById("age").placeholder="Tu es trop jeune pour participer.";
        document.getElementById("age").style="background-color : FFD2D2";
        document.getElementById("age").value=null;

    }else{        document.getElementById("age").style="background-color : #D2FFD6";

    }
}



function validation(){
    var nom = document.getElementById("nom");
    var prenom = document.getElementById("Prenom");  
    var age = document.getElementById("age");
    var mail = document.getElementById("email");
    var genre = document.getElementById("genre");
  

    if(nom.validity.valueMissing || prenom.validity.valueMissing || age.validity.valueMissing || mail.validity.valueMissing || genre.validity.valueMissing)
    {
        alert ("veuillez remplir tout les champs")
    }else{
        document.location.href="Questionnaire.html"
    }
   

}

var myCookies= [];
function  saveCookies(name)
{ 

    myCookies ["_nom"]  = document.getElementById ("nom").value;
	myCookies ["_prenom"]  = document.getElementById ("Prenom").value;
    myCookies ["genre"]=document.getElementById("genre").value;
    myCookies ["age"]=document.getElementById("age").value;
	myCookies ["_telephone"]  = document.getElementById ("telephone").value;
    myCookies ["_email"]  = document.getElementById ("email").value;
    myCookies ["note"]  ="0" ;
    myCookies ["_note"]  ="0" ;
    myCookies ["_note2"]  ="0" ;
    myCookies ["_note3"]  ="0" ;
    myCookies ["_note4"]  ="0" ;
    myCookies ["_note5"]  ="0" ;
    myCookies ["_note6"]  ="0" ;
    myCookies["moyenne"]="0";

    // Démarrer la section réutilisable
    // Démarrer la section réutilisable
    document.cookie  =  "" ;
    var  expiresAttrib  =  new  Date( Date.now() + 60 * 1000 ).toString();
    var  cookieString  =  "" ;
    for  ( var  key  in  myCookies )
    {
        cookieString  =  key+"="+myCookies[key]+";"+expiresAttrib+";" ;
        document.cookie = cookieString ;
    }
}


</script>

    <body>
       
    
<div class="formulaireP1">
<form action="Modification.php" name="Enquete" method="post">
    <p class="obligation">ENQUETE DE SATISFACTION</p>
    <br></br>
    

<div class="form-user">
    
    <fieldset>
      
         <select  NAME="Genre" id="genre" style="font-size: 25px;" required="">
         <option value="choix">Votre civilité</option>
         <option value="Male" selected >Homme</option>    
        <option value="Female">Femme</option>
        
        </select>
    </br>
    <br>
        
        <input type="text" id="nom" placeholder="Votre nom" autofocus="" required="" onblur="traiterNom()" style="font-size : 25px"/>
        <br><br>

        
        <input type="text" id="Prenom" placeholder="Votre prénom " autofocus="" required="" onblur="traiterPrenom()" style="font-size : 25px"><br>
        <span id='missPrenom'></span><br>
        
       
        <input type="text" id="telephone"  placeholder="Votre numero" pattern="06[0-9]{8}" maxlength="10" onblur="traiterNumero()" style="font-size : 25px"><br><br>

       
        <input type="text" id="email" type="email" placeholder="Votre Email" required="" onblur="traiterEmail()" style="font-size : 25px"><br>
        <span id="missemail"></span></br>

        
        <input type="number" id="age" type="number" placeholder="Votre âge" pattern="[0-9]{2}"  required="" onblur="traiterAge()" style="font-size : 25px"/><br>
        <span id=''></span><br>

        
    </br></br>

        <div class="div_input_form">
        <input type="button" name="valid_inscr" id="bouton_envoi1" class="input_form" value="Valider" onclick="validation(), saveCookies()"/>
        </div>

        

    </fieldset>
</div>
</form>
</div>

</body>



           
    

</html>

