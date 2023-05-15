<?php
// Retrieve the form data using $_POST

$name = $_POST['name'];
$gender = $_POST['gender'];
$age = $_POST['age'];
$weight = $_POST['weight'];
$height = $_POST['height'];
$midecal = $_POST['midecal'];
$midecal2 = $_POST['midecal2'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$pass = $_POST['pass'];
$city = $_POST['city'];



// If single form submission
if (!is_array($name)) {
    $name = [$name];
    $gender = [$gender];
    $age = [$age];
    $weight = [$weight];
    $height = [$height];
    $midecal = [$midecal];
    $midecal2 = [$midecal2];
    $phone = [$phone];
    $email = [$email];
    $pass = [$pass];
    $city = [$city];
    
}

function processData($name, $gender, $age, $weight, $height, $midecal , $midecal2 ,$phone,$email,  $pass, $city) {
    $processedData = array();

    for ($i = 0; $i < count($name); $i++) {
        $names = $name[$i];
        $genders = $gender[$i];
        $ages = $age[$i];
        $weights= $weight[$i];
        $heights = $height[$i];
        $midecals = $midecal[$i];
        $midecals2 = $midecal2[$i];
        $phones = $phone[$i];
        $emails = $email[$i];
        $passw = $pass[$i];
        $cities = $city[$i];
        

        // Add processed data to the array
        $processedData[] = array(
            'name' => $names,
            'gender' => $genders,
            'age' => $ages,
            'weight' => $weights,
            'height' => $heights,
            'midecal' => $midecals,
            'midecal2' => $midecals2,
            'phone' => $phones,
            'email' => $emails,  
            'pass' => $passw,
            'city' => $cities
            
        );
    }

    return $processedData;
}

// Process the form data
$processedData = processData($name, $gender, $age, $weight, $height, $midecal , $midecal2 ,$phone,$email,  $pass, $city);

// Display the table
echo "<table border=2 >
        <thead>
          <tr>
            <th>name</th>
            <th>gender</th>
            <th>age</th>
            <th>weight</th>
            <th>height</th>
            <th>midecal</th>
            <th>midecal2</th>
            <th>phone</th>
            <th>email</th>
            <th>password</th>
            <th>city</th>
          </tr>
        </thead>
        <tbody>";

foreach ($processedData as $data) {
    $names = $data['name'];
    $genders = $data['gender'];
    $ages = $data['age'];
    $weights = $data['weight'];
    $heights = $data['height'];
    $midecals = $data['midecal'];
    $midecals2 = $data['midecal2'];
    $phones = $data['phone'];
    $emails = $data['email'];
    $passw = $data['pass'];
    $cities = $data['city'];
   



    echo "<tr>
            
            <td>$names</td>
            <td>$genders</td>
            <td>$ages</td>
            <td>$weights</td>
            <td>$heights</td>
            <td>$midecals</td>
            <td>$midecals2</td>
            <td>$phones</td>
            <td>$emails</td>
            <td>$passw</td>
            <td>$cities</td>
          </tr>";
  }

  echo "</tbody></table>";
?>
