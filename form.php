    <?php

        $servername="localhost";
        $username="root";
        $password="";
        $dbname="registration";

        $conn = new mysqli ($servername, $username, $password, $dbname);
        
        $name =$_post['$name'];
        $email =$_post['$email'];
        $phone =$_post['$phone'];
        $date =$_post['$date'];
        $time =$_post['$time'];
        $guests =$_post['$guests'];
        $specialRequests =$_post['specialRequests'];

        $conn = new mysqli('localhost','root','','registration');
        if($conn->connect_error){
            die('connection failed:'.$conn->connect_error);
        }
        else{
            $stmt=$conn->prepare("insert into restaurant(name,email,phone,date,time,guests,spaecialRequests)
            values(?,?,?,?,?,?,)");
            $stmt->bind_param("ssiiiis",$name,$email,$phone,$date,$time,$guests,$specialRequests);
            $stmt->execute();
            echo "registration Sucessfully....";
            $stmt->close();
            $conn->close();  
        }
    ?>