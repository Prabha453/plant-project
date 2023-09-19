
<?php  
class Validation 
{
    public function is_name_valid($uname)
    {
        //if (is_numeric($name)) {
            if (!preg_match("/^[a-zA-Z ]*$/",$uname)) {  
                $nameErr = '<br><p style="color:red;">Invalid Name(Only Alphabets and WhiteSpaces Allowed)</p>';  
                echo $nameErr;
            }  
            else{
        return $uname;
    }
    }
    
    public function is_email_valid($uemail)
    {
        //if (preg_match("/^[_a-z0-9-+]+(\.[_a-z0-9-+]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})$/", $email)) {
        if (!preg_match("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^",$uemail)) {    
            $emailErr='<br><p style="color:red;">Invalid Email Address(use @)</p>';
            echo $emailErr;
        }
        else{
        return $uemail;
    }
    }
    public function is_phone_valid($uphone)
    {
        if(filter_var($uphone,FILTER_SANITIZE_NUMBER_INT)){    
            return $uphone;
        }
        else{
            $phoneErr='<br><p style="color:red;">Invalid Phone Number(Only Numbers Allowed)</p>';
            echo $phoneErr;
    }
    }
    public function is_address_valid($uaddr)
    {
    if(!preg_match('/[A-Za-z0-9\-\\,.]+/', $uaddr)) {
        $addressErr='<br><p style="color:red;">Invalid Address</p>';
        echo  $addressErr;
    } else {
        return $uaddr;
    }
}
}
?> 
  