<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\UserTokensTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\UserTokensTable Test Case
 */
class UserTokensTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\UserTokensTable
     */
    public $UserTokens;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.user_tokens'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('UserTokens') ? [] : ['className' => UserTokensTable::class];
        $this->UserTokens = TableRegistry::get('UserTokens', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->UserTokens);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
