<?php
/**
 * Template Name: Home Page Template
 *
 **/

get_header();

?>

<!-- Homepage Hero -->
<section class="bg-primary">
    <div class="container-fluid overflow-hidden">
        <div class="row">
        <div class="col-12 col-md-6 order-1 order-md-0 align-self-md-center">
        <div class="row py-3 py-sm-5 py-xl-9 mt-md-10 justify-content-sm-center">
          <div class="col-12 col-sm-10">
            <div class="d-grid gap-2 d-sm-flex">
              <div>Good Morning</div>
            </div>
            <h2 class="mb-4 text-whit text-wrap">Welcome to the County of San Diego</h2>
            <div class="row">
              <div class="col-12 col-xxl-8">
                <p class="fs-5 mb-0 text-white">San Diego County: Where Sunshine Meets Surprises.</p>
                <p class="fs-5 text-white">Explore Our Government Services and Beyond!</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-12 col-md-6 p-0">
        <img fetchpriority="high" loading="lazy" decoding="async" width="1200" height="775" class="img-fluid w-100 h-100 object-fit-cover wp-block-cover__image-background wp-image-2817" alt="San Diego Waterfront" src="https://beta.sandiegocounty.gov/wp-content/uploads/2023/08/WaterfrontPark-1200x775-1.jpg" style="object-position:65% 36%" data-object-fit="cover" data-object-position="65% 36%" srcset="https://beta.sandiegocounty.gov/uploads/2023/08/WaterfrontPark-1200x775-1.jpg 1200w, https://beta.sandiegocounty.gov/uploads/2023/08/WaterfrontPark-1200x775-1-1024x661.jpg 1024w, https://beta.sandiegocounty.gov/uploads/2023/08/WaterfrontPark-1200x775-1-768x496.jpg 768w" sizes="(max-width: 1200px) 100vw, 1200px">
      </div>
        </div>
    </div>
</section>

<!-- services section  -->
<section class="services-section pt-5 pb-5">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 pl-3 mb-3"><h3 class="services-section__title">Services</h3></div>
        </div>
        <div class="row">
            <div class="col-4">
                <a href="https://sdcares4kids.com/">
                <div class="card mb-3" style="max-width: 18rem;">
                    <div class="card-body">
                    <i class="fa-solid fa-child-reaching"></i>
                        <i class="fa fa-child"></i>
                        <h5 class="card-title">Adopt or Foster a Child</h5>
                    </div>
                </div>
                </a>
            </div>
            <div class="col-4">
                <a href="https://sdcares4kids.com/">
                <div class="card mb-3" style="max-width: 18rem;">
                    <div class="card-body">
                        <i class="fa fa-child"></i>
                        <h5 class="card-title">Adopt or Foster a Child</h5>
                    </div>
                </div>
                </a>
            </div>
            <div class="col-4">
                <a href="https://sdcares4kids.com/">
                <div class="card mb-3" style="max-width: 18rem;">
                    <div class="card-body">
                        <i class="fa fa-child"></i>
                        <h5 class="card-title">Adopt or Foster a Child</h5>
                    </div>
                </div>
                </a>
            </div>
            <div class="col-4">
                <a href="https://sdcares4kids.com/">
                <div class="card mb-3" style="max-width: 18rem;">
                    <div class="card-body">
                        <i class="fa fa-child"></i>
                        <h5 class="card-title">Adopt or Foster a Child</h5>
                    </div>
                </div>
                </a>
            </div>
            <div class="col-4">
                <a href="https://www.sandiegocounty.gov/content/sdc/cob/passport/">
                <div class="card mb-3" style="max-width: 18rem;">
                        <div class="card-body">
                            <i class="fa fa-address-book-o"></i>
                            <h5 class="card-title">Apply for a Passport</h5>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-4">
                <a href="https://www.sandiegocounty.gov/content/sdc/dpw/flood.html">
                <div class="card mb-3" style="max-width: 18rem;">
                    <div class="card-body">
                        <i class="fa fa-tint"></i>
                        <h5 class="card-title">Flooding</h5>
                    </div>
                </div>
                </a>
            </div>
            <div class="col-4">
                <a href="https://www.sandiegocounty.gov/content/sdc/dpw/flood.html">
                <div class="card mb-3" style="max-width: 18rem;">
                    <div class="card-body">
                        <i class="fa fa-tint"></i>
                        <h5 class="card-title">Flooding</h5>
                    </div>
                </div>
                </a>
            </div>
            <div class="col-4">
                <a href="https://www.sandiegocounty.gov/content/sdc/dpw/flood.html">
                <div class="card mb-3" style="max-width: 18rem;">
                    <div class="card-body">
                        <i class="fa fa-tint"></i>
                        <h5 class="card-title">Flooding</h5>
                    </div>
                </div>
                </a>
            </div>
            <div class="col-4">
                <a href="https://www.sandiegocounty.gov/content/sdc/dpw/flood.html">
                <div class="card mb-3" style="max-width: 18rem;">
                    <div class="card-body">
                        <i class="fa fa-tint"></i>
                        <h5 class="card-title">Flooding</h5>
                    </div>
                </div>
                </a>
            </div>

        </div>

        <button class="btn btn-primary">View All Services</button>

        
    </div>

