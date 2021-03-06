@extends('layouts.app')

@section('content')
<div class="sidebar bar-block border-right" style="display:none" id="mySidebar1">
  <div class = "phase1-header"> 
    <button onclick="button3_close()" class="bar-item large phase1">Close</button>
    <h2 class="heading bar-item"> Reports </h2>
  </div>
  <br>
    <a href="Phase1/CourseList" class="bar-item reports_button">Course List</a>
    <a href="Phase1/CourseList" class="bar-item reports_button">Teacher's List</a>
</div>

<div class="sidebar bar-block border-right" style="display:none" id="mySidebar2">
  <div class = "phase2-header"> 
    <button onclick="button5_close()" class="bar-item large phase2">Close</button>
    <h2 class="heading bar-item"> Reports </h2>
  </div>
  <br>
    <a href="#" class="bar-item reports_button">Offered Courses</a>
    <a href="#" class="bar-item reports_button">Summary of Course Loads</a>
    <a href="#" class="bar-item reports_button">Faculty Requirements Calculation</a>
</div>

<div class="sidebar bar-block border-right" style="display:none" id="mySidebar3">
  <div class = "phase3-header"> 
    <button onclick="button7_close()" class="bar-item large phase3">Close</button>
    <h2 class="heading bar-item"> Reports </h2>
  </div>
  <br>
    <a href="#" class="bar-item reports_button">Semester-Wise Course Load</a>
    <a href="#" class="bar-item reports_button">Teacher-Wise Course Load</a>
</div>

<div class= "main-part">
  <div class="p1-row">
    <span class="column Phase1">
      <div><button class="buttons1 button1" onclick="window.location.href='http://127.0.0.1:8000/Phase1/AddCourses';">Add Course</button></div>
      <div><button class="buttons1 button2" onclick="window.location.href='http://127.0.0.1:8000/Phase1/AddTeacher';">Add Teacher</button></div>
      <div><button class="buttons1 button3" onclick = "button3_open()">Reports</button></div>
    </span>

    <span class="column Phase2">
      <div><button class="buttons2 button4">Offer Course</button></div>
      <div><button class="buttons2 button5" onclick = "button5_open()">Reports</button></div>
    </span>

    <span class="column Phase3">
      <div><button class="buttons3 button6">Assign Teacher</button></div>
      <div><button class="buttons3 button7" onclick = "button7_open()">Reports</button></div>
    </span>
  </div>
</div>
@endsection
