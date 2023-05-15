<?php

class TableBuilder {
  private $data;

  public function __construct($data) {
    $this->data = $data;
  }

  public function createTableFromObjects() {
    $table = "<table border=2>";
    $table .= "<tr>";

    // Create table header row
    $keys = array_keys($this->data[0]);
    foreach ($keys as $key) {
      $table .= "<th>$key</th>";
    }
    $table .= "</tr>";

    // Create table data rows
    foreach ($this->data as $obj) {
      $table .= "<tr>";
      foreach ($keys as $key) {
        $value = $obj[$key];
        $formattedValue = $this->formatValue($value);
        $table .= "<td>$formattedValue</td>";
      }
      $table .= "</tr>";
    }

    $table .= "</table>";

    return $table;
  }

  private function formatValue($value) {
    // Apply formatting based on value or condition
    if (is_numeric($value)) {
      // Example: Format numbers to two decimal places
      return number_format($value, 2);
    } else {
      // Example: Capitalize the first letter of strings
      return ucfirst($value);
    }
  }
}

$data = [
  ["name" => "carbs", "recomandedRange" => "45-65%", "lowerCarbHigherProtine" => "45%", "lowerCarbAndFatHigherProtine" => "45%"],
  ["name" => "protine", "recomandedRange" => "10-35%", "lowerCarbHigherProtine" => "25%", "lowerCarbAndFatHigherProtine" => "30%"],
  ["name" => "fat", "recomandedRange" => "20-35%", "lowerCarbHigherProtine" => "30%", "lowerCarbAndFatHigherProtine" => "25%"]
];

$tableBuilder = new TableBuilder($data);
$table = $tableBuilder->createTableFromObjects();

echo $table;
?>
