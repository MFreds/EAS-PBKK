<nav class="navbar navbar-expand-md navbar-light bg-primary">
    <a href="<?php echo base_url('/')?>">
        <img src="<?php echo base_url('img/logo.png')?>" alt="AllStore - MultiConcept eCommerce Template">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="<?php echo site_url('/') ?>"><?php echo 'Dashboard' ?><class="sr-only"></a>
            </li>
        </ul>
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="fas fa-user-circle fa-fw"></i> Admin
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Logout</a>
            </li>
        </ul>
    </div>
</nav>