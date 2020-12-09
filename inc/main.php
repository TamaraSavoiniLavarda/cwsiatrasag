<?php
function getAllNovedades($query,$columna){
	if ($query->have_posts()):
		while($query->have_posts()): $query->the_post();
			$postid = get_the_ID();
			$image = get_the_post_thumbnail_url($postid,'img_novedades');
			$title = get_the_title();
			$permalink = get_the_permalink();
	?>
	<div class="col-lg-<?=$columna?>">
    <div class="cabure-novedades-card text-center">
      <div class="cabure-novedades-card-img">
        <img src="<?=$image?>" alt="imagen destacada" />
      </div>
      <div class="cabure-novedades-card-contenido">
        <h4><?=$title;?></h4>
      </div>
      <div class="cabure-novedades-card-verMas mt-3">
        <h5><a href="<?=$permalink?>">Ver más</a></h5>
      </div>
    </div>
  </div>
<?php endwhile; else: ?>
 <div class="col-lg-<?=$columna?> mx-auto"><div class="alert alert-info text-center">No hay novedades</div></div>
<?php
	endif;
}



function getHomeNovedades($query,$columna){
	if ($query->have_posts()):
		while($query->have_posts()): $query->the_post();
			$postid = get_the_ID();
			$image = get_the_post_thumbnail_url($postid,'img_novedades');
			$title = get_the_title();
			$permalink = get_the_permalink();
	?>
	<div class="col-lg-<?=$columna?>">
    <div class=" text-center">
      <div class="cabure-novedades-card-img">
        <img src="<?=$image?>" alt="imagen destacada" />
      </div>
      <div class="">
        <h4><?=$title;?></h4>
      </div>
      <div class="cabure-novedades-card-verMas mt-3">
        <h5><a href="<?=$permalink?>">Ver más</a></h5>
      </div>
    </div>
  </div>
<?php endwhile; else: ?>
 <div class="col-lg-<?=$columna?> mx-auto"><div class="alert alert-info text-center">No hay novedades</div></div>
<?php
	endif;
}




?>



