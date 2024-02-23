<?php
$errors = [
    'name'=>'',
    'email'=>'',
    'number'=>''

];
$old = [
    'name'=> '',
    'email'=> '',
    'number'=> ''
];

if(!empty ($_POST)){
    foreach ($_POST as $key=>$value){
        if(empty ($value)){
            $errors[$key]= "This field is required";
        }else{
            $old[$key]=$value;
        }
    }
}
?>

<?php
require_once "header.php";
?>

<section class="my-4">
    <div class="py-4">
        <h2 class="text-center">Contact</h2>
    </div>

    <div class="w-50 m-auto">
        <form action="" method="post">
            <div class="form-group">
                <label>Name:<a style="color:red"><?=$errors['name'];?></a></label>
                <input type="text" value="<?=$old['name']?>" name="name" class="form-control">
            </div>
            <div class="form-group">
                <label>Email Address:<a style="color:red"><?=$errors['email'];?></a></label>
                <input type="email" value="<?=$old['email']?>" name="email" class="form-control">
            </div>
            <div class="form-group">
                <label>Phone Number:<a style="color:red"><?=$errors['number'];?></a></label>
                <input type="text" value="<?=$old['number']?>" name="number" class="form-control">
            </div>
            <button type="submit" class="btn btn-success">Submit</button>
        </form>
    </div>
</section>

<?php 
require_once "footer.php";
?>