<?php
    if(isset($_POST['submit_tags']))
    {
        $tagsList=$_POST['tags_list'];
        $arrayElements = explode(";", $tagsList);
        echo "Contains ".sizeof($arrayElements)." elements<br>-----------------<br><br>";
        $counter = 0;
        foreach($arrayElements as $vehicle)
        {
            $vehicleValues = explode(",", $vehicle);            
            echo"
            _vehicle_".$counter."=objNull;<br>
          _this = createVehicle ".$arrayElements[$counter].";<br>
          _vehicle_".$counter." = _this;<br>
            _this setDir ".$vehicleValues[4].";<br>
          _this setPos ".$vehicleValues[1].",".$vehicleValues[2]."];<br><br><br>";
          $counter++;
        }
    }
    ?>
<form action="" method="post" enctype="multipart/form-data">
<input type="text" name="tags_list">
<input type="submit" name="submit_tags">
</form>
