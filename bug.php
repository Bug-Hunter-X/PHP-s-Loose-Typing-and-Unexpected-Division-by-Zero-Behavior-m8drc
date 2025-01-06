```php
function my_function($a, $b) {
  if ($a === 0) {
    return $b; // Correct handling of division by zero
  }
  return $b / $a;
}

$result = my_function(0, 10);
echo $result; // Outputs 10

$result = my_function(5, 10);
echo $result; // Outputs 2

$result = my_function(0,0); //What will happen here?
echo $result; //Outputs 0
```