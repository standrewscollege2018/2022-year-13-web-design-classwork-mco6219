
<div class="container-fluid">
  <div class="row">
<div class="col p-3">

<form class="" action="index.php?page=entertutor" method="post">
<div class="mb-3">
  <label for="tutor" class="form-label">Tutor name</label>
<input type="text" name="tutor" class="form-control" id="tutor">
</div>

<div class="mb-3">
    <label for="tutorcode" class="form-label">Tutor code (max 3 characters)</label>
  <input type="text" name="tutorcode" class="form-control" id="tutorcode" maxlength-"3">
</div>


<div class="mb-3">
  <?php
  if (isset($_GET['error'])) {


?>

  <div class="alert alert-danger" role="alert">
    Please enter the tutor name and code
  </div>

<?php
  } ?>
  </div>
<button type="submit" name="button" class="btn btn-primary">Add tutor</button>
</form>

  </div>
</div>
</div>
