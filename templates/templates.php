<?php
require_once 'functions.php';
require_once 'data.php';
?>
<li class="lots__item lot">
        <div class="lot__image">
          <img src="<?php print($product['img_url']);?>" width="350" height="260" alt="Сноуборд">
        </div>
        <div class="lot__info">
          <span class="lot__category"><?php print($product['category']);?></span>
          <h3 class="lot__title"><a class="text-link" href="lot.html"><?php print($product['title']);?></a></h3>
          <div class="lot__state">
            <div class="lot__rate">
              <span class="lot__amount">Стартовая цена</span>
              <span class="lot__cost"><?php print(showPrice($product['category']));?><b class="rub">р</b></span>
            </div>
            <div class="lot__timer timer">
              16:54:12
            </div>
          </div>
        </div>
      </li>
