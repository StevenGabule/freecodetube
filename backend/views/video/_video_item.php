<?php

use common\models\Video;
use yii\helpers\{StringHelper, Url};

/** @var $model Video */
?>

<div class="media">
    <div class="media-body" style='width: 120px'>
        <img src="<?= $model->getThumbnailLink() ?>" alt="" class="img-fluid">
    </div>
    <div class="media-body">
        <a href="<?= Url::to(['/video/update', 'video_id' => $model->video_id]) ?>">
            <h6 class="mt-0"><?= $model->title ?></h6>
        </a>
      <?= StringHelper::truncateWords($model->description, 10) ?>
    </div>
</div>
