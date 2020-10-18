<?php 
$skill_logos = skill_logo();
foreach ($skill_logos as $logo) {
   echo '
            <li>
                <a href="#">
                    <img width="50" height="50" src="'. $logo['img_url'] .'" alt="'. $logo['title'] .'">
                </a>
            </li>
   ';
}