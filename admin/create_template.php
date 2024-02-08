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
                            <div class="d-flex">
                                <div class="mr-2">
                                    <input type="radio" required value="BizLand" name="template1" id="template1"> <label  for="template1"> <img width="200px" src="img/bizland.png"></label>
                                </div>
                                <div  class="mr-2">
                                    <input type="radio" value="MeFamily" name="template1" id="template2"> <label  for="template2"> <img width="200px" src="img/me-family.png"></label>
                                </div>
                                <div>
                                    <input type="radio" value="OnePage" name="template1" id="template3"> <label  for="template3"> <img width="200px" src="img/onepage.png"></label>
                                </div>
                            </div>
                            <div class="d-flex">
                                <div class="mr-2">
                                    <input type="radio" required value="PhotoFolio" name="template1" id="template4"> <label  for="template4"> <img width="200px" src="img/potofolio.png"></label>
                                </div>
                                <div  class="mr-2">
                                    <input type="radio" value="Presento" name="template1" id="template5"> <label  for="template5"> <img width="200px" src="img/presento.png"></label>
                                </div>
                                <div>
                                    <input type="radio" value="Yummy" name="template1" id="template6"> <label  for="template6"> <img width="200px" src="img/yummy.png"></label>
                                </div>
                            </div>
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
if(isset($_SESSION['error']) && $_SESSION['error'] != ""){?>
<script>
    toastMixinError.fire({
        animation: true,
        title: "<?= $_SESSION['error'];?>"
    });
</script>
<?php $_SESSION['error'] = ""; } ?>