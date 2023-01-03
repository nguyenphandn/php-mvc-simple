<?php
  echo "
    <div class='container'>
        <div class='row row-content align-items-center'>
            <div class='col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4'>
                <form class='form-login' method='post'>
                    <fieldset>
                        <legend>
                            Sign in to your account
                        </legend>
                        <p>
                            Please enter your Email/username and password to log in.<br />

                            <!-- error message appears here! -->
                            <span style='color:red;'>$errmsg</span>
                            <span style='color:green;'>$statusmsg</span>
                        </p>
                        <div class='form-group'>
                            <span class='input-icon'>
                                <i class='fa fa-user'></i> </span> Username:
                                <input type='text' class='form-control' name='username' placeholder='Email/Username' value=$username >
                                <span style='color:red;'>$errmsg_username</span>
                            </span>
                        </div>
                        <div class='form-group form-actions'>
                            <span class='input-icon'>
                                <i class='fa fa-lock'></i> Password:
                                <input type='password' class='form-control password' name='password' placeholder='Password'>
                                <span style='color:red;'>$errmsg_password</span>
                            </span>
                        </div>
                        
                        <br />
                        <div class='form-actions'>
                            
                            <button type='submit' class='btn btn-primary pull-right' name='submit' value='submitted'>
                                Login <i class='fa fa-arrow-circle-right'></i>
                            </button>
                        </div>
                        
                    </fieldset>
                </form>
            </div>
        </div>
    </div> 
  ";
?>