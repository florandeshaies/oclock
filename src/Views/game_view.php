<section id="set">
    <div class="container text-center">
        <?php
        for ($i = 0; $i < 36; $i++) {
            echo '<img src="assets/img/logo-o-clock.png" class="case" id="case-' . ($i + 1) . '" alt="logo O\'Clock">';
        }
        ?>
    </div>
</section>

<section id="timer">
    <div class="container text-center">
        <div class="row">
            <div class="col-md-8 offset-md-2 col-10 offset-1">
                <div class="progress">
                    <div class="progress-bar bg-danger" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
                </div>
            </div>
        </div>
    </div>
</section>