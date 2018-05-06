<!--version 1-->
<li <?php if($page_id['page_id'] == 1){ echo 'class="active"';}?>><a href="?page=1">HOME</a></li>
<li <?php if($page_id['page_id'] == 2){ echo 'class="active"';}?>><a href="?page=2">WORK</a></li>
<li <?php if($page_id['page_id'] == 3){ echo 'class="active"';}?>><a href="?page=3">CONTACT ME</a></li>
<li <?php if($page_id['page_id'] == 4){ echo 'class="active"';}?>><a href="?page=4">ABOUT ME</a></li>

<!--version 2-->
<?php echo '<li><a href="?page=' . $nav['page_id'] . '">' . $nav['page_label'] . '</a></li>'; ?>
echo '<li><a href="?page=' . $nav['page_id'] . '">' . $nav['page_label'] . '</a></li>';

<!--version 3-->
<li <?php if($page_id['page_id'] == $nav['page_id']){ echo 'class="active"';}?>><a href="?page=<?php echo $nav['page_label']?>"><?php echo $nav['page_title']?></a></li>
