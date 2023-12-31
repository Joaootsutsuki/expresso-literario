<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit690721b8d4049da7717c96844b0a27ab
{
    public static $files = array (
        '320cde22f66dd4f5d3fd621d3e88b98f' => __DIR__ . '/..' . '/symfony/polyfill-ctype/bootstrap.php',
        '0e6d7bf4a5811bfa5cf40c5ccd6fae6a' => __DIR__ . '/..' . '/symfony/polyfill-mbstring/bootstrap.php',
        'a4a119a56e50fbb293281d9a48007e0e' => __DIR__ . '/..' . '/symfony/polyfill-php80/bootstrap.php',
        '18796d51fce0029af1df73671004f20a' => __DIR__ . '/../..' . '/app/helpers/constants.php',
        '58f7c2720cb2fe24dd3ec96669801659' => __DIR__ . '/../..' . '/app/router/router.php',
        'f85395309354c07a2622c90db41c5455' => __DIR__ . '/../..' . '/app/router/routes.php',
        'cbc82b80aec628fe82db3df7c67912b4' => __DIR__ . '/../..' . '/app/core/controller.php',
        'da3141a723f441cf974d29921d0b94d2' => __DIR__ . '/../..' . '/app/database/connect.php',
        'f7d8a3dc2af302f9998596786a8d08a5' => __DIR__ . '/../..' . '/app/database/fetch.php',
        '927b5bbbb63efbbb25a1241007220c27' => __DIR__ . '/../..' . '/app/database/create.php',
        '2c1642aa1ead01676ac8fa4930615bb9' => __DIR__ . '/../..' . '/app/helpers/flash.php',
        'd25b78371616f3f2584b9c72bd9888fc' => __DIR__ . '/../..' . '/app/helpers/redirect.php',
        'a901d1bf393d4eaca723789857f12111' => __DIR__ . '/../..' . '/app/helpers/sessions.php',
        'b654c774b90f2b1cd1f20cb373f6c566' => __DIR__ . '/../..' . '/app/helpers/validate.php',
        'a37b19d52deb8932799e27b56e52037d' => __DIR__ . '/../..' . '/app/helpers/validations.php',
    );

    public static $prefixLengthsPsr4 = array (
        'a' => 
        array (
            'app\\' => 4,
        ),
        'S' => 
        array (
            'Symfony\\Polyfill\\Php80\\' => 23,
            'Symfony\\Polyfill\\Mbstring\\' => 26,
            'Symfony\\Polyfill\\Ctype\\' => 23,
        ),
        'P' => 
        array (
            'PhpOption\\' => 10,
        ),
        'G' => 
        array (
            'GrahamCampbell\\ResultType\\' => 26,
        ),
        'D' => 
        array (
            'Dotenv\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'app\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
        'Symfony\\Polyfill\\Php80\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-php80',
        ),
        'Symfony\\Polyfill\\Mbstring\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-mbstring',
        ),
        'Symfony\\Polyfill\\Ctype\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-ctype',
        ),
        'PhpOption\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpoption/phpoption/src/PhpOption',
        ),
        'GrahamCampbell\\ResultType\\' => 
        array (
            0 => __DIR__ . '/..' . '/graham-campbell/result-type/src',
        ),
        'Dotenv\\' => 
        array (
            0 => __DIR__ . '/..' . '/vlucas/phpdotenv/src',
        ),
    );

    public static $classMap = array (
        'Attribute' => __DIR__ . '/..' . '/symfony/polyfill-php80/Resources/stubs/Attribute.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'PhpToken' => __DIR__ . '/..' . '/symfony/polyfill-php80/Resources/stubs/PhpToken.php',
        'Stringable' => __DIR__ . '/..' . '/symfony/polyfill-php80/Resources/stubs/Stringable.php',
        'UnhandledMatchError' => __DIR__ . '/..' . '/symfony/polyfill-php80/Resources/stubs/UnhandledMatchError.php',
        'ValueError' => __DIR__ . '/..' . '/symfony/polyfill-php80/Resources/stubs/ValueError.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit690721b8d4049da7717c96844b0a27ab::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit690721b8d4049da7717c96844b0a27ab::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit690721b8d4049da7717c96844b0a27ab::$classMap;

        }, null, ClassLoader::class);
    }
}
