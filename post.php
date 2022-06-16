<?php
include ('connect.php');
include ('header.php');

$id=$_GET['id'];

$query="SELECT * FROM post WHERE id='.$id'";
$result=mysqli_query($conn,$query);
$row=mysqli_fetch_assoc($result)

?>

    <div class="artical">
        <div class="container">
        <h5><?php echo $row['title'] ;?></h5>
        <p><?php echo $row['post']; ?></p>
        </div>
    </div>


    <!--jquery-->
    <script src="js/jquery-3.6.0.min.js"></script>
    <!--materialize js-->
    <script src="js/materialize.min.js"></script>
    <script>
  $(document).ready(function(){
    $('.sidenav').sidenav();
  });
    </script>
</body>
</html>