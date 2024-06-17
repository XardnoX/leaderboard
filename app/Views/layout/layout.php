<html>
    <head> 
        <title><?= $title; ?></title>
        <?= $this->include("layout/assets");?> 
 </head> 
 <body class="bg">        
    <?= $this->include("layout/navbar");?>
    
    <div class="container-fluid">
        <?= $this->renderSection("content"); ?> 
    </div>
</body>
</html>