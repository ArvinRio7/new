<!-- Add New -->
<div class="modal fade" id="addnew" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Add New Song</h4></center>
            </div>

            <div class="modal-body">
			<div class="container-fluid">
			

			<form method="POST" action="add_song.php">
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Song No.:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="Song_No" readonly value="<?php echo strtotime(date('Y-m-d H:i:s')); ?>"/>
					</div>
				</div>

				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Song Title:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="Song_title">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Song By:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" required name="Song_By">
					</div>
				</div>

				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Date Uploaded:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" required readonly name="Song_date" value="<?php echo date('M/d/Y') ?>">
					</div>
				</div>

				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Lyrics:</label>
					</div>
					<div class="col-sm-10">
					
						<textarea class="form-control" required name="Song_Lyrics" rows="10" res></textarea>
					</div>
				</div>

				
            </div> 
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                <button type="submit" name="upload" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Upload </a>
			</form>
            </div>

        </div>
    </div>
</div>