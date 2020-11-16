<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TblAnmeldenTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TblAnmeldenTable Test Case
 */
class TblAnmeldenTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\TblAnmeldenTable
     */
    protected $TblAnmelden;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.TblAnmelden',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('TblAnmelden') ? [] : ['className' => TblAnmeldenTable::class];
        $this->TblAnmelden = $this->getTableLocator()->get('TblAnmelden', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->TblAnmelden);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
