<?php 
function activeNavLink($page,$url) {
  if (strpos($page, $url) !== false) {
    echo 'active text-uppercase';
  } else {
    echo '';
  }
}


if(strpos($index_page, $current_url) !== FALSE || strpos($index_page . 'index.php', $current_url) !== FALSE):
  $title = $index_name;
  elseif (strpos($films_page, $current_url) !== FALSE):
    $title = $films_name;
  elseif (strpos($contact_page, $current_url) !== FALSE):
    $title = $contact_name;      
endif;
?>