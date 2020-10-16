<?php 
$project_contents = project_contents();
foreach ($project_contents as $contents) {
   echo '
          <div class="col-lg-4 col-md-6 col-sm-12 text-center element-item mix '. $contents['mixer'] .'">
                  <div class="our-project">
                      <div class="img">
                          <a class="test-popup-link">
                              <div class="img-box d-inline-block position-relative">
                                  <img href="'. $contents['img_url'] .'" src="'. $contents['img_url'] .'" alt="'. $contents['title'] .'" class="img-fluid">
                                  <ul class="project_hover d-flex justify-content-center align-items-center">
                                      <li><a href="#" aria-label="open-modal" data-modal="open-modal" class="btn d-flex justify-content-center align-items-center mx-2 link"><i class="fas fa-info"></i></a></li>
                                      <li><a target="blank" href="'. $contents['project_url'] .'" class="d-flex justify-content-center align-items-center mx-2 link"><i class="fas fa-external-link-alt"></i></a></li>
                                  </ul>
                              </div>
                          </a>
                      </div>
                      <div class="modal" role="dialog" aria-hidden="true" data-modal>
                          <div class="modal-content">
                              <div class="modal-header">
                                  <button role="button" class="icon-close" aria-label="close-modal" data-modal="close-modal"><i class="fas fa-cut"></i></button>
                                  <div class="modal_title d-flex justify-content-start flex-column align-items-start">
                                      <h2 class="modal-title">'. $contents['title'] .'</h2>
                                      <span>'. $contents['creation_date'] .'</span>
                                  </div>
                              </div>
                              <div class="modal-body">
                                  <p>'. $contents['project_details'] .'
                                      <a target="blank" href="'. $contents['project_url'] .'">Visit Site</a></p>
                                  <div class="project_tag">
                                     '. project_tags($contents['project_tags']) .'
                                  </div>
                              </div>
                              <div class="modal-footer">
                                  <button role="button" class="btn-close" aria-label="close-modal" data-modal="close-modal">Close</button>
                              </div>
                          </div>
                      </div>
                      <div class="title py-4">
                          <h4 class="text-uppercase">'. project_title($contents['title'], $contents['split_title']) .'</h4>
                      </div>
                  </div>
            </div>
   ';
}
function project_tags($tags){
    $span_tags = '';
    foreach ($tags as $tag) {
        $span_tags .= '<span>'. $tag .'</span>';
    }
    return $span_tags;
}
function project_title($title, $break_title){
    if($break_title){
        $titles = explode(" ", $title,);
        return '
        <h4 class="text-uppercase mb-3">'. $titles[0] .'</h4>
        <h4 class="text-uppercase">'. $titles[1] .'</h4>
        ';
    }else{
        return '<h4 class="text-uppercase">'. $title .'</h4>';
    }
}