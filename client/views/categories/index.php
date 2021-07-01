<?php
echo '<ul>';
foreach ($categories as $cat) {
  echo '<li>
    <a href="index.php?controller=categories&action=showCat&id=' . $cat->id . '">' . $cat->catName . '</a>
  </li>';
}
echo '</ul>';
?>