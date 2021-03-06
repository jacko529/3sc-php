<?php
/**
 * Created by PhpStorm.
 * User: churc
 * Date: 20/05/2019
 * Time: 16:22
 */

namespace Tsc\CatStorageSystem\FileSystemOperations\FileOperationUsage;
require  dirname(dirname(dirname(dirname(__FILE__)))).'/vendor/autoload.php';


use Tsc\CatStorageSystem\DirectoryOperations\DirectoryGeneral;
use Tsc\CatStorageSystem\FileSystemOperations\FileSystemStuff;

class DeleteDirectory
{
    private $directoryClass;
    private $systemClass;

    /**
     * GetFileCountInDirectory constructor.
     * @param $path
     */
    public function __construct($path)
    {
        $this->directoryClass = new DirectoryGeneral($path);
        $this->DeleteDirectory();

    }

    /**
     */
    public function DeleteDirectory()
    {
        $this->systemClass = new FileSystemStuff();
        return print_r($this->systemClass->deleteDirectory($this->directoryClass));
    }

}

// take in parameters
new DeleteDirectory($argv[1]);