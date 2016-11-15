<?php
/*function connect_db()
{*/
$db = mysqli_connect('localhost', 'root', 'root', 'data_base_mk');
if (!$db) {
    exit('Error' . mysqli_error($db));
}
//    return $db;
/*}*/

function get_goods($db, $id = false)
{
//    $sql = "SELECT post_title from wp_posts";
    $sql = "SELECT p.post_title FROM wp_posts p, wp_terms t, wp_term_taxonomy tx, wp_term_relationships r
WHERE t.term_id=tx.term_id 
AND tx.taxonomy='post_tag' 
AND tx.term_taxonomy_id=r.term_taxonomy_id 
AND r.object_id=p .id";

    if ($id) {
        if ($id == 'price_sorta') {
            $sql .= " ORDER BY wp_terms.name ASC";
        } else if ($id == 'price_sortb') {
            $sql .= " ORDER BY wp_terms.name DESC";
        }
    }
    $result = mysqli_query($db, $sql);
    for ($i = 0; $i < mysqli_num_rows($result); $i++) {
        $goods[] = mysqli_fetch_array($result);
    }
}

if ($_GET['sort_id']) {
    $id = strip_tags($_GET['sort_id']);
    $goods = get_goods($db, $id);
    foreach($goods as $item) {
        printf('<p>hello</p>');
    }
    exit;
} else {
    $goods = get_goods($db);
}