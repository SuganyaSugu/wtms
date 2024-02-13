<?php include('common/header.php');?>
<?php include('get_template.php');?>
<title>WTMS  - Edit Client</title>
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Edit Client</h6>
    </div>
    <?php 
        if(!empty($data)){
            $client_name = $data[0]['client_name'];
            $client_status = $data[0]['client_status'];
            $client_template = $data[0]['client_template'];
        }else{
            $client_name = "";
            $client_status = 0;
            $client_template = "BizLand";
        }
    ?>
    <div class="card-body">
        <form action="update_template.php" method="post">
            <div class="row">
                <div class="col-3"></div>
                <div class="col-6">
                    <div class="row mb-3">
                        <div class="col-sm-12">
                            <input hidden name="client_id" value="<?= $_GET['id']; ?>">
                            <label class="text-dark fw-800" for="client_name">Client Name</label>
                            <input name="client_name" required id="client_name" class="form-control" value="<?= $client_name; ?>">
                        </div>
                    </div>  
                    <div class="row mb-3">
                        <div class="col-sm-12">
                            <label  class="text-dark fw-800"  for="active">Status</label>
                            <br>
                            <input type="radio" required value="0" name="status" id="active" <?php echo $client_status == 0 ? "checked" : "" ?>> <label  for="active">Active</label>
                            <input type="radio" value="1" name="status" id="inactive" <?php echo $client_status == 1 ? "checked" : "" ?>> <label  for="inactive">In-active</label>
                        </div>
                    </div>  
                    <div class="row mb-3">
                        <div class="col-sm-12">
                            <label class="text-dark fw-800"  for="template1">Select Template</label>
                            <br>
                            <div class="d-flex" style="gap: 10px;margin-top: 10px;">
                                <div class="mr-2" style="display: flex;align-items: center;gap: 10px;padding: 10px;border-radius: 4px;background: #e7e7e7;">
                                    <input type="radio" required value="BizLand" name="template1" id="template1" <?php echo $client_template == "BizLand" ? "checked" : "" ?>> <label  for="template1"> <img width="200px" src="img/bizland.png"></label>
                                </div>
                                <div  class="mr-2" style="display: flex;align-items: center;gap: 10px;padding: 10px;border-radius: 4px;background: #e7e7e7;">
                                    <input type="radio" value="MeFamily" name="template1" id="template2" <?php echo $client_template == "MeFamily" ? "checked" : "" ?>> <label  for="template2"> <img width="200px" src="img/me-family.png"></label>
                                </div>
                                <div style="display: flex;align-items: center;gap: 10px;padding: 10px;border-radius: 4px;background: #e7e7e7;">
                                    <input type="radio" value="OnePage" name="template1" id="template3" <?php echo $client_template == "OnePage" ? "checked" : "" ?>> <label  for="template3"> <img width="200px" src="img/onepage.png"></label>
                                </div>
                            </div>
                            <div class="d-flex" style="gap: 10px;margin-top: 10px;">
                                <div class="mr-2" style="display: flex;align-items: center;gap: 10px;padding: 10px;border-radius: 4px;background: #e7e7e7;">
                                    <input type="radio" value="PhotoFolio" name="template1" id="template4" <?php echo $client_template == "PhotoFolio" ? "checked" : "" ?>> <label  for="template4"> <img width="200px" src="img/potofolio.png"></label>
                                </div>
                                <div  class="mr-2" style="display: flex;align-items: center;gap: 10px;padding: 10px;border-radius: 4px;background: #e7e7e7;">
                                    <input type="radio" value="Presento" name="template1" id="template5" <?php echo $client_template == "Presento" ? "checked" : "" ?>> <label  for="template5" > <img width="200px" src="img/presento.png"></label>
                                </div>
                                <div style="display: flex;align-items: center;gap: 10px;padding: 10px;border-radius: 4px;background: #e7e7e7;">
                                    <input type="radio" value="Yummy" name="template1" id="template6" <?php echo ($client_template == "Yummy") ? "checked" : "" ?>> <label  for="template6" > <img width="200px" src="img/yummy.png"></label>
                                </div>
                            </div>
                        </div>
                    </div>   
                    <div class="row text-center">
                        <div class="col-sm-12">
                            <button class="btn btn-primary" value="submit" name="submit" id="submit" type="submit">Update</button>
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