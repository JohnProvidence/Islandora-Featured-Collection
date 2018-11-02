<?php

/**
* Available variables
* $items['obj_pid'] = Random Obj PID
* $items['obj_label'] = Random Obj Label
* $items['parent_label'] = Random Obj Parent Collection Name
* $items['view_url'] = Random Obj OBJ datastream URL
*/


$items = $variables['items'][0];

?>
<div class="pld_featured_objects__rand_obj__wrapper" style="background-image:url('<?php print $items['view_url']; ?>');">
	<div class="rand-obj__overlay">
		<div class="rand-obj__info">
			<h3><?php print $items['obj_label']; ?></h3>
			<div class="rand-obj__data"> 
				<span class="parent_collection">In collection: <a href="<?php print $items['parent_url']; ?>"><?php print $items['parent_label']; ?></a></span>
			</div>
			<div class="view_obj btn">
				<a href="<?php print $items['obj_url']; ?>">View This Item <i class="fas fa-angle-right"></i></a>
			</div>
		</div>
		<div class="view-all-collections">
			View All Collections
			<div class="dwn-caret">
				<i class="fas fa-caret-down" aria-hidden="true"></i>
			</div>
		</div>
	</div>

	
</div>