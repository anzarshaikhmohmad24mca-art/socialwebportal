<?php
	include("../connection.php");
	
	$id = $_REQUEST['field'];
	$value = $_REQUEST['query'];
	
	if($id == 'usertype')
	{
		if($value == 'Company')
		{
		?>
		<div class="form-group">
			<label class="control-label">Company Name</label>
			<input type="text" name="txt_cnm" required class="form-control" />
		</div>
		<div class="form-group">
			<label class="control-label">Contact Person</label>
			<input type="text" name="txt_cp" required class="form-control" />
		</div>
		<div class="form-group">
			<label class="control-label">Address</label>
			<textarea name="txt_add" required class="form-control"></textarea>
		</div>
		<div class="form-group">
			<label class="control-label">Mobile No</label>
			<input type="text" name="txt_mno" required class="form-control" />
		</div>
		<div class="form-group">
			<label class="control-label">Email Id</label>
			<input type="email" name="txt_email" required class="form-control" />
		</div>
		<div class="form-group">
			<label class="control-label">Password</label>
			<input type="password" name="txt_pwd" required class="form-control" />
		</div>
		
		
		<button type="submit" name="btn_submit" class="btn btn-primary btn-md pull-right">Submit</button>
		<?php
		}
		else if($value == 'Job_Seeker')
		{
		?>
		<div class="form-group">
			<label class="control-label">Name</label>
			<input type="text" name="txt_nm" required class="form-control" />
		</div>
		<div class="form-group">
			<label class="control-label">Address</label>
			<textarea name="txt_add" required class="form-control"></textarea>
		</div>
		<div class="form-group">
			<label class="control-label">Mobile No</label>
			<input type="text" name="txt_mno" required class="form-control" />
		</div>
		<div class="form-group">
			<label class="control-label">Email Id</label>
			<input type="email" name="txt_email" required class="form-control" />
		</div>
		<div class="form-group">
			<label class="control-label">Password</label>
			<input type="password" name="txt_pwd" required class="form-control" />
		</div>
		<!--<div class="form-group">
			<label class="control-label">Area Of Interest</label>
			<textarea name="txt_aoi" required class="form-control"></textarea>
		</div>
		<div class="form-group">
			<label class="control-label">Photo</label>
			<input type="file" name="userfile" required class="form-control" />
		</div>-->
		
		<button type="submit" name="btn_submit" class="btn btn-primary btn-md pull-right">Submit</button>
		<?php
		}
		else
		{
		?>
		<button type="submit" name="btn_submit" class="btn btn-primary btn-md pull-right" disabled="disabled">Submit</button>
		<?php
		}
	}
?>