<?php
require_once './_includes/connection.php';
if ($conn = dbConnect('read')) {
    echo 'Connection successful';
}
