<h3 class="section-title">Fire Protection System(s)</h3>

<div class="row">
  

<div class="col-sm-2">
    <label for="">Type:</label>
    
    <select class="form-control" name="sprinkType" id="sprinklers">
      <option>Wet</option>
      <option>Dry</option>
      <option>Both</option>
    </select>
  </div> <!-- /col-2 -->
  
  <div class="col-sm-3">
    <label for="sprinklers">Sprinklers:</label>
    
    <select class="form-control" name="sprinklers" id="sprinklers">
      <option>No</option>
      <option>Yes</option>
      <option>Yes, But not full coverage</option>
    </select>
  </div> <!-- /col-3 -->
  
  <div class="col-sm-2">
    <label for="">FD Connection</label><br>
    <div name="" class="btn-group" role="group" aria-label="...">
      <input name="fdConnect" type="checkbox" data-off-text="No" data-on-text="Yes" data-on-color="danger">      
    </div> <!-- /btn-group -->
  </div> <!-- /col-2 -->
  
  <div class="col-sm-5">
    <label for="">Location</label><br>
    <input type="text" class="form-control" name="fdConLoc" id="fdConn" placeholder="Rear of building">
  </div> <!-- /col-5 -->
  
  <div class="col-sm-2">
    <label for="">Fire Pump:</label><br>
    <div name="" class="btn-group" role="group" aria-label="...">
      <input name="firePump" type="checkbox" data-off-text="No" data-on-text="Yes" data-on-color="danger">
    </div> <!-- /btn-group -->
  </div> <!-- /col-2 -->
  
  <div class="col-sm-4">
    <label for="">Location</label><br>
    <input type="text" class="form-control" name="fdPumpLoc" id="fpLoc" placeholder="Rear of building">
  </div> <!-- /col-4 -->
  
  <div class="col-sm-2">
    <label for="">FD Accessible:</label><br>
    <div name="" class="btn-group" role="group" aria-label="...">
      <input name="fdAccess" type="checkbox" data-off-text="No" data-on-text="Yes" data-on-color="danger">
    </div><!-- /btn-group -->
  </div><!-- /col-2 -->
  
  <div class="col-sm-4">
    <label for="">Who Controls?</label><br>
    <input type="text" class="form-control" name="fdPumpControl" id="fpControl" placeholder="">
  </div><!-- /col-4 -->
  
  <div class="col-sm-2 ">
    <label for="">Fire Alarm:</label><br>
    <div name="" class="btn-group" role="group" aria-label="...">
      <input name="fireAlarm" type="checkbox" data-off-text="No" data-on-text="Yes" data-on-color="danger">
    </div><!-- /btn-group -->
  </div><!-- /col-2 -->
  
  <div class="col-sm-2">
    <label for="">Smoke Detectors:</label><br>
    <div name="" class="btn-group" role="group" aria-label="...">
      <input name="smokeDetect" type="checkbox" data-off-text="No" data-on-text="Yes" data-on-color="danger">
    </div> <!-- /btn-group -->
  </div> <!-- /col-2 -->
  
  <div class="col-sm-2">
    <label for="">Heat Detectors:</label><br>
    <div name="" class="btn-group" role="group" aria-label="...">
      <input name="heatDetect" type="checkbox" data-off-text="No" data-on-text="Yes" data-on-color="danger">
    </div> <!-- /btn-group -->
  </div> <!-- /col-2 -->
  
  <div class="col-sm-2">
    <label for="">Pull Boxes:</label><br>
    <div name="" class="btn-group" role="group" aria-label="...">
      <input name="pullBox" type="checkbox" data-off-text="No" data-on-text="Yes" data-on-color="danger">
    </div> <!-- /btn-group -->
  </div> <!-- /col-2 -->
  
  <div class="col-sm-2">
    <label for="">Water Flow Switch:</label><br>
    <div name="" class="btn-group" role="group" aria-label="...">
      <input name="waterFlow" type="checkbox" data-off-text="No" data-on-text="Yes" data-on-color="danger">
    </div> <!-- /btn-group -->
  </div> <!-- /col-2 -->
  
  <div class="col-sm-2">
    <label for="">Tamper Switch:</label><br>
    <div name="" class="btn-group" role="group" aria-label="...">
      <input name="tamperSwitch" type="checkbox" data-off-text="No" data-on-text="Yes" data-on-color="danger">
    </div> <!-- /btn-group -->
  </div> <!-- /col-2 -->
  
  <div class="col-sm-6">
    <label for="">Alarm Company?</label><br>
    <input type="text" class="form-control" name="fireAlarmComp" id="alarmComp" placeholder="Time Warner Cable Businss Class">
  </div> <!-- /col-6 -->
  
  <div class="col-sm-6">
    <label for="">Control Panel Location:</label><br>
    <input type="text" class="form-control" name="fireAlarmPanelLoc" id="alarmCP" placeholder="Main Entrance">
  </div> <!-- /col-6 -->
  
  <div class="col-sm-12">
    <div class="col-sm-2">
      <label for="aClose">Fire Doors:</label><br>
      <div name="fDoors" class="btn-group" role="group" aria-label="...">
        <input name="fireDoors" type="checkbox" data-off-text="No" data-on-text="Yes" data-on-color="danger">
      </div> <!-- /btn-group -->
<br />
      
      <label for="aClose">Auto Close?</label><br>
      <div name="aClose" class="btn-group" role="group" aria-label="...">
        <input name="autoClose" type="checkbox" data-off-text="No" data-on-text="Yes" data-on-color="danger">
      </div> <!-- /btn-group -->
    </div> <!-- /col-2 -->
  
    <div class="col-sm-3">
      <label for="">Rating:</label><br>
      <input type="text" class="form-control" name="fireDoorRating" id="fdRate" placeholder="90 MIN">
      
      <label for="">Potential to be propped open?</label><br>
      <div name="" class="btn-group" role="group" aria-label="...">
        <input name="doorProp" type="checkbox" data-off-text="No" data-on-text="Yes" data-on-color="danger">
      </div> <!-- /btn-group -->
    </div> <!-- /col-3 -->
  
    <div class="col-sm-7" name="imInfo">
      <label for="">Voids/Problems:</label><br>
      <div class="col-xs-12">
        <textarea class="form-control" rows="5" name="fireDoorVoids" id="imInfo"></textarea>
      </div> <!-- /col-12 -->
    </div> <!-- /col-7 -->
  </div> <!-- /col-12 -->
  
  <div class="col-sm-2">
    <label for="">Fire Walls:</label><br>
    <div name="" class="btn-group" role="group" aria-label="...">
      <input name="fireWall" type="checkbox" data-off-text="No" data-on-text="Yes" data-on-color="danger">
    </div> <!-- /btn-group -->
  </div> <!-- /col-3 -->
  
  <div class="col-sm-3">
    <label for="">Rating:</label><br>
    <input type="text" class="form-control" name="fireWallRate" id="fwRate" placeholder="90 MIN">
  </div> <!-- /col-3 -->
  
  <div class="col-sm-7" name="imInfo">
      <label for="">Voids/Problems:</label><br>
    <div class="col-xs-12">
        <textarea class="form-control" rows="5" name="fireWallVoids" id="imInfo"></textarea>
    </div> <!-- /col-12 -->
  </div><!-- /col-7 -->
</div><!-- /row -->
