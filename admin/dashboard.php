 <?php 
 //include "includes/header.php";
 include "includes/nav.php";
 if(isset($_SESSION['username']))
 {
?>

 <!--Main content started-->
      <div class="main">
         <div class="row">
            <div class="col 16 m6 s12">
               <ul class="collection with-header">
                  <li class="collection-header teal">
                     <h5 class="white-text">  Recent Posts </h5>
                  </li>
                  <li class="collection-item">
                     <a href=""> Lorem ipsum dolor sit amet consectetur, adipisicing elit. Optio, asperiores.</a><br/>
                     <span><a href=""><i class="material-icons tiny">edit</i>Edit</a> | <a href=""><i class="material-icons tiny red-text">clear</i>Delete</a> | <a href=
                        ""><i class="material-icons tiny green-text">share</i>Share</a></span>
                  </li>
                  <li class="collection-item">
                     <a href=""> Lorem ipsum dolor sit amet consectetur, adipisicing elit. Optio, asperiores.</a><br/>
                     <span><a href=""><i class="material-icons tiny">edit</i>Edit</a> | <a href=""><i class="material-icons tiny red-text">clear</i>Delete</a> | <a href=
                        ""><i class="material-icons tiny green-text">share</i>Share</a></span>
                  </li>
                  <li class="collection-item">
                     <a href=""> Lorem ipsum dolor sit amet consectetur, adipisicing elit. Optio, asperiores.</a><br/>
                     <span><a href=""><i class="material-icons tiny">edit</i>Edit</a> | <a href=""><i class="material-icons tiny red-text">clear</i>Delete</a> | <a href=
                        ""><i class="material-icons tiny green-text">share</i>Share</a></span>
                  </li>
                  <li class="collection-item">
                     <a href=""> Lorem ipsum dolor sit amet consectetur, adipisicing elit. Optio, asperiores.</a><br/>
                     <span><a href=""><i class="material-icons tiny">edit</i>Edit</a> | <a href=""><i class="material-icons tiny red-text">clear</i>Delete</a> | <a href=
                        ""><i class="material-icons tiny green-text">share</i>Share</a></span>
                  </li>
                  <li class="collection-item">
                     <a href=""> Lorem ipsum dolor sit amet consectetur, adipisicing elit. Optio, asperiores.</a><br/>
                     <span><a href=""><i class="material-icons tiny">edit</i>Edit</a> | <a href=""><i class="material-icons tiny red-text">clear</i>Delete</a> | <a href=
                        ""><i class="material-icons tiny green-text">share</i>Share</a></span>
                  </li>
                  <li class="collection-item">
                     <a href=""> Lorem ipsum dolor sit amet consectetur, adipisicing elit. Optio, asperiores.</a><br/>
                     <span><a href=""><i class="material-icons tiny">edit</i>Edit</a> | <a href=""><i class="material-icons tiny red-text">clear</i>Delete</a> | <a href=
                        ""><i class="material-icons tiny green-text">share</i>Share</a></span>
                  </li>
               </ul>
            </div>
            <div class="col 16 m6 s12">
               <ul class="collection with-header">
                  <li class="collection-header teal">
                     <h5 class="white-text">  Recent Comments </h5>
                  </li>
                  <li class="collection-item">
                     <a href=""> Lorem ipsum dolor sit amet consectetur, adipisicing elit. Optio, asperiores.</a><br/>
                     <span><a href=""><i class="material-icons tiny green-text">done</i>Approve</a> | <a href=""><i class="material-icons tiny red-text">clear</i>Remove</a></span>
                  </li>
                  <li class="collection-item">
                     <a href=""> Lorem ipsum dolor sit amet consectetur, adipisicing elit. Optio, asperiores.</a><br/>
                     <span><a href=""><i class="material-icons tiny green-text">done</i>Approve</a> | <a href=""><i class="material-icons tiny red-text">clear</i>Remove</a></span>
                  </li>
                  <li class="collection-item">
                     <a href=""> Lorem ipsum dolor sit amet consectetur, adipisicing elit. Optio, asperiores.</a><br/>
                     <span><a href=""><i class="material-icons tiny green-text">done</i>Approve</a> | <a href=""><i class="material-icons tiny red-text">clear</i>Remove</a></span>
                  </li>
                  <li class="collection-item">
                     <a href=""> Lorem ipsum dolor sit amet consectetur, adipisicing elit. Optio, asperiores.</a><br/>
                     <span><a href=""><i class="material-icons tiny green-text">done</i>Approve</a> | <a href=""><i class="material-icons tiny red-text">clear</i>Remove</a></span>
                  </li>
                  <li class="collection-item">
                     <a href=""> Lorem ipsum dolor sit amet consectetur, adipisicing elit. Optio, asperiores.</a><br/>
                     <span><a href=""><i class="material-icons tiny green-text">done</i>Approve</a> | <a href=""><i class="material-icons tiny red-text">clear</i>Remove</a></span>
                  </li>
                  <li class="collection-item">
                     <a href=""> Lorem ipsum dolor sit amet consectetur, adipisicing elit. Optio, asperiores.</a><br/>
                     <span><a href=""><i class="material-icons tiny green-text">done</i>Approve</a> | <a href=""><i class="material-icons tiny red-text">clear</i>Remove</a></span>
                  </li>
               </ul>
            </div>
         </div>
      </div>
      <div class="fixed-action-btn">
          <a href="" class="btn-floating btn btn-large white-text pulse"><i class="material-icons">edit</i></a>
      </div>
      <script>
         $(document).ready(function() {
             $('.button-collapse').sideNav();
         });
      </script>
   </body>
</html>
<?php
}
else
{
   $_SESSION['message']="<div class='chip red black-text'>Login To Continue</div>";
   header("Location: login.php");
}
   ?>