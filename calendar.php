<?php
 function calendar($month, $year) {
    $nbrOfDay = cal_days_in_month(CAL_GREGORIAN, $month, $year);

   echo "<table>";

   echo "<thead><tr><th>Lun</th><th>Mar</th><th>Mer</th><th>Jeu</th><th>Ven</th><th>Sam</th><th>Dim</th></tr></thead>";

   for($i=1;$i<=$nbrOfDay;$i++) {

      $day = cal_to_jd(CAL_GREGORIAN, $month, $i, $year);

      $dayWeek = jddayofweek($day);

      if($i == $nbrOfDay)
      {
         if($dayWeek == 1)
         {
            echo "<tr>";
         }
        
        echo "<td>".$i."</td></tr>";

      }elseif($i == 1){

         echo "<tr>";

         if($dayWeek == 0)
         {
            $dayWeek = 7;
         }

         for($j=1;$j!=$dayWeek;$j++) {
            echo "<td></td>";
         }

         echo "<td>".$i."</td>";

         if($dayWeek == 7) 
         {
            echo "</tr>";
         }
      }else{
         if($dayWeek == 1)
         {
            echo "<tr>";
         }

         echo "<td>".$i."</td>";

         if($dayWeek == 0)
         {
            echo "</tr>";
         }
      }
   }

   echo "</table>";
 }

calendar($month, $year);