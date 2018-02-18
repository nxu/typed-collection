[![Travis](https://img.shields.io/travis/nXu/typed-collection.svg?style=flat-square)](https://travis-ci.org/nXu/typed-collection)
[![Packagist](https://img.shields.io/packagist/v/nxu/typed-collection.svg?style=flat-square)](https://packagist.org/packages/nXu/typed-collection)

# Typed Collections

While PHP 7 brings nice features for using types as intended,
there are many things still missing. One thing I really miss
is the use of generics, or simply the ability to type hint 
an array of elements with specific types. The aim of this 
package is to provide an alternative way to type-hinted
arrays.
 
## How to use?
This package is build upon Laravel's Collection and requires
illuminate/support. Therefore, while not strictly tied to 
Laravel, it's intended to be used with the Laravel 5 
framework.

It works by creating collection classes for each type and 
specifying the types of the elements. This will be enforced,
and you can be sure the collection only contains elements
with the specified type.

### Installation
Use `composer` to install the package. 

```sh
composer require nxu/typed-collection
```

Not using composer? Too bad. 

### Built-in collections
The package provides built in collections for all scalar 
types of PHP (other than `null` of course):

- `ArrayCollection˙
- `BooleanCollection`
- `CallableCollection`
- `FloatCollection`
- `IntegerCollection`
- `ResourceCollection`
- `StringCollection`

Also, there is a `DateTimeCollection` to be used.

### Custom collection classes
For any other type, create a class and extend `TypedCollection`.
Then simply set the `protected $objectType` property to the FQN
of the type you wish to use:

```php
protected $objectType = \DateTime::class; 
```

That's all, adding any other types will throw an `InvalidTypeException`.

### Even more customization
If you wish to customize the collection even more, you can override
the `isTypeValid($value): bool` method and add any validation rule.

## License
This package is open source software licensed under the [MIT License](https://opensource.org/licenses/MIT).

