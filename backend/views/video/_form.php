<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\Video $model */
/** @var yii\bootstrap4\ActiveForm $form */

\backend\assets\TagsInputAsset::register($this);
?>

<div class="video-form">

    <?php $form = ActiveForm::begin([
            'options' => ['enctype' => 'multipart/form-data']
    ]); ?>

    <div class="row">
        <div class="col-sm-8">

          <?= $form->errorSummary($model); ?>

          <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

          <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>

          <div class="form-group">
              <label for="thumbnail"><?= $model->getAttributeLabel('thumbnail') ?></label>
              <div class="custom-file">
                  <input type="file" class="custom-file-input" id="thumbnail" name="thumbnail">
                  <label for="thumbnail" class="custom-file-label">Choose File</label>
              </div>
          </div>

          <?= $form->field($model, 'tags', [
                  'inputOptions' => ['data-role' => 'tagsinput']
          ])->textInput(['maxlength' => true]) ?>

        </div>
        <div class="col-sm-4">
            <div class="embed-responsive embed-responsive-16by9 mb-3">
                <video
                        poster="<?= $model->getThumbnailLink() ?>"
                        src="<?= $model->getVideoLink() ?>"
                        class="embed-response-item"
                        controls></video>
            </div>

            <div class="mb-4">
                <div class="text-muted">Video Link</div>
                <p>
                    <a href="<?= $model->getVideoLink() ?>">
                        Open Video
                    </a>
                </p>
            </div>

            <div class="mb-3">
                <div class="text-muted">Video Name</div>
                <p><?= $model->video_name ?></p>
            </div>

             <?= $form->field($model, 'status')->dropdownList($model->getStatusLabels()) ?>
        </div>
    </div>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
