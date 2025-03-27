<?php

/**
 * PHPConsole - Simple PHP class to make javascript console event.
 * PHP Version 7.0.
 *
 * @see https://github.com/khaled-rayan/PHPConsole/ The PHPConsole GitHub project
 *
 * @author    Khaled M. Ryan <khaled@krayan.net>
 * @license   https://www.gnu.org/licenses/old-licenses/lgpl-2.1.html GNU Lesser General Public License
 * @note      This program is distributed in the hope that it will be useful - WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or
 * FITNESS FOR A PARTICULAR PURPOSE.
 */

namespace PHPConsole;

class PHPConsole
{
  private array $messages = [];

  public function log(mixed $data): void
  {
    $this->addMessage('log', $data);
  }

  public function warn(mixed $data): void
  {
    $this->addMessage('warn', $data);
  }

  public function error(mixed $data): void
  {
    $this->addMessage('error', $data);
  }

  public function info(mixed $data): void
  {
    $this->addMessage('info', $data);
  }

  public function table(array $data): void
  {
    $this->addMessage('table', $data);
  }
  public function dump(mixed $data): void
  {
    $this->addMessage('log', var_export($data, true));
  }
  public function group(string $label = ''): void
  {
    $this->addMessage('group', $label);
  }

  public function groupCollapsed(string $label = ''): void
  {
    $this->addMessage('groupCollapsed', $label);
  }

  public function groupEnd(): void
  {
    $this->addMessage('groupEnd');
  }

  public function time(?string $label = null): void
  {
    $this->addMessage('time', $label);
  }

  public function timeLog(?string $label = null): void
  {
    $this->addMessage('timeLog', $label);
  }

  public function timeEnd(?string $label = null): void
  {
    $this->addMessage('timeEnd', $label);
  }

  public function count(string $label = 'default'): void
  {
    $this->addMessage('count', $label);
  }

  public function countReset(string $label = 'default'): void
  {
    $this->addMessage('countReset', $label);
  }

  public function clear(): void
  {
    $this->addMessage('clear');
  }

  private function addMessage(string $type, mixed $data = null): void
  {
    $this->messages[] = [
      'type' => $type,
      'data' => $data !== null ? $this->encode($data) : null
    ];
  }

  private function encode(mixed $data): string
  {
    return json_encode($data, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
  }

  public function __destruct()
  {
    if (!empty($this->messages)) {
      echo "<script>\n";
      foreach ($this->messages as $message) {
        if ($message['data'] !== null) {
          echo "console.{$message['type']}({$message['data']});\n";
        } else {
          echo "console.{$message['type']}();\n";
        }
      }
      echo "</script>";
    }
  }
}
