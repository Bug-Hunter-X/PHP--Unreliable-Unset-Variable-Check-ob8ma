# PHP: Unreliable Unset Variable Check

This repository demonstrates a common error in PHP: using loose comparison (`!==`) to check if a variable is set.  This approach is unreliable because `0` and an empty string (`""`) will also evaluate to `false` in a boolean context.

The file `bug.php` shows the problematic code.  The file `bugSolution.php` demonstrates a more robust approach using the `isset()` function.

**Problem:** The `if (!$myVariable)` statement will incorrectly treat `0` and `""` as unset variables. 

**Solution:** Using `isset($myVariable)` provides a reliable way to check if a variable is set and has a defined value.