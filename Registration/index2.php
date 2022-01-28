
    <?php 
        
        $title = 'Index';
        require_once 'includes\header.php';
       
    ?>
  
  <!--
      - First Name
      - Last Name
      - Date of Birth (Use DatePicker)
      - Gender
      - Course (Accounting, Business Management, Communication/Speech, History, Journalism, Sciences, Computer Science)
      - Email Address
      - Contact Number
      - Address
-->
    
    <h1 class="text-center">Registration for Silver Wood College</h1>
    <form method="POST" action="success.php">
    
        <div class="form-group">
            <label for="firstname">First Name</label>
            <input type="text" class="form-control" id="firstname" name="firstname">
            
        </div>
         
        <div class="form-group">
            <label for="lastname">Last Name</label>
            <input type="text" class="form-control" id="lastname" name="lastname">
        </div>
        
        <div class="form-group">
            <label for="dob">Date Of Birth</label>
            <input type="date" class="form-control" id="dob" name="dob">
            
        </div>

        <div class="form-group">
        <label for="course">Course</label>
        <select class="form-control" id="course" name="course">
            <option value="Select">Select</option>
            <option value="Accounting">Accounting</option>
            <option value="Business Management">Business Management</option>
            <option value="Communication/Speech">Communication/Speech</option>
            <option value="History">History</option>
            <option value="Sciences">Sciences</option>
            <option value="Journalism">Journalism</option>
            <option value="Computer Science">Computer Science</option>
        </select>
        </div>

        <div class="form-group">
            <label for="mark">Matric Mark</label>
            <input type="mark" class="form-control" id="mark" name="mark" placeholder=" Enter %">
        </div>

        <div class="form-group">
            <label for="email">Email address</label>
            <input type="email" class="form-control" id="email" name="email">
        </div>
       
        <div class="form-group">
            <label for="phone">Contact Number</label>
            <input type="text" class="form-control" id="phone" name="phone">
        </div>

        <div class="form-group">
            <label for="address">Residential Address</label>
            <input type="text" class="form-control" id="address" name="address">
        </div>
       
         <button type="submit" name="submit" class="btn btn-primary btn-block">Submit</button>
    </form>

    
  
    <br>
    <br>
    <br>
    <?php require_once 'includes\footer.php';?>