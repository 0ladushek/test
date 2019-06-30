<?php

namespace roistat\Test;
use PHPUnit\Framework\TestCase;


class RevertPunctuation extends TestCase
{
    public function testRevert()
    {

        $str = revertPunctuationMarks("Привет! Как твои дела?");
        $this->assertEquals($str, "Привет? Как твои дела!");
    }
}