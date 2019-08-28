<?php
    $userid = get_specific_data($dbconn,'student','username',$_SESSION['username'],'user_id');
    $persid = get_specific_data($dbconn,'personal','user_id',$userid,'pers_id');
    $parid =  get_specific_data($dbconn,'parents','user_id',$userid,'par_id');
    $docid = get_specific_data($dbconn,'uploads','user_id',$userid,'doc_id');
    $applid = get_specific_data($dbconn,'applications','user_id',$userid,'appl_id');

    if(isset($applid) && !empty($applid)){ ?>
        <table cellpadding="0" cellspacing="0" border="1" class="table  table-bordered" id="viewtable" style="border-color:#CCCCCC" >
            <tr>
                <td><b>Chief Application Approval</b></td>
                <td> <?php echo get_specific_data($dbconn,'applications','user_id',$userid,'chief_status') ?></td>
                <td><b>Bursary Approval Status</b></td>
                <td> <?php echo get_specific_data($dbconn,'applications','user_id',$userid,'bursary_status') ?></td>
            </tr>
        </table>
   <?php } ?>

<br><br>
<table cellpadding="0" cellspacing="0" border="1" class="table  table-bordered" id="viewtable" style="border-color:#CCCCCC" >
    <?php
      if(isset($persid)&&!empty($persid)){ ?>
    <tr>
        <td><b>Name</b></td>
        <td> <?php echo get_specific_data($dbconn,'student','user_id',$userid,'l_name') ?> <?php echo get_specific_data($dbconn,'student','user_id',$userid,'f_name') ?></td>
        <td><b>Id Number</b></td>
        <td> <?php echo get_specific_data($dbconn,'student','user_id',$userid,'id') ?></td>
    </tr>
    <tr>
        <td><b>Gender</b></td>
        <td> <?php echo get_specific_data($dbconn,'student','user_id',$userid,'gender') ?></td>
        <td><b>Date OF Birth</b></td>
        <td> <?php echo get_specific_data($dbconn,'personal','user_id',$userid,'dob') ?></td>
    </tr>
   <tr>
        <td><b>Admission/Registration</b></td>
        <td><?php echo get_specific_data($dbconn,'personal','user_id',$userid,'adm_reg') ?> </td>
        <td><b>Phone Number</b></td>
        <td><?php echo get_specific_data($dbconn,'personal','user_id',$userid,'phone') ?></td>
    </tr>
    <tr>
        <td><b>Institution</b></td>
        <td> <?php echo get_specific_data($dbconn,'personal','user_id',$userid,'school') ?></td>
        <td><b>Class/Year</b></td>
        <td> <?php echo get_specific_data($dbconn,'personal','user_id',$userid,'class_year') ?></td>
    </tr>
   <tr>
        <td><b>Date Created </b></td>
        <td> <?php echo get_specific_data($dbconn,'personal','user_id',$userid,'add_date') ?></td>
        <td><b>County </b></td>
        <td> <?php echo get_specific_data($dbconn,'personal','user_id',$userid,'county') ?></td>
    </tr>
    <?php  }else{ ?>
        <tr>
            <td colspan='8'>
                <div class="alert alert-danger text-center">
                    Yo have not yet submitted the your Personal  details :
                    <a href="apply.php?user_name=<?php echo $_SESSION['username']; ?>&level=<?php echo $_GET['level'] ?>&step=personal" class="btn btn-primary">
                        Click here to fill your personal details
                    </a>
                </div>
            </td>
        </tr>
    <?php  } ?>

    </table>
    <br><br></br>
    <table cellpadding="0" cellspacing="0" border="1" class="table  table-bordered" id="viewtable" style="border-color:#CCCCCC" >
        <tr>
            <th colspan="7" class="col-md-12 text-center"><h3>Parent/Guardian Details</h3></th>
        </tr>
        <tr>
            <th>Surname</th>
            <th>First Name</th>
            <th>Occupation</th>
            <th>Employer Name</th>
            <th>Employer Address</th>
            <th>Employer Phone</th>
            <th>Add Date</th>
        </tr>
        <?php
          if(isset($parid) && !empty($parid)){ ?>
        <tr>
            <td><?php echo get_specific_data($dbconn,'parents','user_id',$userid,'fname') ?></td>
            <td><?php echo get_specific_data($dbconn,'parents','user_id',$userid,'lname') ?></td>
            <td><?php echo get_specific_data($dbconn,'parents','user_id',$userid,'occupation') ?></td>
            <td><?php echo get_specific_data($dbconn,'parents','user_id',$userid,'empname') ?></td>
            <td><?php echo get_specific_data($dbconn,'parents','user_id',$userid,'empaddress') ?></td>
            <td><?php echo get_specific_data($dbconn,'parents','user_id',$userid,'empphone') ?></td>
            <td><?php echo get_specific_data($dbconn,'parents','user_id',$userid,'add_date') ?></td>
        </tr>
        <!--<tr>
            <td>Other School</td>
            <td><?php echo get_specific_data($dbconn,'schooldata','user_id',$userid,'otherschool_name') ?></td>
            <td><?php echo get_specific_data($dbconn,'schooldata','user_id',$userid,'otherschool_box') ?></td>
            <td><?php echo get_specific_data($dbconn,'schooldata','user_id',$userid,'othergrade') ?></td>
            <td><?php echo get_specific_data($dbconn,'schooldata','user_id',$userid,'othertown') ?></td>
            <td><?php echo get_specific_data($dbconn,'schooldata','user_id',$userid,'otherfromdate') ?></td>
            <td><?php echo get_specific_data($dbconn,'schooldata','user_id',$userid,'othertodate') ?></td>
        </tr>-->
          <?php }else{ ?>
        <tr>
            <td colspan='8'>
                <div class="alert alert-danger text-center">
                    You have not yet submitted the your Parent/Guardian details :
                    <a href="apply.php?user_name=<?php echo $_SESSION['username']; ?>&level=<?php echo $_GET['level']; ?>&step=parent" class="btn btn-primary">
                        Click here to fill your Parent/Guardian details
                    </a>
                </div>
            </td>
        </tr>
        <?php  } ?>


    </table>
    <br></br>
<form action="components/student.apply.php?username=<?php echo $_SESSION['username']?>&level=<?php echo $_GET['level']?>" method="post" enctype="multipart/form-data" onsubmit="return checkAppl(this);">
    <input type="hidden" name="userid" id="userid" value="<?php echo $userid; ?>" />
    <input type="hidden" name="persid" id="persid" value="<?php echo $persid; ?>" />
    <input type="hidden" name="parid" id="parid" value="<?php echo $parid; ?>" />
    <input type="hidden" name="docid" id="docid" value="<?php echo $docid; ?>" />
    <input type="hidden" name="username" id="username" value="<?php echo $_SESSION['username']; ?>" />
    <center>
        <button type="submit" name="submit_appl" class="btn btn-primary text-white" value="Submit Application">Submit Application</button>
    </center>
</form>
