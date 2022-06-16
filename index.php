<?php
include ('connect.php');
include ('header.php');

$query='SELECT * FROM post ';

$result=mysqli_query($conn,$query);

if(isset($result)){
    while($row=mysqli_fetch_assoc($result)){?>
     
     <div class="artical">
        <div class="container">
        <h5><a href="post.php?id=<?php echo $row['id']; ?>"><?php echo $row['title'] ;?></a></h5>
        <p><?php echo $row['post']; ?></p>
        <a href="post.php?id=<?php echo $row['id'];?>"><button>read more</button></a>
        </div>
     </div>
     
     <?php
    }
}
?>




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