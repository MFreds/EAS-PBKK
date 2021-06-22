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
            <div class="auth-col">
                <h2>Login</h2>
                <form method="post" class="login">
                    <p>
                        <label for="username">E-mail <span class="required">*</span></label><input type="text" id="username">
                    </p>
                    <p>
                        <label for="password">Password <span class="required">*</span></label><input type="password" id="password">
                    </p>
                    <p class="auth-submit">
                        <input type="submit" value="Login">
                        <input type="checkbox" id="rememberme" value="forever">
                        <label for="rememberme">Remember me</label>
                    </p>
                    <p class="auth-lost_password">
                        <a href="#">Lost your password?</a>
                    </p>
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
                        <label for="reg_password">Password <span class="required">*</span></label><input name="password" type="password" id="reg_password">
                    </p>
                    <?php if (!empty(session()->getFlashdata('error'))) : ?>
                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            <h4>Periksa Entrian Form</h4>
                            </hr />
                            <?php echo session()->getFlashdata('error'); ?>
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