<?php include('common/header.php');?>
<?php include('get_template.php');?>
<?php 
  function url(){
    return sprintf(
      "%s://%s%s",
      isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off' ? 'https' : 'http',
      $_SERVER['SERVER_NAME'],
      "");
  }
?>
<title>WTMS  - View Template</title>
<div class="card shadow mb-4">
<div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">View Template</h6>
</div>
<div class="card-body">
    <form method="post">
        <div class="row mb-3">
            <div class="col-sm-4">
                <label class="text-dark fw-600" for="client">Client</label>
                <input type="text" class="form-control" name="client" id="client" placeholder="Client name" value="<?php echo isset($_SESSION['view_session']['client']) && !empty($_SESSION['view_session']['client']) ? $_SESSION['view_session']['client'] : ''; ?>">
            </div>
            <div class="col-sm-4">
                <label class="text-dark fw-600" for="template">Template</label>
                <select class="form-control" name="template" id="template">
                    <option value="">-- Select --</option>
                    <option value="BizLand"  <?php  echo isset($_SESSION['view_session']['template']) && !empty($_SESSION['view_session']['template']) &&  $_SESSION['view_session']['template'] == "BizLand" ? "selected" : ''; ?>>BizLand</option>
                    <option value="MeFamily"  <?php  echo isset($_SESSION['view_session']['template']) && !empty($_SESSION['view_session']['template']) &&  $_SESSION['view_session']['template'] == "MeFamily" ? "selected" : ''; ?>>MeFamily</option>
                    <option value="OnePage"  <?php  echo isset($_SESSION['view_session']['template']) && !empty($_SESSION['view_session']['template']) &&  $_SESSION['view_session']['template'] == "OnePage" ? "selected" : ''; ?>>OnePage</option>
                    <option value="PhotoFolio"  <?php  echo isset($_SESSION['view_session']['template']) && !empty($_SESSION['view_session']['template']) &&  $_SESSION['view_session']['template'] == "PhotoFolio" ? "selected" : ''; ?>>PhotoFolio</option>
                    <option value="Presento"  <?php  echo isset($_SESSION['view_session']['template']) && !empty($_SESSION['view_session']['template']) &&  $_SESSION['view_session']['template'] == "Presento" ? "selected" : ''; ?>>Presento</option>
                    <option value="Yummy"  <?php  echo isset($_SESSION['view_session']['template']) && !empty($_SESSION['view_session']['template']) &&  $_SESSION['view_session']['template'] == "Yummy" ? "selected" : ''; ?>>Yummy</option>
                </select>
            </div>
            <div class="col-sm-4">
                <label class="text-dark fw-600" for="status">Status</label>
                <select class="form-control" name="status" id="status">
                    <option value="">-- Select --</option>
                    <option value="0" <?php  echo isset($_SESSION['view_session']['status']) && !empty($_SESSION['view_session']['status']) &&  $_SESSION['view_session']['status'] == 0? "selected" : ''; ?> >Active</option>
                    <option value="1" <?php  echo isset($_SESSION['view_session']['status']) && !empty($_SESSION['view_session']['status']) &&  $_SESSION['view_session']['status'] == 1? "selected" : ''; ?> >In-active</option>
                    <option value="2" <?php  echo isset($_SESSION['view_session']['status']) && !empty($_SESSION['view_session']['status']) &&  $_SESSION['view_session']['status'] == 2? "selected" : ''; ?>>Deleted</option>
                </select>
            </div>
        </div>
        <div class="row text-center">
            <div class="col-sm-12">
                <button class="btn btn-primary" value="submit" name="submit" id="submit" type="submit">Search</button>
                <button class="btn btn-danger" name="cancel" id="cancel" type="submit">Reset</button>
            </div>            
        </div>
    </form>
    <hr>
    <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="99%" cellspacing="0">
            <thead>
                <tr>
                    <th>Sl.No</th>
                    <th>Client</th>
                    <th>Template</th>
                    <th>URL</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $i=0;
                if(count($data)>0){
                    foreach($data as $row) { 
                        $status = "Active";
                        if($row['client_status'] == 1){
                            $status = "In-active";
                        }
                        if($row['client_status'] == 2){
                            $status = "Deleted";
                        }
                    ?>
                <tr>
                    <td><?= ++$i ;?></td>
                    <td><?= $row['client_name']; ?></td>
                    <td><?= $row['client_template']; ?></td>
                    <td><a href="<?= url()."?client=".$row['client_name']; ?>" target="_blank"><?= url()."?client=".$row['client_name']; ?></a></td>
                    <td><?= $status; ?></td>
                    <td>
                        <div class="d-flex">
                            <a href="edit_template.php?id=<?= $row['client_id']; ?>" class="text-primary mr-2"><i class="fa fa-edit"></i> </a>
                            <?php if($status != "Deleted"){ ?>
                                <a href="#" class="text-danger mr-2" data-toggle="modal" data-target="#deleteModal" onclick="setClientId(<?= $row['client_id']; ?>)" ><i class="fa fa-trash"></i> </a>
                            <?php } ?>
                            
                            <a href="<?= url()."?client=".$row['client_name']; ?>" target="_blank" class="text-success" ><i class="fa fa-eye"></i> </a>
                        </div>
                    </td>
                </tr>
                <?php } } ?>
            </tbody>
        </table>
    </div>
</div>
</div>
 <!-- Logout Modal-->
 <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
     <div class="modal-dialog" role="document">
         <div class="modal-content">
             <div class="modal-header">
                 <h5 class="modal-title" id="exampleModalLabel">Confirm Delete</h5>
                 <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">×</span>
                 </button>
             </div>
             <div class="modal-body">Are you sure to delete the template?</div>
             <div class="modal-footer">
                    <input hidden id="clientId" >
                 <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                 <button class="btn btn-primary" onclick="deleteClient()">Delete</button>
             </div>
         </div>
     </div>
 </div>
<?php include('common/footer.php');?>
<script>
    $(document).ready(function(){
        $('#view_template_menu').addClass('active');
        $('input').addClass('form-control');
    });
    function setClientId(id){
        $('#clientId').val(id);
    }
    function deleteClient(){
        let client_id = $('#clientId').val();
        $.ajax({
            url:"delete.php",
            method:'post',
            data:{
                id:client_id
            },
            success:function(res){
               if(res == 1){
                    location.reload();
               }else{
                alert("something went wrong");
               }
            },
            error:function(res){
                console.log(res)
            }
        });
    }
</script>
