<?php 
    $waveCount = block_value('number-of-waves');
    $waveFill = block_value('colors');
    $opacity = ['F2','B3','80', 'DE', '61', '1F'];
?>

<div class="waves-container">
    <div class="waves-body">
        <svg class="waves" xmlns="http://www.w3.org/2000/svg" viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
            <defs>
                <path id="gentle-wave" 
                d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
            </defs>
            <g class="parallax"> 
                <?php 
                    for ( $i = 0;  $i < $waveCount; $i++) :
                        echo '<use href="#gentle-wave" x="' . (48) .'" y="' . (10-$i) .'" fill="' . $waveFill . $opacity[$i] .'" />';
                    endfor;  
                ?>
            </g>
        </svg>
    </div>
</div>

<?php 
    /* 
    if we want the user to display a title above the waves
        $title = block_value('title');

        <div class="wave-header">
            <div class="inner-header flex">
                <h1 class="align-center"><?= $title; ?></h1>
            </div>
        </div>

    code to do multiple colors if user wants to select multiple.
        $wave1 = str_replace(",","",$waveRaw);
        $wave = str_replace(" ","",$wave1);

        fill="substr($wave,($i*7),7)"
        
    if we wanted the user to select both height and where the dip of the wave begins
        $xCoordinate = block_value('x-coordinate');
        $yCoordinate = block_value('y-coordinate');
            
    */ 
?>