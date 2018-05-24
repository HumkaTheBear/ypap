<?php
$import= file_get_contents('lang.php');
$myLang = $_REQUEST['lang'];
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        /* * {
            outline: 1px solid red;
        } */
        body {
            margin: 0px;
            padding: 0px;
            font-family: sans-serif;
        }
        #newsletterimage {
            display: flex; 
            justify-content: center;
            align-items: center;
        }
        img {
            max-width: 90%;
            max-height: 90%;
            margin: 10px;
        }
        #text {
            display: inline-block;
            padding: 10px;
        }
        .inputwrapper {
            margin: 15px;
        }
        input, textarea {
            outline: 1px solid black;
        }
        #submitbuttonwrapper {
            margin: 20px;
        }
        @media screen and (min-width: 481px) {
            img {
                max-width: 40%;
                max-height: 40%;
                margin: 10px;
            }
            input, textarea {
                outline: none;
            }
        }
    </style>
</head>
<body>
    <?php include 'navbar.php';?>
    <div id="everythingwrapper">
        <div id="newsletterimage"><img src="https://i.pinimg.com/originals/94/82/8c/94828c92162ce22515b7807e81356416.jpg"></div>
        <!-- Below is the text, made up to sound kind of right. -->
        <div id="text">
            Want to stay up-to-date with everything that's happening at the Yongin Pound? Subscribe to our newsletter and get regular updates on volunteer opportunities and news about our cuddly friends!
        </div>
    </div>
    <div id="bottomwrapper">
        <div class="inputwrapper" id="namewrapper">
            <div class="fielddesc"><div><?php echo $lang[$myLang]['newslettername'];?>: + response[i].newslettername + </div></div>
            <input type="text" id="name">
        </div>
        <div class="inputwrapper" id="emailwrapper">
            <div class="fielddesc"><div><?php echo $lang[$myLang]['newsletteremail'];?>: + response[i].newsletteremail + </div></div>
            <input type="text" id="email">
        </div>
        <div id="submitbuttonwrapper"><input id="signupbutton" type="button" value="<div><?php echo $lang[$myLang]['signupmessage'];?>: + response[i].signupmessage + </div>"></div>
    </div>
    <script>
        //The variables pointing towards each input field.
        var signUpName = document.querySelector("#name");
        var signUpEmail = document.querySelector("#email");
        //The variable for the sign up button.
        var signUpButton = document.querySelector("#signupbutton");
        signUpButton.addEventListener("click", function() {
            //Below checks that all fields have been filled out.
            if (signUpName.value === "" || signUpEmail.value === "") {
                alert("Please make sure to fill out all the fields.")
            }
            else {
                var emailInput = signUpEmail.value;
                var validEmailCheck = emailInput.indexOf("@");
                if (validEmailCheck < 0) {
                    alert("Please enter a valid email address.");
                }
                else signUpNewsLetter(); //This calls the function that submits the user's information!
            }
        })
        //Below is only called when the sign up button is clicked and all the conditions are met!
        function signUpNewsLetter() {
            //Below is the package of all the information in the fields.
            var newsLetterSignUpInfo = {
                whosubscribed: signUpName.value,
                emailwhosubscribed: signUpEmail.value
            };
            var newsLetterAjax = new XMLHttpRequest();
            newsLetterAjax.onreadystatechange = function() {
                if (newsLetterAjax.readyState === 4 && newsLetterAjax.status === 200) {
                    alert("Thank you. You have been signed up for our regular newsletter.");
                }
            }
            var outGoingNewsLetterInfo = JSON.stringify(newsLetterSignUpInfo);
            newsLetterAjax.open("POST", "mailingsignupinfo.php");
            newsLetterAjax.send(outGoingNewsLetterInfo);
        }
    </script>
</body>
</html>