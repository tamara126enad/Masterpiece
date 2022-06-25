@extends('/layout/master')
{{-- To add home css file --}}
@section('CSS','index.css')
{{-- To add home title --}}
@section('Title','Najih')
 {{-- To add home body --}}
@section('content')



<section class="contain">
    <div class="container">
        <div class="row">
          <div class="col">
            <div class="card" style="width: 18rem;">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSBaod5kYQYFZUiW5D1GTass_BDtdJW3bIQ06VcQul7tO2tT2xt6AxLVeA9HbVLu84AvDs&usqp=CAU" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Mathmatical</h5>
          <p class="card-text">Tawjihi </p>
          <a href="/teacher" class="btn btn-secondary">Read more</a>
        </div>
      </div>
          </div>
    
          <div class="col">
            <div class="card" style="width: 18rem;">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTM1t4uV6ELMxx8ifmNozFxkiOnJQGHdyZdkB_aKSWshj-a_WloVyo0iBOhd4btgY8xnnU&usqp=CAU" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Mathmatical</h5>
          <p class="card-text">Secondary</p>
          <a href="#" class="btn btn-secondary">Read more</a>
        </div>
      </div>
          </div>
    
          <div class="col">
            <div class="card" style="width: 18rem;">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSBaod5kYQYFZUiW5D1GTass_BDtdJW3bIQ06VcQul7tO2tT2xt6AxLVeA9HbVLu84AvDs&usqp=CAU" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Mathmatical</h5>
          <p class="card-text">Tawjihi</p>
          <a href="#" class="btn btn-secondary">Read more</a>
        </div>
      </div>
          </div>
    
          <div class="col">
            <div class="card" style="width: 18rem;">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTM1t4uV6ELMxx8ifmNozFxkiOnJQGHdyZdkB_aKSWshj-a_WloVyo0iBOhd4btgY8xnnU&usqp=CAU" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Mathmatical</h5>
          <p class="card-text">Secondary / Primary</p>
          <a href="#" class="btn btn-secondary">Read more</a>
        </div>
      </div>
          </div>
        </div>
      </div>
    
    </section>


@endsection
@section('footer')
@endsection