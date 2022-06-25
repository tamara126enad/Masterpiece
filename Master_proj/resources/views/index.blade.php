@extends('/layout/master')
{{-- To add home css file --}}
@section('CSS','index.css')
{{-- To add home title --}}
@section('Title','Najih')
 {{-- To add home body --}}
@section('content')

<section class="main-sec">

<section class="hero-sec mbs">
<div></div>

{{-- class academy ************************************************************** --}}
<img class="hero-img" src="/img/3.jpg" alt="" >
<div>
<div class="hero-txt"><span class="fs-1">Najih</span> is an  platform that provides students with basic, secondary and other stages of communication with ease of communication between students and teachers.<br></div>
    <a href="{{URL('/register')}}" class="join-btn" title="Join Us" role="button" >Join us</a>
</div>
{{-- It seeks in a modern way to help students in all areas to communicate between teachers and students of success and distinction. --}}
</section>

<section class="aboutImg-sec mbs">
    <div id="cover">
        <div class="four">
        <img src="/img/part_003.jpg" class="img-part ip1">
        <img src="/img/part_001.jpg" class="img-part ip2">
        <img src="/img/part_004.jpg" class="img-part ip3">
        <img src="/img/part_002.jpg" class="img-part ip4">
        </div> 
        <h2>We are here for you</h2>
        <div class="container">
        <div class="row">
          <div class="col-1"><h5>About</h5></div>
          <div class="col-1"></div>
          <div class="col-10">  <hr class="line"></div>
        </div>
      </div>
<div>
<p class="txt-just">Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus error obcaecati, at quasi nam, non, placeat deleniti fuga deserunt similique dignissimos porro sed magnam labore animi quia enim recusandae qui!</p>
</div>
      </div>
    <div></div>
      
</section>
<br>
<section class="why-center mbs" >
  <div class="why-container">
    <div class="row mb-4">
      <div class="col-2"><h3>Why Us</h3></div>
      {{-- <div class="col-1"> </div> --}}
      <div class="col-9">  <hr class="line"></div>
    </div>
  </div>
    <div class="row">
        <div class="col-3">
            <div class="glass-container">
              <img src="https://toppng.com/uploads/preview/goals-png-11553961105jrzxdu5m52.png" alt="" srcset="" width="50px" height="50px">
                <h4 class=""> Motivation</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo, quas debitis.</p>
                
            </div>
        </div>
        <div class="col-3">
           <div class="glass-container">
            <img src="https://miro.medium.com/max/1400/1*yurt_JW40kVf0xc8pZJ8aQ.jpeg" alt="" srcset="" width="50px" height="50px">
               <h4 class=""> Creativity</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo, quas debitis.</p>
            </div>
        </div>
        <div class="col-3">
            <div class="glass-container">
              <img src="https://cdn.tatlerasia.com/asiatatler/i/hk/2021/04/14174013-140749547-694050224598430-8697752894944143785-n_cover_1080x1080.jpg" alt="" srcset="" width="50px" height="50px">
                <h4 class=""> Positivity</h4>
                 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo, quas debitis.</p>
            </div>
        </div>
        <div class="col-3">
            <div class="glass-container">
              <img src="https://toppng.com/uploads/preview/goals-png-11553961105jrzxdu5m52.png" alt="" srcset="" width="50px" height="50px">
              <h4 class=""> Communication</h4>
               <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo, quas debitis.</p>
             </div>
         </div>
      </div>
  
</div>
  </section>

  
<section class="serv-sec mb-3 mbs">
      <div class="ser-container">
        <div class="row w-80">
          <div class="col-1"><h3>Services</h3></div>
          <div class="col-1"> </div>
          <div class="col-10">  <hr class="line"></div>
        </div>
      </div>
<div class="row w-80">
    <div class="col">
    <div class="txt-over">
        <h2 class="text-md-start">01</h2>
        <p class="text-start bl px-2"><span class="">Teaching school subjects.</span><br> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo, quas debitis. </p>
      </div></div>
      <div class="col">
      <div class="txt-over">
        <h2 class="text-md-start">02</h2>
        <p class="text-start bl px-2"><span class="">Translation.</span><br> DLorem ipsum dolor sit amet, consectetur adipisicing elit. Illo, quas debitis. </p>
      </div></div>
      <div class="col">
      <div class="txt-over">
        <h2 class="text-md-start">03</h2>
        <p class="text-start bl px-2"><span class="">Research writing.</span><br> DLorem ipsum dolor sit amet, consectetur adipisicing elit. Illo, quas debitis. </p>
      </div></div>
      <div class="col">
        <div class="txt-over">
          <h2 class="text-md-start">04</h2>
          <p class="text-start bl px-2"><span class="">Docuemtation.</span><br> DLorem ipsum dolor sit amet, consectetur adipisicing elit. Illo, quas debitis. </p>
        </div></div>
</div>
   </section>



</section>
@endsection
@section('footer')
@endsection
