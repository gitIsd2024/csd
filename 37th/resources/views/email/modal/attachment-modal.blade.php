  <form action="#" id="formUpload" method="post" enctype="multipart/form-data">

  <div class="modal fade" id="uploaderModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Upload attachement</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">         
            <input type="file" class="file" id="file" name="file">        
        </div>
        
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <div id="attachmentDIv" style="display: none">
            <button type="button" class="btn btn-success viewAttachment">View Attachment</button>
          </div>
          <button type="submit" class="btn btn-primary">Upload</button>
        </div>
      </div>
    </div>
  </div>

</form>