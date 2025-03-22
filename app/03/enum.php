<?php

enum Suit: string
{
  case Hearts = "hearts";
  case Diamonds = "diamonds";
  case Clubs = "clubs";
  case Spades = "spades";
}

function pick_a_card(Suit $suit)
{
  echo $suit->value;
}

pick_a_card(Suit::Clubs);
