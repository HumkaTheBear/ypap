<?php
include 'lang.php';
if (ISSET($_REQUEST['lang'])) {
    $myLang = $_REQUEST['lang'];
 }
 else{
    $myLang = 'en';
 }
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>YPAP - Giving Dogs a Second Chance</title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">


<style>
 @media screen and (min-width:481px) {
    body{
        font-family: Verdana;
    }
    #intro{
        display: inline-block;
        padding-top: 10px;
        margin: 1% 0% 2% 3%;
        color: #0e5ba9;
        font-size: 20px;
        font-weight: normal;
        line-height: 18px;
        height: 28px;
        width: 70%;
    }
    .requiredSymbol{
        color: red;
        font-size: 100%;
    }
    .fieldNameForm{
        display: block;
        font-size: 100%;
        color: grey;
        margin-left: 2%;
        padding: 1% 0% 0% 0%;
    }
    #intro_text{
        width: 100%;
        margin: 2% 0% 4% 2%;
        font-family: Verdana;
        font-style: italic;
        color: grey;
        font-size: 13px;
    }
    
    #list {
        display: block;
        padding: 5px;
        margin: 8px 0px 8px 28px;
        border-radius: 3px;
        border: 1px solid grey;
        width: 32%;
    }
    input {
        display: block;
        padding: 7px;
        margin: 12px 0px 10px 25px;
        border: 1px solid grey;
        border-radius: 3px;
        width: 30%;
    }
 
    #textarea_contact{
        word-break: keep-all;
        font-family: monospace;
        box-sizing: border-box;
        height: 90px;
        width: 37%;
        margin: 2% 0% 0% 2%;
        font-size: 12px;
        margin-bottom: 10%;
        background: #f8f8f8;
        border-radius: 3px;
        border: 1.5px rgb(169, 169, 169) solid;
    }
    #submitButton{
        color: white;
        font-weight: bold;
        background-color: #0e5ba9;
        width: 150px;
        height: 50px;
        margin-left: 9%;
        cursor:pointer;
    }
    #form_field_texmess_line{
        margin-bottom: -8%;
    }
}
@media screen and (max-width:481px) {
    body{
        font-family: Verdana;
    }
    #intro{
        display: inline-block;
        padding-top: 10px;
        margin: 1% 0% 2% 3%;
        color: #0e5ba9;
        font-size: 20px;
        font-weight: normal;
        line-height: 18px;
        height: 28px;
        width: 70%;
    }
    .requiredSymbol{
        color: red;
        font-size: 100%;
        margin-left: 2%;
    }
    .fieldNameForm{
        display: block;
        font-size: 100%;
        color: grey;
        margin-left: 2%;
    }
    #intro_text{
        width: 100%;
        margin: 5% 0% 7% 4%;
        font-family: Verdana;
        font-style: italic;
        color: grey;
        font-size: 12px;
    }
    #list {
        display: block;
        padding: 5px;
        margin: 8px 0px 12px 25px;
        border-radius: 3px;
        border: 1px solid grey;
        width: 31%;
    }
    input {
        display: block;
        padding: 5px;
        margin: 8px 0px 8px 5px;
        border: 1px solid grey;
        border-radius: 3px;
        width: 92%;
    }
    #textarea_contact{
        word-break: keep-all;
        font-family: monospace; 
        box-sizing: border-box;
        height: 90px;
        width: 96%;
        margin: 2% 0% 0% 2%;
        font-size: 12px;
        margin-bottom: 10%;
        background: #f8f8f8;
        border-radius: 3px;
        border: 1.5px  rgb(169, 169, 169) solid;
    }
    select{
        color: #0e5ba9;
    }
    #submitButton{
        color: white;
        font-weight: bold;
        background-color: #1D4872;
        color: white;
        width: 100px;
        height: 50px;
        margin: auto;
    }
    #form_field_texmess_line{
        margin-bottom: -8%;
    }
}
</style>
</head>

<body>

