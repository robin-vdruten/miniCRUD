<?php
echo '<form action="menu.php" id="search-form" method="GET">
        <div class="input-show">
        <input
        type="search"
        placeholder="Search items in menu.."
        name="search"
        id="search-box"
      />
      <div id="show-up"></div>
      </div>
      <label for="search-box" class="fas fa-search"></label>
      <i class="fas fa-times" id="close"></i>
    </form>
';
?>
