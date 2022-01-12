<?php 
    require_once './admin/function.php';
    require_once DR.'inc'.DS.'header.php';
?>
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-8 offset-md-3 offset-sm-4 col-12 mt-5">
                <div class="card shadow">
                    <img src="/expense/assets/images/expense_banner.jpg" class="card-img-top" alt="Expenses">
                    <div class="card-body">
                        <form action="./admin/login/register.php" method="post">
                            <div class="row">
                                <div class="col-sm-6 col-12">
                                    <div class="mb-3">
                                        <label for="userId" class="form-label">Login ID</label>
                                        <input type="text" class="form-control" id="userId" name="userId" required>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-12">
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="email" class="form-control" id="email" name="email" required>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-12">
                                    <div class="mb-3">
                                        <label for="firstName" class="form-label">First Name</label>
                                        <input type="text" class="form-control" id="firstName" name="firstName" required>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-12">
                                    <div class="mb-3">
                                        <label for="lastName" class="form-label">Last Name</label>
                                        <input type="text" class="form-control" id="lastName" name="lastName" required>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-12">
                                    <div class="mb-3">
                                        <label for="userPassword" class="form-label">Password</label>
                                        <input type="password" class="form-control" id="userPassword" name="userPassword" required>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-12">
                                    <div class="mb-3">
                                        <label for="confPassword" class="form-label">Confirm Password</label>
                                        <input type="password" class="form-control" id="confPassword" name="confPassword" required>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Register</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php 
    require_once DR.'inc'.DS.'footer.php';
?>