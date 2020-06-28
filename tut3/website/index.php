<html>
    <head>
        <title>Learners</title>
    </head>

    <body>
        <h1>Learners in the classroom</h1>
        <ul>
            <?php

            $json = file_get_contents('http://learner-service/');
            $obj = json_decode($json);

            $learners = $obj->learners;

            foreach ($learners as $learner) {
                echo "<li>$learner</li>";
            }

            ?>
        </ul>
    </body>
</html>

