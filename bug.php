```php
$date = DateTime::createFromFormat('j-M-Y', '10-Dec-1970');
if ($date) {
    echo $date->format('Y-m-d');
} else {
    echo 'Invalid date format';
}
```