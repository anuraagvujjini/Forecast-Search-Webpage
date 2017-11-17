<html>
    <head><title>Forecast Search</title>
    <style type="text/css">
    label
    {
     align:left;   
    }
    #forecast
        {
            border : 0px;
        
        }
    #forecast #1 #2
        {
          align: right;      
        }
     </style> 
        
        <script type="text/javascript">
        function validateloc()
            {
            if(document.getElementById('straddr').value.trim() == '')
             { alert("Please enter the Street Adress");
            return false;     
             }
            
            if(document.getElementById('city').value.trim() == '')
            {alert("Please enter the city");return false;}
               
            if(document.getElementById('State').options[document.getElementById('State').selectedIndex].value == "" )
            {  alert("Please select the State");
             return false;  
            }
            return true;
            }
        function clearform()
            {
                document.getElementById("straddr").value='';
                document.getElementById("city").value='';
                document.getElementById("State").selectedIndex=0;
                document.getElementsByName("Degree")[0].checked=true;
                document.getElementById("forecast").parentNode.removeChild(document.getElementById("forecast"));
                document.getElementById("clearfunc").parentNode.removeChild(document.getElementById("clearfunc"));
                document.getElementById("myForm").submit();
                return false;
            
            }
           
        </script>
    </head>
<body >
    <center><p style="font-weight: bold;font-size:25" ><b>Forecast Search</b></p></center>
    <br>
    <center><table style="border: 2px solid black; width: 30%; height:200px; cellspacing: 0px;" >
    <form id="myForm" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <tr align="center">
            <td>    <label for="straddr" name="streetaddress">Street Address:* </label></td>
            <td> <input type="text" name="straddr" id="straddr" value="<?php echo isset($_POST['straddr'])? $_POST['straddr'] : ''?>"/> </td>
        </tr>
            
       <tr align="center"> 
           <td><label for="city" >City:* </label></td>
           <td><input type="text" name="city" id="city" value="<?php echo isset($_POST['city'])? $_POST['city'] : ''?>"/></td>
        </tr>
        
    <tr align="center">    <td>    <label for="State">State:* </label></td>
    <td><select size=1 name="State" id="State" />
    <option value="" selected="selected">Select your state</option>    
	<option value="AL" <?php if(isset($_POST["State"]) AND $_POST["State"] == "AL") { echo "selected='selected'"; } ?> >Alabama</option>
	<option value="AK" <?php if(isset($_POST["State"]) AND $_POST["State"] == "AK") { echo "selected='selected'"; } ?> >Alaska</option>
	<option value="AZ" <?php if(isset($_POST["State"]) AND $_POST["State"] == "AZ") { echo "selected='selected'"; } ?> >Arizona</option>
	<option value="AR" <?php if(isset($_POST["State"]) AND $_POST["State"] == "AR") { echo "selected='selected'"; } ?>>Arkansas</option>
	<option value="CA" <?php if(isset($_POST["State"]) AND $_POST["State"] == "CA") { echo "selected='selected'"; } ?>>California</option>
	<option value="CO" <?php if(isset($_POST["State"]) AND $_POST["State"] == "CO") { echo "selected='selected'"; } ?>>Colorado</option>
	<option value="CT" <?php if(isset($_POST["State"]) AND $_POST["State"] == "CT") { echo "selected='selected'"; } ?>>Connecticut</option>
	<option value="DE" <?php if(isset($_POST["State"]) AND $_POST["State"] == "DE") { echo "selected='selected'"; } ?>>Delaware</option>
	<option value="DC" <?php if(isset($_POST["State"]) AND $_POST["State"] == "DC") { echo "selected='selected'"; } ?>>District Of Columbia</option>
	<option value="FL" <?php if(isset($_POST["State"]) AND $_POST["State"] == "FL") { echo "selected='selected'"; } ?>>Florida</option>
	<option value="GA" <?php if(isset($_POST["State"]) AND $_POST["State"] == "GA") { echo "selected='selected'"; } ?>>Georgia</option>
	<option value="HI" <?php if(isset($_POST["State"]) AND $_POST["State"] == "HI") { echo "selected='selected'"; } ?>>Hawaii</option>
	<option value="ID" <?php if(isset($_POST["State"]) AND $_POST["State"] == "ID") { echo "selected='selected'"; } ?>>Idaho</option>
	<option value="IL" <?php if(isset($_POST["State"]) AND $_POST["State"] == "IL") { echo "selected='selected'"; } ?>>Illinois</option>
	<option value="IN" <?php if(isset($_POST["State"]) AND $_POST["State"] == "IN") { echo "selected='selected'"; } ?>>Indiana</option>
	<option value="IA" <?php if(isset($_POST["State"]) AND $_POST["State"] == "IA") { echo "selected='selected'"; } ?>>Iowa</option>
	<option value="KS" <?php if(isset($_POST["State"]) AND $_POST["State"] == "KS") { echo "selected='selected'"; } ?>>Kansas</option>
	<option value="KY" <?php if(isset($_POST["State"]) AND $_POST["State"] == "KY") { echo "selected='selected'"; } ?>>Kentucky</option>
	<option value="LA" <?php if(isset($_POST["State"]) AND $_POST["State"] == "LA") { echo "selected='selected'"; } ?>>Louisiana</option>
	<option value="ME" <?php if(isset($_POST["State"]) AND $_POST["State"] == "ME") { echo "selected='selected'"; } ?>>Maine</option>
	<option value="MD" <?php if(isset($_POST["State"]) AND $_POST["State"] == "MD") { echo "selected='selected'"; } ?>>Maryland</option>
	<option value="MA" <?php if(isset($_POST["State"]) AND $_POST["State"] == "MA") { echo "selected='selected'"; } ?>>Massachusetts</option>
	<option value="MI" <?php if(isset($_POST["State"]) AND $_POST["State"] == "MI") { echo "selected='selected'"; } ?>>Michigan</option>
	<option value="MN" <?php if(isset($_POST["State"]) AND $_POST["State"] == "MN") { echo "selected='selected'"; } ?>>Minnesota</option>
	<option value="MS" <?php if(isset($_POST["State"]) AND $_POST["State"] == "MS") { echo "selected='selected'"; } ?>>Mississippi</option>
	<option value="MO" <?php if(isset($_POST["State"]) AND $_POST["State"] == "MO") { echo "selected='selected'"; } ?>>Missouri</option>
	<option value="MT" <?php if(isset($_POST["State"]) AND $_POST["State"] == "MT") { echo "selected='selected'"; } ?>>Montana</option>
	<option value="NE" <?php if(isset($_POST["State"]) AND $_POST["State"] == "NE") { echo "selected='selected'"; } ?>>Nebraska</option>
	<option value="NV" <?php if(isset($_POST["State"]) AND $_POST["State"] == "NV") { echo "selected='selected'"; } ?>>Nevada</option>
	<option value="NH" <?php if(isset($_POST["State"]) AND $_POST["State"] == "NH") { echo "selected='selected'"; } ?>>New Hampshire</option>
	<option value="NJ" <?php if(isset($_POST["State"]) AND $_POST["State"] == "NJ") { echo "selected='selected'"; } ?>>New Jersey</option>
	<option value="NM" <?php if(isset($_POST["State"]) AND $_POST["State"] == "NM") { echo "selected='selected'"; } ?>>New Mexico</option>
	<option value="NY" <?php if(isset($_POST["State"]) AND $_POST["State"] == "NY") { echo "selected='selected'"; } ?>>New York</option>
	<option value="NC" <?php if(isset($_POST["State"]) AND $_POST["State"] == "NC") { echo "selected='selected'"; } ?>>North Carolina</option>
	<option value="ND" <?php if(isset($_POST["State"]) AND $_POST["State"] == "ND") { echo "selected='selected'"; } ?>>North Dakota</option>
	<option value="OH" <?php if(isset($_POST["State"]) AND $_POST["State"] == "OH") { echo "selected='selected'"; } ?>>Ohio</option>
	<option value="OK" <?php if(isset($_POST["State"]) AND $_POST["State"] == "OK") { echo "selected='selected'"; } ?>>Oklahoma</option>
	<option value="OR" <?php if(isset($_POST["State"]) AND $_POST["State"] == "OR") { echo "selected='selected'"; } ?>>Oregon</option>
	<option value="PA" <?php if(isset($_POST["State"]) AND $_POST["State"] == "PA") { echo "selected='selected'"; } ?>>Pennsylvania</option>
	<option value="RI" <?php if(isset($_POST["State"]) AND $_POST["State"] == "RI") { echo "selected='selected'"; } ?>>Rhode Island</option>
	<option value="SC" <?php if(isset($_POST["State"]) AND $_POST["State"] == "SC") { echo "selected='selected'"; } ?>>South Carolina</option>
	<option value="SD" <?php if(isset($_POST["State"]) AND $_POST["State"] == "SD") { echo "selected='selected'"; } ?>>South Dakota</option>
	<option value="TN" <?php if(isset($_POST["State"]) AND $_POST["State"] == "TN") { echo "selected='selected'"; } ?>>Tennessee</option>
	<option value="TX" <?php if(isset($_POST["State"]) AND $_POST["State"] == "TX") { echo "selected='selected'"; } ?>>Texas</option>
	<option value="UT" <?php if(isset($_POST["State"]) AND $_POST["State"] == "UT") { echo "selected='selected'"; } ?>>Utah</option>
	<option value="VT" <?php if(isset($_POST["State"]) AND $_POST["State"] == "VT") { echo "selected='selected'"; } ?>>Vermont</option>
	<option value="VA" <?php if(isset($_POST["State"]) AND $_POST["State"] == "VA") { echo "selected='selected'"; } ?>>Virginia</option>
	<option value="WA" <?php if(isset($_POST["State"]) AND $_POST["State"] == "WA") { echo "selected='selected'"; } ?>>Washington</option>
	<option value="WV" <?php if(isset($_POST["State"]) AND $_POST["State"] == "WV") { echo "selected='selected'"; } ?>>West Virginia</option>
	<option value="WI" <?php if(isset($_POST["State"]) AND $_POST["State"] == "WI") { echo "selected='selected'"; } ?>>Wisconsin</option>
	<option value="WY" <?php if(isset($_POST["State"]) AND $_POST["State"] == "WY") { echo "selected='selected'"; } ?>>Wyoming</option>
        </select></td></tr>
        
      <tr align="center"> 
          <td><label for="Degree">Degree:* </label></td>
          <td> Fahrenheit 
              <input type="radio" id="Degree" name="Degree" value="Fahrenheit" checked <?php if(isset($_POST["Degree"]) AND $_POST["Degree"] == "Fahrenheit") { echo "checked";} ?>/>
               Celsius 
              <input type="radio" id="Degree" name="Degree" value="Celsius" <?php if(isset($_POST["Degree"]) AND $_POST["Degree"] == "Celsius") { echo "checked";} ?> /> </td></tr>
      <tr align="center"><td></td>     
 <td><input type="submit" id= "Search" name="Search" value="Search" onclick="return validateloc(); " />
            <input type="submit" name="Clear" value="Clear" onclick="return clearform();"/></td></tr>
 
        <tr align="center"> <td>   <p><i>*_Mandatory Fields</i></p></td> <td></td></tr>        
    </form> 
        <tr align="center"><td></td>
            <td>  <a href="http://forecast.io/">Powered By Forecast.io</a></td></tr>

        </table></center>
    <br>
 
    
    <?php 
    if(isset($_POST["Search"]))
    {
    
        
    $link = "https://maps.google.com/maps/api/geocode/xml?address=".urlencode($_POST["straddr"]) . "," . urlencode($_POST["city"]) . ",".$_POST["State"]."&key=AIzaSyBlPFdiaFnMCM3tk8qGfCBcxo3gRunFdZs";
    
       
    $data = file_get_contents($link);
    $output = simplexml_load_string($data);
    
        
    if($output->status != "OK")
    { ?>
    <script type="text/javascript">alert("Limit reached. Try again later");</script>

    <?php }
        
        else
        {
    
   $lati = $output->result->geometry->location->lat;
   $longi = $output->result->geometry->location->lng;
  
    if($_POST["Degree"] == 'Fahrenheit' )
    {
        $u = "us";
        $c = " &deg; F";
    }
    else if($_POST["Degree"] == 'Celsius')
    {
        $u = "si";
        $c = " &deg; C";
    }
   $fclink = "https://api.forecast.io/forecast/596e1b483586addf58576ee562bde391/".$lati.",".$longi."?"."units=".$u."&"."exclude=flags" ;
     
   $json=file_get_contents($fclink);
   $fcdata=json_decode($json,false);
  ?>
    
   <center><div style="border:3px solid;width:600px;height:450px" align="center" id="clearfunc"><table id="forecast" style="align:center;height:300;width:350">
    <?php
  
        echo "<tr><td id=\"1\"><center>".$fcdata->currently->summary."</td></tr></center>";
        
        echo "<tr><td id=\"2\"><center>".$fcdata->currently->temperature.$c."</td></tr></center>";

    if($fcdata->currently->icon == "clear-day")
   {
        echo '<tr><td><center><img src="http://cs-server.usc.edu:45678/hw/hw6/images/clear.png" alt="clear-day" title="Clear"/></center></td></tr>';
   }
   else if($fcdata->currently->icon == "clear-night")
   {
        echo '<tr><td><center><img src="http://cs-server.usc.edu:45678/hw/hw6/images/clear_night.png" alt="clear-night" title="Clear"/></center></td></tr>';
   }
   else if($fcdata->currently->icon == "rain")
   {
        echo '<tr><td><center><img src="http://cs-server.usc.edu:45678/hw/hw6/images/rain.png" alt="rain" title="Rain"/></center></td></tr>';
   }
   else if($fcdata->currently->icon == "snow")
   {
        echo '<tr><td><center><img src="http://cs-server.usc.edu:45678/hw/hw6/images/snow.png" alt="snow" title="Snow"/></center></td></tr>';
   }
   else if($fcdata->currently->icon == "sleet")
   {
        echo '<tr><td><center><img src="http://cs-server.usc.edu:45678/hw/hw6/images/sleet.png" alt="sleet" title="Sleet"/></center></td></tr>';
   } 
   else if($fcdata->currently->icon == "wind")
   {
        echo '<tr><td><center><img src="http://cs-server.usc.edu:45678/hw/hw6/images/wind.png" alt="wind" title="Wind"/></center></td></tr>';
   } 
   else if($fcdata->currently->icon == "fog")
   {
        echo '<tr><td><center><img src="http://cs-server.usc.edu:45678/hw/hw6/images/fog.png" alt="fog" title="Fog"/></center></td></tr>';
   } 
    else if($fcdata->currently->icon == "cloudy")
   {
        echo '<tr><td><center><img src="http://cs-server.usc.edu:45678/hw/hw6/images/cloudy.png" alt="cloudy" title="Cloudy"/></center></td></tr>';
   }
   else if($fcdata->currently->icon == "partly-cloudy-day")
   {
        echo '<tr><td><center><img src="http://cs-server.usc.edu:45678/hw/hw6/images/cloud_day.png" alt="partly-cloudy-day" title="Partly Cloudy"/></center></td></tr>';
   }
   else if($fcdata->currently->icon == "partly-cloudy-night")
   {
        echo '<tr><td><center><img src="http://cs-server.usc.edu:45678/hw/hw6/images/cloud_night.png" alt="partly-cloudy-night" title="Partly Cloudy"/></center></td></tr>';
   }
    
    
   if($fcdata->currently->precipIntensity >= "0" and $fcdata->currently->precipIntensity <= "0.002")
   {  echo "<tr><td>Precipitation:</td>";
       echo "<td>None</td></tr>"; 
   }
   else if($fcdata->currently->precipIntensity >= "0.002" and $fcdata->currently->precipIntensity <= "0.017")
   {   echo "<tr><td>Precipitation:</td>";
       echo "<td>Very Light</td></tr>";
   }
   else if($fcdata->currently->precipIntensity >= "0.017" and $fcdata->currently->precipIntensity <= "0.1")
   {   echo "<tr><td>Precipitation:</td>";
       echo "<td>Light</td></tr>";
   }
   else if($fcdata->currently->precipIntensity >= "0.1" and $fcdata->currently->precipIntensity <= "0.4")
   {   echo "<tr><td>Precipitation:</td>"; 
       echo "<td>Moderate</td></tr>";
   }  
   
   echo "<tr><td>Chance of Rain:</td>";
   echo "<td>". $fcdata->currently->precipProbability * 100 . "%"."</td></tr>" ; 
   
        
    if($_POST["Degree"] == 'Fahrenheit' )
    {
       
   echo "<tr><td>Wind Speed:</td>";
   echo "<td>". (int)$fcdata->currently->windSpeed ." ". "mph"."</td></tr>" ;
    }
    else if($_POST["Degree"] == 'Celsius')
    {
        
    echo "<tr><td>Wind Speed:</td>";
   echo "<td>". (int)$fcdata->currently->windSpeed ." ". "m/s"."</td></tr>" ;
    }
   

            if($_POST["Degree"] == 'Fahrenheit' )
    {
       
   echo "<tr><td>Dew Point:</td>";
   echo "<td>".(int)$fcdata->currently->dewPoint."&deg F"."</td></tr>" ;
}
    else if($_POST["Degree"] == 'Celsius')
    {
        
    echo "<tr><td>Dew Point:</td>";
   echo "<td>".(int)$fcdata->currently->dewPoint."&deg C"."</td></tr>" ;
    }
            
            
            
   

   echo "<tr><td>Humidity:</td>";
   echo "<td>".$fcdata->currently->humidity  * 100 . "%"."</td></tr>" ; 

        
    if($_POST["Degree"] == 'Fahrenheit' )
    {
       
   echo "<tr><td>Visibility:</td>";
   echo "<td>". $fcdata->currently->visibility . " ". "mi"."</td></tr>" ;
    }
    else if($_POST["Degree"] == 'Celsius')
    {
        
    echo "<tr><td>Visibility:</td>";
   echo "<td>". $fcdata->currently->visibility . " ". "km"."</td></tr>" ;
    }
   
   
  date_default_timezone_set($fcdata->timezone);
    
   
  echo "<tr><td>Sunrise:</td>";
  echo "<td>".date('h:i a', $fcdata->daily->data[0]->sunriseTime)."</td></tr>";
  echo "<tr><td>Sunset:</td>";  
  echo "<td>".date('h:i a', $fcdata->daily->data[0]->sunsetTime )."</td></tr>";

 }
    }
?> 
</table>
</div>
</center>
</body>
</html>
