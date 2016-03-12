<h3 class="section-title">Hydrant/Water Supply Information</h3>

<div class="row">
  <div class="col-sm-3">
    <label for="">Hydrant ID/Number:</label><br>
    <input type="text" class="form-control" name="hydrantIDone" id="" placeholder="HFD-123">
  </div> <!-- /col-3 -->
  
  <div class="col-sm-3">
    <label for="">Location:</label><br>
    <input type="text" class="form-control" name="hydrantLocone" id="" placeholder="North-East Corner">
  </div> <!-- /col-3 -->
  
  <div class="col-sm-3">
    <label for="">Distance from Building:</label><br>

    <div class="input-group">

      <input type="text" class="form-control" name="hydrantDistone" id="" placeholder="">

<span class="input-group-addon" id="feet">
        <abbr title="Feet">Feet</abbr>
      </span>

      

    </div><!-- /input-group -->
  </div> <!-- /col-3 -->
  
  <div class="col-sm-3">
    <label for="">GPM:</label><br>
    <input type="text" class="form-control" name="hydrantGPMone" id="" placeholder="1500">
  </div> <!-- /col-3 -->
  
  <div class="col-sm-3">
    <label for="">Hydrant ID/Number:</label><br>
    <input type="text" class="form-control" name="hydrantIDtwo" id="" placeholder="HFD-123">
  </div> <!-- /col-3 -->
  
  <div class="col-sm-3">
    <label for="">Location:</label><br>
    <input type="text" class="form-control" name="hydrantLoctwo" id="" placeholder="North-West Corner">
  </div> <!-- /col-3 -->
  
  <div class="col-sm-3">
    <label for="">Distance from Building:</label><br>
    <div class="input-group">
      <input type="text" class="form-control" name="hydrantDisttwo" id="" placeholder="">
         <div class="input-group-btn">
          <!-- Buttons -->
          <input type="radio" name="hydrantTwoDistOpt" <?php if (isset($hydrantTwoDistOpt) && $hydrantTwoDistOpt=="Feet") echo "checked";?> class="btn btn-default" value="Feet">Feet</button>
          <input type="radio" name="hydrantTwoDistOpt" <?php if (isset($hydrantTwoDistOpt) && $hydrantTwoDistOpt=="Yards") echo "checked";?> class="btn btn-default" value="Yards">Yards</button>
          </div><!-- input-group-btn -->
    </div><!-- /input-group -->
  </div> <!-- /col-3 -->
  
  <div class="col-sm-3">
    <label for="">GPM:</label><br>
    <input type="text" class="form-control" name="hydrantGPMtwo" id="" placeholder="1500">
  </div> <!-- /col-3 -->
  
  <div class="col-sm-3">
    <label for="">Hydrant ID/Number:</label><br>
    <input type="text" class="form-control" name="hydrantIDthree" id="" placeholder="HFD-123">
  </div> <!-- /col-3 -->
  
  <div class="col-sm-3">
    <label for="">Location:</label><br>
    <input type="text" class="form-control" name="hydrantLocthree" id="" placeholder="South-East Corner">
  </div> <!-- /col-3 -->
  
  <div class="col-sm-3">
    <label for="">Distance from Building:</label><br>
    <div class="input-group">
      <input type="text" class="form-control" name="hydrantDistthree" id="" placeholder="">
          <div class="input-group-btn">
            <!-- Buttons -->
            <input type="radio" name="hydrantThreeDistOpt" <?php if (isset($hydrantThreeDistOpt) && $hydrantThreeDistOpt=="Feet") echo "checked";?> class="btn btn-default" value="Feet">Feet</button>
            <input type="radio" name="hydrantThreeDistOpt" <?php if (isset($hydrantThreeDistOpt) && $hydrantThreeDistOpt=="Yards") echo "checked";?> class="btn btn-default" value="Yards">Yards</button>
          </div><!--/input-group-btn -->
        </div><!-- /input-group -->
  </div><!-- /col-3 -->
  
  <div class="col-sm-3">
    <label for="">GPM:</label><br>
    <input type="text" class="form-control" name="hydrantGPMthree" id="" placeholder="1500">
  </div> <!-- /col-3 -->
  
  <div class="col-sm-3">
    <label for="">Hydrant ID/Number:</label><br>
    <input type="text" class="form-control" name="hydrantIDfour" id="" placeholder="HFD-123">
  </div> <!-- /col-3 -->
  
  <div class="col-sm-3">
    <label for="">Location:</label><br>
    <input type="text" class="form-control" name="hydrantLocfour" id="" placeholder="South-West Corner">
  </div> <!-- /col-3 -->
  
  <div class="col-sm-3">
    <label for="">Distance from Building:</label><br>
    <div class="input-group">
      <input type="text" class="form-control" name="hydrantDistfour" id="" placeholder="">
       <div class="input-group-btn">
        <!-- Buttons -->
        <input type="radio" name="hydrantFourDistOpt" <?php if (isset($hydrantFourDistOpt) && $hydrantFourDistOpt=="Feet") echo "checked";?> class="btn btn-default" value="Feet">Feet</button>
        <input type="radio" name="hydrantFourDistOpt" <?php if (isset($hydrantFourDistOpt) && $hydrantFourDistOpt=="Yards") echo "checked";?> class="btn btn-default" value="Yards">Yards</button>
       </div><!-- /input-group-btn -->
    </div><!-- /input-group -->
  </div><!-- /col-3 -->
  
  <div class="col-sm-3">
    <label for="">GPM:</label><br>
    <input type="text" class="form-control" name="hydrantGPMfour" id="" placeholder="1500">
  </div> <!-- /col-3 -->
  
  <div class="col-sm-3">
    <label for="">Hydrant ID/Number:</label><br>
    <input type="text" class="form-control" name="hydrantIDfive" id="" placeholder="HFD-123">
  </div> <!-- /col-3 -->
  
  <div class="col-sm-3">
    <label for="">Location:</label><br>
    <input type="text" class="form-control" name="hydrantLocfive" id="" placeholder="2 Blocks Down on left">
  </div> <!-- /col-3 -->
  
  <div class="col-sm-3">
    <label for="">Distance from Building:</label><br>
    <div class="input-group">
      <input type="text" class="form-control" name="hydrantDistfive" id="" placeholder="">
          <div class="input-group-btn">
            <!-- Buttons -->
            <input type="radio" name="hydrantFiveDistOpt" <?php if (isset($hydrantFiveDistOpt) && $hydrantFiveDistOpt=="Feet") echo "checked";?> class="btn btn-default" value="Feet">Feet</button>
            <input type="radio" name="hydrantFiveDistOpt" <?php if (isset($hydrantFiveDistOpt) && $hydrantFiveDistOpt=="Yards") echo "checked";?> class="btn btn-default" value="Yards">Yards</button>
          </div><!-- /input-group-btn -->
    </div><!-- /input-group -->
  </div><!-- /col-3 -->
  
  <div class="col-sm-3">
    <label for="">GPM:</label><br>
    <input type="text" class="form-control" name="hydrantGPMfive" id="" placeholder="1500">
  </div> <!-- /col-3 -->
  
  <div class="col-sm-12">
    <label for="">Nearest Water Source: (If no municipal water available or if Supplemental is needed)</label><br>
  </div><!-- /col-12 -->
  
  <div class="col-sm-3">
    <label for="">Location:</label><br>
    <input type="text" class="form-control" name="waterSrcLoc" id="" placeholder="Haskell St">
  </div> <!-- /col-3 -->
  
  <div class="col-sm-3">
    <label for="">Distance from Building:</label><br>
    <div class="input-group">
      <input type="text" class="form-control" name="waterSrcDist" id="" placeholder="">
          <div class="input-group-btn">
            <!-- Buttons -->
            <button type="button" class="btn btn-default">Feet</button>
            <button type="button" class="btn btn-default">Yards</button>
            <button type="button" class="btn btn-default">Miles</button>
          </div><!-- /input-group-btn -->
    </div><!-- /input-group -->
  </div><!-- /col-3 -->
  
  <div class="col-sm-3">
    <label for="">Source Type:</label><br>
    <input type="text" class="form-control" name="waterSrcTyp" id="" placeholder="Pond with Dry Hydrant">
  </div> <!-- /col-3 -->
  
  <div class="col-sm-3">
    <label for="">Source Requirments:</label><br>
    <input type="text" class="form-control" name="waterSrcReqs" id="" placeholder="(2) Hard Scuction">
  </div> <!-- /col-3 -->
</div><!-- /row -->
