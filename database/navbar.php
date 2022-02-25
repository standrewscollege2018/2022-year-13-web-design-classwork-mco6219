
<?php
$tutor_sql = "SELECT * FROM tutorgroup";
$tutor_qry = mysqli_query($dbconnect, $tutor_sql);
$tutor_aa = mysqli_fetch_assoc($tutor_qry);
?>



<nav class="navbar navbar-expand-lg custom-nav">
<div class="container-fluid">
<a class="navbar-brand text-white" href="index.php">
St Andrews College
</a>

<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse" id="navbarSupportedContent">
<ul class="navbar-nav me-auto mb-2 mb-lg-0">

<li class="nav-item">
<a class="nav-link active text-white" aria-current="page" href="index.php">Home</a>
</li>

<li class="nav-item">
<a class="nav-link active text-white" aria-current="page" href="index.php?page=addtutor">Add tutor</a>
</li>

<li class="nav-item">
<a class="nav-link active text-white" aria-current="page" href="index.php?page=addtutor">Delete student</a>
</li>


<li class="nav-item dropdown">
<a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
Tutor Groups
</a>
<ul class="dropdown-menu text-white" aria-labelledby="navbarDropdown" style= "background-color: #003366">
<?php
do {
$tutorgroupID = $tutor_aa['tutorgroupID'];
$tutorcode = $tutor_aa['tutorcode'];



echo "<li><a href='index.php?page=tutorgroup&tutorgroupID=$tutorgroupID&tutorcode=$tutorcode'>$tutorcode</a></li>";



} while ($tutor_aa = mysqli_fetch_assoc($tutor_qry))
?>
<li><hr class="dropdown-divider text-white"></li>
<li><a class="dropdown-item text-white" href="#">Find a new Student</a></li>
</ul>
</li>
</ul>
<form class="d-flex" action="index.php?page=searchresults" method="post">
<div class="input-group">
<input class="form-control" required type="text" name="search" placeholder="Student Name" aria-label="Search" aria-describedby="button-addon2">
<button class="btn btn-outline-success" type="submit" id="button-addon2" ><i class="bi bi-search"></i></button>
</div>
</form>
</div>
</div>
</nav>
