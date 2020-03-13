<?php require_once('./app_data/model.php'); ?>
<?php require_once('./app_data/controller.php'); ?>

<?php 
$cities ='';
$pincode ='';
if(isset($_POST['submit']))
{
    
    $cModel = new citiesModel();
    $cModel->cities = $_POST['cities'];
    $cModel->state_id = $_POST['state'];
    $cModel->pincode = $_POST['pincode'];
    $cController = new citiesController();
   
    $val = $cController->citiesInsert($cModel);
  
    if($val > 0)
    {
        echo '<script>document.onload = setTimeout(function () { alertify.success("Data Store"); }, 1000);</script>';
    }
    else
    {
        echo '<script>document.onload = setTimeout(function () { alertify.error("Error"); }, 1000);</script>';
    }
}
if(isset($_REQUEST['edit'])){
 
    $cModel = new citiesModel();
    $cModel->id = $_REQUEST['edit'];
  
    $rCon = new citiesController();
    $resultData = $rCon->citiesSelectController($cModel);
    
    foreach($resultData as $row)
    {
  
      $cities = $row['city'];
    
    }
    foreach($resultData as $row)
    {
  
      $pincode = $row['pincode'];
    
    }

  
  }

  if(isset($_POST['update'])){
 
    $cModel = new citiesModel();
    $cModel->id = $_POST['id'];
    $cModel->cities = $_POST['cities'];
    $cModel->pincode = $_POST['pincode'];
    
    $rCon = new citiesController();
    $resultData = $rCon->citiesUpdate($cModel);
    
    // if($resultData > 0)
    //   {
    //       echo "Successfully Update Your data.";
    //   }
    //   else
    //   {
    //       echo "SomeThing Wrong.";
    //   }
  }

  if(isset($_REQUEST['delete'])){

    $cModel = new citiesModel();
    $cModel->id = $_REQUEST['delete'];
  
    $rCon = new citiesController();
    $resultData = $rCon->citiesDelete($cModel);
    if($resultData > 0)
      {
    //   echo "Successfully Delete Your data.";
    // echo "failed";
   
     
      }
      else
      {
          echo "SomeThing Wrong.";
      }
  }
?>


<?php include("spheader.php"); ?>
<?php include("spslider.php"); ?>



            <div class="col-lg-9 col-md-12 col-sm-12 col-pad">
                <div class="content-area5 dashboard-content">
                    <div class="dashboard-header clearfix">
                        <div class="row">
                            <div class="col-sm-12 col-md-6"></div>
                            <div class="col-sm-12 col-md-6">
                                <div class="breadcrumb-nav">
                                  
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="submit-address dashboard-list">
                        <form method="post" action="addcities.php">
                            <h4 class="bg-grea-3">Add Cities</h4>
                            <div class="search-contents-sidebar">
                                <div class="row pad-20">
                                    <div class="col-lg-4 col-md-4 col-sm-12">
                                        <div class="form-group">
                                            <label>Add Cities</label>
                                            <input type="hidden" name="id" value="<?php echo $row["id"]; ?>" />
                                            <input class="form-control" name="cities" type="text" placeholder="Add City" id="example-text-input" value="<?php echo $cities ?>">
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-12">
                                        <div class="form-group">
                                            <label>State</label>
                                            <select class="form-control" name="state">
                                                    <option>Select State</option>
                                                <?php
                                             $sModel = new stateModel();
                                             
                                             $rCon = new stateController();

                                            $resultData = $rCon->stateSelectController($sModel);

                                            if($resultData != 0){
                                               
                                            foreach($resultData as $row)
                                            {

                                            ?>
                                                <option value="<?php echo $row['id']?>"><?php echo $row['states']?></option>
                                                
                                                  <?php 
                                            } }
                                            ?>
                                                </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-12">
                                        <div class="form-group">
                                            <label>Pincode</label>
                                            <input type="text" class="input-text" name="pincode" placeholder="Pincode" id="example-text-input" value="<?php echo $pincode ?>">
                                        </div>
                                    </div>
                                    <div class="text-center mt-4">
                                <div class="col-md-6">
                                <?php 
                                    if(isset($_REQUEST['edit']))
                                    {
                                        echo '<input class="btn btn-info btn-lg waves-effect waves-light" type="submit" name="update" value="Update" />';
                                    }
                                    else 
                                    {
                                        echo '<input class="btn btn-md button-theme" type="submit" name="submit" id="submit" value="Save" />';
                                     }
                                ?>                                          
                                </div>
                                        </div>
                                    <div class="col-lg-4 col-md-12 col-sm-12">
                                </div>
   
                        </form>
                    </div>
                                                 <div id="demo">
  <table id="table" class="table table-hover table-mc-light-blue">
      
        <tr>
          <th>S.R.NO.</th>
          <th>CITIES</th>
          <th>STATES</th>
          <th>PINCODE</th>
          <th>EDIT CITY</th>
          <th>DELETE CITY</th>
        </tr>
        
        <tbody>
                                            <?php
                                             $cModel = new citiesModel();
                                             
                                             $rCon = new citiesController();

                                            $resultData = $rCon->citiesSelectController($cModel);

                                            if($resultData != 0){
                                               $count =1;
                                                foreach($resultData as $row)
                                                {

                                            ?>
                                            
                                            <tr>
                                                <td><?php echo $count++; ?></td>
                                                <td><?php echo $row["city"]; ?></td>
                                                <td><?php echo $row["states"]; ?></td>
                                                <td><?php echo $row["pincode"]; ?></td>
                                                <td><a class="btn btn-md button-theme" name="edit" href="addcities.php?edit=<?php echo $row['id'];?>">Edit</a></td>
                                                <td><a class="btn btn-md button-theme" name="delete" href="addcities.php?delete=<?php echo $row['id'];?>">Delete</a></td>
                                                
                                                
                                            </tr>
                                            <?php 
                                            } }
                                            ?>
                                            </tbody>

        
               <?php include("spfooter.php"); ?>
