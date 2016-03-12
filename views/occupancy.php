<h3 class="section-title">Occupancy Information</h3>

<div class="row">
  <div class="col-sm-8">
    <label name="OccName" for="OccName" id="output">Occupant Name:</label>
    <input type="text" class="form-control" name="OccName" id="occName" placeholder="John Doe" autofocus>
  </div> <!-- /col-8 -->
  
  <div class="col-sm-4">
    <label for="MainBldg">Main Building:</label><br>
    <div name="MainBldg" id="mainBg" class="btn-group text-center" role="group" aria-label="...">
      <input name="MainBg" type="checkbox" data-off-text="No" data-on-text="Yes" checked="true" data-on-color="danger">
    </div> <!-- /btn-group -->
  </div> <!-- /col-3 -->
  
  <div class="col-sm-8">
    <label for="StreetName">Street Address:</label>
    <input type="text" class="form-control" name="StreetName" id="StreetName" placeholder="126 S. Pawling St">
  </div> <!-- /col-8 -->
  
  <div class="col-sm-2">
    <label for="BgSize">Building Size:</label>
    <div class="input-group">
      <input type="number" class="form-control" name="BgSize" id="bgSize" placeholder="5,000" min="1" aria-describedby="sqft">
      <span class="input-group-addon" id="sqft">
        <abbr title="Square Feet">SqFt</abbr>
      </span>
    </div><!-- /input-group -->
  </div><!-- /col-2 -->
  
  <div class="col-sm-2">
    <label for="BgStories">Stories:</label>
    <input type="number" class="form-control" name="BgStories" id="bgStories" placeholder="1" min="1">
  </div> <!-- /col-2 -->
  
  <div class="col-sm-12">
    <label for="BgDesc">Building Description:</label>
    <input type="text" class="form-control" name="BgDesc" id="bgDesc" placeholder="Brick and White House with two door garage">
  </div> <!-- /col-8 -->
  
  <div class="col-sm-4">
    <label for="OccType">Occupancy Type:</label>
    
    <select class="form-control" name="OccType" id="occType">
      <option>Residential</option>
      <option>Commercial</option>
      <option>Storage</option>
      <option>Educational</option>
      <option>Institutional</option>
      <option>Industrial</option>
      <option>Assembly</option>
      <option>Mercantile</option>
      <option>Hazardous</option>
    </select>
  </div><!-- /col-4 -->
  
  <div class="col-sm-4">
    <label for="ConType">Construction Type:</label>
    
    <select class="form-control" name="ConType" id="conType">
      <option>I - Fire Resistive</option>
      <option>II - Non-combustible</option>
      <option>III – Ordinary</option>
      <option>IV - Heavy Timber</option>
      <option>V - Wood Frame</option>
      <option>Wood/Bowstring truss</option>
    </select>
  </div><!-- /col-4 -->
  
  <div class="col-sm-4 pull-right">
    <label for="CombCon">Combustibility of Contents:</label>
    
    <select multiple="multiple" name="CombCon[]" id="combCon" class="form-control">
      <option>C-1 Non-Combustible</option>
      <option>C-2 Limited Combustibility</option>
      <option>C-3 Combustible</option>
      <option>C-4 Free Burning</option>
      <option>C-5 Rapid Burning or Flash Burning</option>
      <option>C-6 Hazardous/Explosive</option>
    </select>
    <span class="hidden-xs">* Hold Ctrl to select multiple.</span>
  </div><!-- /col-4 -->
  
  <div class="col-sm-8">
    <label for="fireFlow">Fire Flow Requirements:</label>
  </div><!-- /col-8 -->
  
  <div class="col-sm-8" name="fireFlow">
    <div class="col-xs-6 col-sm-5 col-sm-offset-1">
      <div class="input-group">
        <input type="number" name="FiftyFlow" id="fireFlow50" min="1" class="form-control" placeholder="50%" aria-describedby="50per">
        <span class="input-group-addon" id="50per">
          <abbr title="Gallons Per Minute">GPM</abbr>
        </span>
      </div> <!-- /input-group -->
    </div> <!-- /col-6 -->
    
    <div class="col-xs-6 col-sm-5">
      <div class="input-group">
        <input type="number" name="HundredFlow" id="fireFlow100" min="1" class="form-control" placeholder="100%" aria-describedby="100per">
        <span class="input-group-addon" id="100per">
          <abbr title="Gallons Per Minute">GPM</abbr>
        </span>
      </div> <!-- /input-group -->
    </div> <!-- /col-6 -->
  </div> <!-- /col-8 -->
</div><!-- /row -->
