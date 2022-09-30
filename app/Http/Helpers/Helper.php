<?php

use App\Http\Helpers\UserPermissionHelper;
use App\Models\Language;
use App\Models\Page;
use App\Models\User;
use App\Models\User\UserCustomDomain;
use Carbon\Carbon;

if (!function_exists('setEnvironmentValue')) {
    function setEnvironmentValue(array $values)
    {
        $envFile = app()->environmentFilePath();
        $str = file_get_contents($envFile);

        if (count($values) > 0) {
            foreach ($values as $envKey => $envValue) {
                $str .= "\n"; // In case the searched variable is in the last line without \n
                $keyPosition = strpos($str, "{$envKey}=");
                $endOfLinePosition = strpos($str, "\n", $keyPosition);
                $oldLine = substr($str, $keyPosition, $endOfLinePosition - $keyPosition);

                // If key does not exist, add it
                if (!$keyPosition || !$endOfLinePosition || !$oldLine) {
                    $str .= "{$envKey}={$envValue}\n";
                } else {
                    $str = str_replace($oldLine, "{$envKey}={$envValue}", $str);
                }
            }
        }

        $str = substr($str, 0, -1);
        if (!file_put_contents($envFile, $str)) {
            return false;
        }
        return true;
    }
}


if (!function_exists('replaceBaseUrl')) {
    function replaceBaseUrl($html)
    {
        $startDelimiter = 'src="';
        $endDelimiter = '/assets/front/img/summernote';
        $startDelimiterLength = strlen($startDelimiter);
        $endDelimiterLength = strlen($endDelimiter);
        $startFrom = $contentStart = $contentEnd = 0;
        while (false !== ($contentStart = strpos($html, $startDelimiter, $startFrom))) {
            $contentStart += $startDelimiterLength;
            $contentEnd = strpos($html, $endDelimiter, $contentStart);
            if (false === $contentEnd) {
                break;
            }
            $html = substr_replace($html, url('/'), $contentStart, $contentEnd - $contentStart);
            $startFrom = $contentEnd + $endDelimiterLength;
        }

        return $html;
    }
}


if (!function_exists('convertUtf8')) {
    function convertUtf8($value)
    {
        return mb_detect_encoding($value, mb_detect_order(), true) === 'UTF-8' ? $value : mb_convert_encoding($value, 'UTF-8');
    }
}


if (!function_exists('make_slug')) {
    function make_slug($string)
    {
        $slug = preg_replace('/\s+/u', '-', trim($string));
        $slug = str_replace("/", "", $slug);
        $slug = str_replace("?", "", $slug);
        return mb_strtolower($slug, 'UTF-8');
    }
}


if (!function_exists('make_input_name')) {
    function make_input_name($string)
    {
        return preg_replace('/\s+/u', '_', trim($string));
    }
}

if (!function_exists('hasCategory')) {
    function hasCategory($version)
    {
        if (strpos($version, "no_category") !== false) {
            return false;
        } else {
            return true;
        }
    }
}

if (!function_exists('isDark')) {
    function isDark($version)
    {
        if (strpos($version, "dark") !== false) {
            return true;
        } else {
            return false;
        }
    }
}

if (!function_exists('slug_create')) {
    function slug_create($val)
    {
        $slug = preg_replace('/\s+/u', '-', trim($val));
        $slug = str_replace("/", "", $slug);
        $slug = str_replace("?", "", $slug);
        return mb_strtolower($slug, 'UTF-8');
    }
}

if (!function_exists('hex2rgb')) {
    function hex2rgb($colour)
    {
        if ($colour[0] == '#') {
            $colour = substr($colour, 1);
        }
        if (strlen($colour) == 6) {
            list($r, $g, $b) = array( $colour[0] . $colour[1], $colour[2] . $colour[3], $colour[4] . $colour[5] );
        } elseif (strlen($colour) == 3) {
            list($r, $g, $b) = array( $colour[0] . $colour[0], $colour[1] . $colour[1], $colour[2] . $colour[2] );
        } else {
            return false;
        }
        $r = hexdec($r);
        $g = hexdec($g);
        $b = hexdec($b);
        return array( 'red' => $r, 'green' => $g, 'blue' => $b );
    }
}


if (!function_exists('getHref')) {
    function getHref($link)
    {
        $href = "#";

        if ($link["type"] == 'home') {
            $href = route('front.index');
        } elseif ($link["type"] == 'profiles') {
            $href = route('front.user.view');
        } elseif ($link["type"] == 'pricing') {
            $href = route('front.pricing');
        } elseif ($link["type"] == 'faq') {
            $href = route('front.faq.view');
        } elseif ($link["type"] == 'blogs') {
            $href = route('front.blogs');
        } elseif ($link["type"] == 'contact') {
            $href = route('front.contact');
        } elseif ($link["type"] == 'custom') {
            if (empty($link["href"])) {
                $href = "#";
            } else {
                $href = $link["href"];
            }
        } else {
            $pageid = (int) $link["type"];
            $page = Page::find($pageid);
            if (!empty($page)) {
                $href = route('front.dynamicPage', [$page->slug]);
            } else {
                $href = "#";
            }
        }

        return $href;
    }
}



