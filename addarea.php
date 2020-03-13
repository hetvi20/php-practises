<?php require_once('./app_data/model.php'); ?>
<?php require_once('./app_data/controller.php'); ?>


<?php 

$areas = '';

if(isset($_POST['submit']))
{
    
    $cModel = new areasModel();
    $cModel->areas = $_POST['areas'];
    $cModel->state_id = $_POST['state'];
    $cModel->cities_id = $_POST['cities'];
    $cController = new areasController();
    $val = $cController->areasInsert($cModel);
  
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
 
    $cModel = new areasModel();
    $cModel->id = $_REQUEST['edit'];
  
    $rCon = new areasController();
    $resultData = $rCon->areasSelectController($cModel);
    
    foreach($resultData as $row)
    {
  
      $areas = $row['area'];
    
    }
    

  
  }

  if(isset($_POST['update'])){
 
    $cModel = new areasModel();
    $cModel->id = $_POST['id'];
    $cModel->areas = $_POST['areas'];
    $cModel->state_id = $_POST['state'];
    $cModel->cities_id = $_POST['cities'];
    
    
    $rCon = new areasController();
    $resultData = $rCon->areasUpdate($cModel);
    
    if($resultData > 0)
      {
          echo "Successfully Update Your data.";
      }
      else
      {
          echo "SomeThing Wrong.";
      }
  }

  if(isset($_REQUEST['delete'])){

    $cModel = new areasModel();
    $cModel->id = $_REQUEST['delete'];
  
    $rCon = new areasController();
    $resultData = $rCon->areasDelete($cModel);
    if($resultData > 0)
      {
    //   echo "Successfully Delete Your data.";
    // echo '<script>document.onload = setTimeout(function () { alertify.error("Data Deleted"); }, 1000);</script>';
      echo "<script>window.location.href='http://localhost/neer/addarea.php';</script>";
     
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
                        <form method="POST" action="addarea.php">
                           
                            <div class="search-contents-sidebar">
                                <div class="row pad-20">
                                <div class="col-lg-4 col-md-4 col-sm-12">                                      
                                  <div class="form-group">
                                  <input type="hidden" name="id" value="<?php echo $row["id"]; ?>" />
                                            <label>Add Area</label>
                                            <input type="text" class="input-text" name="areas" placeholder="Add Area" value="<?php echo $areas ?>">
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
                                            <label>City</label>
                                            <select class="form-control" name="cities">
                                                    <option>Select city</option>
                                                <?php
                                             $sModel = new citiesModel();
                                             
                                             $rCon = new citiesController();

                                            $resultData = $rCon->citiesSelectController($sModel);

                                            if($resultData != 0){
                                               
                                            foreach($resultData as $row)
                                            {

                                            ?>
                                                <option value="<?php echo $row['id']?>"><?php echo $row['city']?></option>
                                                
                                                  <?php 
                                            } }
                                            ?>
                                                </select>
                                        </div>
                                    </div>
                               
                                   
                                   
                                    <div class="col-lg-3 col-md-3 col-sm-12">
                                    <!-- <input type="submit" class="btn btn-md button-theme" name="submit" value="submit"> -->
                                </div>
                                <div class="text-center mt-4">
                                <div class="col-md-6">
                                <?php 
                                    if(isset($_REQUEST['edit']))
                                    {
                                        echo '<input class="btn btn-md button-theme" type="submit" name="update" value="Update" />';
                                       
                                    }
                                    else 
                                    {
                                        echo '<input class="btn btn-md button-theme" type="submit" name="submit" id="submit" value="Save" />';
                                     }
                                ?>                                          
                                </div>
                                        </div>
   
                        </form>
                    </div>
                                                 <div id="demo">
  <table id="table" class="table table-hover table-mc-light-blue">
      
        <tr>
          <th>S.R.NO.</th>
          <th>AREA</th>
          <th>STATE</th>
          <th>CITY</th>
          
          
          <th>EDIT CITY</th>
          <th>DELETE CITY</th>
        </tr>

        <tbody>
                                            <?php
                                             $cModel = new areasModel();
                                             
                                             $rCon = new areasController();

                                            $resultData = $rCon->areasSelectController($cModel);

                                            if($resultData != 0){
                                               $count =1;
                                            foreach($resultData as $row)
                                            {

                                            ?>
                                            
                                            <tr>
                                                <td><?php echo $count++; ?></td>
                                                <td><?php echo $row["area"]; ?></td>
                                                <td><?php echo $row["states"]; ?></td>
                                                <td><?php echo $row["city"]; ?></td>
                                                <td><a class="btn btn-md button-theme" name="edit" href="addarea.php?edit=<?php echo $row['id'];?>">Edit</a></td>
                                                <td><a class="btn btn-md button-theme" name="delete" href="addarea.php?delete=<?php echo $row['id'];?>">Delete</a></td>
                                                
                                                
                                            </tr>
                                            <?php 
                                            } }
                                            ?>
                                            </tbody>
        
     

        
               <?php include("spfooter.php"); ?>
