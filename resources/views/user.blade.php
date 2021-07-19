@include('layouts_app.header')

    <!-- bradcam_area_start -->
    <!-- <div class="bradcam_area breadcam_bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="bradcam_text text-center">
                        <h3>contact</h3>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- bradcam_area_end -->

    <!-- ================ contact section start ================= -->
    <section class="contact-section" style="background-color: #eb592d;">
            <div class="container">
                
    
    <!-- 
                <div class="row">
                    <div class="col-12">
                        <h2 class="contact-title">Get in Touch</h2>
                    </div>
                    <div class="col-lg-8">
                        <form class="form-contact contact_form" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <textarea class="form-control w-100" name="message" id="message" cols="30" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Message'" placeholder=" Name"></textarea>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control valid" name="name" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" placeholder="Enter your name">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control valid" name="email" id="email" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" placeholder="Email">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <input class="form-control" name="subject" id="subject" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Subject'" placeholder="Enter Subject">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <button type="submit" class="button button-contactForm boxed-btn">Send</button>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-3 offset-lg-1">
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-home"></i></span>
                            <div class="media-body">
                                <h3>Buttonwood, California.</h3>
                                <p>Rosemead, CA 91770</p>
                            </div>
                        </div>
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-tablet"></i></span>
                            <div class="media-body">
                                <h3>+1 253 565 2365</h3>
                                <p>Mon to Fri 9am to 6pm</p>
                            </div>
                        </div>
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-email"></i></span>
                            <div class="media-body">
                                <h3>support@colorlib.com</h3>
                                <p>Send us your query anytime!</p>
                            </div>
                        </div>
                    </div>
                </div> -->
            </div>
        </section>
    <!-- ================ contact section end ================= -->






    <div class="service_area" style="padding-top: 50px;">
        <div class="container">
            <div class="row justify-content-center ">
                <div class="col-lg-7 col-md-10">
                    <div class="section_title text-center mb-95">
                        <h3>Личный кабинет</h3>
                        <p>Наш сервис начал свою работу в 2021 году и еще совсем сырой, поэтому просим все свои пожелания и предложения присылать нам по <a href="/#pochta">обратной связи.</a> </p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                

                <div class="col-lg-6 col-md-6">
                    <div class="single_service">
                         <!-- <div class="service_thumb service_icon_bg_1 d-flex align-items-center justify-content-center">
                             <div class="service_icon">
                                 <img src="img/service/service_icon_1.png" alt="">
                             </div>
                         </div> -->
                         <div class="service_content text-left">
                            <h3>Ваше Имя: Вадим</h3>
                            <h4>Почта: qwerty@gmail.com</h4>
                            <h4>Ваш рейтинг: Нет оценок</h4>
                            <a href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">Выйти из аккаунта</a>
 
                                     <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                         @csrf
                                     </form>
                         </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="single_service active">
                         <!-- <div class="service_thumb service_icon_bg_1 d-flex align-items-center justify-content-center">
                             <div class="service_icon">
                                 <img src="img/service/service_icon_2.png" alt="">
                             </div>
                         </div> -->
                         <div class="service_content text-left">
                            <h3>Имя мотиватора: Вадим</h3>
                            <h4>Почта: qwerty@gmail.com</h4>
                            <h4>Ваш рейтинг: Нет оценок</h4>
                            <!-- <a href="">Оценить</a> -->
                         </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="" style="
                width: 40%;
                border: 1px solid red;
                height: 50px;
                border-radius: 15px;
                background-color: #eb592d;
                text-align: center;
                ">
                <a href="#" style="
                color: white;
                font-size: 28px;
                ">    ПОДБОР
            </a>  </div>
            </div>
        </div>
    </div>


    @include('layouts_app.footer')