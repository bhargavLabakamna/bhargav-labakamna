<!-- MODAL -->
<div class="modal fade" id="banner_model_open" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Banner Add/Edit</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="" method="post" id="banner_form">
              @csrf
                <div class="modal-body">
                    <div class="row">
                      <div class="form-group col-md-6">
                        <label for="button_link">Title</label>
                        <input type="text" class="form-control" id="title" name="title" required style="width: 100%;">
                      </div>
                      <div class="form-group col-md-6">
                        <label for="button_link">Sub Title</label>
                        <input type="text" class="form-control" id="sub_title" name="sub_title" required style="width: 100%;">
                      </div>
                      <div class="form-group col-md-6">
                        <label for="button_link">Button</label>
                        <input type="text" class="form-control" id="button" name="button" required style="width: 100%;">
                      </div>   
                      <div class="form-group col-md-6">
                        <label for="button_link">Button Link</label>
                        <input type="text" class="form-control" id="button_link" name="button_link" required style="width: 100%;">
                      </div>
                      <div class="form-group col-md-6">
                        <label for="status">Status</label>
                        <select class="form-control" id="status" name="status" style="width: 100%;">
                            <option value="">Select</option>
                            <option value="Active">Active</option>
                            <option value="Inactive">Inactive</option>
                        </select>
                    </div>
                    </div>
                  </div>
                  <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                      <button type="button" class="btn btn-primary banner_modal_submit">Submit</button>
                  </div>
                </div>
            </form>
        </div>
    </div>
</div>
