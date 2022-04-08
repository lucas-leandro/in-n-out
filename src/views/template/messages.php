<?php
$errors = [];

if($exception){
    $message = [
        'type' => 'error',
        'message' => $exception->getMessage()
    ];
    if(get_class($exception) == 'ValidationException'){
        $errors = $exception->getErrors();
    }
}

$alertType = '';

if($message['type'] === 'error'){
    $alertType = 'danger';
}else{
    $alertType = 'sucess';
}
?>
<?php if($message){?>
    <div class="my-3 m alert alert-<?=$alertType?>"
    role="alert">
        <?=$message['message']?>
    </div>
<?}?>

