<section id="recent-posts" class="recent-posts">
  <div class="container section-title" data-aos="fade-up">
    <h2>Recent Posts</h2>
    <p>Check out our recent posts!</p>
  </div>

  <div class="container">
    <div class="row gy-4">
      @foreach ($recentposts as $post)
      <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
        <article>
          <div class="post-img">
            <img src="{{ asset('storage/' . $post->post_image) }}" alt="" class="img-fluid">
          </div>
          <p class="post-category">{{ $post->category->category_title }}</p>
          <h2 class="title">
            <a href="{{Route('usercategories.posts', ['id' => $post->category->category_id])}}">{{ $post->post_title }}</a>
          </h2>
          <div class="d-flex align-items-center">
            <img src="assets/img/blog/blog-author.jpg" alt="" class="img-fluid post-author-img flex-shrink-0">
            <div class="post-meta">
              <p class="post-date">
                <time>{{ $post->created_at->toDateString() }} || {{ $post->created_at->diffForHumans() }}</time>
              </p>
            </div>
          </div>
        </article>
      </div><!-- End col-xl-4 col-md-6 -->
      @endforeach
    </div><!-- End row gy-4 -->
  </div><!-- End container -->
</section><!-- End recent-posts Section -->
