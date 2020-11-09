<?php
$date = '2020-10-01';
$end = '2020-10-' . date('t', strtotime($date)); //get end date of month
?>
<table>
    <tr>
    <?php while(strtotime($date) <= strtotime($end)) {
        $day_num = date('d', strtotime($date));
        $day_name = date('l', strtotime($date));
        $date = date("Y-m-d", strtotime("+1 day", strtotime($date)));
        echo "<td>$day_num</td>";
    }
    ?>
    </tr>
   <!--  ->groupBy('DB::raw('month/day/year')','DB::raw('student_id')') -->
</table>