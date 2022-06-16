<?php


include ('connect.php');
include ('header.php');

$title=$_POST['input-title'];
$post=$_POST['input-post'];
$send=$_POST['input-send'];

if(isset($send)){
    $query="INSERT INTO post(title,post)values('$title','$post')";
    mysqli_query($conn,$query);
    echo "Post Published Successfully";
}

?>


    <!--add post-->
    <div class="add-post">
        <div class="container">
            <h4>Add Post</h4>
            <form action="add-post.php" method="POST">
            <label>title</label>
            <input type="text" placeholder="enter title" name="input-title">
            <label>Post</label>
            <input type="text" placeholder="enter post"name="input-post">
            <a><button class="btn indigo" name="input-send">post</button></a>
            </form>
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