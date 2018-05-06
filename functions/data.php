<?php
    //page data page
    function data_page($dbc, $id){
        $query = "SELECT * FROM pages WHERE page_id = $id";
        $result = mysqli_query($dbc, $query);
        $data = mysqli_fetch_assoc($result);

        $data['body_no_html'] = strip_tags($data['page_body']);
        if($data['page_body'] == $data['body_no_html']){
            $data['data_formatted'] = '<p>' . $data['page_body'] . '</p>';
        }else{
            $data['data_formatted'] = $data['page_body'];
        }
        return $data;
    }
?>