<?php 
                        #===================CACHE BLOCKER============================#
    /* You may have a config file where you'll set whether an update is up or not, thi is to ensure the users load the files only just after the update
    since browsers clear their cache after a while */
  $config['new_version'] = true; // setting whether there is a new version.
 
  if($config['new_version']){
    $time = time();
  }else{
    $time = "";
  }
  
  /*after setting the time value you pass it as a $_GET field when sending the $_GET request for the file.*/
  
                        #-----------------------------------------------------------#
  $uri = "/js/js_file.s?".$time;
  
  echo  '<script type="text/javascript" src="'.$uri.'"></script>';
  
?>
