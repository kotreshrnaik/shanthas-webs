<?= $this->extend('layouts/base'); ?>
<?= $this->Section("content"); ?>
<div id="about-header" class="pt-2 pb-2 pt-md-5 pb-md-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="text-center">
                    <h2 class= "pt-2 pb-2 text-white">About Us</h2>

                    <div class="text-center">
                        <nav aria-label="breadcrumb" >
                            <ol class="breadcrumb me-auto ms-auto">
                                <li class="breadcrumb-item"><a href="<?= base_url(); ?>">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">About Us</li>
                            </ol>
                        </nav>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
 <?= $this->endSection(); ?>