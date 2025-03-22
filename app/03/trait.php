<?php

trait Greeting
{
  public function say(string $message): void
  {
    printf("hello, %s\n, $message");
  }
}

class Member
{
  use Greeting;
}
