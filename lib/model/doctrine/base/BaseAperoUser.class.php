<?php

/**
 * BaseAperoUser
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $apero_id
 * @property integer $user_id
 * @property Apero $Apero
 * @property sfGuardUser $sfGuardUser
 * 
 * @method integer     getAperoId()     Returns the current record's "apero_id" value
 * @method integer     getUserId()      Returns the current record's "user_id" value
 * @method Apero       getApero()       Returns the current record's "Apero" value
 * @method sfGuardUser getSfGuardUser() Returns the current record's "sfGuardUser" value
 * @method AperoUser   setAperoId()     Sets the current record's "apero_id" value
 * @method AperoUser   setUserId()      Sets the current record's "user_id" value
 * @method AperoUser   setApero()       Sets the current record's "Apero" value
 * @method AperoUser   setSfGuardUser() Sets the current record's "sfGuardUser" value
 * 
 * @package    aperosymfony
 * @subpackage model
 * @author     Benjamin Laugueux <b.laugueux@yzalis.com>
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseAperoUser extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('apero_user');
        $this->hasColumn('apero_id', 'integer', null, array(
             'type' => 'integer',
             'primary' => true,
             ));
        $this->hasColumn('user_id', 'integer', null, array(
             'type' => 'integer',
             'primary' => true,
             ));

        $this->option('collation', 'utf8_unicode_ci');
        $this->option('charset', 'utf8');
        $this->option('type', 'InnoDB');
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Apero', array(
             'local' => 'apero_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));

        $this->hasOne('sfGuardUser', array(
             'local' => 'user_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));
    }
}