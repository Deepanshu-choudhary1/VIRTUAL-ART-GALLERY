<?php
  include("source.php");
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>Responsive Registration Form</title>
    <meta name="viewport" content="width=device-width,
      initial-scale=1.0"/>
    <link rel="stylesheet" href="style7.css" />
  </head>
  <body>
    <div class="container">
      <h1 class="form-title">Upload Your Work!!!</h1>
      <form action="#" method="post" enctype="multipart/form-data">
        <div class="main-user-info">
          <div class="user-input-box">
            <label for="fullName">Full Name</label>
            <input type="text"
                    id="fullName"
                    name="fullName"
                    placeholder="Enter Full Name"/>
          </div>
          <div class="user-input-box">
            <label for="username">Username</label>
            <input type="text"
                    id="username"
                    name="username"
                    placeholder="Enter Username"/>
          </div>
          <div class="user-input-box">
            <label for="email">Email</label>
            <input type="email"
                    id="email"
                    name="email"
                    placeholder="Enter Email"/>
          </div>
          <div class="user-input-box">
            <label for="phoneNumber">Phone Number</label>
            <input type="text"
                    id="phoneNumber"
                    name="phoneNumber"
                    placeholder="Enter Phone Number"/>
          </div>
          <div class="user-input-box">
            <label for="file">Your File</label>
            <input type="file"
                    id="file"
                    name="file"
                    placeholder="Upload Your file"/>
          </div>
          <div class="user-input-box">
            <label for="price">Price</label>
            <input type="text"
                    id="price"
                    name="price"
                    placeholder="Price"/>
          </div>
        </div>
        <div class="gender-details-box">
          <span class="gender-title">Gender</span>
          <div class="gender-category">
            <input type="radio" name="gender" id="male" value="male">
            <label for="male">Male</label>
            <input type="radio" name="gender" id="female" value="female">
            <label for="female">Female</label>
            <input type="radio" name="gender" id="other" value="other">
            <label for="other">Other</label>
          </div>
        </div>
        <div class="form-submit-btn">
          <input type="submit" value="submit" name="submit">
        </div>
      </form>
    </div>
  </body>
</html>

<?php 
    if(isset($_POST['submit']))
    {
      $filename=$_FILES["file"]["name"];
      $tempname=$_FILES["file"]["tmp_name"];
      $folder="images/".$filename;
      move_uploaded_file($tempname,$folder);
        $fname     =$_POST['fullName'];
        $user     =$_POST['username'];
        $emailaddress   =$_POST['email'];
        $phone   =$_POST['phoneNumber'];
        $price   =$_POST['price'];
        $gender   =$_POST['gender'];

        $query = "INSERT INTO uploads(fname ,user,email,phone,image,price,gender) VALUES ('$fname','$user','$emailaddress','$phone','$folder','$price','$gender')";
        $data = mysqli_query($conn,$query);

        if($data)
        {
          echo "inserted";
        }
        else
        {
          echo "failed";
        }
        
    }
?>