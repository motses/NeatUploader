<script type="text/javascript">
	$(function(){
	  initUploaders("/neat_uploader/uploads/upload");
	});
</script>
<div class="filedrag">
  <div class="filedrag-droparea">
    <div class="filedrag-display-filename"></div>
    <div class="filedrag-remove-button">(<button type="button" class="btn btn-xs btn-link filedrag-remove-file">remove</button>)</div>
  </div>
  <div class="filedrag-progress"></div>
    <input type="file" class="filedrag-input" id="edit-file-input" name="edit-file-input">
    <?php echo $this->Form->input("Upload.original",array("type" => "hidden","class" => "filedrag-input","id" => "hid-edit-original-filename","div" => false,"label" => false)); ?>
    <?php echo $this->Form->input("Upload.filename",array("type" => "hidden","class" => "filedrag-input","id" => "hid-edit-new-filename","div" => false,"label" => false)); ?>
    <?php echo $this->Form->input("Upload.ref",array("type" => "hidden","class" => "filedrag-input","id" => "hid-edit-ref","div" => false,"label" => false,"value" => $ref)); ?>
  </div>
</div>