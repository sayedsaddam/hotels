<!-- Slider starts -->
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100" src="<?= base_url('assets/img/hero1.jpg'); ?>" alt="First slide">
            <div class="carousel-caption d-none d-md-block">
                <h5>Slide 1</h5>
                <p>This is slide 1, we'll be adding more text later on...</p>
            </div>
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="<?= base_url('assets/img/hero2.jpg'); ?>" alt="Second slide">
            <div class="carousel-caption d-none d-md-block">
                <h5>Slide 2</h5>
                <p>This is slide 2, we'll be adding more text later on...</p>
            </div>
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="<?= base_url('assets/img/hero3.jpg'); ?>" alt="Third slide">
            <div class="carousel-caption d-none d-md-block">
                <h5>Slide 3</h5>
                <p>This is slide 3, we'll be adding more text later on...</p>
            </div>
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
<!-- Slider ends -->
<hr>
<div class="container">
    <div class="row">
        <?php if(!empty($posts)): foreach($posts as $post): ?>
        <div class="col-xl-lg-4 col-md-4 col-sm-6">
            <div class="card border-success mb-3">
                <div class="card-header bg-transparent border-success">
                    <h5><?= $post->post_title; ?></h5>
                </div>
                <div class="card-body text-success">
                    <h5 class="card-title"><?= $post->post_title; ?></h5>
                    <p class="card-text"><?= substr($post->post_content, 0, 191); ?></p>
                    <footer class="blockquote-footer">
                        <small><?= date('M jS, Y', strtotime($post->post_date)); ?></small>
                    </footer>
                </div>
                <div class="card-footer bg-transparent border-success text-right">
                    <a href="#" class="btn btn-success btn-sm">read more &raquo;</a>
                </div>
            </div>
        </div>
        <?php endforeach; endif; ?>
        <div class="col-xl-lg-4 col-md-4 col-sm-6">
            <div class="card border-info mb-3">
                <div class="card-header bg-transparent border-info">
                    <h5>Hot spots</h5>
                </div>
                <div class="card-body text-info">
                    <h5 class="card-title">Hot spots</h5>
                    <p class="card-text">Some hot spots this month, rating's done on the basis of most visited by tourists.</p>
                </div>
                <div class="card-footer bg-transparent border-info text-right">
                    <a href="#" class="btn btn-info btn-sm">read more &raquo;</a>
                </div>
            </div>
        </div>
        <div class="col-xl-lg-4 col-md-4 col-sm-6">
            <div class="card border-secondary mb-3">
                <div class="card-header bg-transparent border-secondary">
                    <h5>Top Managers</h5>
                </div>
                <div class="card-body text-secondary">
                    <h5 class="card-title">Top Managers</h5>
                    <p class="card-text">Some of the top managers, rating's done on the basis of dealing with tourists.</p>
                </div>
                <div class="card-footer bg-transparent border-secondary text-right">
                    <a href="#" class="btn btn-secondary btn-sm">read more &raquo;</a>
                </div>
            </div>
        </div>
    </div>
</div>