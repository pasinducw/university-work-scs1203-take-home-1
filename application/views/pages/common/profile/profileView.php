<link rel="stylesheet" href="<?php echo base_url('assets/css/common/profile.css') ?>">
<link rel="stylesheet" href="<?php echo base_url('assets/fontawesome/css/all.css') ?>">

<div style="padding-top:20px;padding-bottom:30px">

    <h2 class="heading1">Profile</h2>
    <br>
    <div class="container-fluid">

        <p class="sesction1"><i class="fa fa-angle-double-right"></i>&nbsp;Basic Details</p>

        <table class="profile-details-table">
            <tbody>
                <tr>
                    <td><p>User ID</p></td>
                    <td>&nbsp;:&nbsp;</td>
                    <td>1234</td>
                </tr>
                <tr>
                    <td><p>First Name</p></td>
                    <td>&nbsp;:&nbsp;</td>
                    <td>Nishan</td>
                </tr>
                <tr>
                    <td><p>Last Name</p></td>
                    <td>&nbsp;:&nbsp;</td>
                    <td>Wijethunga</td>
                </tr>
                <tr>
                    <td><p>Contact No</p></td>
                    <td>&nbsp;:&nbsp;</td>
                    <td>0710881319</td>
                </tr>
            </tbody>
        </table>

    </div>

    <br>
    <p class="sesction1"><i class="fa fa-angle-double-right"></i>&nbsp;Update Basic Details</p>
    
    <div class="container-fluid">
        <div class="row">
            <div class="col-3"></div>
            <div class="col-6">

                <form method="post" name="update-user-detail-form">
                    <div class="form-group">
                        <label for="input-fname">First Name</label>
                        <input type="text" class="form-control" id="input-fname" name="input-fname" aria-describedby="input-fnameHelp" placeholder="Enter First Name">
                        <small id="input-fnameHelp" class="form-text text-muted">Enter your first name.</small>
                    </div>
                    <div class="form-group">
                        <label for="input-lname">Last Name</label>
                        <input type="text" class="form-control" id="input-lname" name="input-lname" aria-describedby="input-fnameHelp" placeholder="Enter Last Name">
                        <small id="input-lnameHelp" class="form-text text-muted">Enter your last name.</small>
                    </div>
                    <div class="form-group">
                        <label for="input-contact-no">Contact Number</label>
                        <input type="text" class="form-control" id="input-contact-no" name="input-contact-no" aria-describedby="input-contact-noHelp" placeholder="Enter Contact Number">
                        <small id="input-contact-noHelp" class="form-text text-muted">Enter your contact number.</small>
                    </div>
                    <p class="btn-cont1"><button type="submit" name="update-user-detail-form" class="btn btn-primary btn-sm">Update Profile</button></p>
                </form>

            </div>
            <div class="col-3"></div>
        </div>
    </div>

    <br>
    <p class="sesction1"><i class="fa fa-angle-double-right"></i>&nbsp;Change Password</p>
    
    <div class="container-fluid">
        <div class="row">
            <div class="col-3"></div>
            <div class="col-6">

                <form method="post" name="update-user-password-form">
                    <div class="form-group">
                        <label for="input-fname">New Password</label>
                        <input type="password" class="form-control" id="input-new-passwd" name="input-new-passwd" aria-describedby="input-new-passwdHelp" placeholder="Enter New Password">
                        <small id="input-new-passwdHelp" class="form-text text-muted">Enter your new password.</small>
                    </div>
                    <div class="form-group">
                        <label for="input-confirm-password">Confirm Password</label>
                        <input type="text" class="form-control" id="input-confirm-password" name="input-confirm-password" aria-describedby="input-confirm-passwordHelp" placeholder="Confirm Your Password">
                        <small id="input-confirm-passwordHelp" class="form-text text-muted">Confirm your password.</small>
                    </div>
                    <div class="input-group">
                        <input type="text" class="form-control" id="input-old-password" name="input-old-password" placeholder="Old Password">
                        <div class="input-group-append">
                            <button type="button" class="btn btn-primary">Change Password</button>                   
                        </div>
                    </div>

                </form>

            </div>
            <div class="col-3"></div>
        </div>
    </div>

</div>


