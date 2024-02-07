<?php include('common/header.php');?>
<?php include('get_template.php');?>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

<title>WTMS  - View Template</title>
<div class="card shadow mb-4">
<div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">View Template</h6>
</div>
<div class="card-body">
    <form method="post">
        <div class="row mb-3    ">
            <div class="col-sm-4">
                <label class="text-dark fw-600" for="client">Client</label>
                <input type="text" class="form-control" name="client" id="client" placeholder="Client name" value="<?php echo isset($_SESSION['view_session']['client']) && !empty($_SESSION['view_session']['client']) ? $_SESSION['view_session']['client'] : ''; ?>">
            </div>
            <div class="col-sm-4">
                <label class="text-dark fw-600" for="template">Template</label>
                <select class="form-control" name="template" id="template">
                    <option value="">-- Select --</option>
                    <option value="template1"  <?php  echo isset($_SESSION['view_session']['template']) && !empty($_SESSION['view_session']['template']) &&  $_SESSION['view_session']['template'] == "template1" ? "selected" : ''; ?>>Template 1</option>
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
                    <td><?= $status; ?></td>
                    <td>
                        <div class="d-flex">
                            <a href="#" class="text-primary mr-2"><i class="fa fa-edit"></i> </a>
                            <a href="#" class="text-danger" data-toggle="modal" data-target="#myModal"  ><i class="fa fa-trash"></i> </a>
                        </div>
                    </td>
                </tr>
                <?php } } ?>
            </tbody>
        </table>
    </div>
</div>
</div>
<!-- The Modal -->
<div class="modal" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Modal Heading</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          Modal body..
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
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
</script>