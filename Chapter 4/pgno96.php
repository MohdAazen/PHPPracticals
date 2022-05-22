<html>
    <head>
        <title>Aazen is Sending An E-mail using PHP</title>
    </head>
    <body>
        <h3>19820 Sending email</h3>
        <h3>Sayyed Mohd Aazen</h3>
        <?php 
        $to="vinayaksawant859@gmail.com";
        $subject="This is subject of Mail sent form SAYYED MOHD AAZEN 19820";
        $message="Hello.
                    \nThis is HTML message.
                    \nI am sending this mail to my friend VINAYAK.
                    \nIf you have received th mail please send me the screenshot.";
        $header="From:sayyedaazen81@gmail.com \r\n";
        $retvalue=mail($to,$subject,$message,$header);
        if($retvalue==true){
            echo "<h4>Message sent successfully...</h4>";
        }
        else{
            echo "Message souldn't be sent...";
        }
        ?>
    </body>
</html>