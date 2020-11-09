<!DOCTYPE html>
<html>
<head>
	<title>Student's form</title>
</head>
<body>
	<form class="form-std" action="{{route('att.store')}}" method="POST">
		{{ method_field('PUT')  }}
		{{ csrf_field() }}
	<table>
		<tbody>
			@foreach($data as $student)
			<tr>
			<td>{{$student->name}}<input type="hidden" name="name" value="{{$student->id}}" disabled=""></td>
			<!-- <td>
				<input type="checkbox" name="check[]" value="1"/>Present
 				<input type="checkbox" name="check[]" value="0"/>Absent
 			
</td> -->

<div class="col-md-6">
             <input type="radio" name="status[]" value="{{$student->present}}" id="{{ $student->id}}">
            <lable for="{{ $student->id}}">Present</lable><br>
             <input type="radio" name="status[]" value="{{$student->absent}}" id="{{ $student->id}}">
             <label for="{{ $student->id}}">absent</label>
              <br>              
            </div>




			<!-- <td>
				<input  name="status[]" type="radio"  value="0"> present
  				<input  name="status[]"type="radio" value="1"> absent</td>
  			<td> -->
  				<input type="date" name="date"></td>
			</tr><br>
		@endforeach
		</tbody>
		</table>
		<input type="submit" value="save">
	</form>
</body>
</html>