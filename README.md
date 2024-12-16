# Silent Failure in PHP's DateTime::createFromFormat()

This repository demonstrates a subtle bug in PHP's `DateTime::createFromFormat()` function.  When provided with an invalid date format, the function returns `false` without issuing any warnings or errors, potentially leading to unexpected behavior in applications.

The `bug.php` file contains code that showcases this issue.  The solution, shown in `bugSolution.php`, uses error control operators to explicitly check for errors during date creation and provide more robust error handling.