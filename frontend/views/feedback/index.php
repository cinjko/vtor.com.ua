<?php
/**
 * Created by PhpStorm.
 * User: artem
 * Date: 22.09.15
 * Time: 0:43
 */

$this->registerCssFile('/public/css/common.css');
?>

<!--Begin form-->

<section class="form">
    <div class="container">
        <div class="row">
            <div class="col-md-12 feedback-form">
                <h1><strong>Напешите</strong> нам</h1>
                <h3 class="error"><?php if (isset($_SESSION['error'])) { echo $_SESSION['error']; } ?></h3>
                <form class="row post-form"  method="post">

                    <div class="form-group col-md-4">
                        <input type="text" class="name" name="name" placeholder="Имя:" value="<?php if (isset ($_SESSION['name'])) { echo $_SESSION['name']; } ?>"/>
                    </div>

                    <div class="form-group col-md-4">
                        <input type="email" class="email" name="email" placeholder="Email:" value="<?php if (isset ($_SESSION['email'])) { echo $_SESSION['email']; } ?>"/>
                    </div>

                    <div class="form-group col-md-4">
                        <input type="phone" class="phone" name="phone" placeholder="елефон: +38(0xx)-xxx-xx-xx" value="<?php if (isset ($_SESSION['phone'])) { echo $_SESSION['phone']; } ?>"/>
                    </div>

                    <div class="form-group col-md-12">
                        <textarea class="massage" name="massage" placeholder="Соопщение:"><?php if (isset ($_SESSION['massage'])) { echo $_SESSION['massage']; } ?></textarea>
                    </div>

                    <div class="form-group col-md-12">
                        <button type="submit" class="btn btn-default" name="submit">Отправить</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!--End form-->