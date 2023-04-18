<h3>การกำหนดค่าระบบ</h3>
<section>
  <div class="row">
    <div class="col-lg-12 steps4 card-description">
      <h4>การกำหนดค่าระบบ</h4>
      <hr>
      <div class="form-group">
        <label for="">ต่อท้าย url</label>
        <input type="text" class="form-control form-control-sm" name="url_suffix" id="url_suffix" value="<?=$this->config->item("url_suffix")?>">
      </div>

      <div class="form-group">
        <label for="">คีย์การเข้ารหัส</label>
        <input type="text" class="form-control form-control-sm" name="encryption_key" id="encryption_key" value="<?=$this->config->item("encryption_key")?>">
      </div>

      <div class="form-group">
        <label for="">การเข้ารหัส URL</label>
        <select class="form-control form-control-sm" name="encryption_url" id="encryption_url">
          <option  value="false">ไม่</option>
          <option <?=$this->config->item("encryption_url") == true ? "selected":""?> value="true">ใช่</option>
        </select>
      </div>


      <div class="form-group">
        <label for="">เขตเวลา</label>
        <select class="form-control form-control-sm select-option" name="time_zone" id="time_zone">
          <?php foreach ($time_zone as $timezone): ?>
            <option <?=$this->config->item("time_zone") == $timezone ? "selected":""?> value="<?=$timezone?>"><?=$timezone?></option>
          <?php endforeach; ?>
        </select>
      </div>

      <div class="form-group">
        <label for="">อัปโหลดสูงสุด</label> (Kb)
        <input type="text" class="form-control form-control-sm" name="max_upload" id="max_upload" value="<?=$this->config->item("max_upload")?>">
      </div>
    </div>
  </div>
</section>
