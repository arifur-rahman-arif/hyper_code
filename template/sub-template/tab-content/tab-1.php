<?php 
$skill_logos = skill_logo();
foreach ($skill_logos as $logo) {
   echo '
            <div class="col-lg-3 col-md-4 text-center mt-4 mb-4 pt-3 pb-3 skill-boxes">
                    <img src="'. $logo['img_url'] .'" alt="'. $logo['title'] .'" width="'. $logo['img_x'] .'" height="'. $logo['img_y'] .'">
                    <div class="skill_info">
                        <div class="percentage">
                            <h6>'. $logo['title'] .' :</h6>
                            <div class="progress">
                                <div class="progress-bar progress-bar-striped" role="progressbar" style="width: '. $logo['percentage'] .'%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">'. $logo['percentage'] .'%</div>
                            </div>
                        </div>
                    </div>
            </div>
   ';
}