if (!function_exists('create_menu')) {
    function create_menu($arr)
    {
        echo '<ul class="sub-menu">';

        foreach ($arr["children"] as $el) {
            // determine if the class is 'submenus' or not
            $class = 'class="nav-item"';
            if (array_key_exists("children", $el)) {
                $class = 'class="nav-item submenus"';
            }
            // determine the href
            $href = getHref($el);

            echo '<li ' . $class . '>';
            echo '<a  href="' . $href . '" target="' . $el["target"] . '">' . $el["text"] . '</a>';
            if (array_key_exists("children", $el)) {
                create_menu($el);
            }
            echo '</li>';
        }
        echo '</ul>';
    }
}

if (!function_exists('format_price')) {
    function format_price($value): string
    {
        if (session()->has('lang')) {
            $currentLang = Language::where('code', session()
                ->get('lang'))
                ->first();
        } else {
            $currentLang = Language::where('is_default', 1)
                ->first();
        }
        $bex = $currentLang->basic_extended;
        if ($bex->base_currency_symbol_position == 'left') {
            return $bex->base_currency_symbol.$value;
        } else {
            return  $value.$bex->base_currency_symbol;
        }
    }
}

if (!function_exists('getParam')) {
    function getParam()
    {
        $parsedUrl = parse_url(url()->current());
        $host = str_replace("www.", "", $parsedUrl['host']);

        // if it is path based URL, then return {username}
        if (strpos($host, env('WEBSITE_HOST')) !== false && $host == env('WEBSITE_HOST')) {
            $path = explode('/', $parsedUrl['path']);
            return $path[1];
        }

        // if it is a subdomain / custom domain , then return the host (username.domain.ext / custom_domain.ext)
        return $host;
    }
}


// checks if 'current package has subdomain ?'

if (!function_exists('cPackageHasSubdomain')) {
    function cPackageHasSubdomain($user)
    {
        $currPackageFeatures = UserPermissionHelper::packagePermission($user->id);
        $currPackageFeatures = json_decode($currPackageFeatures, true);

        // if the current package does not contain subdomain
        if (empty($currPackageFeatures) || !is_array($currPackageFeatures) || !in_array('Subdomain', $currPackageFeatures)) {
            return false;
        }
        return true;
    }
}


// checks if 'current package has custom domain ?'
if (!function_exists('cPackageHasCdomain')) {
    function cPackageHasCdomain($user)
    {
        $currPackageFeatures = UserPermissionHelper::packagePermission($user->id);
        $currPackageFeatures = json_decode($currPackageFeatures, true);

        if (empty($currPackageFeatures) || !is_array($currPackageFeatures) || !in_array('Custom Domain', $currPackageFeatures)) {
            return false;
        }

        return true;
    }
}

if (!function_exists('getCdomain')) {
    function getCdomain($user)
    {
        $cdomains = $user->custom_domains()->where('status', 1);
        return $cdomains->count() > 0 ? $cdomains->orderBy('id', 'DESC')->first()->requested_domain : false;
    }
}


if (!function_exists('getUser')) {
    function getUser()
    {
        $parsedUrl = parse_url(url()->current());

        $host =  $parsedUrl['host'];

        // if the current URL contains the website domain
        if (strpos($host, env('WEBSITE_HOST')) !== false) {
            $host = str_replace('www.', '', $host);
            // if current URL is a path based URL
            if ($host == env('WEBSITE_HOST')) {
                $path = explode('/', $parsedUrl['path']);
                $username = $path[1];
            }
            // if the current URL is a subdomain
            else {
                $hostArr = explode('.', $host);
                $username = $hostArr[0];
            }

            $user = User::where('username', $username)
            ->where('online_status', 1)
            ->whereHas('memberships', function ($q) {
                $q->where('status', '=', 1)
                ->where('start_date', '<=', Carbon::now()->format('Y-m-d'))
                ->where('expire_date', '>=', Carbon::now()->format('Y-m-d'));
            })
            ->firstOrFail();

            // if the current url is a subdomain
            if ($host != env('WEBSITE_HOST')) {
                if (!cPackageHasSubdomain($user)) {
                    return view('errors.404');
                }
            }
        } else {
            // Always include 'www.' at the begining of host
            if (substr($host, 0, 4) == 'www.') {
                $host = $host;
            } else {
                $host = 'www.' . $host;
            }
            $user = User::where('online_status', 1)
            ->whereHas('user_custom_domains', function ($q) use ($host) {
                $q->where('status', '=', 1)
                ->where('requested_domain', '=', $host)
                ->orWhere('requested_domain', '=', str_replace("www.", "", $host));
                // fetch the custom domain , if it matches 'with www.' URL or 'without www.' URL
            })
            ->whereHas('memberships', function ($q) {
                $q->where('status', '=', 1)
                ->where('start_date', '<=', Carbon::now()->format('Y-m-d'))
                ->where('expire_date', '>=', Carbon::now()->format('Y-m-d'));
            })->firstOrFail();

            if (!cPackageHasCdomain($user)) {
                return view('errors.404');
            }
        }

        return $user;
    }
}



if (!function_exists('detailsUrl')) {
    function detailsUrl($user)
    {
        return '//' . env('WEBSITE_HOST') . '/' . $user->username;
    }
}
