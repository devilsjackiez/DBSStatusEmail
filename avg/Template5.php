<?php

include "../Template5Cal.php";

?>
<div class="container-fluid col-md-offset-1">
    <div class="row">
        <div class="col-md-2">
            <p style="font-weight: 600;font-size: 40px;padding-top: 65px" align="center">Template 5:</p>
        </div>
        <div class="col-md-2">
            <div class="panel">
                <div class="panel_header" align="center">Unread</div>
                <br>
                <div class="panel_content" align="center"
                     style="font-size: 60px"><?php echo round(($Unread / $Total) * 100); ?><span
                        style="font-size: 30px;"> %</span></div>
            </div>
        </div>
        <div class="col-md-2">
            <div class="panel">
                <div class="panel_header" align="center">Open</div>
                <br>
                <div class="panel_content" align="center"
                     style="font-size: 60px"><?php echo round(($Read / $Total) * 100); ?><span style="font-size: 30px;"> %</span>
                </div>
            </div>
        </div>
        <div class="col-md-2">
            <div class="panel">
                <div class="panel_header" align="center">Replied</div>
                <div class="panel_content" align="center" style="font-size: 60px"><span
                        style="font-weight: 800;font-size: 70px;"><?php echo round(($Replied / $Total) * 100) . "</span>"; ?>
                        <span style="font-size: 30px;"> %</span>
                </div>
            </div>
        </div>
        <div class="col-md-2">
            <div class="panel">
                <div class="panel_header" align="center">Total</div>
                <div class="panel_content"
                     align="center" style="font-size: 60px"><span
                        style="font-weight: 800;font-size: 70px;"><?php echo round(($Total / $Total) * 100) . "</span>"; ?>
                        <span style="font-size: 30px;"> %</span>
                </div>
            </div>
        </div>
    </div>
</div>