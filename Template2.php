<?php

include "Template2Cal.php";

?>
<div class="container-fluid col-md-offset-1">
    <div class="row">
        <div class="col-md-2">
            <p style="font-weight: 600;font-size: 40px;padding-top: 65px" align="center">Template 2:</p>
        </div>
        <div class="col-md-2">
            <div class="panel">
                <div class="panel_header" align="center">Unread</div>
                <div class="panel_content" align="center"><?php echo $Unread2; ?></div>
            </div>
        </div>
        <div class="col-md-2">
            <div class="panel">
                <div class="panel_header" align="center">Open</div>
                <div class="panel_content" align="center"><?php echo $Read2; ?></div>
            </div>
        </div>
        <div class="col-md-2">
            <div class="panel">
                <div class="panel_header" align="center">Replied</div>
                <div class="panel_content" align="center"><?php echo $Replied2; ?></div>
            </div>
        </div>
        <div class="col-md-2">
            <div class="panel">
                <div class="panel_header" align="center">Total</div>
                <div class="panel_content"
                     align="center"><?php echo $Total2; ?></div>
            </div>
        </div>
    </div>
</div>