<aside class="shadow">
  <?= \yii\bootstrap4\Nav::widget([
    'options' => [
      'class' => 'd-flex flex-column nav-pills'
    ],
    'items' => [
      [
        'label' => 'Home',
        'url' => '/site/index'
      ],
      [
        'label' => 'History',
        'url' => '/video/history'
      ]
    ]
  ])
  ?>
</aside>