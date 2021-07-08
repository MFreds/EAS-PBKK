<?= $this->extend('layouts/page_layout') ?>
<!-- title -->
<?= $this->section('title') ?>
<title>eShopppu - Login/Register</title>
<?= $this->endSection() ?>

<!-- title -->
<?= $this->section('content') ?>
<!-- Main Content - start -->
<main>
    <section class="container stylization maincont">


        <ul class="b-crumbs">
            <li>
                <a href="index.html">
                    Home
                </a>
            </li>
            <li>
                <span>Registration / Login</span>
            </li>
        </ul>
        <h1 class="main-ttl"><span>Registration / Login</span></h1>
        <div class="auth-wrap">
            <?php if (!empty(session()->getFlashdata('sucess_register'))) : ?>
                <div class="alert alert-success alert-dismissible show" role="alert">
                    <h4>Registrasi Berhasil</h4>
                    </hr />
                    <?php echo session()->getFlashdata('sucess_register'); ?>
                </div>
            <?php endif; ?>
            <div class="auth-col">
                <h2>Login</h2>
                <form action="<?= base_url(); ?>/auth/login" method="post" class="login">
                    <?= csrf_field(); ?>
                    <p>
                        <label for="reg_email">Email <span class="required">*</span></label><input name="email" type="email" id="reg_email">
                    </p>
                    <p>
                        <label for="reg_password">Password <span class="required">*</span></label><input name="password" type="password" id="reg_password">
                    </p>
                    <p class="auth-submit">
                        <input type="submit" value="Login">
                        <!-- <input type="checkbox" id="rememberme" value="forever"> -->
                        <!-- <label for="rememberme">Remember me</label> -->
                    </p>
                    <?php if (!empty(session()->getFlashdata('error_log'))) : ?>
                        <div class="alert alert-warning alert-dismissible show" role="alert">
                            <h4>Periksa Entrian Form</h4>
                            </hr />
                            <?php echo session()->getFlashdata('error_log'); ?>
                        </div>
                    <?php endif; ?>
                    <!-- <p class="auth-lost_password">
                        <a href="#">Lost your password?</a>
                    </p> -->
                </form>
            </div>
            <div class="auth-col">
                <h2>Register</h2>
                <form action="<?= base_url(); ?>/auth/register" method="post" class="register">
                    <?= csrf_field(); ?>
                    <p>
                        <label for="reg_email">Email <span class="required">*</span></label><input name="email" type="email" id="reg_email">
                    </p>
                    <p>
                        <label for="reg_name">Name <span class="required">*</span></label><input name="name" type="text" id="reg_name">
                    </p>
                    <p>
                        <label for="reg_password">Password <span class="required">*</span></label><input name="password" type="password" id="reg_password">
                    </p>
                    <?php if (!empty(session()->getFlashdata('error_reg'))) : ?>
                        <div class="alert alert-warning alert-dismissible show" role="alert">
                            <h4>Periksa Entrian Form</h4>
                            </hr />
                            <?php echo session()->getFlashdata('error_reg'); ?>
                        </div>
                    <?php endif; ?>
                    <p class="auth-submit">
                        <input type="submit" value="Register">
                    </p>
                </form>
            </div>
        </div>



    </section>
</main>
<!-- Main Content - end -->
<?= $this->endSection() ?>