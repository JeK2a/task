<?php

    foreach ($data as $key => $task) {
        echo '<div>';
            echo '<div >';
                echo $task['id']     . '<br>';
                echo $task['user']   . '<br>';
                echo $task['e-mail'] . '<br>';
                echo $task['text']   . '<br>';
            echo '</div>';
            echo '<div>';
                echo "<img src='/application/views/gettask.php?id=" . $task['id'] . " width='320' height='240' alt=''/>";
            echo '</div>';
        echo '</div>';
    }

?>

