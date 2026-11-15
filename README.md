## Collections

`Collection` is the immutable collection contract used by domain state and APIs. Its methods return new collections
instead of changing the current instance, helping prevent entities from exposing mutable internal state.
This is a breaking contract change: mutators and `ArrayAccess` are available only through `MutableCollection`.

For temporary local changes, explicitly convert to `MutableCollection`, then convert the result back before storing or
returning it:

```php
$working = $collection->toMutable();
$working->push($element);
$collection = $working->toImmutable();
```

For ordinary immutable updates, use the methods that return a new collection:

```php
$collection = $collection->withAppended($element);
```

Conversions copy the collection container; objects stored as elements are not deep-cloned.