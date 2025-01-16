The `isset()` function is the correct way to check if a variable is set in PHP. 

```php
if (!isset($myVariable)) {
  echo "Variable is not set";
}
```

This code will only execute if `$myVariable` has not been defined or assigned any value.  It correctly handles cases where `$myVariable` might be 0 or an empty string.