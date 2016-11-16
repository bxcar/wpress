<?php
/*function connect_db()
{*/
$db = mysqli_connect('localhost', 'root', 'root', 'data_base_mk');
if (!$db) {
    exit('Error' . mysqli_error($db));
}
mysqli_query($db,"SET NAMES utf8mb4");
//    return $db;
/*}*/

function get_goods($db, $id = false)
{
//    $sql = "SELECT id from wp_posts";
    $sql = "SELECT p.post_title FROM wp_posts p, wp_terms t, wp_term_taxonomy tx, wp_term_relationships r
WHERE t.term_id=tx.term_id 
AND tx.taxonomy='post_tag' 
AND tx.term_taxonomy_id=r.term_taxonomy_id 
AND r.object_id=p.id";

    if ($id) {
        if ($id == 'price_sorta') {
            $sql .= " ORDER BY t.name ASC";
//            $sql .= " ORDER BY p.post_title ASC";
        } else if ($id == 'price_sortb') {
            $sql .= " ORDER BY t.name DESC";
//            $sql .= " ORDER BY p.post_title DESC";
        }
    }
    $goods = array();
    $result = mysqli_query($db, $sql) or die(mysqli_error($db));
    for ($i = 0; $i < mysqli_num_rows($result); $i++) {
        $goods[] = mysqli_fetch_assoc($result);
    }
    return $goods;
}

if ($_GET['sort_id']) {
    $id = strip_tags($_GET['sort_id']);
    $goods = get_goods($db, $id);
//    exit(json_encode($goods));
    foreach($goods as $item) {
        foreach($item as $value)
        {
            printf("
<article id=\"post-%s\" %s>
    <p>klk</p>
        ",$a=4, $b=9);
//            printf("<p>hello %s var</p>", "$a = 4");
        }
    }
    exit;
} else {
    $goods = get_goods($db);
}