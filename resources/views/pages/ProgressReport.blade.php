@extends('layouts.app')

@section('content')
<h1><center>{{$title}}</center></h1>
<h4><center>Weighting of Paper and Profile Dimensions</center></h4>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card1">
               <div class="content table-responsive table-full-width">
                    <table class="table table-hover table-striped">
	<center><tbody><b>
		<tr>
			<th>Profiles</th>
			<th>Paper 1</th>
			<th>Paper 2</th>
			<th>Total</th>
		</tr>
		<tr>
			<td>Knowledge</td>
			<td>{{$title}}</td>
			<td>{{$title}}</td>
			<td>{{$title}}</td>
		</tr>

		<tr>
			<td>Comprehension</td>
			<td>{{$title}}</td>
			<td>{{$title}}</td>
			<td>{{$title}}</td>
		</tr>

		<tr>
			<td>Reasoning</td>
			<td>{{$title}}</td>
			<td>{{$title}}</td>
			<td>{{$title}}</td>
		</tr>
		<tr>
			<td> Your Total </td>
      <td>{{$title}}</td>
      <td>{{$title}}</td>
      <td>{{$title}}</td>
    </tr>

    <tr>
      <td>Exam Total</td>
			<td>60</td>
			<td>120</td>
			<td>180</td>
		</tr>
</b></tbody>	</table></center>

                            </div>
                        </div>
                    </div>

<br /><br />

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card1">
               <div class="content table-responsive table-full-width">
                    <table class="table table-hover table-striped">
<h4><b><center>Format of Examination - Paper 1<br />
<i>(1 hour 30 minutes)<br />(60 Items - 1 minute 30 seconds per Item)</i></center></b></h4><br/ >

	<tbody>
		<tr>
			<th>Section</th>
			<th>Number of Items</th>
			<th>Duration</th>
			<th>Examination Marks</th>
			<th>Examinaion Section </th>
		</tr>
		<tr>
			<td>Computation</td>
			<td>6</td>
			<td>1 Week</td>
			<td>10 Marks</td>
			<td>Section 1</td>
		</tr>
		<tr>
			<td>Number Theory</td>
			<td>4</td>
			<td>1 Week</td>
			<td>10 Marks</td>
			<td>Section 1</td>
		</tr>
		<tr>
			<td>Consumer Arithmetic</td>
			<td>8</td>
			<td>1 Week</td>
			<td>15 Marks</td>
			<td>Section 1</td>
		</tr>
		<tr>
			<td>Sets</td>
			<td>4</td>
			<td>1 Week</td>
			<td>15 Marks</td>
			<td>Section 1</td>
		</tr>
		<tr>
			<td>Measurement</td>
			<td>8</td>
			<td>1 Week</td>
			<td>15 Marks</td>
			<td>Section 1</td>
		</tr>
		<tr>
			<td>Statistics</td>
			<td>6</td>
			<td>1 Week</td>
			<td>15 Marks</td>
			<td>Section 1</td>
		</tr>
		<tr>
			<td>Algebra</td>
			<td>9</td>
			<td>1 Week</td>
			<td>15 Marks</td>
			<td>Section 1</td>
		</tr>
		<tr>
			<td>Relations, Functions and Graphs</td>
			<td>6</td>
			<td>1 Week</td>
			<td>15 Marks</td>
			<td>Section 1</td>
		</tr>
		<tr>
			<td>Geometry and Trigonometry</td>
			<td>9</td>
			<td>1 Week</td>
			<td>15 Marks</td>
			<td>Section 1</td>
		</tr>
	</tbody>	</table>
</div></div></div>


<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card1">
               <div class="content table-responsive table-full-width">
                    <table class="table table-hover table-striped">
<h4><b><center>Format of Examination - Paper 2<br />
<i>(2 hours and 40 minutes)</i>

	<p><i>(90 Marks- 2 minutes per Item)</i></p></center></b></h4><br/ >

		<tbody>
			<tr>
				<th>Section I</th>
				<th>Number of Items</th>
				<th>Duration</th>
				<th>Examination Marks</th>
				<th>Examinaion Section </th>
			</tr>
			<tr>
				<td>Sets</td>
				<td>5</td>
				<td>1 Week</td>
				<td>10 Marks</td>
				<td>Section 1</td>
			</tr>
			<tr>
				<td>Consumer Arithmetic and Computation </td>
				<td>10</td>
				<td>1 Week</td>
				<td>10 Marks</td>
				<td>Section 1</td>
			</tr>
			<tr>
				<td>Measurement </td>
				<td>10</td>
				<td>1 Week</td>
				<td>10 Marks</td>
				<td>Section 1</td>
			</tr>
			<tr>
				<td>Algebra</td>
				<td>10</td>
				<td>1 Week</td>
				<td>15 Marks</td>
				<td>Section 1</td>
			</tr>
			<tr>
				<td>Relations, Functions and Graphs </td>
				<td>15</td>
				<td>1 Week</td>
				<td>15 Marks</td>
				<td>Section 1</td>
			</tr>
			<tr>
				<td>Geometry and Trigonometry </td>
				<td>10</td>
				<td>1 Week</td>
				<td>15 Marks</td>
				<td>Section 1</td>
			</tr>
			<tr>
				<td>Combination question/ investigation</td>
				<td>20<br />
				10</td>
				<td>1 Week</td>
				<td>15 Marks</td>
				<td>Section 1</td>
			</tr>
			<tr>
				<td><b>Section II </b></td>
				<td>This section will consist of 3 structured or problem-solving questions based mainly on the Optional Objectives of the syllabus. There will be 1 question from each of the Sections Algebra and Relations, Functions and Graphs; Measurement and Geometry and Trigonometry; and Vectors and Matrices. Candidates will be required to answer any two questions. Each question will be allocated 15 marks.</td>
				<td>7 Weeks</td>
				<td>30 Marks</td>
				<td>Section 2</td>
			</tr>
		</tbody>
	</table>

                            </div>
                        </div>
                    </div>
  @endsection
