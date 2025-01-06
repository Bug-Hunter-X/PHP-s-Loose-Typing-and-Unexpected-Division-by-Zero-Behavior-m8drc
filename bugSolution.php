```php
function my_function($a, $b) {
  if ($a === 0) {
    if ($b === 0) { 
      return NAN; // Handle the case of 0/0 which is undefined
    } else {
      return INF * ($b > 0 ? 1 : -1); // Return infinity (+infinity for positive b, -infinity for negative b)
    }
  }
  return $b / $a;
}

$result = my_function(0, 10);
echo $result; // Outputs INF

$result = my_function(5, 10);
echo $result; // Outputs 2

$result = my_function(0,0);
echo $result; //Outputs NAN
```