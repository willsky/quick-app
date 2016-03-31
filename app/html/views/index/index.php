<html>
<head><title>Quick Framework Demo</title></head>  
<body>
    <div>
        <div>名字列表</div>
        <div>
            <ul>
                <?php foreach($users as $user) { ?>
                <li><?php echo $user['name']; ?></li>
                <?php } ?>
            </ul>
        </div>
    </div>
</body>  
</html>