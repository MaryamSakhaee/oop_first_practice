<?php 
class createPerson{
    //peropertice
    public $name;
    public $family;
    public $age;
    public $wight;
    public $height;
    public $gender;
    //method
    public function __construct($name,$family,$age,$wight,$height,$gender){
        $this->name=$name;
        $this->family=$family;
        $this->age=$age;
        $this->wight=$wight;
        $this->height=$height;
        $this->gender=$gender;
    }
    function get_name() {
        return $this->name;
    }
    function get_family() {
        return $this->family;
    }
    function get_age() {
        return $this->age;
    }
    function get_wight(){
        return $this->wight;
    }
    function get_height(){
        return $this->wight;
    }
    function get_gender(){
        return $this->gender;
    }
    
}
$parsa=new createPerson ("Parsa","Rezaei","15","165","60","Mail");
$sara=new createPerson ("sara","Nikkhoo","25","170","55","Femail");
echo $parsa->get_name(). "   is walking and  eating <br><br>";
echo $sara->get_name()."    sleeping";


?>