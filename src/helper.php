<?php

use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Storage;

// if (! function_exists('toastr')) {
//     /**
//      * Return the instance of toastr.
//      *
//      * @return Brian2694\Toastr\Toastr
//      */
//     function toastr()
//     {
//         return app('toastr');
//     }
// }

// if (!function_exists('clearSessionalFiles')) {
//     function clearSessionalFiles() {
//         $fileToClearKey = 'fileToClear';
//         $filesToClear = Cache::get($fileToClearKey, null);
//         if (!is_null($filesToClear)) {
//             foreach($filesToClear as $file) {
//                 # remove it from the file system
//                 destroyFileInstorage(onlyFilename($file->path, $file->location), $file->location);
//             }
//             return forgetCache($fileToClearKey);
//             // handleSession(['fileToClear'], 'forget');
//         }
//         return true;
//     }
// }

if (!function_exists('forgetCache')) {
    function forgetCache($key = null, $prefixs = []) {

        if (!is_null($key)) {
            Cache::forget($key);
        }else {
            $cacheKeys = [
                'cache_existhouseTypeData',
                'contractValuePeriods',
                'cache_categoryData',
                'cache_currency',
            ];

            foreach ($cacheKeys as $key) {
                Cache::forget($key);
            }
        }

        if (!empty($prefixs)) {
            foreach ($prefixs as $prefix) {
                forgetCacheByPrefix($prefix);
            }
        }

        return true;
    }
}

if (!function_exists('forgetCacheByPrefix')) {
    function forgetCacheByPrefix($partialCacheKey)
    {
        $cachePath = storage_path('framework/cache/data');
        $files = File::glob("{$cachePath}/{$partialCacheKey}*");
        foreach ($files as $file) {
            $key = str_replace($cachePath . '/', '', $file);
            Cache::forget($key);
        }
    }
}

if (!function_exists('destroyFileInstorage')) {
    /**
     * @param $filename
     * @param $location
     * @return bool
     */
    function destroyFileInstorage($filename, $location, $basePath = null)
    {
        $file_path = $location .'/'. $filename;
        // $basePath = is_null($basePath) ? localOrProductionBase() : $basePath;
        $basePath = is_null($basePath) ? 'public' : $basePath;
        return (Storage::disk($basePath)->exists($file_path)) ? Storage::disk($basePath)->delete($file_path) : false;
    }
}

if (!function_exists('isSpatiePermissionInstalled')) {
    /**
     * @return bool
     */
    function isSpatiePermissionInstalled()
    {
        return class_exists('Spatie\Permission\PermissionServiceProvider');
    }
}

