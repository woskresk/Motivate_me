@include('layouts_app.header')

   

    <!-- slider_area_start -->
    <div class="slider_area">
        <div class="single_slider slider_bg_1 d-flex align-items-center"  style="height: 100px;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-md-6">
                        <div class="slider_text">
                            <!-- <h1 style="color: white;">Биржа Мотивации</h1> -->
                            <!-- <p>Тысячи увлеченных единомышленников  <br> adipiscing elit, sed do eiusmod </p>
                            <a href="contact.html" class="boxed-btn4">Подобрать</a> -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div class="dog_thumb d-none d-lg-block">
                <img src="img/dog.png" alt="">
            </div> -->
        </div>
    </div>
    <!-- slider_area_end -->

  
  

    <!-- adapt_area_start  -->
    <div class="adapt_area">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-lg-5">
                    <div class="adapt_help">
                        <div class="section_title">
                            
                            <h1>{{ $choice_one->h1 ?? 'НЕТ' }}</h1>
                           <!--  <span>Содержание:</span> -->
                            <ul class="list3b">
                                
                                @foreach(explode('/', $choice_one->h2_link) as $key => $ones)
                                <li><a href="#{{ $key }}" style="color: #eb592d;">{{ $ones }}</a></li>
                                @endforeach 
                            </ul>
                            <!-- <a href="#" class="boxed-btn3">Донат</a> -->
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="adapt_about">
                        
                        <div class="row align-items-center">

                            <div class="col-12">
                                <img src="{{ asset('/storage/' . $choice_one->file) }}" style="width: 100%;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- adapt_area_end  -->

    

    <!-- testmonial_area_start  -->
    <div class="testmonial_area">
        <div class="container">
            {!! $choice_one->text  !!}

        </div>
    </div>
    <!-- testmonial_area_end  -->

    <!-- team_area_start  -->
    <!-- <div class="team_area">
        <div class="container">
            <div class="row justify-content-center ">
                <div class="col-lg-6 col-md-10">
                    <div class="section_title text-center mb-95">
                        <h3>Our Team</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6">
                    <div class="single_team">
                        <div class="thumb">
                            <img src="img/team/1.png" alt="">
                        </div>
                        <div class="member_name text-center">
                            <div class="mamber_inner">
                                <h4>Rala Emaia</h4>
                                <p>Senior Director</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_team">
                        <div class="thumb">
                            <img src="img/team/2.png" alt="">
                        </div>
                        <div class="member_name text-center">
                            <div class="mamber_inner">
                                <h4>jhon Smith</h4>
                                <p>Senior Director</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_team">
                        <div class="thumb">
                            <img src="img/team/3.png" alt="">
                        </div>
                        <div class="member_name text-center">
                            <div class="mamber_inner">
                                <h4>Rala Emaia</h4>
                                <p>Senior Director</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- team_area_start  -->



    @include('layouts_app.footer')