</section>
<!-- end services section -->

<!-- news section -->
<section class="news-section pt-5 pb-5">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 pl-3 mb-3"><h3>News</h3></div>
        </div>
        <div class="row mb-5">
            <div class="col">
            <?php card() ?>
            </div>
            <div class="col">
            <?php card() ?>
            </div>
            <div class="col">
            <?php card() ?>
            </div>
        </div>
        <div class="row">
            <div class="container-fluid"> 
                <div class="row"> 
                    <div class="col-4"> 
                        <img class="img-fluid w-100 h-100 object-fit-cover" alt="San Diego Waterfront" src="https://beta.sandiegocounty.gov/wp-content/uploads/2023/08/WaterfrontPark-1200x775-1.jpg" />
                    </div> 
                    
                    <div class="col"> 
                        <h1>Could you evacuate in 15 minutes or less?</h1> 
                        <p>AlertSanDiego can help</p> 
                        <button class="btn btn-primary"><a>Learn more at AlertSanDiego.org</a></button>
                    </div> 
                </div> 
            </div> 
        </div>
    <div class="row"></div>
    </div>
</section>
<!-- end news section -->

<section class="events-section pt-5 pb-5">
    <div class="container">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="col">
                       
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="col">
                       
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="col">
                       
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</section>

<section class="governments-section pt-5 pb-5">
    <div class="container">
    <div class="row">
            <div class="col-xs-12 pl-3 mb-3">
                <h3 class="featured-section__title">Governments</h3>
                <p>Board of Supervisors</p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4">
                <div class="card">
                    <div class="row card-body">
                    <img class="col-sm-6" alt="San Diego Waterfront" src="https://beta.sandiegocounty.gov/wp-content/uploads/2023/08/WaterfrontPark-1200x775-1.jpg" />
                       <div class="col-sm-6">
                          <h5 class="card-title">...</h5>
                           <p class="card-text">....</p>
                           <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card">
                    <div class="row card-body">
                    <img class="col-sm-6" alt="San Diego Waterfront" src="https://beta.sandiegocounty.gov/wp-content/uploads/2023/08/WaterfrontPark-1200x775-1.jpg" />
                       <div class="col-sm-6">
                          <h5 class="card-title">...</h5>
                           <p class="card-text">....</p>
                           <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card">
                    <div class="row card-body">
                    <img class="col-sm-6" alt="San Diego Waterfront" src="https://beta.sandiegocounty.gov/wp-content/uploads/2023/08/WaterfrontPark-1200x775-1.jpg" />
                       <div class="col-sm-6">
                          <h5 class="card-title">...</h5>
                           <p class="card-text">....</p>
                           <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- featured rail  -->
<section class="featured-section pt-5 pb-5">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 pl-3 mb-3"><h3 class="featured-section__title">Featured</h3></div>
        </div>
    <div class="row">
        <div class="col-sm">
            <div class="card featured-section__card">
                <div class="card-body">
                    <h5 class="card-title">Operational Plan</h5>
                    <p class="card-text">The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy.</p>
                    <a href="#" class="btn featured-section__card-btn">Learn More</a>
                </div>
            </div>
        </div>
        <div class="col-sm">
            <div class="card featured-section__card">
                <div class="card-body">
                    <h5 class="card-title">Meeting Agendas</h5>
                    <p class="card-text">The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy.</p>
                    <a href="#" class="btn featured-section__card-btn">Learn More</a>
                </div>
            </div>
        </div>
        <div class="col-sm">
            <div class="card featured-section__card">
                <div class="card-body">
                    <h5 class="card-title">Annual Report</h5>
                    <p class="card-text">The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy.</p>
                    <a href="#" class="btn featured-section__card-btn">Learn More</a>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
<!-- end featured rail -->

<?php
get_footer();
