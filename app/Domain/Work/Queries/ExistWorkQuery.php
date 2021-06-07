<?php

declare(strict_types=1);

namespace App\Domain\Work\Queries;

use App\Work;

/**
 * Class ExistWorkQuery
 * @package App\Domain\Work\Queries
 */
class ExistWorkQuery
{
    /**
     * @var string
     */
    private string $name;

    /**
     * ExistsServiceByNameQuery constructor.
     * @param string $name
     */
    public function __construct(string $name)
    {
        $this->name = $name;
    }

    /**
     * Execute the job.
     */
    public function handle()
    {
        return Work::where('name', $this->name)->firstOrFail();
    }
}