<?php

namespace App\Http\Controllers\Library;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\UploadedFile;
//use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class ConfigController extends Controller
{

    private static $appName;
    private static $appVersion = "1.0";

    private static $uploadedPdfMaxSize = 20480;
    private static $uploadedPictureMaxSize = 1024; //kilobyte //5000;
    private static $uploadedVideoMaxSize = 2048; //kilobyte // 5000;

    private static $paginatorMaxDataPerPage = 12;

    private static $uploadedFilesDisk = "uploadedFiles";
    private static $apsedCoreAPIUploadedFilesDisk = "pi-apsed";
   // private static $uploadedFilesRootFolder = "uploadedFiles";

    public function __construct()
    {
        self::$appName = env("APP_NAME");

    }

    /**
     * @return int
     */
    public static function getUploadedPdfMaxSize(): int
    {
        return self::$uploadedPdfMaxSize;
    }

    /**
     * @return int
     */
    public static function getUploadedPictureMaxSize(): int
    {
        return self::$uploadedPictureMaxSize;
    }

    /**
     * @return int
     */
    public static function getUploadedVideoMaxSize(): int
    {
        return self::$uploadedVideoMaxSize;
    }

    /**
     * @return int
     */
    public static function getPaginatorMaxDataPerPage(): int
    {
        return self::$paginatorMaxDataPerPage;
    }


    /**
     * @return string
     */
    public static function getUploadedFilesDisk(): string
    {
        return self::$uploadedFilesDisk;
    }

    /**
     * @return string
     */
    public static function getApsedCoreAPIUploadedFilesDisk(): string
    {
        return self::$apsedCoreAPIUploadedFilesDisk;
    }


    private static function getUserUploadedFilesSubFolder(string $userGroup, ? string $userId = null) : string
    {
        $userId = $userId ?? UserController::getConnectedUserId() ?? "unconnected";
        return "user/{$userGroup}/{$userId}";
    }

    public static function getUserUploadedPictureSubFolder(string $userGroup, ? string $userId = null, ?string $idPhoto) : string
    {
        $idPhoto = $idPhoto??"none";
        return self::getUserUploadedFilesSubFolder($userGroup,$userId)."/{$idPhoto}";
    }

    public static function uploadFile(UploadedFile $_file, string $filePath, ? string $fileDisk = null ) : string
    {
        $fileDisk = $fileDisk ?? self::getUploadedFilesDisk();
        $path = $_file->store($filePath, $fileDisk);
        return $path;
    }

    public static function uploadFileAs(UploadedFile $_file, string $filePath, string $fileName, ? string $fileDisk = null ) : string
    {
        $fileDisk = $fileDisk ?? self::getUploadedFilesDisk();
        $path = $_file->storeAs($filePath, $fileName, $fileDisk);
        return $path;
    }

    public static function deleteFile(string $filePath , string $fileDisk = null)
    {
        $fileDisk = $fileDisk ?? self::getUploadedFilesDisk();

        Storage::disk($fileDisk)->delete($filePath);
    }

    /*public static function deleteFile2(string $fileCompletePath)
    {
        unlink($fileCompletePath);
    }*/


    /**
     * @return string
     */
    public static function getUploadedFilesFolder() : string
    {
        return asset("uploadedFiles/");

    }


	/**
	 * @param bool|null $forAspedCoreAPIServerProcessing    : si false, c'est que c'est pour une utilisation sur le serveur apache; si true c'est que c'est pour une utilisation sur le serveur windows
	 * @return string
	 */
	public static function getApsedCoreAPIUploadedFilesFolder(? bool $forAspedCoreAPIServerProcessing = false): string
	{
		if($forAspedCoreAPIServerProcessing)
			return "_Temp/";
		else
		   return "https://www.pi-apsed.com/_Temp/";
	}

/*	public static function moveFile(string $from, string $to)
	{
		Storage::move($from, $to);
	}*/


	public static function createDirectory(string $path, string $fileDisk = null) : void
    {
        $fileDisk = $fileDisk ?? self::getUploadedFilesDisk();
        Storage::disk($fileDisk)->makeDirectory($path);
    }

	public static function deleteDirectory(string $path, string $fileDisk = null) : void
    {
        $fileDisk = $fileDisk ?? self::getUploadedFilesDisk();
        Storage::disk($fileDisk)->deleteDirectory($path);
    }

	public static function getDirectoryFiles(string $path, string $fileDisk = null) : array
    {
        $fileDisk = $fileDisk ?? self::getUploadedFilesDisk();
        return Storage::disk($fileDisk)->files($path);
    }







}
