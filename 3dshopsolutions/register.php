<?php include('includes/header.php');?>

    <div class="py-5">

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card"></div>
                        <div class="card-header">
                            <h5>Registration form</h5>
                        </div>
                        <div class="card-body">
                            <form action="functions/authcode.php" method="POST">
                                <div class="mb-3">
                                          <label class="form-label">Name</label>
                                        <input type="text" name="name" class="form-control" placeholder="Enter your name here">
                                   </div>
                                   <div class="mb-3">
                                          <label class="form-label">Phone</label>
                                        <input type="number" name="phone" class="form-control" placeholder="Enter your contact number here">
                                   </div>
                                   <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                                         <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your mail here">
                                   </div>
                                   <div class="mb-3">
                                         <label for="exampleInputPassword1" class="form-label">Password</label>
                                        <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                                   </div>
                                   <div class="mb-3">
                                         <label class="form-label">Confirm Password</label>
                                        <input type="password" name="cpassword" class="form-control" id="exampleInputPassword1">
                                  </div>
                                   <!-- <div class="mb-3 form-check">
                                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                       <label class="form-check-label" for="exampleCheck1">Check me out</label>
                                   </div> -->
                                    <button type="submit" name="register_btn" class="btn btn-primary">Submit</button>
                            </form>
                    </div>
    
                 </div>
                
            </div>
        </div>
   </div>
<?php include('includes/footer.php');?>