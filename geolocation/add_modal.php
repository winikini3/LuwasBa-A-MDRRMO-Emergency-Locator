
<!-- Add New -->
<div class="modal fade" id="addnew" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="ModalLabel">Add New</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="POST" action="add.php">
            <div class="mb-3 row">
                <label class="col-sm-2 col-form-label">Email-User</label>
                <div class="col-sm-10">
                    <input type="email" class="form-control" name="email_user">
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-2 col-form-label">Password</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control" name="password">
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-2 col-form-label">Firstname</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="fname">
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-2 col-form-label">Lastname</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="lname">
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-2 col-form-label">Position</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="position">
                </div>
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" name="add" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Save</a>
        </form>
      </div>
    </div>
  </div>
</div>