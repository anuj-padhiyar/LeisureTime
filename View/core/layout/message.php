<div id="messageHtml">

<?php 
    $message = $this->getMessage();
    if($success = $message->getSuccess()){  
        echo '<script type="text/javascript">alert("'.$success.'");</script>';
        $message->clearSuccess();
    }
    if($failure = $message->getFailure()){
        echo '<script type="text/javascript">alert("'.$failure.'");</script>';
        $message->clearFailure();
    }
?>

</div>