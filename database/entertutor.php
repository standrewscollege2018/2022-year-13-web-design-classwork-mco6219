
<?php

// check if the tutorcode and the tutorname have been set, if not say error
if($_POST['tutor']=="" or $_POST['tutorcode']=="")  {
  header("Location: index.php?page=addtutor&error=error");
} else {

// set up the variables which will store the tutor name and tutor code
$tutor = $_POST['tutor'];
$tutorcode = $_POST['tutorcode'];

// this is the query which adds the new tutor into the database
$insert_sql = "INSERT INTO  tutorgroup (tutor, tutorcode) VALUES ('tutor', 'tutorcode')";
$insert_qry = mysqli_query($dbconnect, $insert_sql);
}
?>

<!-- print a message saying it worked and the tutor was added -->
<div class="container-fluid">
  <div class="row">
    <div class="col">
      <p class="display-5">The new tutor has been added</p>
    </div>
  </div>
</div>
