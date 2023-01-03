<?php
  echo "
    <div class='container'>
        <br />
        User: $name<br />
        ID: $id<br /> 
        <!-- Title is on the right but will appear first if small  -->
        <div class='row row-content align-items-center'>
            <div class='col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4'>
                <form class='form-login' method='post'>
                    <fieldset>
                        <legend>
                            Profile settings
                        </legend>
                        <p>
                            Please enter your old password and new password to change<br />

                            <!-- error message appears here! -->
                            <span style='color:red;'>$errmsg</span>
                            <span style='color:green;'>$statusmsg</span>
                        </p>
                        <div class='form-group form-actions'>
                            <span class='input-icon'>
                                <i class='fa fa-lock'></i> </span> Old password:
                                <input type='password' class='form-control password' name='oldpass' placeholder='Old password'>
                                <span style='color:red;'>$errmsg_oldpass</span>
                            </span>
                        </div>
                        <div class='form-group form-actions'>
                            <span class='input-icon'>
                                <i class='fa fa-lock'></i> New password:
                                <input type='password' class='form-control password' name='newpass' placeholder='New password'>
                                <span style='color:red;'>$errmsg_newpass</span>
                            </span>
                        </div>
                        
                        <br />
                        <div class='form-actions'>
                            <button type='submit' class='btn btn-primary' style='color:red;' name='account' value='delete'>
                                Delete account <i class='fa fa-arrow-circle-right'></i>
                            </button>
                            <button type='submit' class='btn btn-primary pull-right' name='account' value='modify'>
                                Change password <i class='fa fa-arrow-circle-right'></i>
                            </button>
                        </div>
                        
                    </fieldset>
                </form>
            </div>
        </div>
    </div> 
  ";
?>