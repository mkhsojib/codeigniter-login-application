<html>
<head>
    <title>User view</title>
</head>

<body>

<h1>


    <?php


//    echo $results;

    foreach ($results as $object) {

        echo $object->username . '<br/>';

    }

    ?>
</h1>


</body>
</html>