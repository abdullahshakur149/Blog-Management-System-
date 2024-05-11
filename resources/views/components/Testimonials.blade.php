{{-- testimonials --}}

<section id="testimonials" class="testimonials">

  <div class="container">

      <div class="row align-items-center">

          <div class="col-lg-5 info" data-aos="fade-up" data-aos-delay="100">
              <h3>Testimonials</h3>
              <p>
                  Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                  velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.
              </p>
          </div>

          <div class="col-lg-7" data-aos="fade-up" data-aos-delay="200">

              <div class="swiper">
                  <div class="swiper-wrapper">
                      @foreach($testimonials as $testimonial)
                      <div class="swiper-slide">
                          <div class="testimonial-item">
                              <div class="d-flex">
                                  <img src="{{asset('img/testimonials/testimonials-1.jpg')}}" class="testimonial-img flex-shrink-0" alt="">
                                  <div>
                                      <h3>{{$testimonial->testimonials_title}}</h3>
                                      <p>{{$testimonial->testimonials_description}}</p>

                                  </div>
                              </div>
                              <p>
                                  <i class="bi bi-quote quote-icon-left"></i>
                                  {{$testimonial->testimonials_summernote}}
                                  <i class="bi bi-quote quote-icon-right"></i>
                              </p>
                          </div>
                      </div>
                      @endforeach
                  </div>
                  <div class="swiper-pagination"></div>
              </div>

          </div>

      </div>

  </div>

</section>

