<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Laporkan Postingan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color: white;">
    <span aria-hidden="true">&times;</span>
</button>

      </div>
      <div class="modal-body">
        <form action="/lapor-postingan" method="post" enctype="multipart/form-data">
            @csrf
          <div class="form-group">
            <label for="recipient-name" class="col-form-label"></label>
            <input type="hidden" class="form-control" id="recipient-name" value="{{$dataPostingan->id}}" name="postingan_id">
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Message:</label>
            <textarea class="form-control" id="message-text" name="alasan"></textarea>
                               @error('alasan')
                                <small class="text-danger">{{$message}}</small>
                                @enderror
          </div>
          <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Send message</button>
      </div>
    </div>
        </form>
      </div>
      
  </div>
</div>
