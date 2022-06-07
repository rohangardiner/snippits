<?php
  var feedback_total = document.getElementById("reacttotal");
  var feedback_score = document.getElementById("reactscore");
  if (feedback_total && feedback_score) {
    
    const d = new Date();
    var dayofweek = d.getDay();
    var split = Math.floor(((d.getDate() + d.getDay())*10) / (d.getMonth() + 1));
    
    var avg = 100;
    for (let i = 0; i < split; i++) {
      (i % 9 == 0) ? avg += 0 : avg += 100;
    }
    
    /* Set total number of responses */
    feedback_total.innerHTML = split;
    
    /* Set current score out of 100 */
    feedback_score.innerHTML = Math.round((avg/split) * 10) / 10;
?>
