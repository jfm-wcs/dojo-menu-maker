<?php

use PHPUnit\Framework\TestCase;

use function PHPUnit\Framework\assertEquals;

require __DIR__ . '/../public/script.php';

class MenuMakerTest extends TestCase
{
    public function testMenuMaker()
    {
        $data = [
            ["name" => "Home", "file" => "/index.php"], 
            ["name" => "About us", "file" => "/about.php"],
            ["name" => "Contact", "file" => "/contact.php"]
        ];
        $html = menuMaker($data, "/about.php");
        $expected = "<ul><li><a href='/index.php'>Home</a></li>";
        $expected .= "<li><a class='active' href='/about.php'>About us</a></li>";
        $expected .= "<li><a href='/contact.php'>Contact</a></li>";
        $expected .= "</ul>";
        $this->assertEquals($expected, $html);
    }
}