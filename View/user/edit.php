<?php require_once "menu.php"; ?>
<?php $user = $this->getUser(); ?>

<h4>Edit Details</h4>
<form action="<?php echo $this->getUrl()->getUrl('resave'); ?>" method="POST" id="editForm" enctype="multipart/form-data">
    First Name <input type="text" name="user[firstName]" value="<?php echo $user->firstName; ?>" required><br>
    Last Name <input type="text" name="user[lastName]" value="<?php echo $user->lastName; ?>" required><br>
    Change Password <input type="password" name="user[password]" required><br>
    Confirm Password <input type="password" name="user[cnfPassword]" required><br>
    Town/City <input type="text" name="user[city]" value="<?php echo $user->city; ?>" required><br>
    Description <textarea name="user[description]" required><?php echo $user->description; ?>"</textarea><br>
    Image <input id="imageUpload" type="file" name="profilePicture" placeholder="Photo" capture required><br>
    Email <input type="email" name="user[email]" value="<?php echo $user->emailId; ?>" required readonly><br>
    <button type="button" onclick="leisure.setImageForm('editForm','imageUpload');" class="site-btn" >Save</button>
</form>