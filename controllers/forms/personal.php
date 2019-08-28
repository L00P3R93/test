<?php
    $userid = get_specific_data($dbconn,'student','username',$_SESSION['username'],'user_id');
    $personalid = get_specific_data($dbconn,'personal','user_id',$userid,'pers_id');

?>
<form action="components/personal.process.php?username=<?php echo $_SESSION['username']; ?>&level=<?php echo $_GET['level'] ?>" method="post" enctype="mutlipart/form-data">
    <h3 class="text-center">Personal Details</h3>
    <hr>
    <div class="form-group">
        <label for="inputsurname" class="col-sm-2 control-label">Surname</label>
        <div class="col-sm-10">
            <input type="text" name="lname" value="<?php echo get_specific_data($dbconn,'student','user_id',$userid,'l_name'); ?>" id="lname" class="form-control" required placeholder="Enter Surname" />
        </div>
    </div>
    <div class="form-group">
        <label for="inputfirstname" class="col-sm-2 control-label">	First Name</label>
        <div class="col-sm-10">
            <input id="firstname" name="fname"  placeholder="Enter Your First Name" type="text"  class="form-control"  value="<?php echo get_specific_data($dbconn,'student','user_id',$userid,'f_name'); ?>" />
        </div>
    </div>


    <div class="form-group">
        <label for="inputidno" class="col-sm-7 control-label">ID Number (If Applicable)</label>
        <div class="col-sm-10">
            <input type="text" name="idno" value="<?php echo get_specific_data($dbconn,'student','user_id',$userid,'id'); ?>" id="idno" class="form-control" placeholder="Enter National id No">
        </div>
    </div>

    <div class="form-group">
        <label for="inputboxnumber" class="col-sm-7 control-label">	Admission/Registration Number</label>
        <div class="col-sm-10">
      		<input type="text" name="admreg" value="<?php echo get_specific_data($dbconn,'personal','user_id',$userid,'adm_reg'); ?>" id="admreg" class="form-control" required placeholder="Enter Admission/Registration Number " >
        </div>
    </div>



  	<div class="form-group">
        <label for="inputmobileno" class="col-sm-2 control-label">	Phone No</label>
        <div class="col-sm-10">
            <input type="text"  name="mobileno" value="<?php echo get_specific_data($dbconn,'student','user_id',$userid,'phone'); ?>" id="mobileno" class="form-control"  placeholder="Phone / Mobile No">
        </div>
    </div>

  	<div class="form-group">
        <label for="inputemail" class="col-sm-2 control-label">	 Email</label>
        <div class="col-sm-10">
            <input type="email"  name="email" value="<?php echo get_specific_data($dbconn,'student','user_id',$userid,'email'); ?>" id="email" class="form-control" placeholder="Enter Email Address">
        </div>
    </div>




    <div class="form-group">
        <label for="inputdob" class="col-sm-10 control-label"> 	Date of Birth </label>
        <div class="col-sm-10">
            <input type="date" name="dob" value="<?php echo get_specific_data($dbconn,'biodata','user_id',$userid,'dob'); ?>" id="dob"   class="form-control" required>
        </div>
    </div>

  	<div class="form-group">
        <label for="inputgender" class="col-sm-2 control-label">Gender</label><br>
        <div class="col-sm-10">
            <label for="">Male</label>&nbsp;
            <input type="radio" name="gender" id="gender" <?php if(get_specific_data($dbconn,'student','user_id',$userid,'gender') == 'Male'){echo 'checked';} ?> value="Male"  />
            &nbsp;&nbsp;&nbsp;
            <label for="">Female</label>&nbsp;
            <input type="radio" name="gender" id="gender" <?php if(get_specific_data($dbconn,'student','user_id',$userid,'gender') == 'Female'){echo 'checked';} ?> value="Female" />
        </div>
    </div>
    <div class="form-group">
        <label for="inputmobileno" class="col-sm-10 control-label">Institution Name</label>
        <div class="col-sm-10">
            <input type="text"  name="school" value="<?php echo get_specific_data($dbconn,'personal','user_id',$userid,'school'); ?>" id="school" class="form-control"  placeholder="School/University Name">
        </div>
    </div>
    <div class="form-group">
        <label for="inputmobileno" class="col-sm-10 control-label">Class/Year of Study</label>
        <div class="col-sm-10">
            <input type="text"  name="classyear" value="<?php echo get_specific_data($dbconn,'personal','user_id',$userid,'class_year'); ?>" id="classyear" class="form-control"  placeholder="e.g. Form One/Year One">
        </div>
    </div>
    <div class="form-group">
        <label for="inputmobileno" class="col-sm-10 control-label">County of Residence</label>
        <div class="col-sm-10">
            <select class="form-control" name="county">
                <option value="<?php echo get_specific_data($dbconn,'personal','user_id',$userid,'county'); ?>" selected><?php echo get_specific_data($dbconn,'personal','user_id',$userid,'county'); ?></option>
                <option value='Baringo'>Baringo</option>
                <option value='Bomet'>Bomet</option>
                <option value='Bungoma'>Bungoma</option>
                <option value='Busia'>Busia</option>
                <option value='Elgeyo-Marakwet'>Elgeyo-Marakwet</option>
                <option value='Embu'>Embu</option>
                <option value='Garissa'>Garissa</option>
                <option value='Homa Bay'>Homa Bay</option>
                <option value='Isiolo'>Isiolo</option>
                <option value='Kajiado'>Kajiado</option>
                <option value='Kakamega'>Kakamega</option>
                <option value='Kericho'>Kericho</option>
                <option value='Kiambu'>Kiambu</option>
                <option value='Kilifi'>Kilifi</option>
                <option value='Kirinyaga'>Kirinyaga</option>
                <option value='Kisii'>Kisii</option>
                <option value='Kisumu'>Kisumu</option>
                <option value='Kitui'>Kitui</option>
                <option value='Kwale'>Kwale</option>
                <option value='Laikipia'>Laikipia</option>
                <option value='Lamu'>Lamu</option>
                <option value='Machakos'>Machakos</option>
                <option value='Makueni'>Makueni</option>
                <option value='Mandera'>Mandera</option>
                <option value='Marsabit'>Marsabit</option>
                <option value='Meru'>Meru</option>
                <option value='Migori'>Migori</option>
                <option value='Mombasa'>Mombasa</option>
                <option value='Murang&rsquo;a'>Murang&rsquo;a</option>
                <option value='Nairobi City'>Nairobi City</option>
                <option value='Nakuru'>Nakuru</option>
                <option value='Nandi'>Nandi</option>
                <option value='Narok'>Narok</option>
                <option value='Nyamira'>Nyamira</option>
                <option value='Nyandarua'>Nyandarua</option>
                <option value='Nyeri'>Nyeri</option>
                <option value='Samburu'>Samburu</option>
                <option value='Siaya'>Siaya</option>
                <option value='Taita-Taveta'>Taita-Taveta</option>
                <option value='Tana River'>Tana River</option>
                <option value='Tharaka-Nithi'>Tharaka-Nithi</option>
                <option value='Trans Nzoia'>Trans Nzoia</option>
                <option value='Turkana'>Turkana</option>
                <option value='Uasin Gishu'>Uasin Gishu</option>
                <option value='Vihiga'>Vihiga</option>
                <option value='West Pokot'>West Pokot</option>
                <option value='wajir'>wajir</option>
            </select>
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <input id="personalid"  name="personalid" type="hidden"  value="<?php echo $personalid; ?>" />
            <input id="userid"  name="userid" type="hidden"  value="<?php echo $userid; ?>" />
            <button type="submit" value="registerbio" name="btn_savebio"  class="btn btn-success"> Save</button>
        </div>
    </div>

</form>