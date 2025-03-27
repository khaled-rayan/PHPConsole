# PHPConsole

PHPConsole is a lightweight PHP library that bridges the gap between PHP server-side logging and browser-based JavaScript console, providing an intuitive way to debug and log information directly from PHP.

## 🌟 Features

- 📝 Multiple logging methods: `log()`, `warn()`, `error()`, `info()`
- 📊 Table rendering support
- 🕒 Timing and performance tracking
- 🧮 Counting method calls
- 🔍 Easy-to-use console group functionality
- 🚀 Zero dependencies
- 💻 PHP 7.0+ compatible

## 📦 Installation

### Composer (Recommended)

```bash
composer require khaled-rayan/phpconsole
```

### Manual Installation

1. Download the `PHPConsole.php` file
2. Include it in your project
3. Use the namespace `PHPConsole`

## 🚀 Quick Start

```php
<?php
use PHPConsole\PHPConsole;

$console = new PHPConsole();

// Basic logging
$console->log("Hello, World!");
$console->warn("This is a warning");
$console->error("Something went wrong");

// Timing
$console->time("Process");
// ... your code ...
$console->timeEnd("Process");

// Grouping
$console->group("User Details");
$console->log($userDetails);
$console->groupEnd();
```

## 📖 Documentation

### Logging Methods

- `log($data)`: Standard console log
- `warn($data)`: Warning message
- `error($data)`: Error message
- `info($data)`: Informational message
- `table($array)`: Display tabular data
- `dump($data)`: Detailed variable export

### Timing Methods

- `time($label)`: Start a timer
- `timeLog($label)`: Log current timer
- `timeEnd($label)`: End and log timer

### Grouping Methods

- `group($label)`: Start a console group
- `groupCollapsed($label)`: Start a collapsed group
- `groupEnd()`: Close a group

### Utility Methods

- `count($label)`: Count method calls
- `countReset($label)`: Reset count
- `clear()`: Clear console

## 🤝 Contributing

Contributions are welcome! Please follow these steps:

1. Fork the repository
2. Create your feature branch (`git checkout -b feature/AmazingFeature`)
3. Commit your changes (`git commit -m 'Add some AmazingFeature'`)
4. Push to the branch (`git push origin feature/AmazingFeature`)
5. Open a Pull Request

## 📋 Requirements

- PHP 7.0+
- Web browser with JavaScript console support

## 🔒 License

Distributed under the GNU Lesser General Public License v2.1.
See `LICENSE` for more information.

## 👨‍💻 Author

Khaled M. Ryan - [khaled@krayan.net](mailto:khaled@krayan.net)

## 🌐 Project Links

- GitHub: [https://github.com/khaled-rayan/PHPConsole](https://github.com/khaled-rayan/PHPConsole)
- Issues: [https://github.com/khaled-rayan/PHPConsole/issues](https://github.com/khaled-rayan/PHPConsole/issues)
