<?= $this->extend('layout') ?>
<?= $this->section('content') ?>

<div class="pagetitle">
    <h1>Profile</h1>
</div>

<section class="section profile">
    <div class="card p-4 shadow-sm">
        <div class="card-body">
            <h5 class="card-title text-primary mb-4" style="font-weight: bold; color: #2c3e50;">
                Profile Information
            </h5>

            <div class="row mb-2">
                <div class="col-lg-3 col-md-4 label text-primary">Username</div>
                <div class="col-lg-9 col-md-8"><?= session()->get('username'); ?></div>
            </div>

            <div class="row mb-2">
                <div class="col-lg-3 col-md-4 label text-primary">Role</div>
                <div class="col-lg-9 col-md-8">
                    <span class="badge bg-danger text-white"><?= session()->get('role'); ?></span>
                </div>
            </div>

            <div class="row mb-2">
                <div class="col-lg-3 col-md-4 label text-primary">Email</div>
                <div class="col-lg-9 col-md-8 text-primary"><?= session()->get('email'); ?></div>
            </div>

            <div class="row mb-2">
                <div class="col-lg-3 col-md-4 label text-primary">Login Time</div>
                <div class="col-lg-9 col-md-8"><?= session()->get('login_time'); ?></div>
            </div>

            <div class="row mb-2">
                <div class="col-lg-3 col-md-4 label text-primary">Status</div>
                <div class="col-lg-9 col-md-8">
                    <?php if (session()->get('isLoggedIn')): ?>
                        <span class="badge bg-success">
                            <i class="bi bi-check-circle me-1"></i> Sudah Login
                        </span>
                    <?php else: ?>
                        <span class="badge bg-secondary">Offline</span>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    /* Tambahan CSS agar tampilan lebih mirip dengan gambar */
    .label {
        font-weight: 600;
        color: #4154f1;
    }
    .card-title {
        font-size: 1.25rem;
    }
    .badge {
        padding: 5px 10px;
        border-radius: 4px;
    }
</style>

<?= $this->endSection() ?>