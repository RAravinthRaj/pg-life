<div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="login-modal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="signup-modal">Login with PG Life</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="login-form" class="form" role="form" method="post" action="api/login_submit.php">
                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="fas fa-envelope"></i>
                            </span>
                        </div> 
                        <input type="text" class="form-control" name="email" placeholder="Email" maxlength="30" required />
                    </div>
                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="fas fa-lock"></i>
                            </span>
                        </div> 
                        <input type="password" class="form-control" name="password" placeholder="Password" minlength="8" required />
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-block btn-primary">Login</button> 
                    </div>
                </form>
            </div>

            <div class="modal-footer">
                <span>
                    <a href="#" data-toggle="modal" data-dismiss="modal" data-target="#signup-modal">Click here </a>
                    to register a new Account
            </div>
        </div>
            
    </div>
</div>