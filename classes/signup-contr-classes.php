<?php
class SignupContr extends Signup {
    private $uid;
    private $pwd;
    private $pwdRepeat;
    private $email;


    public function __construct($uid, $pwd, $pwdRepeat, $email)
    {
        $this->uid = $uid;
        $this->pwd = $pwd;
        $this->pwdRepeat = $pwdRepeat;
        $this->email = $email;
    }
    public function signupUser(){
        if ($this->emptyInput()==false){
            //echo "Empty input";
            header("location: ../index.php?error=emptyinput");
            exit();
        }
        if ($this->invalidUid()==false){
            //echo "Invalid username";
            header("location: ../index.php?error=username");
            exit();
        }
        if ($this->ivalidEmail()==false){
            //echo ""Invalid Email;
            header("location: ../index.php?error=email");
            exit();
        }
        if ($this->pwdMatch()==false){
            //echo "Passwords don't match";
            header("location: ../index.php?error=passwordmatch");
            exit();
        }
        if ($this->uidTakenCheck()==false){
            //echo "Username or email taken";
            header("location: ../index.php?error=userOrEmailTaken");
            exit();
        }
        $this->setUser($this->uid,$this->pwd,$this->email);
    }

    private function emptyInput(){
        $result=false;
        if (empty($this->uid)||
            empty($this->pwd)||
            empty($this->pwdRepeat)||
            empty($this->email)){
            $result=false;
        }
        else{
            $result=true;
        }
        return $result;
    }

    private function invalidUid(){
        $result=false;
        if (!preg_match("/^[a-zA-Z0-9]*$/",$this->uid)){
            $result=false;
        }else{
            $result=true;
        }
        return $result;
    }

    private function ivalidEmail(){
        $result=false;
        if (!filter_var($this->email, FILTER_VALIDATE_EMAIL)){
            $result=false;
        }else{
            $result=true;
        }
        return $result;
    }
    private function pwdMatch(){
        $result=false;
        if ($this->pwd !==$this->pwdRepeat){
            $result=false;
        }
        else{
            $result=true;
        }
        return $result;
    }
    private function uidTakenCheck(){
        $result=false;
        if (!$this->checkUser($this->uid,$this->email)){
            $result=false;
        }else{
            $result=true;
        }
        return $result;
    }
}