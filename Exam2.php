<?php
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    if (isset($_GET['DB'])) {
        echo "Delete Button is clicked";
    } else {
        echo "Save Changes Button is clicked";
    }
}
?>
