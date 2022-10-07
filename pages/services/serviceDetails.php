<?php require '../../config.php' ?>

<!-- Header Links : CSS , Meta tags -->
<?php include INC_URL . '/__headerLinks.php'; ?>

<link rel="stylesheet" href="<?php echo ASSETS_URL . "/css/progress.css"; ?>" />

<!-- Sidebar : LEFT -->
<?php include INC_URL . '/__sidebar.php'; ?>

<!-- Navbar : TOP -->
<?php include INC_URL . '/__navbar.php'; ?>

<!-- Main Content -->
<div class="container-xxl flex-grow-1 container-p-y">
    <h5 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Services / Passport Service / </span> Track Service </h4>

        <div class="row">
            <aside id="layout-menu" class="card bg-menu-theme w-100">

                <section class="p-5">
                    <div class="rt-container">
                        <div class="col-rt-12">
                            <div class="Scriptcontent">
                                <!-- Stepper HTML -->
                                <div class="step">
                                    <div>
                                        <div class="circle"><i class='bx bx-check'></i></div>
                                    </div>
                                    <div>
                                        <div class="title">First Step</div>
                                        <div class="caption">Optional</div>
                                    </div>
                                </div>
                                <div class="step step-active">
                                    <div>
                                        <div class="circle">2</div>
                                    </div>
                                    <div>
                                        <div class="title text-primary">Second Step</div>
                                        <div class="caption">This is description of second step.</div>
                                    </div>
                                </div>
                                <div class="step">
                                    <div>
                                        <div class="circle">3</div>
                                    </div>
                                    <div>
                                        <div class="title">Third Step</div>
                                        <div class="caption">Some text about Third step.</div>
                                    </div>
                                </div>

                                <div class="step">
                                    <div>
                                        <div class="circle">4</div>
                                    </div>
                                    <div>
                                        <div class="title">Finish</div>
                                    </div>
                                </div>
                                <!-- End Stepper HTML -->
                            </div>
                        </div>
                    </div>
                </section>

            </aside>
        </div>
</div>

<!-- Footer : BOTTOM -->
<?php include INC_URL . '/__footer.php'; ?>

<!-- Footer Links : JAVASCRIPT -->
<?php include INC_URL . '/__footerLinks.php'; ?>