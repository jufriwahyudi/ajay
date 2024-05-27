<?= $this->extend('/layouts/master') ?>
<?= $this->section('head-content') ?>

<div class="container-xxl py-5 bg-primary hero-header mb-5">
    <div class="container my-5 py-5 px-lg-5">
        <div class="row g-5 py-5">
            <div class="col-12 text-center">
                <h1 class="text-white animated zoomIn">Scrapping Data</h1>
                <hr class="bg-white mx-auto mt-0" style="width: 90px;">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                        <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page">List Data</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- Navbar & Hero End -->
<?= $this->endSection() ?>
<?= $this->section('main-content') ?>

<!-- Full Screen Search Start -->
<div class="modal fade" id="searchModal" tabindex="-1">
    <div class="modal-dialog modal-fullscreen">
        <div class="modal-content" style="background: rgba(29, 29, 39, 0.7);">
            <div class="modal-header border-0">
                <button type="button" class="btn bg-white btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body d-flex align-items-center justify-content-center">
                <div class="input-group" style="max-width: 600px;">
                    <input type="text" class="form-control bg-transparent border-light p-3" placeholder="Type search keyword">
                    <button class="btn btn-light px-4"><i class="bi bi-search"></i></button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Full Screen Search End -->

<div class="container-xxl py-5">
    <div class="container px-lg-5">
        <div class="section-title position-relative text-center mb-5 pb-2 wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="position-relative d-inline text-primary ps-4">Scrapping Data</h6>
            <h2 class="mt-2">Tribun Aceh Jaya</h2>
        </div>
        <div class="row g-4">
            <div class="">
                <ul class="lsi">
                    <?php foreach ($hasil as $dt) : ?>
                        <li class="ptb15 list-unstyled mb-4">
                            <div class="row">
                                <div class="fr mt3 pos_rel col-2">
                                    <a href="<?= $dt['link'] ?>" title="" aria-label="link">
                                        <img src="<?= $dt['image'] ?>" class="img-thumbnail" height="90" class="shou2" width="120" alt="Angin-Puting-Beliung-Terjadi-di-Aceh-Jaya.jpg">
                                    </a>
                                </div>
                                <div class="mr140 col-10">
                                    <h3>
                                        <a href="<?= $dt['link'] ?>" title="<?= $dt['title'] ?>" class="fbo f18 ln24" aria-label="link">
                                            <?= $dt['title'] ?> </a>
                                    </h3>
                                    <h4 class="grey2 pt5"><?= $dt['body'] ?>.</h4>
                                    <div class="grey pt5"><span class="fa fa-clock-o mr5"></span><span class="grey"><?= $dt['timestamp'] ?></span></div>
                                </div>
                            </div>
                        </li>
                    <?php endforeach; ?>
                    <?php foreach ($calang as $dt) : ?>
                        <li class="ptb15 list-unstyled mb-4">
                            <div class="row">
                                <div class="fr mt3 pos_rel col-2">
                                    <a href="<?= $dt['link'] ?>" title="" aria-label="link">
                                        <img src="<?= $dt['image'] ?>" class="img-thumbnail" height="90" class="shou2" width="120" alt="Angin-Puting-Beliung-Terjadi-di-Aceh-Jaya.jpg">
                                    </a>
                                </div>
                                <div class="mr140 col-10">
                                    <h3>
                                        <a href="<?= $dt['link'] ?>" title="<?= $dt['title'] ?>" class="fbo f18 ln24" aria-label="link">
                                            <?= $dt['title'] ?> </a>
                                    </h3>
                                    <h4 class="grey2 pt5"><?= $dt['body'] ?>.</h4>
                                    <div class="grey pt5"><span class="fa fa-clock-o mr5"></span><span class="grey"><?= $dt['timestamp'] ?></span></div>
                                </div>
                            </div>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>