<div class="container mt-4">
    <div class="card mx-auto" style="max-width:400px;">
        <div class="card-header">
            <h5 class="mb-0">Form Login</h5>
        </div>
        <div class="card-body">
            <form action="<?= BASEURL; ?>index.php?url=login/auth" method="POST">
                <div class="mb-3">
                    <input class="form-control" type="text" name="username" placeholder="Username" required>
                </div>
                <div class="mb-3">
                    <input class="form-control" type="password" name="password" placeholder="Password" required>
                </div>
                <button class="btn btn-primary" type="submit">Login</button>
            </form>
        </div>
    </div>
</div>

