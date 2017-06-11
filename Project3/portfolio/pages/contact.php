<?php 
    if($_POST["submit"]) {
        $recipient = "shanye2015@gmail.com";
        $sender = $_POST["name"];
        $senderEmail = $_POST["email"];
        $subject = $_POST["subject"];
        $message = $_POST["message"];
        $mailBody = "Name: $sender \n Email: $senderEmail\n\n$message";
        mail($recipient, $subject, $mailBody, "From: $sender <$senderEmail>");

        $thankYou = "<p>Thank you! Your message has been sent.</p>";
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contact</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/>
    <!--<link type="text/css" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,700">-->
    <link type="text/css" rel="stylesheet" href="../css/contact.css">
</head>

<body>
<? = $thankYou ?>

<div id="slide"></div>
<header class="container">
    <div class="row">
        <h3 class="col-sm-7">Lalunashine</h3>
        <nav class="col-sm-4">
            <ul class="nav-icon">
                <li>
                    <span></span>
                    <span></span>
                    <span></span>
                </li>
            </ul>
            <ul>
                <a href="../index.html">
                    <li>home</li>
                </a>
                <a href="portfolio.html">
                    <li>portfolio</li>
                </a>
                <a href="about.html">
                    <li>about</li>
                </a>
                <a href="contact.html">
                    <li>contact</li>
                </a>
            </ul>
        </nav>
    </div>
</header>

<section class="container">
    <form method="post" action="contact.php">
        <div>
            <p></p>
            <input type="text" name="name" placeholder="Your Name">
        </div>
        <div>
            <p></p>
            <input type="text" name="email" placeholder="Your Email">
        </div>
        <div>
            <p></p>
            <input type="text" name="subject" placeholder="Subject">
        </div>
        <div>
            <p></p>
            <textarea name="message" cols="50" rows="5" placeholder="Leave Your Message Here..."></textarea>
        </div>
        <input type="reset" value="Reset">
        <input type="submit" value="Submit">
    </form>
</section>


<footer class="container">
    <div class="row">
        <ul class="sol-sm-12">
            <li><a href="https://github.com/Lalunashine" target="_blank"><img src="../img/github1.png"></a></li>
            <li><a href="https://mp.weixin.qq.com/mp/profile_ext?action=home&__biz=MzI2NDY0Njg2OQ==&scene=123&uin=MTIzMDIzNzI0MQ%3D%3D&key=227c90f337be412a45740d45aec63f86fa8acd7191b790473b8483bd7d2ab8533a8043bd53af3a7688d4c5f7681b58a4baf909f88dce95909ace3ab16d8101632ad02738e2d147b08582a80fe415c162&devicetype=iMac+MacBookPro12%2C1+OSX+OSX+10.12.4+build(16E195)&version=12020610&lang=zh_CN&nettype=WIFI&a8scene=0&fontScale=100&pass_ticket=xuMEMgV9f9%2FvNxezSuMaWqC8yERJQ9B88ZyhFwMM56K9Dso9p7sCSDqSh2MaNiBY" target="_blank"><img src="../img/wechat.svg"></a></li>
        </ul>
    </div>
    <div class="row">
        <p class="col-sm-12">Copyright &copy; 2017 Shan Ye. All Rights Reserved.</p>
    </div>
</footer>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript" src="../js/main.js"></script>
</body>
</html>