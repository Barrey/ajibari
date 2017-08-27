---
title: 'Templating with Dwoo'
published: true
metadata:
    Keywords: 'Dwoo Templating'
taxonomy:
    tag:
        - templating
jscomments:
    active: true
    provider: disqus
process:
    markdown: true
    twig: true
twig_first: true
visible: true
headline: 'Basic usage of Dwoo, PHP template engine'
---

[Dwoo](https://github.com/dwoo-project/dwoo) is a modern, flexible and oriented object template engine for PHP, facilitating the separation of presentation (HTML/CSS) from application logic.

Dwoo is really easy to use. First think first, you have to install Dwoo

```text
composer require dwoo/dwoo 1.3.*
```

and include in your php script

```text
<?php
// Include the main class
require 'vendor/autoload.php';
// Initialize dwoo class
$core = new Dwoo\Core();
```

once class initialized, you can start play with Dwoo template. There are many ways to output a Dwoo template.

<h3>1. Array data</h3>
Example using array data

`index.php`

```text
<?php
// Include the main class
require 'vendor/autoload.php';
// Initialize dwoo class
$core = new Dwoo\Core();

// Create some data
$data = array('nama'=>'Budi', 'umur'=>26);

// Output the result
echo $core->get('path/template/index.tpl', $data);
```

and code in template `index.tpl`
```text
<html>
	<body>
		<p>Nama siswa: {$nama}</p>
		<p>Umur siswa: {$}</p>
	</body>
</html>
```

<h3>2. Data object and template</h3>
Example using Data object and template

`index.php`
```text
<?php
// Include the main class
require 'vendor/autoload.php';
// Initialize dwoo class
$core = new Dwoo\Core();

// Template format is same with the previous example
$tpl = new Dwoo\Template\File('path/template/index.tpl');

// Create a data set
$data = new Dwoo\Data();

// Fill it with some data
$data->assign('nama', 'Budi');
$data->assign('umur', 26);

// Output the result
echo $core->output($tpl, $data);

```
<h3>3. Compiler object</h3>
Example using compiler object
```text
<?php
require 'vendor/autoload.php';

$core = new Dwoo\Core();
$tpl = new Dwoo\Template\File('path/template/index.tpl');
$data = array('name'=>'Budi', 'umur'=>26);

// Create the compiler instance
$compiler = new Dwoo\Compiler();
// Add a pre-processor in one of the plugin directories
$compiler->addPreProcessor('capitalize', true);
// .. Or a custom filter you made

// Output the result and provide the compiler to use
echo $core->get($tpl, $data, $compiler);
```

The example above will capitalize the output.
That's a basic usage of Dwoo templating. 

I will post later for more complex logic with downloadable script.
