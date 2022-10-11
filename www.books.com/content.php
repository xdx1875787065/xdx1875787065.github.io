<?php
$books=array('php1.jpg','php2.jpg','php3.jpg','php4.jpg','php5.jpg','php6.jpg');
?>
<div class="booklist">
    <?php
        echo "<ul>";
        foreach ($books as $value) {
            echo "<li>";
            echo "<img src='./images/".$value."'>";
            echo "</li>";
        }
        echo "</ul>";
    ?>
</div>
