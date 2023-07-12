<?php
session_start();
error_reporting(0);
include('includes/config.php');
?>

<!DOCTYPE html>
<html lang="en">

  <head>
  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

  <script type="applijewelleryion/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,700,600' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
<link href="css/font-awesome.css" rel="stylesheet">



    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/templatemo-chain-app-dev.css">
    <link rel="stylesheet" href="assets/css/animated.css">
    <link rel="stylesheet" href="assets/css/owl.css">

    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
<!-- Custom Theme files -->
<script src="js/jquery-1.12.0.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!--animate-->
<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="js/wow.min.js"></script>
	<script>
		 new WOW().init();
	</script>

    
    
    

    <title>Query</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    
  


    <style>
      body {
            margin: 0;
            padding: 0;
            background-color: #f1f1f1;
            font-family: Arial, sans-serif;
        }
        
        .chatbox {
            max-width: 600px;
            margin: 50px auto;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }
        
        .header {
            background-color: #f9f9f9;
            padding: 15px;
            border-bottom: 1px solid #ddd;
        }
        
        .header h2 {
            margin: 0;
            font-size: 18px;
            color: #333;
        }
        
        .chat-container {
            padding: 20px;
            height: 300px;
            overflow-y: scroll;
            scrollbar-width: thin;
        }
        
        .chat-container::-webkit-scrollbar {
            width: 8px;
        }
        
        .chat-container::-webkit-scrollbar-thumb {
            background-color: rgba(0, 0, 0, 0.3);
            border-radius: 4px;
        }
        
        .chat-container p {
            margin: 10px 0;
        }
        
        .user-message {
            text-align: right;
        }
        
        .ai-message {
            text-align: left;
        }
        
        .user-message .message-content {
            background-color: #DCF8C6;
            border-radius: 5px;
            padding: 8px;
            display: inline-block;
            max-width: 80%;
        }
        
        .ai-message .message-content {
            background-color: #E5E5EA;
            border-radius: 5px;
            padding: 8px;
            display: inline-block;
            max-width: 80%;
        }
        
        .input-container {
            padding: 10px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-top: 1px solid #ddd;
        }
        
        .input-container input {
            width: 80%;
            padding: 8px;
            border: 1px solid #ddd;
            border-radius: 3px;
        }
        
        .input-container button {
            padding: 8px 15px;
            border: none;
            background-color: #4CAF50;
            color: #fff;
            border-radius: 3px;
            cursor: pointer;
        }
        
        .input-container button:hover {
            background-color: #45a049;
        }

        .container em{

            color:green;
            
        }

        .gradient-button a {
  display: inline-block !important;
  padding: 10px 20px !important;
  color: #fff !important;
  text-transform: capitalize;
  font-size: 15px;
  background: rgb(85,121,9);
background: linear-gradient(90deg, rgba(85,121,9,0.6755077030812324) 35%, rgba(35,255,0,0.6278886554621849) 100%);
  border-radius: 23px;
  font-weight: 500 !important;
  letter-spacing: 0.3px !important;
  transition: all .5s;
  
}

.gradient-button a:hover {
  color: #fff !important;
  background: rgb(85,121,9);
background: linear-gradient(90deg, rgba(85,121,9,0.6755077030812324) 35%, rgba(35,255,0,0.6278886554621849) 100%);
}

.section-heading h3{
    margin-left:425px
}
  </style>

  </head>

<body>
<?php include('includes/header.php');?>
 
  <!-- ***** Header Area End ***** -->
<br><br><br><br>
<div class="container">
    <div id="services" class="services section">
        <div style="margin-top: -5%;" class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
            <div class="section-heading  wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s">
                <h3>Knowledge <em>Exchange </em> Hub</h3>
                <div class="gradient-button">
              <a href="index.php">Back To Home <i class="fa fa-arrow-right"></i></a>
            </div>
                <img src="assets/images/heading-line-dec.png" alt=""/>
    </div></div>
    <br> <br> <br> <br> <br> <br>


    <div style="margin-top: -5%;" class="chatbox">
    <div class="header">
        <h2>Ask me a Query</h2>
    </div>
    <div class="chat-container" id="chatContainer">
        <!-- Chat messages will be appended here -->
    </div>
    <div class="input-container">
        <input type="text" id="prompt" placeholder="Type your message..." onkeydown="handleKeyDown(event)">
        <button onclick="callGPTAPI()">Send</button>
    </div>
    </div>
</div>


  <!-- Scripts -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/owl-carousel.js"></script>
<script src="assets/js/animation.js"></script>
<script src="assets/js/imagesloaded.js"></script>
<script src="assets/js/popup.js"></script>
<script src="assets/js/custom.js"></script>
<script>
        const prompt = document.getElementById('prompt');
        const chatContainer = document.getElementById('chatContainer');

        function createMessage(role, content) {
            const message = document.createElement('p');
            message.classList.add(role);
            const messageContent = document.createElement('span');
            messageContent.classList.add('message-content');
            messageContent.textContent = content;
            message.appendChild(messageContent);
            return message;
        }

        function appendUserMessage(content) {
            const message = createMessage('user-message', content);
            chatContainer.appendChild(message);
            // Scroll to the bottom of the chat container
            chatContainer.scrollTop = chatContainer.scrollHeight;
        }

        function appendAIMessage(content) {
            const message = createMessage('ai-message', content);
            chatContainer.appendChild(message);
            // Scroll to the bottom of the chat container
            chatContainer.scrollTop = chatContainer.scrollHeight;
        }

        function callGPTAPI() {
            const options = {
                method: "POST",
                headers: {
                    'Content-Type': 'application/json',
                    'X-RapidAPI-Key': 'fee195ef3emshb22b26c7acb78b8p17591cjsnc089e704c039',
                    'X-RapidAPI-Host': 'chatgpt53.p.rapidapi.com'
                },
                body: `{
                    "model": "gpt-3.5-turbo",
                    "messages": [
                        {"role": "user", "content": "${prompt.value}"}
                    ]
                }`
            };

            appendUserMessage(prompt.value);
            prompt.value = ''; // Clear the input field

            fetch('https://chatgpt53.p.rapidapi.com/', options)
                .then(response => response.json())
                .then(response => {
                    const reply = response.choices[0].message.content;
                    appendAIMessage(reply);
                })
                .catch(err => console.error(err));
        }

        function handleKeyDown(event) {
            if (event.key === 'Enter') {
                callGPTAPI();
            }
        }
    </script>
</body>
</html>
