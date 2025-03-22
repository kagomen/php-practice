<?php

namespace Utilities {
  const VAL = 11;
  class Logger
  {
    function __construct()
    {
      echo "created Logger instance\n";
    }
  }

  class MathHelper
  {
    function __construct()
    {
      echo "created MathHelper instance\n";
    }
  }
}

namespace Utilities\Functions {
  function formatDate()
  {
    return date("Y-m-d");
  }
}

namespace {
  function globalFunction()
  {
    echo "Global Function\n";
  }
}
