
    <?php 
        
         $title = 'Success';
         require_once 'includes\header.php';
         require_once 'db\conn.php';
        //extract vaules from the $_POST array
         if(isset($_POST['submit'])){
             $firstname = $_POST['firstname'];
             $lastname = $_POST['lastname'];
             $dob = $_POST['dob'];
             $course = $_POST['course'];
             $mark = $_POST['mark'];
             $email = $_POST['email'];
             $phone = $_POST['phone'];
             $address = $_POST['address'];
            //call function to insert and track id success or not
             $isSuccess = $crud->insert($firstname, $lastname, $dob, $course, $mark, $email, $phone, $address);
         
             if($isSuccess){
                echo '<h1 class="text-center text-primary">You Have Been Registered</h1>';
             }
             else{
                echo '<h1 class="text-center text-danfer">ther was an error</h1>';
             }

        }
    


        
    ?>

    <nav class="navbar navbar-dark bg-primary bg-opacity-50">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Silver Wood College</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link active fs-5" href="#">Home</a>
                <a class="nav-link active fs-5" href="#">Contact</a>
                <a class="nav-link active fs-5" href="#">About</a>
                <a class="nav-link active fs-5" herf="logout.php">Logout</a>
            </div>
            </div>
        </div>
    </nav>


    <div class="card" style="width: 30rem;">
        <div class="card-body">
            <h5 class="card-title">
                <?php echo $_POST['firstname'] . ' ' . $_POST['lastname']; ?>
            </h5>
            <h6 class="card-subtitle mb-2 text-muted">  
                <?php echo $_POST['course']; ?>
            </h6>
            <p class="card-text">
                 Date Of Birth: <?php echo $_POST['dob']; ?> 
        </p>
        <p class="card-text">
           Matric Mark: <?php echo $_POST['mark']; ?> 
        </p>
        <p class="card-text">
           Email Address: <?php echo $_POST['email']; ?> 
        </p>
        <p class="card-text">
          Contact Number: <?php echo $_POST['phone']; ?> 
        </p>
        <p class="card-text">
          Residential Address: <?php echo $_POST['address']; ?> 
        </p>
    </div>
</div>

   


<br>
<br>
<br>
<?php require_once 'includes\footer.php';?>