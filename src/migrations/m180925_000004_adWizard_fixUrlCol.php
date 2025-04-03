<?php
/**
 * Ad Wizard plugin for Craft CMS
 *
 * Easily manage custom advertisements on your website.
 *
 * @author    Double Secret Agency
 * @link      https://www.doublesecretagency.com/
 * @copyright Copyright (c) 2014 Double Secret Agency
 */

namespace doublesecretagency\adwizard\migrations;

use Craft;
use craft\db\Migration;
use craft\fields\PlainText;
use doublesecretagency\adwizard\elements\Ad;
use doublesecretagency\adwizard\records\FieldLayout as FieldLayoutRecord;
use Throwable;
use yii\base\Exception;
use yii\db\Transaction;

/**
 * Migration: Create a new field layout
 * @since 2.1.0
 */
class m180925_000004_adWizard_fixUrlCol extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp(): void
    {
        $this->alterColumn('{{%adwizard_ads}}', 'url', $this->text()->null());
    }

    /**
     * @inheritdoc
     */
    public function safeDown(): bool
    {
        echo "m180925_000003_adWizard_createFieldLayout cannot be reverted.\n";

        return false;
    }

}
