
<?php
// Check which form was submitted
if (isset($_POST['Nutritionist'])) {
  // Process Nutritionist Form data
  $Nutritionist = $_POST['Nutritionist'];

  // Perform operations with Nutritionist Form data
  echo "Nutritionist: " . $Nutritionist . "<br>";
  
} elseif (isset($_POST['coach'])) {
  // Process coach form data
  $coach = $_POST['coach'];
 

  // Perform operations with coach form data
  echo "coach: " . $coach . "<br>";
  
}
elseif (isset($_POST['city'],$_POST['gyms'],$_POST['type1'])) {
    // Process gyms form data
    $city = $_POST['city'];
    $gyms = $_POST['gyms'];
    $type1 = $_POST['type1'];
    function processData($city, $gyms, $type1) {
        $processedData = array();
    
        for ($i = 0; $i < count($city); $i++) {
          $cities = $city[$i];
          $gym = $gyms[$i];
          $type = $type1[$i];
    
    
          // Add processed data to the array
          $processedData[] = array(
            'City' => $cities,
            'gym' => $gym,
            'type' => $type
          );
        }
    
        return $processedData;
      }
    
      // Process the form data
      $processedData = processData($city, $gyms,$type1);
    
      // Display the table
      echo "<table border=2>
              <thead>
                <tr>
                  <th>City</th>
                  <th>gym</th>
                  <th>type</th>
                </tr>
              </thead>
              <tbody>";
    
      foreach ($processedData as $data) {
        $cities = $data['City'];
        $gym = $data['gym'];
        $type = $data['type'];
    
        echo "<tr>
                <td>$cities</td>
                <td>$gym</td>
                <td>$type</td>
              </tr>";
      }
    
      echo "</tbody></table>";
    }

   




else {
  // No form submitted
  echo "No form submitted.";
}
?>