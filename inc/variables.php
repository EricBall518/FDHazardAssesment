<?php

   $OccName = $_POST['OccName'];
   $MainBg = $_POST['MainBg'];
   $StreetName = $_POST['StreetName'];
   $BgSize = $_POST['BgSize'];
   $BgStories = $_POST['BgStories'];
   $BgDesc = $_POST['BgDesc'];
   $FiftyFlow = $_POST['FiftyFlow'];
   $HundredFlow = $_POST['HundredFlow'];
   $OccType = $_POST['OccType'];
   $CombCon = implode ( ", ", $_POST['CombCon']);
   $ConType = $_POST['ConType'];
   $lhHazard = $_POST['lhHazard'];
   $imInfo = $_POST['imInfo'];
   $sprinklers = $_POST['sprinklers'];
   $fdConLoc = $_POST['fdConLoc'];
   $fdPumpLoc = $_POST['fdPumpLoc'];
   $fdPumpControl = $_POST['fdPumpControl'];
   $fireAlarmComp = $_POST['fireAlarmComp'];
   $fireAlarmPanelLoc = $_POST['fireAlarmPanelLoc'];
   $fireDoorRating = $_POST['fireDoorRating'];
   $fireDoorVoids = $_POST['fireDoorVoids'];
   $fireWallRate = $_POST['fireWallRate'];
   $fireWallVoids = $_POST['fireWallVoids'];
   $utilRmLoc = $_POST['utilRmLoc'];
   $elecSize = $_POST['elecSize'];
   $meterLoc = $_POST['meterLoc'];
   $brkLoc = $_POST['brkLoc'];
   $fuelTyp = $_POST['fuelTyp'];
   $fuelSO = $_POST['fuelSO'];
   $waterSrcLoc = $_POST['waterSrcLoc'];
   $waterSrcDist = $_POST['waterSrcDist'];
   $waterSrcTyp = $_POST['waterSrcTyp'];
   $waterSrcReqs = $_POST['waterSrcReqs'];
   $knoxBoxLoc = $_POST['knoxBoxLoc'];
   $lzLat = $_POST['lzLat'];
   $lzLon = $_POST['lzLon'];
   $limitations = $_POST['limitations'];
   $roofAccessPoint = $_POST['roofAccessPoint'];
   $atticArea = $_POST['atticArea'];
   $priContactName = $_POST['priContactName'];
   $priContactTitle = $_POST['priContactTitle'];
   $priContactBusPh = $_POST['priContactBusPh'];
   $priContactHomePh = $_POST['priContactHomePh'];
   $priContactCell = $_POST['priContactCell'];
   $priContactFax = $_POST['priContactFax'];
   $priContactEmail = $_POST['priContactEmail'];
   $secContactName = $_POST['secContactName'];
   $secContactTitle = $_POST['secContactTitle'];
   $secContactBusPh = $_POST['secContactBusPh'];
   $secContactHomePh = $_POST['secContactHomePh'];
   $secContactCell = $_POST['secContactCell'];
   $secContactFax = $_POST['secContactFax'];
   $secContactEmail = $_POST['secContactEmail'];
   $prepOfficer = $_POST['prepOfficer'];
   $prepFFOne = $_POST['prepFFOne'];
   $prepFFTwo = $_POST['prepFFTwo'];
   $prepFFThree = $_POST['prepFFThree'];
   $prepFFFour = $_POST['prepFFFour'];
   $prepDate = $_POST['prepDate'];
   $hydrantIDone = $_POST['hydrantIDone'];
   $hydrantLocone = $_POST['hydrantLocone'];
   $hydrantDistone = $_POST['hydrantDistone']; 
   $hydrantOneDistOpt = $_POST['hydrantOneDistOpt'];
   $hydrantDistoneWopt = $hydrantDistone . " " . $hydrantOneDistOpt;
   $hydrantGPMone = $_POST['hydrantGPMone'];
   $hydrantIDtwo = $_POST['hydrantIDtwo'];
   $hydrantLoctwo = $_POST['hydrantLoctwo'];
   $hydrantDisttwo = $_POST['hydrantDisttwo']; 
   $hydrantTwoDistOpt = $_POST['hydrantTwoDistOpt'];
   $hydrantDisttwoWopt = $hydrantDisttwo . " " . $hydrantTwoDistOpt; 
   $hydrantGPMtwo = $_POST['hydrantGPMtwo'];
   $hydrantIDthree = $_POST['hydrantIDthree'];
   $hydrantLocthree = $_POST['hydrantLocthree'];
   $hydrantDistthree = $_POST['hydrantDistthree']; 
   $hydrantThreeDistOpt = $_POST['hydrantThreeDistOpt'];
   $hydrantDisttheeWopt = $hydrantDistthree . " " . $hydrantThreeDistOpt;
   $hydrantGPMthree = $_POST['hydrantGPMthree'];
   $hydrantIDfour = $_POST['hydrantIDfour'];
   $hydrantLofour = $_POST['hydrantLocfour'];
   $hydrantDistfour = $_POST['hydrantDistfour']; 
   $hydrantFourDistOpt = $_POST['hydrantFourDistOpt'];
   $hydrantDistfourWopt = $hydrantDistfour . " " . $hydrantFourDistOpt;
   $hydrantGPMfour = $_POST['hydrantGPMfour'];
   $hydrantIDfive = $_POST['hydrantIDfive'];
   $hydrantLocfive = $_POST['hydrantLocfive'];
   $hydrantDistfive = $_POST['hydrantDistfive']; 
   $hydrantFiveDistOpt = $_POST['hydrantFiveDistOpt'];
   $hydrantDistfiveWopt = $hydrantDistfive . " " . $hydrantFiveDistOpt;
   $hydrantGPMfive = $_POST['hydrantGPMfive'];
   $sprinkType = $_POST['sprinkType'];
   $fdConnect = $_POST['fdConnect'];
   $firePump = $_POST['firePump'];
   $fdAccess = $_POST['fdAccess'];
   $fireAlarm = $_POST['fireAlarm'];
   $smokeDetect = $_POST['smokeDetect'];
   $heatDetect = $_POST['heatDetect'];
   $pullBox = $_POST['pullBox'];
   $waterFlow = $_POST['waterFlow'];
   $tamperSwitch = $_POST['tamperSwitch'];
   $fireDoors = $_POST['fireDoors'];
   $autoClose = $_POST['autoClose'];
   $doorProp = $_POST['doorProp'];
   $fireWall = $_POST['fireWall'];
   $backupGen = $_POST['backupGen'];
   $knoxBox = $_POST['knoxBox'];
   $access = $_POST['access'];
   $storage = $_POST['storage'];
   $atticAccess = $_POST['atticAccess'];
   $atticFirestop = $_POST['atticFirestop'];

?>