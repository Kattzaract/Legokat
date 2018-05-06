<?php
   function main_nav($dbc, $page){
       $query = "SELECT * FROM pages";
       $result = mysqli_query($dbc, $query);

        while ($nav = mysqli_fetch_assoc($result))
        {
        //echo '<li><a href="?page='.$nav['page_id'].'">'.$nav['page_title'].'</a></li>';
        ?>
        <li <?php if($page['page_id'] == $nav['page_id']){ echo 'class="active"';}?>><a href="?page=<?php echo $nav['page_id']?>"><?php echo $nav['page_title']?></a></li>
            <?php
        }
    }
?>