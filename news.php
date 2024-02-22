<?php
$newsdata =[
    ['title'=> 'sport','description'=> 'this is sport game'],
    ['title'=> 'hotnews','description'=> 'this is sport breakingnews'],
    ['title'=> 'political','description'=> 'this is sport political news'],
    ['title'=> 'economy','description'=> 'this is sport economical news'],
    ['title'=> 'investment','description'=> 'this is sport share market news'],
];
?>

<!DOCTYPE html>
<html>

<head>
    <title>Dynamic Title Box News Page</title>
    <style>
    .box {
        width: 200px;
        height: 200px;
        padding: 20px;
        margin: 20px;
        background: gray;
        float: left;
    }
    </style>
</head>

<body>
    <h1>News List</h1>
    <?php foreach ($newsdata as $news) { ?>
    <div class="box">
        <h2><?php echo $news['title']; ?></h2>
        <p><?php echo $news['description']; ?></p>
    </div>
    <?php } ?>
</body>

</html>