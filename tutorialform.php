<?php
include('includes/admin-header.php');
include('includes/admin-nav.php');
 include('includes/leftnav.php');
?>

<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Tutorial Form</h1>
    </div>
    <form class="form-signin" action="tutorial.php" method="post">
        <label><b>Name<span class="warning-text">
                    <?php 
                    if(isset($validation['name'])) { 
                        echo $validation['name'];
                    }
                ?></span></label><br />
        <input class="form-control" name="name" type="text" class="inputvalues" placeholder="Type your name" required />
        <label><b>Cost<span class="warning-text">
                    <?php 
                if(isset($validation['cost'])) { 
                    echo $validation['cost'];
                }
                ?></span></label><br />
        <input class="form-control" name="cost" type="text" class="inputvalues" placeholder="Cost plz" required />
        <label><b>Teacher<span class="warning-text">
                    <?php 
                if(isset($validation['teacher'])) { 
                    echo $validation['teacher'];
                }
                ?></span></label><br />
        <input class="form-control" name="teacher" type="text" class="inputvalues" placeholder="Type name of teacher"
            required />

        <input name="submit_btn" class="btn btn-success mb-1" type="submit" id="signup_btn" value="Add tutrorials">

    </form>
</main>

<?php
  include('includes/admin-footer.php')
?>