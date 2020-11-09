<!DOCTYPE html>
<html>
<head>
	<title>Student's form</title>
</head>
<body>
	
	<?php
	
$date = '2020-11-01';
$end = '2020-11-' . date('t', strtotime($date)); //get end date of month
?>
	{{$data}}
	<table border="1px">
		@foreach($data as $dh)
		@endforeach
		<tbody>
			<tr>
			<th>Name:</th>
			<th>Class ID:</th>
			<th>Section ID:</th>
			<th>Session:</th>
			<th>
			<?php while(strtotime($date) <= strtotime($end)) {
        $day_num = date('d', strtotime($date));
        $day_name = date('l', strtotime($date));
        $date = date("Y-m-d", strtotime("+1 day", strtotime($date)));
        echo "<td>$day_num</td>";
    }
    ?>
			</th>
		</tr>

		@foreach($data as $d)

		<tr>
			<td>{{$d->students->name}}</td>
			<td>{{$d->students->classid}}</td>
			<td>{{$d->students->sectionid}}</td>
			<td>{{$d->students->session}}</td>
			@foreach($data as $lr)
			<td>
			@if($lr->status == 1)
				P
			@elseif($lr->status == 0)
				A
			@endif
			</td>
			@endforeach
		</tr>
		@endforeach
		</tbody>
	</table>
	
</body>
</html>