<?php include('common/header.php');?>
<title>WTMS  - Change Password</title>
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Change Password</h6>
    </div>
    <div class="card-body">
        <form method= "post" action= "update_change_pwd.php">
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
                            <input type="password" name="confirm_password" required id="confirm_password" class="form-control" onfocusout="myFunction(this)">
                        </div>
                    </div>   
                    <div class="row text-center">
                        <div class="col-sm-12">
                        <button class="btn btn-primary" disabled="disabled" value="submit" name="submit" id="submit" type="submit">Change</button>
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
    function myFunction(data) {
        var new_pwd = $('#new_password').val();
        var confirm_pwd = data.value;
        if(new_pwd == confirm_pwd){
            $('#submit').removeAttr('disabled');
        }else{
            $('#submit').attr('disabled', 'disabled');
        }
    }
</script>
<?php 
if(isset($_SESSION['success']) && $_SESSION['success'] != ""){?>
<script>
    toastMixinSuccess.fire({
        animation: true,
        title: "<?= $_SESSION['success'];?>"
    });
</script>
<?php $_SESSION['success'] = ""; }
?>
<?php 
if(isset($_SESSION['error']) && $_SESSION['error'] != ""){?>
<script>
    toastMixinError.fire({
        animation: true,
        title: "<?= $_SESSION['error'];?>"
    });
</script>
<?php $_SESSION['error'] = ""; } ?>
