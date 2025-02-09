```php
$file = fopen("nonexistent_file.txt", "r");
if ($file === false) {
    // Handle the error appropriately.  Get more details with error_get_last()
    $error = error_get_last();
    echo "Error opening file: " . $error['message'];
} else {
    // Process the file
    $contents = fread($file, filesize("nonexistent_file.txt"));
    fclose($file);
}
```