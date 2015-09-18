<?php
/**
 * Created by PhpStorm.
 * User: artem
 * Date: 19.09.15
 * Time: 0:18
 */

/* @var $this yii\web\View */
/* @var $searchModel backend\models\PurchesesSearh */

namespace frontend\views;

use frontend\controllers\PurchesesController ;
?>
<?php foreach ($models as $purches): ?>
<div class="container-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-md-12 products">
                <h2><?= $purches->title_ru ?>Б/У Балоны (кислород, пропан)</h2>
                <figure class="products-description">
                    <figcaption>
                        <img src="../images/generator.png" alt="гинератор">
                        <p>Наша компания «ЭмилВторМет» занимается скупкой различного металлического лома, находящегося
                            в любом состоянии. В том числе мы приобретаем у физических и юридических лиц баллоны из-под
                            газа-пропана или кислорода. Количество вторичного сырья, которое вы хотите нам продать, не
                            имеет значения, наша компания берётся за любые заказы. Ваше дело – предоставить баллоны,
                            наше – организовать правильную переработку и утилизацию возникающих отходов.</p>

                        <p>Почему баллоны могут представлять ценность для дальнейшей переработки? Металлы, из которых
                            они делаются, достаточно востребованы на металлургическом рынке. </p>

                        <p>Чем грозит для вас длительное хранение подобного неликвидного оборудования? К сожалению,
                            нередки несчастные случаи, связанные с разрывами некачественных баллонов. Лучше доверьте
                            их дальнейшую судьбу нам.</p>
                    </figcaption>
                </figure>
            </div>
        </div>
    </div>
</div>
<?php endforeach; ?>