<?php

namespace Pagerfanta\Adapter;

use Pagerfanta\DoctrineDBAL\DBALSingleTableQueryAdapter;

trigger_deprecation('pagerfanta/pagerfanta', '2.4', 'The "%s" class is deprecated and will be removed in 3.0. Use the "%s" class from the "pagerfanta/doctrine-collections-adapter" package instead.', DoctrineDbalSingleTableAdapter::class, DBALSingleTableQueryAdapter::class);

/**
 * Extended Doctrine DBAL adapter which assists in building the count query modifier for a SELECT query on a single table.
 *
 * @deprecated to be removed in 3.0, use the `Pagerfanta\DoctrineDBAL\DBALSingleTableQueryAdapter` from the `pagerfanta/doctrine-dbal-adapter` package instead
 */
class DoctrineDbalSingleTableAdapter extends DBALSingleTableQueryAdapter
{
}
