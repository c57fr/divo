<?php

require_once $_SERVER["DOCUMENT_ROOT"] . DIRECTORY_SEPARATOR .'/models/comments.php';

$comments = getComments();

?>

<hr>
<div>
    <?php
    foreach ($comments as $comment) {
    ?>
    <div>
        <address>
            <?php echo $comment['name'] ?>
            <br>
            <?php echo $comment['email'] ?>
        </address>
        <p>
            <?php echo $comment['message'] ?>
        </p>
    </div>
        <hr>
    <?php
    }
    ?>
</div>
