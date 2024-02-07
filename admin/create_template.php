<?php include('common/header.php');?>
<title>WTMS  - Create Template</title>
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Create Template</h6>
    </div>
    <div class="card-body">
        <form action="insert_template.php" method="post">
            <div class="row">
                <div class="col-3"></div>
                <div class="col-6">
                    <div class="row mb-3">
                        <div class="col-sm-12">
                            <label class="text-dark fw-800" for="client_name">Client Name</label>
                            <input name="client_name" required id="client_name" class="form-control">
                        </div>
                    </div>  
                    <div class="row mb-3">
                        <div class="col-sm-12">
                            <label  class="text-dark fw-800"  for="active">Status</label>
                            <br>
                            <input type="radio" required value="0" name="status" id="active"> <label  for="active">Active</label>
                            <input type="radio" value="1" name="status" id="inactive"> <label  for="inactive">In-active</label>
                        </div>
                    </div>  
                    <div class="row mb-3">
                        <div class="col-sm-12">
                            <label class="text-dark fw-800"  for="template1">Select Template</label>
                            <br>
                            <input type="radio" required value="template1" name="template1" id="template1"> <label  for="template1">Template1</label>
                            <input type="radio" value="template2" name="template1" id="template2"> <label  for="template2">Template2</label>
                            <input type="radio" value="template3" name="template1" id="template3"> <label  for="template3">Template3</label>
                            <input type="radio" value="template4" name="template1" id="template4"> <label  for="template4">Template4</label>
                            <input type="radio" value="template5" name="template1" id="template5"> <label  for="template5">Template5</label>
                        </div>
                    </div>   
                    <div class="row text-center">
                        <div class="col-sm-12">
                            <button class="btn btn-primary" value="submit" name="submit" id="submit" type="submit">Create</button>
                            <button class="btn btn-danger" name="cancel" id="cancel" type="reset">Reset</button>
                        </div>
                    </div>     
                </div>
            </div>                   
        </form>
    </div>
</div>
<?php 
include('common/footer.php');
?>
<script>
    $(document).ready(function(){
        $('#create_template_menu').addClass('active');
    })
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
if($_SESSION['error'] != ""){?>
<script>
    toastMixinError.fire({
        animation: true,
        title: "<?= $_SESSION['error'];?>"
    });
</script>
<?php $_SESSION['error'] = ""; } ?>