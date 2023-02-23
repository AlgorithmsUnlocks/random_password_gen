<?php include ("includes/header.php"); ?>

<!--Header Section -->

<section id="header-part">

    <div class="container">
       <div class="logo-here">
           <img src="images/randomp.png"/>
       </div>
    </div>

</section>

<!--Main P Section-->
<section id="main-part">
    <div class="container">

      <div class="main-content-start">
          <div class="text-content">
              <h2>Random Password Generator </h2>
              <p>
                  Create strong and secure passwords to keep your account safe online
              </p>
          </div>
          <div class="dynamic-content-wrapper">
             <div class="dynamic-image">
                 <img src="images/download.svg"/>
             </div>
              <div class="password-gen-form">

                  <h5 class="text-center text-primary"> <?php echo strtoupper("Im here to generate password for you")?></h5>

          <?php insertPassword(); ?>

                 <form action="" method="POST">
                    <div class="form-group">
                        <input type="text" class="form-control" name="input_number" placeholder="please provided me a length" value="<?php echo $password; ?>"/>
                    </div>
                     <div class="form-check form-check-inline">
                         <label for="Types"> Character Types : </label>
                     </div>
                     <div class="form-check form-check-inline">
                         <label for="capital">
                             <input type="checkbox" name="capital_letter"> ABC
                         </label>
                     </div>
                     <div class="form-check form-check-inline">
                         <label for="small">
                             <input type="checkbox" name="small_letter"> abc
                         </label>
                     </div>
                     <div class="form-check form-check-inline">
                         <label for="number">
                             <input type="checkbox" name="number"> 123
                         </label>
                     </div>
                     <div class="form-check form-check-inline">
                         <label for="special">
                             <input type="checkbox" name="special"> !@#$
                         </label>
                     </div>


                     <div class="form-group">
                         <input type="submit" name="submit" value="Generate For Me" class="form-control btn btn-primary">
                     </div>
                 </form>


                  <div class="count-area">

<?php countPassword();  ?>

                  </div>

              </div>
          </div>
      </div>

    </div>
</section>


<?php include ("includes/footer.php"); ?>


