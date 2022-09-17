<?php
    function outputMessage($boldMessage='', $message='',$type='success'):void {
        echo "<div class='alert alert-{$type} alert-dismissible show'>
                   <strong>$boldMessage</strong> $message
                   <button type='button' class='btn-close' data-bs-dismiss='alert'></button>
              </div>";
    }
