<?php
/**
 * Project codeigniter-basic-helper
 * Created by PhpStorm
 * User: 713uk13m <dev@nguyenanhung.com>
 * Copyright: 713uk13m <dev@nguyenanhung.com>
 * Date: 08/07/2021
 * Time: 01:11
 */
if (!function_exists('assets_url')) {
    /**
     * Function assets_url
     *
     * @param string      $uri
     * @param null|string $protocol
     *
     * @return string
     * @author   : 713uk13m <dev@nguyenanhung.com>
     * @copyright: 713uk13m <dev@nguyenanhung.com>
     * @time     : 08/07/2021 11:56
     */
    function assets_url($uri = '', $protocol = null)
    {
        if (function_exists('base_url') && function_exists('config_item')) {
            $fileExt = substr(trim($uri), strrpos(trim($uri), '.') + 1);
            $fileExt = strtoupper($fileExt);
            $version = '';
            if ($fileExt === 'CSS' || $fileExt === 'JS') {
                $version = config_item('assets_version');
            }

            return trim(base_url('assets/' . $uri, $protocol) . $version);
        }

        return trim($uri);

    }
}
if (!function_exists('templates_url')) {
    /**
     * Function templates_url
     *
     * @param string      $uri
     * @param null|string $protocol
     *
     * @return string
     * @author   : 713uk13m <dev@nguyenanhung.com>
     * @copyright: 713uk13m <dev@nguyenanhung.com>
     * @time     : 08/07/2021 12:12
     */
    function templates_url($uri = '', $protocol = null)
    {
        if (function_exists('base_url') && function_exists('config_item')) {
            $fileExt = substr(trim($uri), strrpos(trim($uri), '.') + 1);
            $fileExt = strtoupper($fileExt);
            $version = '';
            if ($fileExt === 'CSS' || $fileExt === 'JS') {
                $version = config_item('assets_version');
            }

            return trim(base_url('templates/' . $uri, $protocol) . $version);
        }

        return trim($uri);
    }
}
if (!function_exists('editor_url')) {
    /**
     * Function editor_url
     *
     * @param string $uri
     * @param null   $protocol
     *
     * @return string
     * @author   : 713uk13m <dev@nguyenanhung.com>
     * @copyright: 713uk13m <dev@nguyenanhung.com>
     * @time     : 12/09/2020 47:57
     */
    function editor_url($uri = '', $protocol = null)
    {
        $uri = 'editors/' . $uri;

        return assets_url($uri, $protocol);
    }
}
if (!function_exists('favicon_url')) {
    /**
     * Function favicon_url
     *
     * @param string $uri
     * @param null   $protocol
     *
     * @return string
     * @author   : 713uk13m <dev@nguyenanhung.com>
     * @copyright: 713uk13m <dev@nguyenanhung.com>
     * @time     : 12/09/2020 47:51
     */
    function favicon_url($uri = '', $protocol = null)
    {
        $uri = 'favicon/' . $uri;

        return assets_url($uri, $protocol);
    }
}
if (!function_exists('assets_mobile')) {
    /**
     * Function assets_mobile
     *
     * @param string $uri
     * @param null   $protocol
     *
     * @return string
     * @author   : 713uk13m <dev@nguyenanhung.com>
     * @copyright: 713uk13m <dev@nguyenanhung.com>
     * @time     : 12/09/2020 47:34
     */
    function assets_mobile($uri = '', $protocol = null)
    {
        $uri = 'mobile/assets/' . $uri;

        return assets_url($uri, $protocol);
    }
}
if (!function_exists('assets_themes')) {
    /**
     * Function assets_themes
     *
     * @param string $themes
     * @param string $uri
     * @param string $asset_folder
     * @param null   $protocol
     *
     * @return string
     * @author   : 713uk13m <dev@nguyenanhung.com>
     * @copyright: 713uk13m <dev@nguyenanhung.com>
     * @time     : 12/09/2020 47:39
     */
    function assets_themes($themes = '', $uri = '', $asset_folder = 'yes', $protocol = null)
    {
        // Hooks format
        $themes = str_replace('itravels', 'iTravels', $themes);
        // Pattern
        if ($themes != '') {
            if ($asset_folder === 'no') {
                $uri = 'themes/' . $themes . '/' . $uri;
            } else {
                $uri = 'themes/' . $themes . '/assets/' . $uri;
            }
        } else {
            if ($asset_folder === 'no') {
                $uri = 'themes/' . $uri;
            } else {
                $uri = 'themes/assets/' . $uri;
            }
        }

        return assets_url($uri, $protocol);
    }
}
if (!function_exists('assets_themes_dashboard')) {
    /**
     * Function assets_themes_dashboard
     *
     * @param string $themes
     * @param string $uri
     * @param string $asset_folder
     * @param null   $protocol
     *
     * @return string
     * @author   : 713uk13m <dev@nguyenanhung.com>
     * @copyright: 713uk13m <dev@nguyenanhung.com>
     * @time     : 12/09/2020 48:37
     */
    function assets_themes_dashboard($themes = '', $uri = '', $asset_folder = 'yes', $protocol = null)
    {
        if ($themes != '') {
            if ($asset_folder === 'no') {
                $uri = 'themes/' . $themes . '/' . $uri;
            } else {
                $uri = 'themes/' . $themes . '/assets/' . $uri;
            }
        } else {
            if ($asset_folder === 'no') {
                $uri = 'themes/' . $uri;
            } else {
                $uri = 'themes/assets/' . $uri;
            }
        }

        return assets_url($uri, $protocol);
    }
}
if (!function_exists('assets_themes_comingsoon')) {
    /**
     * Function assets_themes_comingsoon
     *
     * @param string $themes
     * @param string $uri
     * @param string $asset_folder
     * @param null   $protocol
     *
     * @return string
     * @author   : 713uk13m <dev@nguyenanhung.com>
     * @copyright: 713uk13m <dev@nguyenanhung.com>
     * @time     : 12/09/2020 48:22
     */
    function assets_themes_comingsoon($themes = '', $uri = '', $asset_folder = '', $protocol = null)
    {
        if ($themes != '') {
            if ($asset_folder != '') {
                $uri = 'themes/' . $themes . '/assets/' . $uri;
            } else {
                $uri = 'themes/' . $themes . '/' . $uri;
            }
        } else {
            if ($asset_folder != '') {
                $uri = 'themes/assets/' . $uri;
            } else {
                $uri = 'themes/' . $uri;
            }
        }

        return assets_url($uri, $protocol);
    }
}
if (!function_exists('assets_themes_error')) {
    /**
     * Function assets_themes_error
     *
     * @param string $themes
     * @param string $uri
     * @param string $asset_folder
     * @param null   $protocol
     *
     * @return string
     * @author   : 713uk13m <dev@nguyenanhung.com>
     * @copyright: 713uk13m <dev@nguyenanhung.com>
     * @time     : 12/09/2020 48:14
     */
    function assets_themes_error($themes = '', $uri = '', $asset_folder = 'yes', $protocol = null)
    {
        if ($themes != '') {
            if ($asset_folder != '') {
                $uri = 'themes/' . $themes . '/assets/' . $uri;
            } else {
                $uri = 'themes/' . $themes . '/' . $uri;
            }
        } else {
            if ($asset_folder != '') {
                $uri = 'themes/assets/' . $uri;
            } else {
                $uri = 'themes/' . $uri;
            }
        }

        return assets_url($uri, $protocol);
    }
}
if (!function_exists('storage_url')) {
    /**
     * Function storage_url
     *
     * @param string $uri
     *
     * @return string
     * @author   : 713uk13m <dev@nguyenanhung.com>
     * @copyright: 713uk13m <dev@nguyenanhung.com>
     * @time     : 08/07/2021 48:52
     */
    function storage_url($uri = '')
    {
        if (function_exists('config_item')) {
            $fileExt = substr(trim($uri), strrpos(trim($uri), '.') + 1);
            $fileExt = strtoupper($fileExt);
            $version = '';
            if ($fileExt === 'CSS' || $fileExt === 'JS') {
                $version = config_item('assets_version');
            }
            $storageUrl = trim(config_item('storage_url')) . trim($uri) . $version;

            return trim($storageUrl);
        }

        return $uri;
    }
}
if (!function_exists('go_url')) {
    /**
     * Function go_url
     *
     * @param string $uri
     *
     * @return string
     * @author   : 713uk13m <dev@nguyenanhung.com>
     * @copyright: 713uk13m <dev@nguyenanhung.com>
     * @time     : 08/16/2021 41:37
     */
    function go_url($uri = '')
    {
        if (function_exists('config_item')) {
            $goUrl = trim(config_item('go_url')) . trim($uri);

            return trim($goUrl);
        }

        return $uri;
    }
}
