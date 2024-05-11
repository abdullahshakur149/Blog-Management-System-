<section id="recent-posts" class="recent-posts">
    <div class="container section-title" data-aos="fade-up">
      <h2>Categories</h2>
    </div>
  
    <div class="container">
      <div class="row gy-4">
        @foreach ($categories as $category)
        <div  class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
          <article>
            <div class="post-img">
              <img src="{{ asset('storage/' . $category->category_image) }}" alt="" class="img-fluid">
            </div>
            <p class="post-category">{{ $category->category_title }}</p>
            <h2 class="title">
              <a href="{{Route('usercategories.posts', ['id' => $category->category_id])}}">{{ $category->category_description }}</a>
            </h2>
            <div class="d-flex align-items-center">
              <div class="post-meta">
                <p class="post-date">
                  <time>{{ $category->created_at->toDateString() }} || {{ $category->created_at->diffForHumans() }}</time>
                </p>
              </div>
            </div>
          </article>
        </div><!-- End col-xl-4 col-md-6 -->
        @endforeach
      </div><!-- End row gy-4 -->
    </div><!-- End container -->
  </section><!-- End recent-posts Section -->
  