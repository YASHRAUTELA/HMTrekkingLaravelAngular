@extends('gallery')

@section('gallery_content')

<!-- camp gallary -->
<section class="section-gap">
    <h1 style="text-align:center">Our Camp </h1>
    <div class="pb-70"></div>
    <div class="container ">
        <div class="row top10 ">
          <div class="column">
            <img src="{{asset('images/camp/c1.jpg')}}" style="width:100%" onclick="openModal();currentSlide(1)" class="hover-shadow cursor">
          </div>
          <div class="column">
            <img src="{{asset('images/camp/c2.jpg')}}" style="width:100%" onclick="openModal();currentSlide(2)" class="hover-shadow cursor">
          </div>
          <div class="column">
            <img src="{{asset('images/camp/c3.jpg')}}" style="width:100%" onclick="openModal();currentSlide(3)" class="hover-shadow cursor">
          </div>
          <div class="column">
            <img src="{{asset('images/camp/c4.jpg')}}" style="width:100%" onclick="openModal();currentSlide(4)" class="hover-shadow cursor">
          </div>
        </div>

        <div class="row top10">
          <div class="column">
            <img src="{{asset('images/camp/c5.jpg')}}" style="width:100%" onclick="openModal();currentSlide(5)" class="hover-shadow cursor">
          </div>
          <div class="column">
            <img src="{{asset('images/camp/c6.jpg')}}" style="width:100%" onclick="openModal();currentSlide(6)" class="hover-shadow cursor">
          </div>
        </div>

        <!-- modal -->
        <div id="myModal" class="modal">
          <span class="close cursor cross" onclick="closeModal()" style="color:#fff;">&times;</span>
          <!-- modal content -->
          <div class="modal-content">

            <div class="mySlides">
              <div class="numbertext">1 / 6</div>
              <img src="{{asset('images/camp/c1.jpg')}}" style="width:100%">
            </div>

            <div class="mySlides">
              <div class="numbertext">2 / 6</div>
              <img src="{{asset('images/camp/c2.jpg')}}" style="width:100%">
            </div>

            <div class="mySlides">
              <div class="numbertext">3 / 6</div>
              <img src="{{asset('images/camp/c3.jpg')}}" style="width:100%">
            </div>
            
            <div class="mySlides">
              <div class="numbertext">4 / 6</div>
              <img src="{{asset('images/camp/c4.jpg')}}" style="width:100%">
            </div>
            
            <div class="mySlides">
              <div class="numbertext">5 / 6</div>
              <img src="{{asset('images/camp/c5.jpg')}}" style="width:100%">
            </div>

            <div class="mySlides">
              <div class="numbertext">6 / 6</div>
              <img src="{{asset('images/camp/c6.jpg')}}" style="width:100%">
            </div>
            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>

            <div class="caption-container">
              <p id="caption"></p>
            </div>
            
            <div class="container-fluid">
                <div class="column">
                  <img class="demo cursor" src="{{asset('images/camp/c1.jpg')}}" style="width:100%" onclick="currentSlide(1)" alt="Nature and sunrise">
                </div>
                <div class="column">
                  <img class="demo cursor" src="{{asset('images/camp/c2.jpg')}}" style="width:100%" onclick="currentSlide(2)" alt="Snow">
                </div>
                <div class="column">
                  <img class="demo cursor" src="{{asset('images/camp/c3.jpg')}}" style="width:100%" onclick="currentSlide(3)" alt="Mountains and fjords">
                </div>
                <div class="column">
                  <img class="demo cursor" src="{{asset('images/camp/c4.jpg')}}" style="width:100%" onclick="currentSlide(4)" alt="Northern Lights">
                </div>
                <div class="column">
                  <img class="demo cursor" src="{{asset('images/camp/c5.jpg')}}" style="width:100%" onclick="currentSlide(5)" alt="Nature and sunrise">
                </div>
                <div class="column">
                  <img class="demo cursor" src="{{asset('images/camp/c6.jpg')}}" style="width:100%" onclick="currentSlide(6)" alt="Snow">
                </div>    
            </div>

          </div>
          <!-- modal content -->
        </div>  
        <!-- modal -->      
    </div>
</section>

<!-- camp gallary -->

@endsection