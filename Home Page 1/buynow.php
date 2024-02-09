<?php 
    include("dbconnection.php");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BuyNow</title>
    <link rel="stylesheet" href="style1.css">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.css">
</head>
<body>
    <section class="order" id="order">

        <h1 class="heading"> <span>Order Now</span></h1>
    
        <form action="#" method="post">
    
            <div class="inputBox">
                <div class="input">
                    <span>Your Name</span>
                    <input type="text" placeholder="Enter Your Name" name="name">
                </div>
                <div class="input">
                    <span>Your Number</span>
                    <input type="text" placeholder="Enter Your Number" name="number">
                </div>
            </div>
            <div class="inputBox">
                <div class="input">
                    <span>Your Order</span>
                    <input type="text" placeholder="Enter Product Name" name="order">
                </div>
                <div class="input">
                    <span>Additional Product</span>
                    <input type="text" placeholder="Enter Second Product" name="additional">
                </div>
            </div>
            <div class="inputBox">
                <div class="input">
                    <span>No. of Product</span>
                    <input type="number" placeholder="Enter Quantity" name="quantity">
                </div>
                <div class="input">
                    <span>Date & Time</span>
                    <input type="datetime-local" name="datetime">
                </div>
            </div>
            <div class="inputBox">
                <div class="input">
                    <span>Your Address</span>
                    <textarea name="address" placeholder="enter your address" id="" cols="30" rows="10" ></textarea>
                </div>
                <div class="input">
                    <span>Your Message</span>
                    <textarea name="message" placeholder="enter your Message" id="" cols="30" rows="10" ></textarea>
                </div>
            </div>
    
            <input type="submit" name="submit" value="Order Now" class="btn" >
    
        </form>
    
    </section>
</body>
</html>

<?php 
    $msg="";
    if(isset($_POST['submit']))
    {
        $name       =$_POST['name'];
        $number     =$_POST['number'];
        $order      =$_POST['order'];
        $additional =$_POST['additional'];
        $quantity   =$_POST['quantity'];
        $datetime   =date('Y-m-d H:i:s', strtotime($_POST['datetime']));
        $address    =$_POST['address'];
        $message    =$_POST['message'];
        if($name!='' && $number!='' && $order!=''&& $additional!='' && $quantity!='' && $datetime!='' && $address!='' && $message!='')
        {
            $query = "INSERT INTO orderdetails values('$name','$number','$order','$additional','$quantity','$datetime','$address','$message')";
            $data = mysqli_query($conn,$query);
            $html="<table><tr><td>Name</td><td>$name </td></tr><tr><td>Number</td><td>$number</td></tr><tr><td>Order</td><td>$order</td></tr><tr><td>Additional Product</td><td>$additional</td></tr><tr><td>Quantity</td><td>$quantity</td></tr><tr><td>Date and Time</td><td>$datetime</td></tr><tr><td>Address</td><td>$address</td></tr><tr><td>Message</td><td>$message</td></tr></table>";

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
	        $mail->Subject="Order Details";
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

<!-- window.location='contactus.php'; -->