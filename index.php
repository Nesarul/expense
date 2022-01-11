<?php 
    require_once './admin/function.php';
    require_once DR.'inc'.DS.'header.php';
?>
    
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-6 offset-sm-3 offset-md-4 col-12 pt-5">
                <div class="card shadow">
                    <img src="/expense/assets/images/expense_banner.jpg" class="card-img-top" alt="Expense Banner">
                    <div class="card-body">
                        <form action="./admin/login/login.php" method="post">
                            <div class="mb-3">
                                <label for="userId" class="form-label">Login ID</label>
                                <input type="text" class="form-control" id="userId">
                            </div>
                            <div class="mb-3">
                                <label for="userPassword" class="form-label">Password</label>
                                <input type="password" class="form-control" id="userPassword">
                            </div>
                            
                            <button type="submit" class="btn btn-primary form-control">Login</button>
                        
                            <p>Don't have Id Click <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#registerDialog">Here</a></p>
                         
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col">
                <div class="modal fade" id="registerDialog" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="registerDialogLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="registerDialogLabel">Modal title</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="./admin/login/login.php" method="post">
                                    <div class="row">
                                        <div class="col-sm-6 col-12">
                                            <div class="mb-3">
                                                <label for="userId" class="form-label">Login ID</label>
                                                <input type="text" class="form-control" id="userId" name="userId">
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-12">
                                            <div class="mb-3">
                                                <label for="email" class="form-label">Email</label>
                                                <input type="email" class="form-control" id="email" name="email">
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-12">
                                            <div class="mb-3">
                                                <label for="firstName" class="form-label">First Name</label>
                                                <input type="text" class="form-control" id="firstName" name="firstName">
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-12">
                                            <div class="mb-3">
                                                <label for="lastName" class="form-label">Last Name</label>
                                                <input type="text" class="form-control" id="lastName" name="lastName">
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-12">
                                            <div class="mb-3">
                                                <label for="userPassword" class="form-label">Password</label>
                                                <input type="password" class="form-control" id="userPassword" name="userPassword">
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-12">
                                            <div class="mb-3">
                                                <label for="confPassword" class="form-label">Confirm Password</label>
                                                <input type="password" class="form-control" id="confPassword" name="confPassword">
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
        </div>
    </div>
<?php 
    require_once DR.'inc'.DS.'footer.php';
?>