```php
$dateString = '10-Dec-1970';
$format = 'j-M-Y';

$date = DateTime::createFromFormat($format, $dateString);

// Suppress warnings and check the return value of createFromFormat
$errors = libxml_use_internal_errors(true);
$date = DateTime::createFromFormat($format, $dateString);
libxml_clear_errors();

if ($date === false) {
    //Check if there are errors
    if($errors){
        $error = libxml_get_last_error();
        echo "Error creating date: " . $error->message;
    } else{
        echo 'Invalid date format';
    }
} else {
    echo $date->format('Y-m-d');
}
```