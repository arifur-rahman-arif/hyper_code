<?php 
$skill_logos = skill_logo();
foreach ($skill_logos as $logo) {
   echo '
          <div class="ball_container">
                    <img src="'. $logo['img_url'] .'" alt="'. $logo['title'] .'">
          </div>
   ';
}