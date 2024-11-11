<?php
// Numbers
$integer = 42;
$float = 3.14;

// Strings
$string = "Hello, World!";
$multilineString = "This is a
multiline string.";

// Booleans
$trueValue = true;
$falseValue = false;

// Arrays
$array = array(1, 2, 3, 4, 5);
$associativeArray = array("key1" => "value1", "key2" => "value2");

// Accessing array elements
echo $array[0]; // Outputs: 1
echo $associativeArray["key1"]; // Outputs: value1

// Loops
// For loop
for ($i = 0; $i < count($array); $i++) {
    echo $array[$i];
}

// Foreach loop
foreach ($associativeArray as $key => $value) {
    echo "$key => $value";
}

// While loop
$i = 0;
while ($i < count($array)) {
    echo $array[$i];
    $i++;
}

// Functions
function add($a, $b) {
    return $a + $b;
}

echo add(2, 3); // Outputs: 5

// API Calls using cURL
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://fakestoreapi.com/products/1");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$response = curl_exec($ch);
curl_close($ch);

echo $response;

// JSON Handling
$jsonString = '{"key1":"value1","key2":"value2"}';
$jsonArray = json_decode($jsonString, true);
echo $jsonArray["key1"]; // Outputs: value1

// Classes and Objects
class MyClass {
    public $property = "Hello, World!";
    
    public function myMethod() {
        return $this->property;
    }
}

$myObject = new MyClass();
echo $myObject->myMethod(); // Outputs: Hello, World!
?>