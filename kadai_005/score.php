<?php
    $score = [80,60,55,40,100,25,80,95,30,60];
    $score_total = $score[0]+$score[1]+$score[2]+$score[3]+$score[4]+$score[5]+$score[6]+$score[7]+$score[8]+$score[9];
    $score_av = $score_total/10;
    echo $score_total;
    echo "<br>";
    echo $score_av;
?>