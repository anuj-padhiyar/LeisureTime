<?php 
    require_once "menu.php";
    $hobbies = $this->getHobbies();
    $userHobby = $this->getUser()->getUserHobby(); 
    $hobbyIds = [];
    if($userHobby){
        foreach($userHobby->getData() as $key=>$hobby){
            $hobbyIds[] = $hobby->hobbyId;
        }
    }
?>

<form action="<?php echo $this->getUrl()->getUrl('saveHobby'); ?>" method="POST" id="hobbyselect">
    Select Hobbies:<br>
    <?php if($hobbies): ?>
        <?php foreach($hobbies->getData() as $key=>$hobby): ?>
            <input type="checkbox" name="hobby[<?php echo $hobby->hobbyId; ?>]" <?php if(in_array($hobby->hobbyId,$hobbyIds)){echo "checked";} ?>>
            <?php echo $hobby->hobbyName; ?>
        <?php endforeach; ?>
    <?php endif; ?><br>
</form>
<button onclick="leisure.setForm('hobbyselect').load();" class="site-btn">SAVE</button>