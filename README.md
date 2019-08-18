Living Documentation
==

This package provides tools to aid in generation of Living Documentation in PHP projects.

Living Documentation has been championed by Cyrille Martraire and his book "Living Documentation" is the primary 
inspiration for this package.

Symfony integration is available via the [provided bundle](https://github.com/headsnet/living-documentation-bundle).

### Annotations

The package provides a set of annotations that can be used to semantically document a codebase, as well as provide 
inline documentation and learning resources for developers.

The annotations are grouped in to logical sets, such as:

* DDD artifacts
* Design Patterns

For example, you can annotate a DDD entity as follows:

```
<?php

import Headsnet\LivingDocumentation\Annotation\DDD\DomainEntity;
import Headsnet\LivingDocumentation\Annotation\DDD\Invariant;

/**
 * @DomainEntity()
 *
 * @Invariant(description="Cannot assign more guests than beds in the room.")
 * @Invariant(description="Cannot allocate guests if room is under renovation")
 */
class HotelRoom
{
    private $guests;

    private $beds;

    private $underRenovation
}
```

### Contributions

Contributions are welcome via Pull Requests.
