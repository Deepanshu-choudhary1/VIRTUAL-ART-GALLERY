<?php include("connection.php");?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form - Alert Message</title>
    <link rel="stylesheet" href="styles5.css">

    <!-- font Awesome CDN -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
</head>
<body>
    <form action="#" method="POST" id="frmcontactus">
     <div class="container">
        <div class="box">
            <h3>Get in Touch</h3>
            <div class="name">
                <i class="fas fa-user"></i>
                <input type="text" placeholder="Name" id="name" name="yourname" required> 
            </div>
            <div class="email">
                <i class="fas fa-envelope"></i>
                <input type="text" placeholder="Email" id="email" name="emailadd" required>
            </div>
            <div class="message-box">
                <textarea id="msg" cols="30" rows="10" placeholder="Message"name ="message" required></textarea>
            </div>
            <div class="button">
                <button type="submit" id="send" value ="submit" onclick="message()" name="submit">Send</button>
                <a href="index.php">Home</a>     
            </div>
            <div class="message">
                <div class="success" id="success">Your Message Successfully Sent!</div>
                <div class="danger" id="danger">Feilds Can't be Empty!</div>
            </div>
        </div>
     </div>
    </form>

    <!-- <script src="main.js"></script> -->
    <script>
	  jQuery('#frmContactus').on('submit',function(e){
		jQuery('#msg').html('');
		jQuery('#send').html('Please wait');
		jQuery('#send').attr('disabled',true);
		jQuery.ajax({
			url:'contactus.php',
			type:'post',
			data:jQuery('#frmContactus').serialize(),
			success:function(result){
				jQuery('#msg').html(result);
				jQuery('#send').html('Submit');
				jQuery('#send').attr('disabled',false);
				jQuery('#frmContactus')[0].reset();
			}
		});
		e.preventDefault();
	  });
	  </script>
</body>
</html>


<?php 
    $msg="";
    if(isset($_POST['submit']))
    {
        $uname      =$_POST['yourname'];
        $uemail      =$_POST['emailadd'];
        $umessage   =$_POST['message'];
        if($uname!='' && $uemail!='' && $umessage!='')
        {
            $query = "INSERT INTO details values('$uname','$uemail','$umessage')";
            $data = mysqli_query($conn,$query);
            $html="<table><tr><td>Name</td><td>$uname</td></tr><tr><td>Email</td><td>$uemail</td></tr><tr><td>Message</td><td>$umessage</td></tr></table>";

            include('smtp/PHPMailerAutoload.php');
	        $mail=new PHPMailer(true);
	        $mail->isSMTP();
	        $mail->Host="smtp.gmail.com";
	        $mail->Port=587;
	        $mail->SMTPSecure="tls";
	        $mail->SMTPAuth=true;
	        $mail->Username="atharvamkg1103@gmail.com";
	        $mail->Password="oaiv tycw uajf vhoz";
	        $mail->SetFrom("atharvamkg1103@gmail.com");
            $recipients = array(
                "agarwalanisha964@gmail.com" => "Name 1",
	            "shreyakachare09@gmail.com" => "Name 2",

            );
            foreach ($recipients as $email => $name)
            {
	            //  $mail->addAddress("agarwalanisha964@gmail.com" , "atharvakgaikwad11@gmail.com");
                // $mail->ClearAllRecipients();
	            $mail->AddCC($email, $name);
            }
	        $mail->IsHTML(true);
	        $mail->Subject="New Contact Us";
	        $mail->Body=$html;
	        $mail->SMTPOptions=array('ssl'=>array(
		        'verify_peer'=>false,
		        'verify_peer_name'=>false,
		        'allow_self_signed'=>false
	        ));
	        if($mail->send() && $data){
		        // echo "Mail send";
                echo "<script> 
                    alert('Message Sent!!!');
                    window.location='contactus.php';
                </script>";
	        }else{
		        // echo "Error occur";
                echo "<script> alert('Message not sent!');</script>";
	        }
    
            echo $msg;
        }
        else
        {
            echo "<script> alert('Fields cant be empty');</script>";
        }
    }


?>