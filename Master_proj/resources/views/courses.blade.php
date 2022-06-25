@extends('/layout/master')
{{-- To add home css file --}}
@section('CSS','course.css')
{{-- To add home title --}}
@section('Title','Courses')
 {{-- To add home body --}}
@section('content')
 
<section class="contain">
<div class="container">
    <div class="row">
      <div class="col">
        <div class="card" style="width: 18rem;">
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRr-5ZGsmlRDRE6shESIoOKtMXCAEVCmX9S3yO7H99BV6OzsMXDlgjSg-_49HTnKZDHsdc&usqp=CAU" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Mathmatical</h5>
      <p class="card-text">Tawjihi </p>
      <a href="/teach" class="btn btn-secondary">Teachers</a>
    </div>
  </div>
      </div>

      <div class="col">
        <div class="card" style="width: 18rem;">
    <img src="https://cdn3.vectorstock.com/i/thumb-large/02/57/literature-school-subject-icon-education-vector-32720257.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">English</h5>
      <p class="card-text">Secondary</p>
      <a href="#" class="btn btn-secondary">Teachers</a>
    </div>
  </div>
      </div>

      <div class="col">
        <div class="card" style="width: 18rem;">
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS9BekXxnFuXS5dUW8gRj3LNM2GwB7UZZ1GgtUc3eRSmMvlPa_I1LO6lYKXsIrt3TEfn6c&usqp=CAU" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">physics</h5>
      <p class="card-text">Tawjihi</p>
      <a href="#" class="btn btn-secondary">Teachers</a>
    </div>
  </div>
      </div>

      <div class="col">
        <div class="card" style="width: 18rem;">
    <img src="https://cdn5.vectorstock.com/i/thumb-large/02/34/biology-school-subject-icon-education-and-science-vector-32720234.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Biology</h5>
      <p class="card-text">Tawjihi</p>
      <a href="/teach" class="btn btn-secondary">Teachers</a>
    </div>
  </div>
      </div>
    </div>
  </div>

</section>

@endsection
@section('footer')
@endsection