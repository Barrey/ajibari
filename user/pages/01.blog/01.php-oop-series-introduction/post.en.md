---
title: 'PHP OOP series - Introduction'
headline: 'PHP OOP tutorial part 1'
---

Hi guys, today i'm gonna show you how to play with Object Oriented Programming in PHP. I'm gonna make the series for this. Below are the list : 

- [Introduction](http://www.ajibari.com/en/php-oop-series-introduction)
- Inheritance
- Visibility
- Dependency Injection
- Interfaces
- Magic Methods
- Abstract Class
- Static Class
- Method Chaining
- Autoloading

At the end of every step, if you want to make this valueable for you. You might write your own code with different problem to help you remember with the lesson.

You can fork / download the script [here](https://github.com/Barrey/php-oop-learning)
<hr>

<h2>Introduction </h2>
Why use PHP Object Oriented Programming? 
1. Better code management
2. Maintainable code
3. Make you cool as f*
4. A million reason i can't describe here

So yes, your PHP code should be OOP style.
If you're a totally beginner in OOP you can read till the end of this page. Otherwise, skip.

Before you dive in further, you have to know what class is.
In a simple words, Class is a blueprint for an object.

```text
<?php
$object = new stdClass;
$object->name = "Budi";
$object->age = 26;
?>
```

The example below is the simple usage of class. `$object` contain `name` and `age`, these called `property`.

```text
<?php
class Person{
	public $name;
    public $age;
}

$person = new Person;
$person->name = 'Budi';
$person->age = 26;
?>

```

In the example below, value of property got injected. this is not a good way.

```text
<?php
class Person {
	public $name;
    public $age;
    
    function __construct($name, $age){
    	$this->name = $name;
        $this->age = $age;
    }
}

$person = new Person('Budi',26);
?>
```
While in the last example is the common way

