<?php
class PropertyTest
{
    /**  Location for overloaded data.  */
    private $data = array();
    /**  Overloading not used on declared properties.  */
    public $declared = 1;
    /**  Overloading only used on this when accessed outside the class.  */
    private $hidden = 2;
    
    
    public function __set($name, $value)
    {
        
        echo "Setting '$name' to '$value'\n";
        $this->data[$name] = $value;

    }
    
    public function __get($name)
    {
        echo "Getting '$name'\n";
        if (array_key_exists($name, $this->data)) {
            return $this->data[$name];
        }
        $trace = debug_backtrace();
        trigger_error(
            'Undefined property via __get(): ' . $name .
            ' in ' . $trace[0]['file'] .
            ' on line ' . $trace[0]['line'],
            E_USER_NOTICE);
        return null;
    }


    function __toString(){
        return "Իմ օբյեկտը";
    }
}
$obj = new PropertyTest();
$obj->a = 1;
$obj->name = "Գագո";

echo $obj; 


echo $obj->name;
echo $obj->a;

echo "<pre>";
var_dump($obj);
echo "</pre>";
?>