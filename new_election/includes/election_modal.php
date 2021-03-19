<!-- Add -->
<div class="modal fade" id="addnew">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b>Add New Election</b></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="election_add.php" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="title" class="col-sm-3 control-label">Election Title</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="title" name="title" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="starttime" class="col-sm-3 control-label">Election Start Time</label>

                    <div class="col-sm-9">
                      <input type="datetime-local" class="form-control" id="starttime" name="starttime"  required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="endtime" class="col-sm-3 control-label">Election End Time</label>

                    <div class="col-sm-9">
                      <input type="datetime-local" class="form-control" id="endtime" name="endtime" required>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
              <button type="submit" class="btn btn-primary btn-flat" name="add"><i class="fa fa-save"></i> Save</button>
              </form>
            </div>
        </div>
    </div>
</div>

<!-- Edit -->
<div class="modal fade" id="edit">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b>Edit Election Details</b></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="election_edit.php">
                <input type="hidden" class="id" name="id">
                
                <div class="form-group">
                    <label for="edit_starttime" class="col-sm-3 control-label">Election Start Time</label>

                    <div class="col-sm-9">
                      <input type="datetime-local" class="form-control" id="edit_starttime" name="starttime">
                    </div>
                </div>
                <div class="form-group">
                    <label for="edit_endtime" class="col-sm-3 control-label">Election End Time</label>

                    <div class="col-sm-9">
                      <input type="datetime-local" class="form-control" id="edit_endtime" name="endtime">
                    </div>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
              <button type="submit" class="btn btn-success btn-flat" name="edit"><i class="fa fa-check-square-o"></i> Update</button>
              </form>
            </div>
        </div>
    </div>
</div>


<!-- Delete -->
<div class="modal fade" id="delete">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b>Deleting...</b></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="election_delete.php">
                <input type="hidden" class="id" name="id">
                <div class="text-center">
                    <p>DELETE Election</p>
                    <h2 class="bold fullname"></h2>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
              <button type="submit" class="btn btn-danger btn-flat" name="delete"><i class="fa fa-trash"></i> Delete</button>
              </form>
            </div>
        </div>
    </div>
</div>





     