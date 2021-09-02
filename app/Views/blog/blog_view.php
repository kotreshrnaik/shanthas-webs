<?= $this->extend('layouts/base'); ?>
<?= $this->Section("content"); ?>
<div id="blog-header" class="pt-2 pb-2 pt-md-5 pb-md-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <img src="<?=base_url();?>/public/assets/images/blog/blog.png" alt="" class="img-fluid">
            </div>
        </div>
    </div>
</div>
<div id="blog-content" class="pt-2 pb-2 pt-md-5 pb-md-5">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="m-2">
                    <div class="row">
                        <div class="col-md-4">
                            <img src="<?= base_url();?>/public/assets/images/blog/blog1.png" alt="" class="img-fluid">
                        </div>
                        <div class="col-md-8">
                            <h2 class="pt-2 pb-2">Introduction to Shanthas Webz</h2>
                            <strong><?= date('Y-m-d')?></strong>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nulla tenetur officia quaerat voluptatum quisquam molestiae minima in, eum ducimus, illum minus quis incidunt. Reprehenderit, voluptatem? Non molestias quisquam sequi vero.</p>
                            <a href="#">Continue Reading... </a>
                        </div>
                    </div>
                </div>
                <div class="m-2">
                    <div class="row">
                        <div class="col-md-3 p-2">
                            <ul class="list-unstyled blog-social1 text-center">
                                <li><a href="#" class="m-2"><i class="fab fa-facebook"></i></a></li>
                            </ul>
                        </div>
                        <div class="col-md-3 p-2">
                            <ul class="list-unstyled blog-social2 text-center">
                                <li><a href="#" class="m-2"><i class="fab fa-twitter"></i></a></li>
                            </ul>    
                        
                        </div>
                        <div class="col-md-3 p-2">
                            <ul class="list-unstyled blog-social3 text-center">
                                <li><a href="#" class="m-2"><i class="fab fa-youtube"></i></a></li>
                            </ul> 
                        </div>
                        <div class="col-md-3 p-2">
                            <ul class="list-unstyled blog-social4 text-center">
                                <li><a href="#" class="m-2"><i class="fab fa-instagram"></i></a></li>
                            </ul> 
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
</div>
 <?= $this->endSection(); ?>