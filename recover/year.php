<?php 
function yearDropdown($startYear, $endYear, $id="year"){ 
    //start the select tag 
    echo "<select id=".$id." name=".$id.">n"; 
          
        //echo each year as an option     
        for ($i=$startYear;$i<=$endYear;$i++){ 
        echo "<option value=".$i.">".$i."</option>n";     
        } 
      
    //close the select tag 
    echo "</select>"; 
} 
?>
<?php 
function yearDropdown($startYear, $endYear, $id="year"){ 
    //start the select tag 
    echo "<select id=".$id." name=".$id.">n"; 
          
        //echo each year as an option     
        for ($i=$startYear;$i<=$endYear;$i++){ 
        echo "<option value=".$i.">".$i."</option>n";     
        } 
      
    //close the select tag 
    echo "</select>"; 
} 
?>