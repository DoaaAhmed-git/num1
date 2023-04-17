<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

<link rel="stylesheet" type="text/css" href="{{asset('css/style.')}}">

    <title>student management system Doaa</title>
  </head>
  <body>
    
@include("navbar")

<div class="row header-container justify-content-center">
<div class="header">
  <center> <h1>Student Management System</h1></center>
</div>
</div>

@if($layout =='index')

<div class="container-fluid mt-4">
<div class="row">
  <section class="col-md-5">
   @include("studentslist")
   </section>
  <section class="col">
    
  </section>
  </div>
</div>

@elseif($layout =='create')
<div class="container-fluid mt-4">
<div class="row">
  <section class="col">
   @include("studentslist")
   </section>
  <section class="col">
    
<div class="card mb-3">
  <img src=" https://www.unicef.org/sites/default/files/styles/hero_desktop/public/UN0149769_4.jpg?itok=P79UmRal" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Student Management System</h5>
   


@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif



    <form action="{{ url('/store') }}"  method="post">
@csrf
    <div class="form_group">
  <label>CNE</label>
  <input  name="cne" type="text" class="form-control"  placeholder="Enter cne" class="@error('title') is-invalid @enderror">
</div>

<div class="form_group">
  <label>First Name</label>
  <input  name="firstName" type="text" class="form-control"  placeholder="Enter the First Name" class="@error('title') is-invalid @enderror"  pattern="[a-zA-Z'-'\s]*">
</div>

<div class="form_group">
  <label>Seconde Name</label>
  <input  name="secondeName" type="text" class="form-control"  placeholder="Enter the Seconde Name" class="@error('title') is-invalid @enderror"  pattern="[a-zA-Z'-'\s]*">
</div>

<div class="form_group">
  <label>age</label>
  <input  name="age" type="text" class="form-control"  placeholder="Enter age" class="@error('title') is-invalid @enderror" pattern="[7-9]{1}[0-9]{9}" >
</div>

<div class="form_group">
  <label>Specialty</label>
  <input  name="speciality" type="text" class="form-control"  placeholder="Enter speciality" class="@error('title') is-invalid @enderror">
</div>

<input type="submit" class="btn btn-info" value="Save">
<input type="reset" class="btn btn-warning" value="Reset">
</form>







  </div>
</div>


  </section>
  </div>
</div>
@elseif($layout =='show')
<div class="container-fluid mt-4">
<div class="row">
  <section class="col">
   @include("studentslist")
   </section>
  <section class="col">
    
  </section>
  </div>
</div>
@elseif($layout =='edit')
<div class="container-fluid mt-4">
<div class="row">
  <section class="col-md-7">
   @include("studentslist")
   </section>
  <section class="col-md-5">

  <div class="card mb-3">
  <img src="https://images.theconversation.com/files/45159/original/rptgtpxd-1396254731.jpg?ixlib=rb-1.1.0&q=45&auto=format&w=600&h=400&fit=crop&dpr=1" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Update student,s information</h5>
    <form action="{{ url('/update/'.$student->id) }}"  method="post">
@csrf
    <div class="form_group">
  <label>CNE</label>
  <input  value="{{$student->cne}}" name="cne" type="text" class="form-control"  placeholder="Enter cne">
</div>

<div class="form_group">
  <label>First Name</label>
  <input  value="{{$student->firstName}}" name="firstName" type="text" class="form-control"  placeholder="Enter the First Name">
</div>

<div class="form_group">
  <label>Seconde Name</label>
  <input value="{{$student->secondeName}}" name="secondeName" type="text" class="form-control"  placeholder="Enter the Seconde Name">
</div>

<div class="form_group">
  <label>age</label>
  <input value="{{$student->age}}" name="age" type="text" class="form-control"  placeholder="Enter age">
</div>

<div class="form_group">
  <label>Specialty</label>
  <input value="{{$student->speciality}}" name="speciality" type="text" class="form-control"  placeholder="Enter speciality">
</div>

<input type="submit" class="btn btn-info" value="Update">
<input type="reset" class="btn btn-warning" value="Reset">
</form>
  </div>
</div>

    
  </section>
  </div>
</div>
@endif

<footer> </footer>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
    -->
  </body>
</html>
