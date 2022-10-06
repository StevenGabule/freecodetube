<?php

use yii\db\Migration;

/**
 * Class m220928_033714_create_videos_title
 */
class m220928_033714_create_videos_title extends Migration
{
  /**
   * {@inheritdoc}
   */
  public function safeUp()
  {
    // it create a table
    $this->createTable('{{%video}}', [
      'video_id' => $this->string(16)->notNull(),
      'title' => $this->string(512)->notNull(),
      'description' => $this->text(),
      'tags' => $this->string(512),
      'status' => $this->integer(1),
      'has_thumbnail' => $this->boolean(),
      'video_name' => $this->string(512),
      'created_at' => $this->integer(11),
      'updated_at' => $this->integer(11),
      'created_by' => $this->integer(11),
    ]);
    
    $this->addPrimaryKey('PK_video_video_id', '{{%video}}', 'video_id');

    // creates index for column `created_by`
    $this->createIndex('{{%idx-video-created_by}}', '{{%video}}', 'created_by');

    // add foreign key for table `{{%user}}`
    $this->addForeignKey('{{%fk-video-created_by}}', '{{%video}}', 'created_by', '{{%user}}', 'id', 'CASCADE');
  }

  /**
   * {@inheritdoc}
   */
  public function safeDown()
  {
    // drop foreign key for table `{{%user}}`
    $this->dropForeignKey('{{%fk-video-created_by}}','{{%video}}');

    // drop index for column `created_by`
    $this->dropIndex('{{%idx-video-created_by}}','{{%video}}');

    // drop table `{{%videos}}`
    $this->dropTable('{{%video}}');

  }

  /*
  // Use up()/down() to run migration code without a transaction.
  public function up()
  {

  }

  public function down()
  {
      echo "m220928_033714_create_videos_title cannot be reverted.\n";

      return false;
  }
  */
}
