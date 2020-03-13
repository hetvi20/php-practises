<?php include("spheader.php"); ?>
<?php include("spslider.php"); ?>

<?php require_once('app_data/Model.php'); ?>
<?php require_once('app_data/Controller.php'); ?>

<?php 
$name ='';
if(isset($_POST['submit']))
{
    $sModel = new stateModel();
   $sModel->states = $_POST['state'];
    $sController = new stateController();
  $val = $sController->stateInsert($sModel);
    if($val > 0)
    {
        echo "<script>alert('Successfully Store your DATA');</script>";
    }
    else
    {
        echo "SomeThing Wrong.";
    }
}
    if(isset($_REQUEST['edit'])){
    $sModel = new stateModel();
    $sModel->id = $_REQUEST['edit'];
    $rCon = new stateController();
    $resultData = $rCon->stateSelectController($sModel);
    // print_r($resultData);
    foreach($resultData as $row)
    {
      $name = $row['states'];
    }
  }
  if(isset($_POST['update'])){

    $sModel = new stateModel();
    $sModel->id = $_POST['update_id'];
    $sModel->states = $_POST['state'];
    $rCon = new stateController();
    $resultData = $rCon->stateUpdate($sModel);
    
    if($resultData > 0)
      {
          
      }
      else
      {
          echo "SomeThing Wrong.";
      }
  }
  if(isset($_REQUEST['delete'])){
    $sModel = new stateModel();
    $sModel->id = $_REQUEST['delete'];
    $rCon = new stateController();
    $resultData = $rCon->stateDelete($sModel);
    if($resultData > 0)
      {
      // echo "Successfully Delete Your data.";
      echo "<script>window.location.href='http://localhost/neer/addstates.php';</script>";
      }
      else
      {
          echo "SomeThing Wrong.";
      }
}
?>
            <div class="col-lg-9 col-md-12 col-sm-12 col-pad">
                <div class="content-area5 dashboard-content">
                    <div class="dashboard-header clearfix">
                        <div class="row">
                            <div class="col-sm-12 col-md-6"><h4>States</h4></div>
                            <div class="col-sm-12 col-md-6">     
                            </div>
                        </div>
                    </div>
                    <div class="submit-address dashboard-list">
                        <form method="post" action="addstates.php">
                            <div class="search-contents-sidebar">
                                <div class="row pad-20">
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <div class="form-group">
                                            <label>Enter Your State</label>
                                            <input type="text" class="input-text" name="state" placeholder="State" value="<?php echo $name?>">
                                            <input type="hidden" name="update_id" value="<?php echo $_REQUEST['edit'];?>">
                                        </div>
                                    </div>
                                <div class="col-lg-4 col-md-12 col-sm-12">
                                    
  <?php 
                            if(isset($_REQUEST['edit'])){
                                        echo '<input type="submit" class="btn btn-md button-theme" name="update" value="Update">';
                                      } else {
                                        echo '<input type="submit" class="btn btn-md button-theme" name="submit" value="Add">';
                                      }

  ?>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
<div id="demo">
  <table id="table" class="table table-hover table-mc-light-blue">
      <thead>
        <tr>
          <th>S.R.NO.</th>
          <th>STATE</th>
          <th>EDIT STATE</th>
          <th>DELETE STATE</th>
        </tr>
      </thead>
      <tbody>
<?php
   $rModel = new stateModel();
  //  $rModel->userid=0;
  $rCon = new stateController();
  $resultData = $rCon->stateSelectController($rModel);
  foreach($resultData as $row):
  ?>
        <tr>
          <td data-title="ID"><?php echo $row["id"]; ?></td>
          <td data-title="Name"><?php echo $row["states"]; ?></td>
          <td data-title="Link"><a class="btn btn-md button-theme" href="addstates.php?edit=<?php echo $row['id'];?>">EDIT</a> </td>
          <td data-title="Link"><a class="btn btn-md button-theme" href="addstates.php?delete=<?php echo $row['id']; ?>">DELETE</a></td>          
        </tr>
        <?php  endforeach; ?>        
      </tbody>
    </table>
  </div>
</div>
<?php include("spfooter.php"); ?>