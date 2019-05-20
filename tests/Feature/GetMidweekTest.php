<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Apastorts\JWGetter\Model\Meeting;

class GetMidWeekTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @test
     */
    public function it_creates_a_database_record_with_the_meeting()
    {
        $this->assertEquals(0, Meeting::all()->count());

        $this->artisan('get:midweek');

        $this->assertEquals(1, Meeting::all()->count());
    }
}
