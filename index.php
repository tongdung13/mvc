<?php
        include "./data/data.php";

        ?>



<!DOCTYPE html>
<html lang="en">
<head>
    <title>Mobile</title>
</head>
<body>
<?php
    if (isset($_GET['page_layout'])) {
        switch ($_GET['page_layout']) {
            case 'list' :
                require_once 'views/list.php';
                break;
            default:
                require_once 'views/list.php';
        }
    } else {
        require_once 'views/list.php';
    }

?>


</body>
</html>
