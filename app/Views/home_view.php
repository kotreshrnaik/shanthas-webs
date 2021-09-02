<?= $this->extend('layouts/base'); ?>
<?= $this->Section("content"); ?>
<!-- Slider start -->
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="<?= base_url(); ?>/public/assets/images/slider/slide1.png" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>First slide label</h5>
                <p>Some representative placeholder content for the first slide.</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="<?= base_url(); ?>/public/assets/images/slider/slide2.png" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>Second slide label</h5>
                <p>Some representative placeholder content for the second slide.</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="<?= base_url(); ?>/public/assets/images/slider/slide3.png" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>Third slide label</h5>
                <p>Some representative placeholder content for the third slide.</p>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
<!-- Slider End -->

<!-- Our Services start -->
<div id="our-services" class="pt-2 pb-2 pt-md-5 pb-md-5">
    <div class="container">
        <h3 class="pt-2 pb-2 text-center">Our Services</h3>
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
                <div class="card">
                    <img src="<?= base_url();?>/public/assets/images/our-services/s2.png" class="card-img-top" alt="...">
                    <div class="card-body text-center">
                        <h5 class="card-title">Design Solutions</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <a href="#" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="<?= base_url();?>/public/assets/images/our-services/s1.png" class="card-img-top" alt="...">
                    <div class="card-body text-center">
                        <h5 class="card-title">Digital Marketing Services</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <a href="#" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="<?= base_url();?>/public/assets/images/our-services/s3.png" class="card-img-top" alt="...">
                    <div class="card-body text-center">
                        <h5 class="card-title">Website Solutions</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
                        <a href="#" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Our Services End -->

<!-- Design Solutions Start -->
<div id="design-solutions" class="pt-2 pb-2 pt-md-5 pb-md-5">
    <div class="container">
        <h3 class="pt-2 pb-2 text-center">Design Solutions</h3>
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
                <div class="card">
                    <i class="fab fa-sketch align-self-center fs-1"></i>
                    <div class="card-body text-center">
                        <h5 class="card-title">Creatives</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <a href="#" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <i class="fab fa-sketch align-self-center fs-1"></i>
                    <div class="card-body text-center">
                        <h5 class="card-title">Logo Designs</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <a href="#" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <i class="fab fa-sketch align-self-center fs-1"></i>
                    <div class="card-body text-center">
                        <h5 class="card-title">Webpage Designs</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
                        <a href="#" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <i class="fab fa-sketch align-self-center fs-1"></i>
                    <div class="card-body text-center">
                        <h5 class="card-title">Landing Page Design</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
                        <a href="#" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <i class="fab fa-sketch align-self-center fs-1"></i>
                    <div class="card-body text-center">
                        <h5 class="card-title">Brochure Design</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
                        <a href="#" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Design Solutions End -->

<!-- Website Solutions Start -->
<div id="website-solutions" class="pt-2 pb-2 pt-md-5 pb-md-5">
    <div class="container">
        <h3 class="pt-2 pb-2 text-center">Website Solutions</h3>
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
                <div class="card">
                    <i class="fab fa-sketch align-self-center fs-1"></i>
                    <div class="card-body text-center">
                        <h5 class="card-title">Website Design</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <a href="#" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <i class="fab fa-sketch align-self-center fs-1"></i>
                    <div class="card-body text-center">
                        <h5 class="card-title">Website Development</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <a href="#" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <i class="fab fa-sketch align-self-center fs-1"></i>
                    <div class="card-body text-center">
                        <h5 class="card-title">Landing Page Development</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
                        <a href="#" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <i class="fab fa-sketch align-self-center fs-1"></i>
                    <div class="card-body text-center">
                        <h5 class="card-title">E-Commerce Page Development</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
                        <a href="#" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <i class="fab fa-sketch align-self-center fs-1"></i>
                    <div class="card-body text-center">
                        <h5 class="card-title">Shopify</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
                        <a href="#" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Website Solutions End -->

<!-- Digital Marketing Services Start -->
<div id="digital-marketing-service" class="pt-2 pb-2 pt-md-5 pb-md-5">
    <div class="container">
        <h3 class="pt-2 pb-2 text-center">Digital Marketing Services</h3>
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
                <div class="card">
                    <i class="fab fa-sketch align-self-center fs-1"></i>
                    <div class="card-body text-center">
                        <h5 class="card-title">Search Engine Optimization</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <a href="#" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <i class="fab fa-sketch align-self-center fs-1"></i>
                    <div class="card-body text-center">
                        <h5 class="card-title">Search Engine Marketing</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <a href="#" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <i class="fab fa-sketch align-self-center fs-1"></i>
                    <div class="card-body text-center">
                        <h5 class="card-title">Social Media Marketing</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
                        <a href="#" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <i class="fab fa-sketch align-self-center fs-1"></i>
                    <div class="card-body text-center">
                        <h5 class="card-title">Pay Per Click</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
                        <a href="#" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <i class="fab fa-sketch align-self-center fs-1"></i>
                    <div class="card-body text-center">
                        <h5 class="card-title">Content Marketing</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
                        <a href="#" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <i class="fab fa-sketch align-self-center fs-1"></i>
                    <div class="card-body text-center">
                        <h5 class="card-title">E-Mail Marketing</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
                        <a href="#" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                <i class="fab fa-sketch align-self-center fs-1"></i>
                    <div class="card-body text-center">
                        <h5 class="card-title">Whatsapp/SMS Marketing</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
                        <a href="#" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                <i class="fab fa-sketch align-self-center fs-1"></i>
                    <div class="card-body text-center">
                        <h5 class="card-title">App Promotions</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
                        <a href="#" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Digital Marketing Services End -->

<?= $this->endSection(); ?>
