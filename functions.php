<?php
function check_login($con)
{
    if(issert($_SESSION['email']))
{ 
    $id=$_SESSION['email'];
    $query="select * from users where email =  '$id' limit 1";
    if($result && mysqli_num_rows($result) > 0)
    {
        $user_data = mysqli_fetch_assoc($result);
        return $user_data;
    }

    //redirect to login
    header("Location:login.html");
    die;


}
}
function random_num($length)
{
    $text ="";
    if($length <5);
    {
        $length =5;
    }
    $len = rand(4,$length);

    for ($i=0; $i <$len; $i++)
    {
        #code
        $text .= rand(0,9);
    }
    return $text;
}