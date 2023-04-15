<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container">
        <!-- <a class="navbar-brand" href="<?= base_url('/'); ?>">
            <img src="/public/rasl.png" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
            <b class="text-danger">RasCoding</b>
        </a> -->
        <a class="navbar-brand" href="<?= base_url('/'); ?>"><b class="text-danger">RasCoding</b></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link active" aria-current="page" href="<?= base_url('/'); ?>">Home</a>
                <a class="nav-link" href="<?= base_url('/pages/about'); ?>">About</a>
                <a class="nav-link" href="<?= base_url('/pages/contact'); ?>">Contact</a>
                <a class="nav-link" href="<?= base_url('/komik/index'); ?>">Komik</a>
                <a class="nav-link" href="<?= base_url('/orang/index'); ?>">Orang</a>
            </div>
        </div>
    </div>
</nav>