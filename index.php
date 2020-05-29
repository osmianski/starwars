<?php

include 'vendor/autoload.php';

use Michelf\MarkdownExtra;

?>
<!DOCTYPE html>
<html>
<head>
    <title>Title</title>
    <link rel="stylesheet" href="styles.css">
    <meta charset="utf-8"/>
</head>
<body>

<div class="wrap">
    <div class="text">
        <?php echo MarkdownExtra::defaultTransform(file_get_contents(
            __DIR__ . '/index.md')) ?>
    </div>
</div>

</body>
</html>
