
<div class="card mb-3">
  <img src="https://allea.org/wp-content/uploads/2019/06/shutterstock_520698799small-1500x430.jpg" class="card-img-top" alt="">
  <div class="card-body">
    <h5 class="card-title">List of Students</h5>
    <p class="card-text">You can find here information of students</p>
    
    <table class="table">
  <thead>
    <tr>
      
      <th scope="col">CNE</th>
      <th scope="col">First Name</th>
      <th scope="col">Seconde Name</th>
      <th scope="col">Age</th>
      <th scope="col">Speciality</th>
      <th scope="col">Oprations</th>
    </tr>
  </thead>
  <tbody>
  
  @foreach($students as $student )
    <tr>
      
      <td>{{ $student->cne }}</td>
      <td>{{ $student->firstName }}</td>
      <td>{{ $student->secondeName }} </td>
      <td>{{ $student->age }}</td>
      <td>{{ $student->speciality }}</td>
      <td>
        
        <a href="{{url('/edit/'.$student->id )}}" class="btn btn-sm btn-warning">Edit</a>
        
      </td>

    </tr>
@endforeach
  </tbody>
</table>
  </div>

