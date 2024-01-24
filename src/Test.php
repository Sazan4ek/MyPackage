<?php

    namespace Sazan4ek\MyPackage;

    class Test
    {
        public function __construct()
        {
            echo "Hello ".get_current_user();
        }
    }