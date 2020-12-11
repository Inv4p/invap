<?php

$name  = $_REQUEST['name'];

$email  = $_REQUEST['email'];

$messsage  = $_REQUEST['message'];

if(empty($name)|| empty($email) || empty($messsage)){


    echo "Please fill all the  feilds";

}

else{

    mail('theinvap@gmail.com' , "Invap Message", $messsage , "From:$name <$email>");

    echo "<script type='text/javascript'>alert('your message sent sucessfully');
    
    window.history.log(-1);

    
    </script>";
}


?>
