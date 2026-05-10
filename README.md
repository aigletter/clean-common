## Collections

Collections have been made immutable to ensure proper encapsulation and prevent entities from exposing their internal
state (ensuring a copy is returned instead of a direct reference).  
To support this, new immutable methods have been introduced, and existing mutable methods are now marked as deprecated
(to be removed in the next version).

__Note on Usage__: 
This approach introduces some overhead in usage. For instance, when adding an element, the variable must be explicitly
reassigned to capture the new collection instance:

```php
$collection = $collection->withAppended($element);
```

instead of traditional:

```php
$collection->push($element);
```


However, we believe this is a "lesser evil" compared to the risk of accidental and implicit state changes within the entity.