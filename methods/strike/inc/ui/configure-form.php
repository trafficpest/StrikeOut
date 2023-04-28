<form class="p-3" action="<?=$_SERVER['REQUEST_URI']?>" method="post">
  <h1>Configure Strikeout</h1>
  <div class="mb-3">
    <label for="payeeName" class="form-label">Payee Name:</label>
    <input type="text" class="form-control"  id="payeeName" name="payeeName"
      value="<?=$config['payee_name']?>" required>
  </div>
  <div class="mb-3">
    <label for="apiKey" class="form-label">Api Key:</label>    
    <div class="float-end">
      <a href="https://strike.me/developer/" target="_blank">Get it Here</a>
    </div>
    <input type="text" class="form-control"  id="apiKey" name="apiKey"
    value="<?=$config['api_key']?>" required>
  </div>
  <div class="mb-3">
    <label for="qrDir" class="form-label">QR Image Dir:</label>
    <div class="float-end">
      <a href="<?=strtok($_SERVER["REQUEST_URI"], '?').'?deleteQr=true'?>">
        Delete Contents</a>
    </div>
    <input type="text" class="form-control"  id="qrDir" name="qrDir"
      value="<?=$config['qr_img_dir']?>" >
  </div>
  <div class="mb-3">
    <label for="actionUrl" class="form-label">Redirect After Payment:</label>
    <input type="text" class="form-control"  id="actionUrl" name="actionUrl" 
      value="<?=$config['action_url']?>" required>
  </div>
  <div class="mb-3">
    <label for="timezone" class="form-label">Timezone:</label>
    <?include_once $path_to_root.'/inc/ui/timezones.php'?>
  </div>
  <div class="mb-3">
    <label for="secret" class="form-label">Webhook Secret & Password:</label>
    <input type="text" class="form-control"  id="secret" name="secret" 
    value="<?=$config['secret']?>" required>
  </div>
    <input type="hidden" id="configForm" name="configForm" 
    value="true" >
  <div class="mb-3">
    <button type="submit" class="btn btn-warning" value="Submit">Submit</button>
  </div>
</form>