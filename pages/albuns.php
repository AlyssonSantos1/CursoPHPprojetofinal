<h1>Album</h1>

<div class="row">
    <?php
        $albuns = getalbuns();
        // var_dump($albuns);

        // for ($i = 0; $i < 10; $i++)
            foreach($albuns as $album):
                $infoalbum = explode('/', $album);
                $namealbum = $infoalbum[1];
                // $imgalbum = $album . '' . $namealbum . '.jpg';
                $imgalbum = "{$album}/{$namealbum}.jpeg";
    ?>    
    <div class="col-3">
        <a href="">
            <img src="<?=$imgalbum?>" alt="<?=$namealbum?>" class="img-album">
            <h4> <?=$namealbum?> </h4>
        </a>
        
    </div> 
    <?php
            endforeach
    ?>
</div>