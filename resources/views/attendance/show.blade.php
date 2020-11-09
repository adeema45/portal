<!DOCTYPE html>
<html>
<head>
	<title>Attendance List</title>
</head>
<body>
<table>
	
	<tbody>
			<tr>
		<td>ID: {{ $at->id}}</td><br>
		<td>STUDENT ID: {{ $at->student_id}}</td><br>
		<td>CLASS ID: {{ $at->class_id}}</td><br>
		<td>SECTION ID: {{ $at->section_id}}</td><br>
		<td>DATE: {{ $at->date}}</td><br>
		<td>STATUS: {{ $at->status}}</td><br>
		</tr>
			</tbody>
</table>
</body>
</html>