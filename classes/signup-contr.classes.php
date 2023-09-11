<?php

class SignupContr extends Signup{
    private $uid;
    private $pwd;
    private $pwdRepeat;
    private $email;

    public function __construct($uid,$pwd,$pwdRepeat,$email){
        $this->uid=$uid;
        $this->pwd=$pwd;
        $this->pwdRepeat=$pwdRepeat;
        $this->email=$email;
    }
    public function signupUser(){

        if($this->emptyInput()==false)
        {
            header("location: ../signup.php?error=emptyinput");
            exit();
        }
        if($this->invalidUid()==false)
        {
            header("location: ../signup.php?error=invalidusername");
            exit();
        }
        if($this->invalidpass()==false)
        {
            header("location: ../signup.php?error=invalidpassword_itshouldbe_8 character long");
            exit();
        }
        if($this->invalidEmail()==false)
        {
            header("location: ../signup.php?error=invalidemail");
            exit();
        }
        if($this->pwdMatch()==false)
        {
            header("location: ../signup.php?error=passwordmatch");
            exit();
        }
        if($this->userexist()==false)
        {
            header("location: ../signup.php?error=useroremailtaken");
            exit();
        }

        $this->setUser($this->uid,$this->pwd,$this->email);
    }
    


    private function emptyInput(){
        $result=false;
        if(empty($this->uid) || empty($this->pwd) || empty($this->pwdRepeat) || empty($this->email)){
            $result=false;
        }
        else{
            $result=true;
        }
        return $result;
    }

    private function invalidUid(){
        $result=false;
        if(!preg_match("/^[a-zA-Z0-9]*$/",$this->uid))
        {
            $result=false;
        }
        else
        {
            $result=true;
        }
        return $result;
    }
    private function invalidpass(){
        $result=false;
        if(!preg_match("/^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)[A-Za-z\d]{7,25}$/",$this->pwd))
        {
            $result=false;
        }
        else
        {
            $result=true;
        }
        return $result;
    }
    private function invalidEmail(){
        $result=false;
        if(!filter_var($this->email,FILTER_VALIDATE_EMAIL))
        {
            $result=false;
        }
        else
        {
            $result=true;
        }
        return $result;
    }
    private function pwdMatch(){
        $result=false;
        if($this->pwd!=$this->pwdRepeat)
        {
            $result=false;
        }
        else
        {
            $result=true;
        }
        return $result;
    }
    private function userexist(){
        $result=false;
        if(!$this->checkUser($this->uid,$this->email))
        {
            $result=false;
        }
        else
        {
            $result=true;
        }
        return $result;
    }



}
