
<?php



if (!isset($_SESSION['admin'])  || !isset($_SESSION['username'])) {

    echo "<script>window.open(''../loginadmin.php','_self'')</script>";
} else {
    $username = $_SESSION['username'];

?><section id="main-content">
      <section class="wrapper">
      <div class="row">
          <div class="col-lg-12">
            <div class="recent">
             <center> <mark><h3>Change Admin Password</h3></mark></center>
            </div>
           
          
              <mark><h3>Reset Information</h3></mark>
              <div class="form-group">
                <input type="password" name="cupass" class="form-control" id="cupass" placeholder="Current Password" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                <div class="validati" style="color:red"id="cupass_error"></div>
              </div>
              
              <div class="form-group">
                <input type="password" name="pass" class="form-control" id="pass" placeholder="New Password" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                <div class="validati" style="color:red"id="pass_error"></div>
              </div>
              <div class="form-group">
                <input type="password" name="cpass" class="form-control" id="cpass" placeholder="Conform Password" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                <div class="validati" style="color:red"id="cpass_error"></div>
              </div>
            
           
             

              <div class="text-center"><button type="button" onclick="changepass(`<?php echo $username; ?>`);" class="btn btn-primary btn-lg">Change Password</button></div>
            </form>
          </div>

         
        </div>
    </section></section>
    <?php } ?>