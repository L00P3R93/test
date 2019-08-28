<?php
    $userid = get_specific_data($dbconn,'student','username',$_SESSION['username'],'user_id');

?>

<form action="components/uploads.process.php?username=<?php echo $_SESSION['username']; ?>&level=<?php echo $_GET['level'] ?>" enctype="multipart/form-data" method="post" accept-charset="utf-8">
    <div class="alert alert-danger">
        <p>MAKE SURE YOU UPLOAD AND NAME YOUR DOCUMENTS CORRECTLY, DOCUMENTS ONCE UPLOADED CAN NOT BE CHANGED, Hence you will be                    reponsible for wrong documents uploaded or wrongly named.</p>
        <ul>
            <li>Report Forms/Transcripts</li>
            <li>Admission Letters for Colleges or Universities</li>
            <li>Student ID</li>
            <li>Parent/Guardian National ID</li>
            <li>Fee Structure</li>
            <li>Death Certificate for Orphans</li>
        </ul>
</div>
    <div class="form-group">
        <label for="inputdocumentname" class="col-sm-6 control-label"> Document Name</label>
        <div class="col-sm-10">
            <select class="form-control" name="documentname" required id="documentname">
                <option value="">Select Document Type to be uploaded</option>
                <option value="National Id">Parent/Guardian National ID</option>
                <option value="Student ID">Student ID</option>
                <option value="Report Forms">Report Forms</option>
                <option value="Admission letter">Admission letter</option>
                <option value="Transcripts">Transcripts </option>
                <option value="Fee Structure">Fee Structure</option>
                <option value="Death Certificate">Death Certificate</option>
            </select>
        </div>
    </div>
    <div class="form-group">
        <label for="inpudocument" class="col-sm-6 control-label">Upload document </label>
        <div class="col-sm-10">
            <input  name="document" class="form-control"  type="file">
        </div>
    </div>

    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <input id="userid"  name="userid" type="hidden"  value="<?php echo $userid; ?>" />
            <button type="submit" name="btn_upload" value="studentdocuments"class="btn btn-success"> Upload new document   </button>
        </div>
    </div>
</form>