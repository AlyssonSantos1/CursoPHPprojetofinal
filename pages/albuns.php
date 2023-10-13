<h1>Album</h1>

<div class="row">
    <?php
        $albuns = getalbuns();
        var_dump($albuns);

        for ($i = 0; $i < 10; $i++)
    ?>    
    <div class="col-3">
        <a href="">
            <img src="albuns/seila.jpeg" alt="<?=$i?>" class="img-album">
            <h4>Album <?=$i?> </h4>
        </a>
        
    </div>    
</div>