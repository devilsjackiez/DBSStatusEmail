<?php

include "Template5Cal.php";

?>
<div class="container-fluid col-md-offset-1">
    <div class="row">
        <div class="col-md-2">
            <p style="font-weight: 600;font-size: 40px;padding-top: 65px" align="center">Template 5:</p>
        </div>
        <div class="col-md-2">
            <div class="panel">
                <div class="panel_header" align="center">Unread</div>
                <div class="panel_content" align="center"><?php echo $Unread5; ?></div>
            </div>
        </div>
        <div class="col-md-2">
            <div class="panel">
                <div class="panel_header" align="center">Open</div>
                <div class="panel_content" align="center"><?php echo $Read5; ?></div>
            </div>
        </div>
        <div class="col-md-2">
            <div class="panel">
                <div class="panel_header" align="center">Replied</div>
                <div class="panel_content" align="center"><?php echo $Replied5; ?></div>
            </div>
        </div>
        <div class="col-md-2">
            <div class="panel">
                <div class="panel_header" align="center">Total</div>
                <div class="panel_content"
                     align="center"><?php echo $Total5; ?></div>
            </div>
        </div>
    </div>
</div>