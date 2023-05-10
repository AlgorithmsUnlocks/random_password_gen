<?php include ("includes/header.php"); ?>



<!--Header Section -->

<section id="header-part">

    <div class="container">
       <div class="logo-here pt-3">
          <h3 style="color: green"> BMI Calculator</h3>
       </div>
    </div>

</section>

<!--Main P Section-->
<section id="main-part">
    <div class="container">

      <div class="main-content-start">
          <div class="text-content">
              <h2>BMI Calculator for Health </h2>
              <p>
                  Create your bmi with online
              </p>
          </div>
          <div class="dynamic-content-wrapper">
             <div class="dynamic-image ">
                 <img src="images/BMI.png" class="img-fluid"/>
             </div>
              <div class="password-gen-form">



                 <form action="" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="weight">Weight in KG</label>
                        <input type="number" name="user_weight" class="form-control" placeholder="weight in (kg)">
                    </div>
                     <div class="form-group">
                         <label for="weight">Height in m</label>
                         <input type="text" name="user_height" class="form-control" placeholder="height in (m)">
                     </div>
                     <button type="submit" class="form-control border-primary bg-success text-white" name="submit">Calculate BMI</button>
                 </form>

                  <div class="dropdown-divider"></div>
                  <div class="answer-area text-center text-danger">
                      <h5> Your BMI is Shown in Here After Submit</h5>
                      <?php

                      if(isset($_POST['submit'])){
                         $user_weight = $_POST['user_weight'];
                         $user_height = $_POST['user_height'];
                         if($user_height === "" && $user_weight === ""){
                             echo "NO Data Found";
                         }else{
                             $user_bmi = ($user_weight / ($user_height * $user_height));
                             echo ceil($user_bmi);
                             if($user_bmi === ""){
                                 echo "BMI not exits";
                             }else if($user_bmi < 18.0 ){
                                 echo "<h5 class='text-success'> UNDER WEIGHT => Score = $user_bmi </h5>";
                             }else if($user_bmi > 18.0 && $user_bmi < 24.9 ){
                                 echo "<h5 class='text-success'> NORMAL WEIGHT => Score = $user_bmi </h5>";
                             }else if($user_bmi > 25.0 && $user_bmi < 29.9  ){
                                 echo "<h5 class='text-success'> OVER WEIGHT => Score = $user_bmi </h5>";
                             }else if($user_bmi > 30 ){
                                 echo "<h5 class='text-success'> OBESE => Score = $user_bmi </h5>";
                             }
                         }
                      }

                      ?>
                  </div>
              </div>
          </div>
      </div>

    </div>
</section>


<?php include ("includes/footer.php"); ?>


