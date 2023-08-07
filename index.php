    <?php 
        $title = 'Index';
        require_once './includes/header.php';
        require_once '../attendence/db/conn.php'; 

        $result = $Crud->getspeciality();
    ?>
    
        <h1 class="text-center">Registration Form for IT Conference</h1>
        
        <form method="post" action="./success.php">
            <!-- first name -->
            <div class="form-group">
                <label for="firstname">First Name</label>
                <input required type="text" class="form-control" id="firstname" placeholder="First Name" name= "firstname">
            </div>
            <!-- last name -->
            <div>
                <label for="LastName">Last Name</label>
                <input required type="text" class="form-control" id="LastName" placeholder="Last Name" name= "lastname">
            </div>
            <!-- DOB -->
            <div class="form-group">
            <label for="dob">Date Of Birth</label>
                <input type="date" class="form-control" id="date"
                class="form-text text-muted" name="date" placeholder="Date Of Birth">
            </div>
            <!-- speciality -->
            <div class="form-group">
                <label for="speciality">Area Of Expertise</label>
                <select class="form-control" id="speciality" name="speciality">
                    <!-- <option >   </option>
                    <option value="3">Data Analyst</option>
                    <option value="4">Web Developer</option>
                    <option value="1">Database Admin</option>
                    <option value="5">Full Stack Developer</option>
                    <option value="6">Other</option> -->
                    <?php while($r = $result->fetch(PDO::FETCH_ASSOC)) {?>
                        <option value="<?php echo $r['speciality_id'] ?>"><?php echo $r['name']?></option>
                    <?php }?>
                </select>
            </div>
            <!-- email -->
            <div class="form-group">
                <label for="exampleInputEmail">Email Address</label>
                <input required type="email" class= "form-control" id="exampleInputEmail"
                aria-describedby="emailhelp" name= "email" class = "form-text text-muted" placeholder="Enter Email">
                <small id = "emailhelp" class = "form-text text-muted">we'll never share your email with
                anyone else.</small>
            </div>
            <!-- contactnumber -->
            <div class="form-group">
                <label for="phone">Contact Number</label>
                <input type="text" class="form-control" id= "phone" name="contact"
                aria-describedby="phoneHelp">
                <small id="phoneHelp" class = "form-text text-muted">we'll never share your number with
                anyone else.</small>
                <br>
            </div>
            <!-- password
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class= "form-control" id="exampleInputPassword1"
                placeholder="Enter Password">
            </div> -->
            <!-- contactnumber -->
            <!-- <div class="form-group form-check">
                <input type="" class="form-check-input" id = "exampleCheck1">
                <label class="form-check-label" for = "exampleCheck1">Check Me Out</label>
            </div> -->
            <br>
            <button type="submit" name="submit" class="btn btn-primary btn-block">Submit</button>
        </form>
<br>


    <?php 
        require_once './includes/footer.php'; 
    ?>