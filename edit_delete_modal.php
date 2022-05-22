<!-- Edit -->
<div class="modal fade" id="edit_" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Edit Song </h4></center>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			<form method="POST" action="">
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Song No.:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="Song_No" value="<?php echo $rows->Song; ?>" readonly>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Title:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="Song_title" value="<?php echo $rows->Title; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Author:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="Song_By" value="<?php echo $rows->Author; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Date Uploaded:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="Song_date" value="<?php echo $rows->Date; ?>">
					</div>
				</div>
            

				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Lyrics:</label>
					</div>
					<div class="col-sm-10">
					
						<textarea class="form-control" required name="Song_Lyrics" rows="10" res> <?php echo $rows->Lyrics ?> </textarea>
					</div>
				</div>


            </div> 
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                <button type="submit" name="edit_Song" class="btn btn-success"><span class="glyphicon glyphicon-check"></span> Update post</a>
			</form>
            </div>

        </div>
    </div>
</div>










<!-- Delete -->
<div class="modal fade" id="delete_<?php echo $rows->Song; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Are you sure you want to delete Song:</h4></center>
            </div>
            <div class="modal-body">	
            	<p class="text-center text-danger"> This action is irreversable! </p>
				<h3 class="text-center"><?php echo $rows->Title; ?></h3>
				<p class="text-center"><?php echo $rows->Lyrics; ?></p>
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>

                <a href="delete_song.php?Song=<?php echo $rows->Song; ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Yes</a>
            </div>

        </div>
    </div>
</div>