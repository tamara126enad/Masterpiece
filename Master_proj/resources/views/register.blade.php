@extends('/layout/master')
{{-- To add home css file --}}
@section('CSS','register.css')
{{-- To add home title --}}
@section('Title','register')
 {{-- To add home body --}}
@section('content')
<br>
<div class="register">
    <div class="inner">
    {{-- <div class="image-holder">
    <img src="images/registration-form-4.jpg" alt="">
    </div> --}}
    <form action="" class="form-reg">
    <h3>Sign Up</h3> 
    <div class="form-holder">
    <input type="text" placeholder="Fisrt Name" class="form-control" spellcheck="false" data-ms-editor="true">
    </div>
    <div class="form-holder">
        <input type="text" placeholder="Last Name" class="form-control" spellcheck="false" data-ms-editor="true">
        </div>
    <div class="form-holder">
    <input type="text" placeholder="E-mail" class="form-control" spellcheck="false" data-ms-editor="true">
    </div>
    <div class="form-holder active">
    <input type="password" placeholder="Password" class="form-control" style="font-size: 15px;">
    </div>
    <div class="form-holder active">
    <input type="password" placeholder="Confirm Password" class="form-control" style="font-size: 15px;">
    </div>
    {{-- <div class="checkbox">
    <label>
    <input type="checkbox" checked=""> I agree all statement in <a href="#">Terms &amp; Conditions</a>
    <span class="checkmark"></span>
    </label>
    </div> --}} 

    <div class="form-data-btn"> 
    <div class="btn-reg">Sign up</div>
    <div class="btn-reg" onclick="myFunction()">Sign in</div>
    </div><br>
    
    <span class="mx-5">Already Have account !!</span>
    <div class="popup" onclick="myFunction()">Sign in 
        <span class="popuptext" id="myPopup"><span class="x-close"></span>
        <form action="###" class="form-reg">
            <h3>Sign in</h3>
            <div class="login-form">
                <div class="form-holder">
                    <input type="text" placeholder="e-mail" class="form-control" spellcheck="false" data-ms-editor="true">
                </div>
                <div class="form-holder active">
                    <input type="password" placeholder="Password" class="form-control" style="font-size: 15px;">
                </div>
            </div>
        </form>
    </span>
</div>
</form>
</div>

</div>
@endsection
@section('footer')
@endsection
<script>
    // When the user clicks on <div>, open the popup
    function myFunction() {
      var popup = document.getElementById("myPopup");
      popup.classList.toggle("show");
    }
    </script>