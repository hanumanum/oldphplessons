<?php

$errorsArr = [];
if($_SERVER["REQUEST_METHOD"]=="POST")
{
  $myanun = $_POST["myanun"];
  $myaazganun = $_POST["myaazganun"];
  $myelpost = $_POST["myelpost"];
  $gender = $_POST["gender"];

  $mykexcanun = $_POST["mykexcanun"];
  $country = $_POST["country"];


  //Ստուգումներ
  if($myanun=="")
  {
    array_push($errorsArr, "Անունը չէս լրացրել");
  }
  if($myaazganun=="")
  {
    array_push($errorsArr, "Ազգանունը չէս լրացրել");

  }
  if($myelpost=="")
  {
    array_push($errorsArr,"Էլ․֊փոստը չէս լրացրել");
  }
  //․․․․․․

  if(!filter_var($myelpost,FILTER_VALIDATE_EMAIL))
  {
    array_push($errorsArr,"Էլ․֊փոստը փոստի նման չի"); 
  }


  if(count($errorsArr)==0)
  {
      $sqlstring = "INSERT INTO contacts (myanun
                                        ,myaazganun
                                        ,myelpost
                                        ,gender
                                        ,mykexcanun
                                        ,country) 
                            VALUES ('$myanun'
                                  ,'$myaazganun'
                                  ,'$myelpost'
                                  ,'$gender'
                                  ,'$mykexcanun'
                                  ,'$country');";
  

    $link = mysqli_connect("localhost","roo"t,"root","lesson");
    mysqli_set_charset($link,"utf8");

    if(mysqli_connect_errno($link)==NULL)
    {
           
      if(mysqli_query($link,$sqlstring)!=false)
      {
        
      }
      else
      {
        array_push($errorsArr, "Ինչ որ բան չստացվեց, ոչ քո մեղքով");
      }

      mysqli_close($link);
    } 

  }

}
?>
<form  action="" method="POST"> 
    anun:<br> 
    <input name="myanun" type="text"/><br> 
    azganun:<br> 
    <input name="myaazganun" type="text"/><br> 
    kexcanun:<br> 
    <input name="mykexcanun" type="text"/><br> 
      
    ser:<br> 
    <select name="gender">
      <option value="1">arakan</option>
      <option value="2">igakan</option>
    </select>
     <br> 

     elpost:<br> 
    <input name="myelpost" type="text"/><br> 
     erkir:<br>
         
     <select nem="country">
      <option value="Hayastan">Hayastan</option>
      <option value="Rusastan">Rusastan</option>
      <option value="Germania">Germania</option>
     </select>

    <input type="submit" name="action" value="submit"> 
</form>

<?php
if(count($errorsArr)!=0)
{
  foreach ($errorsArr as $err) {
    echo $err."<br>";
  }
}


?>
