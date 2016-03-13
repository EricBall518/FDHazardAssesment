<?php

if(! $conn ) {
      die('Could not connect: ' . mysql_error());
   }
   echo "Connected successfully";

   try {
      $sql = 'INSERT INTO submition (ipaddr, OccName, MainBg, StreetName, BgSize, BgStories, BgDesc, OccType, ConType, CombCon, FiftyFlow, HundredFlow, lhHazard, imInfo, sprinkType, sprinklers, fdConnect, fdConLoc, firePump, fdPumpLoc, fdAccess, fdPumpControl, fireAlarm, smokeDetect, heatDetect, pullBox, waterFlow, tamperSwitch, fireAlarmComp, fireAlarmPanelLoc, fireDoors, autoClose, fireDoorRating, doorProp, fireDoorVoids, fireWall, fireWallRate, fireWallVoids, utilRmLoc, elecSize, meterLoc, brkLoc, fuelTyp, fuelSO, backupGen, hydrantIDone, hydrantLocone, hydrantDistone, hydrantGPMone, hydrantIDtwo, hydrantLoctwo, hydrantDisttwo, hydrantGPMtwo, hydrantIDthree, hydrantLocthree, hydrantDistthree, hydrantGPMthree, hydrantIDfour, hydrantLocfour, hydrantDistfour, hydrantGPMfour, hydrantIDfive, hydrantLocfive, hydrantDistfive, hydrantGPMfive, waterSrcLoc, waterSrcDist, waterSrcTyp, waterSrcReqs, knoxBox, knoxBoxLoc, lzLat, lzLon, access, limitations, roofAccessPoint, atticArea, storage, atticAccess, atticFirestop, priContactName, priContactTitle, priContactBusPh, priContactHomePh, priContactCell, priContactFax, priContactEmail, secContactName, secContactTitle, secContactBusPh, secContactHomePh, secContactCell, secContactFax, secContactEmail, prepOfficer, prepFFOne, prepFFTwo, prepFFThree, prepFFFour, prepDate)
         VALUES ("' . $ip . '", "' . $OccName . '", "' . $MainBg . '", "' . $StreetName . '", "' . $BgSize . '", "' . $BgStories . '", "' . $BgDesc . '", "' . $OccType . '", "' . $ConType . '"
, "' . $CombCon . '", "' . $FiftyFlow . '", "' . $HundredFlow . '", "' . $lhHazard . '", "' . $imInfo . '", "' . $sprinkType . '", "' . $sprinklers . '", "' . $fdConnect . '", "' . $fdConLoc . '", "' . $firePump . '", "' . $fdPumpLoc . '", "' . $fdAccess . '", "' . $fdPumpControl . '", "' . $fireAlarm . '", "' . $smokeDetect . '", "' . $heatDetect . '", "' . $pullBox . '", "' . $waterFlow . '", "' . $tamperSwitch . '", "' . $fireAlarmComp . '", "' . $fireAlarmPanelLoc . '", "' . $fireDoors . '", "' . $autoClose . '", "' . $fireDoorRating . '", "' . $doorProp . '", "' . $fireDoorVoids . '", "' . $fireWall . '", "' . $fireWallRate . '", "' . $fireWallVoids . '", "' . $utilRmLoc . '", "' . $elecSize . '", "' . $meterLoc . '", "' . $brkLoc . '", "' . $fuelTyp . '", "' . $fuelSO . '", "' . $backupGen . '", "' . $hydrantIDone . '", "' . $hydrantLocone . '", "' . $hydrantDistoneWopt . '", "' . $hydrantGPMone . '", "' . $hydrantIDtwo . '", "' . $hydrantLoctwo . '", "' . $hydrantDisttwoWopt . '", "' . $hydrantGPMtwo . '", "' . $hydrantIDthree . '", "' . $hydrantLocthree . '", "' . $hydrantDisttheeWopt . '", "' . $hydrantGPMthree . '", "' . $hydrantIDfour . '", "' . $hydrantLocfour . '", "' . $hydrantDistfourWopt . '", "' . $hydrantGPMfour . '", "' . $hydrantIDfive . '", "' . $hydrantLocfive . '", "' . $hydrantDistfiveWopt . '", "' . $hydrantGPMfive . '", "' . $waterSrcLoc . '", "' . $waterSrcDist . '", "' . $waterSrcTyp . '", "' . $waterSrcReqs . '", "' . $knoxBox . '", "' . $knoxBoxLoc . '", "' . $lzLat . '", "' . $lzLon . '", "' . $access . '", "' . $limitations . '", "' . $roofAccessPoint . '", "' . $atticArea . '", "' . $storage . '", "' . $atticAccess . '", "' . $atticFirestop . '", "' . $priContactName . '", "' . $priContactTitle . '", "' . $priContactBusPh . '", "' . $priContactHomePh . '", "' . $priContactCell . '", "' . $priContactFax . '", "' . $priContactEmail . '", "' . $secContactName . '", "' . $secContactTitle . '", "' . $secContactBusPh . '", "' . $secContactHomePh . '", "' . $secContactCell . '", "' . $secContactFax . '", "' . $secContactEmail . '", "' . $prepOfficer . '", "' . $prepFFOne . '", "' . $prepFFTwo . '", "' . $prepFFThree . '", "' . $prepFFFour . '", "' . $prepDate . '")';
   } catch (Exception $e) {
      throw new Exception("Error Processing Request", 1);
   }
      
      
   mysql_select_db('preplan');
   $retval = mysql_query( $sql, $conn );
   
   if(! $retval ) {
      die('Could not enter data: ' . mysql_error());
   }
   
   echo "Entered data successfully\n";

?>