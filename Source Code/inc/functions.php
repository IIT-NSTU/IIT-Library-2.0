<?php
    function outputMessage($boldMessage='', $message='',$type='success'):void {
        echo "<div class='alert alert-{$type} alert-dismissible show'>
                   <strong>$boldMessage</strong> $message
                   <button type='button' class='btn-close' data-bs-dismiss='alert'></button>
              </div>";
    }

    function file_upload($file, $name, $isbn, $folder) {
        $file_name = $file[$name]['name'];
        $image_array = explode('.', $file_name);
        $new_image_name = $isbn.'.'.$image_array[1];
        $upload_path = 'assets/'.$folder.'/'.$new_image_name;
        move_uploaded_file($file[$name]['tmp_name'], $upload_path);
        return $new_image_name;
    }

    function sendMail($receiver, $subject, $body) {
        $sender = "From:prosantodeb7@gmail.com";
        if (mail($receiver, $subject, $body, $sender)) {
            outputMessage("Confirmation Mail Sent Successfully", "", "success");
        } else {
            outputMessage("Error Occurred In The Mailing Process", "", "danger");
        }

    }
