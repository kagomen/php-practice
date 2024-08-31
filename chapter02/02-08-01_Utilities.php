<?php

namespace Utilities {
    const DEFAULT_VALUE = 42;
    class Logger
    {
        public function __construct()
        {
            echo "Logger インスタンスが作成されました。\n";
        }
    }

    class MathHelper
    {
        public function __construct()
        {
            echo "MathHelper インスタンスが作成されました。\n";
        }
    }
}
// サブ名前空間
namespace Utilities\Functions {

    function formatDate()
    {
        return date('Y-m-d');
    }
}

namespace {
    function globalfunction()
    {
        echo "グローバルな関数". "\n";
    }
}