<html>
    <body>
        <?php include 'navbar.php';?>
        <div id="form_container">
            <div id="intro_form_container">
                    <h3 id="intro">Contact us by e-mail</h3>
                    <p id="intro_text">(Only the field mark with the symbol <span class="requiredSymbol">*</span> are required)</p>
            </div><!-- end intro_form_container -->
                <div id="fields_form_box"><!-- generic box all field form center area -->
    
                    <div id="form_field_name_surname_line">
                        <div id="box_form_field_name_surname" class="form_fields">
                            <span class="fieldNameForm"><div><?php echo $lang[$myLang]['fostername'];?>: </div>
                                <span class="requiredSymbol">*</span>
                            </span>
                            <input type="text" name="name" class="form_input_name" id="name"><!-- required -->  
                        </div><!-- box_form_field_name_surname --> 
                    </div><!-- end form_field_name_surname_line --> 
                
                    <div id="form_field_phone_line">
                        <div class="form_fields">
                            <span class="fieldNameForm"><div><?php echo $lang[$myLang]['fosterphone'];?>: </div></span>
                            <input type="text" name="phone" class="form_input" id="phone"><!-- optionnal --> 
                        </div><!-- end phone --> 
                    </div><!-- end form_field_phone_line -->    

                    <di id="form_field_mail_line">
                        <div class="form_fields">
                            <span class="fieldNameForm"><div><?php echo $lang[$myLang]['contactemail'];?>: </div>
                                <span class="requiredSymbol">*</span>
                            </span>
                            <input type="email" name="email" class="form_input" id="email"><!--optionnal --> 
                        </div><!-- end email -->
                    </div><!-- form_field_mail_line -->    

                    <di id="form_field_mail_line">
                        <div class="form_fields">
                            <span class="fieldNameForm"><div><?php echo $lang[$myLang]['contactsite'];?>:  </div></span>
                            <input type="url" name="website" class="form_input" id="website" placeholder="http://www.websitename.com"><!-- optionnal --> 
                        </div><!-- end email -->
                    </div><!-- form_field_mail_line -->    

                    <div id="listSubject">
                            <span class="fieldNameForm"><div><?php echo $lang[$myLang]['contactsubject'];?>: </div>
                                <span class="requiredSymbol">*</span>
                            </span>
                            <select name="subject" id="list"><!-- required --> 
                                <option><div><?php echo $lang[$myLang]['contactinformation'];?>: </div></option>
                                <option><div><?php echo $lang[$myLang]['contactadoption'];?>: </div></option>
                                <option><div><?php echo $lang[$myLang]['contactvolunteer'];?>: </div></option>
                                <option><div><?php echo $lang[$myLang]['contactfoster'];?>: </div></option>
                                <option><div><?php echo $lang[$myLang]['contactflight'];?>: </div></option>
                                <option><div><?php echo $lang[$myLang]['contactdonation'];?>: </div></option>
                                <option><div><?php echo $lang[$myLang]['contactpartnership'];?>: </div></option>
                                <option><div><?php echo $lang[$myLang]['contactother'];?>: </div></option>
                            </select>
                    </div><!-- listSubject" -->  

                    <div id="form_field_texmess_line">
                                <span class="fieldNameForm"><div><?php echo $lang[$myLang]['contactmessagefield'];?>: </div>
                                    <span class="requiredSymbol">*</span>
                                </span>
                                <textarea name="messageContent" class="form_input" id="textarea_contact"></textarea><!-- required -->
                    </div><!-- form_field_texmess_line -->

                </div><!-- fields_form_box -->        
                <input type="button" value=<?php echo $lang[$myLang]['submitmessage'];?> id="submitButton" onclick="fieldsVerification()">
        </div><!-- from container -->

</body>

<script>
    function fieldsVerification() {
              
    var userNameElem = document.querySelector("#name");
    // var userSurnameElem = document.querySelector("#surname");
    var userPhoneElem = document.querySelector("#phone"); //optionnal
    var userEmailElem = document.querySelector("#email");
    var userWebsiteElem = document.querySelector("#website"); //optionnal
    var userSubjectElem = document.querySelector("#list");
    var userMessageElem = document.querySelector("#textarea_contact");
        var userName = userNameElem.value;
        // var userSurname = userSurnameElem.value;
        var userPhone = userPhoneElem.value;
        var userEmail = userEmailElem.value;
        var userWebsite = userEmailElem.value;
        var userSubject = userSubjectElem.value;
        var userMessage = userMessageElem.value;
        if  ((userName ==="") && (userName.length >= 1) ||
            ((userEmail === "") && (userEmail.length > 8) ||
            (userSubject === "") || 
            (userMessage === ""))) { 
                alert("Please complete all required fields.");
                // } else if(!isNaN(userName) ) { 
                //     alert("Please insert only letter as name.");
                //     } else if (userPhone !== "" && userPhone.length()<20 ) { 
                //             alert("Please insert only number as phone number.");
                //             }else if (userEmail.indexOf("@") === -1 || userEmail.indexOf(".") === -1) { /* true */
                //                 alert("Please check the format of your email adress");
        } else {
            alert("Thank you!");
            location.reload();
          }
};//end of fieldsVerification function
</script>


<noscript>
    alert("Your browser does not support JavaScript!");
</noscript>

</html>