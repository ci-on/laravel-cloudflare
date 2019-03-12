<?php

namespace Cion\LaravelCloudflare\Test;

class CollectionTest extends TestCase
{
    public function setUp()
    {
        parent::setUp();

        $this->registerServiceProvider();
    }

    /**
     * @test
     */
    public function it_transposes_a_collection()
    {
        // Arrange

        $zones = [
            'identifiers' => [
                'zone-a',
                'zone-b',
                'zone-c',
            ],
            'files' => [
                ['app.css', 'app.js'],
                ['main.css', 'main.js'],
                ['style.css', 'scripts.css'],
            ],
            'tags' => [
                ['styles', 'scripts'],
                ['images', 'icons'],
                ['fonts', 'media'],
            ],
        ];

        $expected = [
            collect([
                'identifiers' => 'zone-a',
                'files' => ['app.css', 'app.js'],
                'tags' => ['styles', 'scripts'],
            ]),
            collect([
                'identifiers' => 'zone-b',
                'files' => ['main.css', 'main.js'],
                'tags' => ['images', 'icons'],
            ]),
            collect([
                'identifiers' => 'zone-c',
                'files' => ['style.css', 'scripts.css'],
                'tags' => ['fonts', 'media'],
            ]),
        ];

        // Act

        $actual = collect($zones)->_transpose();

        // Assert

        $this->assertEquals(collect($expected), $actual);
    }

    /**
     * @test
     */
    public function it_inserts_a_value_between_items()
    {
        // Arrange

        $table = [
            'Row A',
            'Row B',
            'Row C',
        ];

        $expected = [
            'Row A',
            '-----',
            'Row B',
            '-----',
            'Row C',
        ];

        // Act

        $actual = collect($table)->insertBetween('-----');

        // Assert

        $this->assertEquals(collect($expected), $actual);
    }

    /**
     * @test
     */
    public function it_reorders_a_collection()
    {
        // Arrange

        $items = [
            'bar' => 'first',
            'baz' => 'second',
            'foo' => 'third',
        ];

        $expected = [
            'foo' => 'third',
            'bar' => 'first',
            'baz' => 'second',
        ];

        $keys = ['foo', 'bar', 'baz'];

        // Act

        $actual = collect($items)->reorder($keys);

        // Assert

        $this->assertEquals(collect($expected), $actual);
    }
}
