<?php
// Add Cowsay to Container
$container->set(\Cowsayphp\AnimalInterface::class, function() {
    return \Cowsayphp\Farm::create(\Cowsayphp\Farm\Cow::class);
  });
  
header("Location: web_user/login_user.php");