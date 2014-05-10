<script type="text/javascript" src="<?php echo base_url('bootstrap/js/').'/fileinput.js';?>"></script>

<div class = "upload">
  <div class = "upload-body">
    <h3 class="upload-title" align="left">Upload Foto</h3>
    <div class="fileinput fileinput-new" data-provides="fileinput">
      <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width:470px; height:300px;"></div>
      <div class="fileinput fileinput-new input-group" data-provides="fileinput">
      </div>
      <div>
        <form method="post" action="<?php echo site_url('/tamannasionalcontroller/unggahFoto/');?>" enctype="multipart/form-data">
          <input type="hidden" name="idTaman" value="<?php echo $idTaman;?>">
          <table>
            <tr>
              <td>
                <div class="form-control" data-trigger="fileinput">
                  <i class="glyphicon glyphicon-file fileinput-exists"></i>
                  <span class="fileinput-filename"></span>
                </div>
              </td>
              <td><ul></ul></td>
              <td><input name="fotopublik" type="file" title="Cari File"></td>
              <td><ul></ul></td>
              <td></td>
            </tr>
            <tr>
              <td><ul></ul></td>
            </tr>
            <tr>
              <td>
                <ul></ul>
                <button class="btn btn-default" type="submit" role="button">Submit</button>
                <button class="btn btn-default" type="cancel" role="button">Cancel</button>
              </td>
            </tr>
          </table>
        </form>

      </div>
    </div>
  </div>
</div>
