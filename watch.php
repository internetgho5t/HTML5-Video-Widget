<script type="text/javascript" src="//code.jquery.com/jquery-latest.js"></script>
<link rel="stylesheet" href="style/typicons.min.css">
<link rel="stylesheet" href="style/style.css">

<?php
require("data.php");
?>
<div id="sharemodal">

<a href="javascript:;" onclick="shareClose();">&times;</a>

</div>

<div id="refresh" style="display: none;" onclick="refresh();"><span class="typcn typcn-refresh"></span></div>

<div id="error" style="display: none;">That video doesn't exist. Sorry about that.<br/>I still hope you have a great day.</div>

<div id="bigplay" onclick="hidePlay();"></div>

<div id="maincont">

<?php
if($_GET['info'] !== "0") {
?>

<div class="vinfo" id="info">

<div><?php echo $videoTitle; ?></div>

<!--You can add several buttons-->
<!--<div id="infobtn"><a href="javascript:;" onclick="">Share</a></div>-->

</div>

<?php
}
?>

<div class="load small" id="load"></div>

<div class="vcontainer">

<video src="<?php echo $videoURL; ?>" id="video" type="video/mp4"></video>

</div>

<div id="controls">
<table><tr>

<td style="width: 50px;">
<button type="button" id="playpause"><span class="typcn typcn-media-play"></span></button>
</td>

<td class="time" id="current">0:00</td>

<td style="vertical-align: middle;width: 900px;">
<div class="wrap"><input type="range" id="seekbar" value="0"></div>
</td>

<td class="time" id="duration">0:00</td>

<td style="width: 30px;">
<button type="button" id="mute" tooltip="Mute"><span class="typcn typcn-volume-up"></span></button>
</td>

<td style="vertical-align: middle;width: 250px;">
<div class="wrap"><input type="range" id="volumebar" min="0" max="1" step="0.1" value="1"></div>
</td>

<td style="width: 50px;">
<button type="button" id="fullscreen" tooltip="Go Fullscreen"><span class="typcn typcn-arrow-maximise"></span></button>
</td>

</tr></table>
</div>

<script type="text/javascript" src="player.js"></script>
