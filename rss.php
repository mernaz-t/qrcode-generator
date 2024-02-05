<ul>
    <?php
include_once(ABSPATH . WPINC . '/rss.php');
$rss = fetch_rss('https://www.mechanicwp.ir/feed');
$maxitems = 10; 
$items = array_slice($rss->items, 0, $maxitems);
?>
        <ul>
            <?php if (empty($items)) echo '<li>مطلبی وجود ندارد</li>';
else
foreach ( $items as $item ) : ?>
            <li>
                <a href='<?php echo $item[' link ']; ?>' title='<?php echo $item[' title ']; ?>'>
                    <?php echo $item['title']; ?>
                </a>
            </li>
            <?php endforeach; ?>

        </ul>