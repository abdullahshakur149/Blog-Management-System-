<section id="recent-posts" class="recent-posts">
  <div class="container section-title" data-aos="fade-up">
      <h2>Thumbnail Gallery</h2>
      <p>Check out our thumbnail gallery!</p>
  </div>

  <div class="container">
      <div class="row gy-4">
          @foreach ($thumbnails as $thumbnail)
          <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
              <article>
                  <div class="post-img">
                      <img src="{{ asset('storage/' . $thumbnail->thumbnail_images->first()->thumbnail_image_url) }}" alt="Thumbnail Image" class="img-fluid">
                  </div>
                  <p class="post-category">Number of Images: {{ $thumbnail->thumbnail_images->count() }}</p>
                  <h2 class="title">
                      {{ $thumbnail->thumbnail_title }}
                  </h2>
                  <div class="d-flex align-items-center">
                      <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#exampleModal{{ $thumbnail->id }}">
                          View All Images
                      </button>
                  </div>
              </article>
          </div>
          <!-- Modal -->
          <div class="modal fade" id="exampleModal{{ $thumbnail->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered modal-dialog-custom">
                  <div class="modal-content">
                      <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">All Images</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                          <div class="row row-cols-1 row-cols-md-4 g-4">
                              @foreach($thumbnail->thumbnail_images as $image)
                              <div class="col mb-4">
                                  <img src="{{ asset('storage/' . $image->thumbnail_image_url) }}" class="img-thumbnail" alt="Thumbnail Image">
                              </div>
                              @endforeach
                          </div>
                      </div>
                      <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                      </div>
                  </div>
              </div>
          </div>
          @endforeach
      </div><!-- End row gy-4 -->
  </div><!-- End container -->
</section><!-- End recent-posts Section -->
