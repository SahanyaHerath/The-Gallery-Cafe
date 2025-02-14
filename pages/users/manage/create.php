<?php
require_once "process.php";

// Check user session exists
if (! isset($_SESSION['username'])) {
    header('Location: /pages/auth/login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<?php include './../../../components/admin/head.php'?>
<body>
<?php include './../../../components/admin/navbar.php'; ?>

<div class="container-lg mt-4">
    <?php include './../../../components/alert.php'; ?>

    <nav class="d-flex align-items-center justify-content-between" style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/users">Users</a></li>
            <li class="breadcrumb-item active" aria-current="page">Add User</li>
        </ol>

        <a href="/users" class="btn btn-primary d-inline-flex align-self-start align-items-center justify-content-between gap-2">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" width="20" height="20">
                <path stroke-linecap="round" stroke-linejoin="round" d="M9 15 3 9m0 0 6-6M3 9h12a6 6 0 0 1 0 12h-3" />
            </svg>
            Go Back
        </a>
    </nav>

    <div class="mb-3">
        <h1 class="fs-2">Add user</h1>
    </div>

    <form action="process.php?create=true" method="post">
        <div class="row">
            <div class="col-lg-5 mb-3">
                <label for="userId" class="form-label">User ID</label>
                <input id="userId" name="user_id" type="text" class="form-control" placeholder="Enter user ID (e.g.'U001')" required>
            </div>
            <div class="col-lg-5 mb-3">
                <label for="email" class="form-label">Email</label>
                <input id="email" name="email" type="email" class="form-control" required>
            </div>
            <div class="col-lg-5 mb-3">
                <label for="firstname" class="form-label">First Name</label>
                <input id="firstname" name="first_name" type="text" class="form-control" required>
            </div>
            <div class="col-lg-5 mb-3">
                <label for="lastname" class="form-label">Last Name</label>
                <input id="lastname" name="last_name" type="text" class="form-control" required>
            </div>
            <div class="col-lg-5 mb-3">
                <label for="username" class="form-label">Username</label>
                <input id="username" name="username" type="text" class="form-control" required>
            </div>
            <div class="col-lg-5 mb-3">
                <label for="password" class="form-label">Password</label>
                <input id="password" name="password" type="password" class="form-control" required>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
    </form>

</div>

<?php include './../../../components/admin/footer.php'; ?>

<?php include './../../../components/admin/scripts.php'; ?>
</body>
</html>