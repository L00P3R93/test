<?php
        $userid = get_specific_data($dbconn,'student','username',$_SESSION['username'],'user_id');
        $personalid = get_specific_data($dbconn,'personal','user_id',$userid,'pers_id');
        $parentid =  get_specific_data($dbconn,'parents','user_id',$userid,'par_id');

?>
<form action="components/parent.process.php?username=<?php echo $_SESSION['username']; ?>&level=<?php echo $_GET['level'] ?>" method="post" enctype="mutlipart/form-data">
        <h3 class="text-center">Parent/Guardian Details</h3>
        <hr>
        <div class="form-group">
                <label for="inputsurname" class="col-sm-2 control-label">Surname</label>
                <div class="col-sm-10">
                    <input type="text" name="lname" value="<?php echo get_specific_data($dbconn,'parents','user_id',$userid,'lname'); ?>" id="lname" class="form-control" required placeholder="Enter Surname" />
                </div>
        </div>
        <div class="form-group">
                <label for="inputfirstname" class="col-sm-2 control-label">	First Name</label>
                <div class="col-sm-10">
                    <input id="fname" name="fname"  placeholder="First Name" type="text"  class="form-control"  value="<?php echo get_specific_data($dbconn,'parents','user_id',$userid,'fname'); ?>" />
                </div>
        </div>


        <div class="form-group">
                <label for="inputidno" class="col-sm-7 control-label">Parent/Guardian Occupation</label>
                <div class="col-sm-10">
                    <input type="text" name="occupation" value="<?php echo get_specific_data($dbconn,'parents','user_id',$userid,'occupation'); ?>" id="occupation" class="form-control" placeholder="Enter Occupation">
                </div>
        </div>

        <div class="form-group">
                <label for="inputboxnumber" class="col-sm-7 control-label">Employer Name</label>
                <div class="col-sm-10">
            		<input type="text" name="empname" value="<?php echo get_specific_data($dbconn,'parents','user_id',$userid,'empname'); ?>" id="empname" class="form-control" required placeholder="Enter Employer Name " >
                </div>
        </div>



    	<div class="form-group">
                <label for="inputmobileno" class="col-sm-2 control-label">Employer Address</label>
                <div class="col-sm-10">
                    <input type="text"  name="empaddress" value="<?php echo get_specific_data($dbconn,'parents','user_id',$userid,'empaddress'); ?>" id="empaddress" class="form-control"  placeholder="Enter Employer Address">
                </div>
        </div>

    	<div class="form-group">
                <label for="inputemail" class="col-sm-2 control-label">Employer Phone</label>
                <div class="col-sm-10">
                    <input type="text"  name="empphone" value="<?php echo get_specific_data($dbconn,'parents','user_id',$userid,'empphone'); ?>" id="empphone" class="form-control" placeholder="Enter Employer Phone">
                </div>
        </div>

        <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <input id="personalid"  name="personalid" type="hidden"  value="<?php echo $personalid; ?>" />
                    <input id="parentid"  name="parentid" type="hidden"  value="<?php echo $parentid; ?>" />
                    <input id="userid"  name="userid" type="hidden"  value="<?php echo $userid; ?>" />
                    <button type="submit" value="registerbio" name="btn_savebio"  class="btn btn-success"> Save</button>
                </div>
        </div>

</form>