<?php
// Retrieve the form data using $_POST
// Retrieve the form data using $_POST
$email = $_POST['Email'];
$phone = $_POST['Telephone'];
$q1 = $_POST['Q1'];
$q2 = $_POST['Q2'];
$q3 = $_POST['Q3'];
$q4 = $_POST['Q4'];
$q5 = $_POST['Q5'];
$q6 = $_POST['Q6'];

// If single form submission
if (!is_array($email)) {
    $email = [$email];
    $phone = [$phone];
    $q1 = [$q1];
    $q2 = [$q2];
    $q3 = [$q3];
    $q4 = [$q4];
    $q5 = [$q5];
    $q6 = [$q6];
}

function processData($email, $phone, $q1, $q2, $q3, $q4, $q5, $q6) {
    $processedData = array();

    for ($i = 0; $i < count($email); $i++) {
        $emails = $email[$i];
        $phones = $phone[$i];
        $qs1 = $q1[$i];
        $qs2 = $q2[$i];
        $qs3 = $q3[$i];
        $qs4 = $q4[$i];
        $qs5 = $q5[$i];
        $qs6 = $q6[$i];

        // Add processed data to the array
        $processedData[] = array(
            'email' => $emails,
            'Telephone' => $phones,
            'q1' => $qs1,
            'q2' => $qs2,
            'q3' => $qs3,
            'q4' => $qs4,
            'q5' => $qs5,
            'q6' => $qs6
        );
    }

    return $processedData;
}

// Process the form data
$processedData = processData($email, $phone, $q1, $q2, $q3, $q4, $q5, $q6);

// Display the table
echo "<table border=2>
        <thead>
          <tr>
            <th>Email</th>
            <th>Telephone</th>
            <th>Q1</th>
            <th>Q2</th>
            <th>Q3</th>
            <th>Q4</th>
            <th>Q5</th>
            <th>Q6</th>
          </tr>
        </thead>
        <tbody>";

foreach ($processedData as $data) {
    $emails = $data['email'];
    $phones = $data['Telephone'];
    $qs1 = $data['q1'];
    $qs2 = $data['q2'];
    $qs3 = $data['q3'];
    $qs4 = $data['q4'];
    $qs5 = $data['q5'];
    $qs6 = $data['q6'];



    echo "<tr>
            <td>$emails</td>
            <td>$phones</td>
            <td>$qs1</td>
            <td>$qs2</td>
            <td>$qs3</td>
            <td>$qs4</td>
            <td>$qs5</td>
            <td>$qs6</td>
          </tr>";
  }

  echo "</tbody></table>";
?>
