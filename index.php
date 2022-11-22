<?php 
// Include configuration file 
include_once 'config.php'; 

 
$status = $statusMsg = ''; 
if(!empty($_SESSION['status_response'])){ 
    $status_response = $_SESSION['status_response']; 
    $status = $status_response['status']; 
    $statusMsg = $status_response['status_msg']; 
     
    unset($_SESSION['status_response']); 
} 
?>

<!-- Status message -->
<?php if(!empty($statusMsg)){ ?>
    <div class="alert alert-<?php echo $status; ?>"><?php echo $statusMsg; ?></div>
<?php } ?>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<div class="col-md-12">
    <div class="w3-container w3-teal">
  <h1>Uploading document to google drive</h1>
</div>

    <Br>
    <form method="post" action="upload.php" class="form" enctype="multipart/form-data">
        <div class="form-group">
            <label>File</label>
            <input type="file" name="file" class="form-control">
        </div>
        <br>
        <div class="form-group">
            <input type="submit" class="form-control btn-primary" name="submit" value="Upload"/>
        </div>
    </form>
</div>