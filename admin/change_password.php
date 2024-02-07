<?php include('common/header.php');?>
<title>WTMS  - Change Password</title>
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">View Template</h6>
    </div>
    <div class="card-body">
        <form >
            <div class="row">
                <div class="col-3"></div>
                <div class="col-6">
                    <div class="row mb-3">
                        <div class="col-sm-12">
                            <label class="text-dark fw-800">Current Password</label>
                            <input type="password" name="old_password" required id="old_password" class="form-control">
                        </div>
                    </div>  
                    <div class="row mb-3">
                        <div class="col-sm-12">
                            <label class="text-dark fw-800">New Password</label>
                            <input type="password" name="new_password" required id="new_password" class="form-control">
                        </div>
                    </div>  
                    <div class="row mb-3">
                        <div class="col-sm-12">
                            <label class="text-dark fw-800">Confirm Password</label>
                            <input type="password" name="confirm_password" required id="confirm_password" class="form-control">
                        </div>
                    </div>   
                    <div class="row text-center">
                        <div class="col-sm-12">
                        <button class="btn btn-primary" value="submit" name="submit" id="submit" type="submit">Change</button>
                        <button class="btn btn-danger" name="cancel" id="cancel" type="reset">Reset</button>
                        </div>
                    </div>     
                </div>
            </div>                   
        </form>
    </div>
</div>
<?php include('common/footer.php');?>
<script>
    $(document).ready(function(){
        $('#change_password_menu').addClass('active');
    })
</script>