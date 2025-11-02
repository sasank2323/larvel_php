<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AgeCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        echo "<pre>";
        print_r($request);
        // print_r($request->age);
        // print_r($request->all());
        echo "</pre>";
        return $next($request);
    }
}





//http://127.0.0.1:8000/cron/update/ss/?age=20
// middle wear have all the data so no need for seperate access

//out put of  this two prints are  this 
//  print_r($request->age);
//      print_r($request->all());

// 20?name="sasank"Array
// (
//     [age] => 20?name="sasank"
// )
// updatess
















// this is the out put of print_r($request); in middlewear

// Illuminate\Http\Request Object
// (
//     [attributes] => Symfony\Component\HttpFoundation\ParameterBag Object
//         (
//             [parameters:protected] => Array
//                 (
//                 )

//         )

//     [request] => Symfony\Component\HttpFoundation\InputBag Object
//         (
//             [parameters:protected] => Array
//                 (
//                 )

//         )

//     [query] => Symfony\Component\HttpFoundation\InputBag Object
//         (
//             [parameters:protected] => Array
//                 (
//                     [age] => 20?name="sasank"
//                 )

//         )

//     [server] => Symfony\Component\HttpFoundation\ServerBag Object
//         (
//             [parameters:protected] => Array
//                 (
//                     [DOCUMENT_ROOT] => D:\laravel_projects\blog_project\public
//                     [REMOTE_ADDR] => 127.0.0.1
//                     [REMOTE_PORT] => 61247
//                     [SERVER_SOFTWARE] => PHP 8.2.12 Development Server
//                     [SERVER_PROTOCOL] => HTTP/1.1
//                     [SERVER_NAME] => 127.0.0.1
//                     [SERVER_PORT] => 8000
//                     [REQUEST_URI] => /cron/update/ss/?age=20?name=%22sasank%22
//                     [REQUEST_METHOD] => GET
//                     [SCRIPT_NAME] => /index.php
//                     [SCRIPT_FILENAME] => D:\laravel_projects\blog_project\public\index.php
//                     [PATH_INFO] => /cron/update/ss/
//                     [PHP_SELF] => /index.php/cron/update/ss/
//                     [QUERY_STRING] => age=20?name=%22sasank%22
//                     [HTTP_HOST] => 127.0.0.1:8000
//                     [HTTP_CONNECTION] => keep-alive
//                     [HTTP_CACHE_CONTROL] => max-age=0
//                     [HTTP_SEC_CH_UA] => "Google Chrome";v="141", "Not?A_Brand";v="8", "Chromium";v="141"
//                     [HTTP_SEC_CH_UA_MOBILE] => ?0
//                     [HTTP_SEC_CH_UA_PLATFORM] => "Windows"
//                     [HTTP_UPGRADE_INSECURE_REQUESTS] => 1
//                     [HTTP_USER_AGENT] => Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/141.0.0.0 Safari/537.36
//                     [HTTP_ACCEPT] => text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7
//                     [HTTP_SEC_FETCH_SITE] => none
//                     [HTTP_SEC_FETCH_MODE] => navigate
//                     [HTTP_SEC_FETCH_USER] => ?1
//                     [HTTP_SEC_FETCH_DEST] => document
//                     [HTTP_ACCEPT_ENCODING] => gzip, deflate, br, zstd
//                     [HTTP_ACCEPT_LANGUAGE] => en-IN,en-GB;q=0.9,en-US;q=0.8,en;q=0.7,te;q=0.6
//                     [HTTP_COOKIE] => XSRF-TOKEN=eyJpdiI6IjVkdGtib2ZmVWxuK3ppTGg1RFZJNUE9PSIsInZhbHVlIjoiazVlczc5cjhYOEVFZWNqcFFZN1ZYK21QODhNa0MzcTViYmlYNlg4NEFVY1BwZ1VINytRRmZ3SDdXTDk0SmwvWFgzczQwQ0Nsa00xQytKdVlBYUpaNC9LN204bFhvR0V0VXM0U0d2b1pVT3pkNzR0cFFEOHN0VnQ0b1lmdW8xMUUiLCJtYWMiOiI3NjlmZGJjNWM1OWJjNGM0NDAzYWQ2ZDg0YzQ3ZGIxYzA3MTkxNzMzYzlkZGYyMDE0ODU1M2JkM2Y1ZDY2ZTk4IiwidGFnIjoiIn0%3D; laravel-session=eyJpdiI6IkdZZWlPT21kRmtoTnU2V21OQW9oVGc9PSIsInZhbHVlIjoiNU9uOTNLSVMwYW1YaWkxK05Ic3JyL1dZemgwSkZtTnJGdkM3cmw3UE41S1lHREN5emZhK1l4OTk4a1NENXpFYWkyOTJ0MnVxdk9XcFJCWjUwaDJLdkhVbUxYMU1JMVE3ZDUrWWtYVDV2UkJiOXptV0ZGK2JDRlV2YVZuNml4UlYiLCJtYWMiOiJiMjg0ZWJlZTcyNDQ4MzIzMGM0NDgxMzQ0NmUyOWVmZmU4ZDZjNjhmYTEwYjc4OGRlZTk1MDJhYTYyODAxM2QyIiwidGFnIjoiIn0%3D
//                     [REQUEST_TIME_FLOAT] => 1762078137.4286
//                     [REQUEST_TIME] => 1762078137
//                 )

//         )

//     [files] => Symfony\Component\HttpFoundation\FileBag Object
//         (
//             [parameters:protected] => Array
//                 (
//                 )

//         )

//     [cookies] => Symfony\Component\HttpFoundation\InputBag Object
//         (
//             [parameters:protected] => Array
//                 (
//                     [XSRF-TOKEN] => eyJpdiI6IjVkdGtib2ZmVWxuK3ppTGg1RFZJNUE9PSIsInZhbHVlIjoiazVlczc5cjhYOEVFZWNqcFFZN1ZYK21QODhNa0MzcTViYmlYNlg4NEFVY1BwZ1VINytRRmZ3SDdXTDk0SmwvWFgzczQwQ0Nsa00xQytKdVlBYUpaNC9LN204bFhvR0V0VXM0U0d2b1pVT3pkNzR0cFFEOHN0VnQ0b1lmdW8xMUUiLCJtYWMiOiI3NjlmZGJjNWM1OWJjNGM0NDAzYWQ2ZDg0YzQ3ZGIxYzA3MTkxNzMzYzlkZGYyMDE0ODU1M2JkM2Y1ZDY2ZTk4IiwidGFnIjoiIn0=
//                     [laravel-session] => eyJpdiI6IkdZZWlPT21kRmtoTnU2V21OQW9oVGc9PSIsInZhbHVlIjoiNU9uOTNLSVMwYW1YaWkxK05Ic3JyL1dZemgwSkZtTnJGdkM3cmw3UE41S1lHREN5emZhK1l4OTk4a1NENXpFYWkyOTJ0MnVxdk9XcFJCWjUwaDJLdkhVbUxYMU1JMVE3ZDUrWWtYVDV2UkJiOXptV0ZGK2JDRlV2YVZuNml4UlYiLCJtYWMiOiJiMjg0ZWJlZTcyNDQ4MzIzMGM0NDgxMzQ0NmUyOWVmZmU4ZDZjNjhmYTEwYjc4OGRlZTk1MDJhYTYyODAxM2QyIiwidGFnIjoiIn0=
//                 )

//         )

//     [headers] => Symfony\Component\HttpFoundation\HeaderBag Object
//         (
//             [headers:protected] => Array
//                 (
//                     [host] => Array
//                         (
//                             [0] => 127.0.0.1:8000
//                         )

//                     [connection] => Array
//                         (
//                             [0] => keep-alive
//                         )

//                     [cache-control] => Array
//                         (
//                             [0] => max-age=0
//                         )

//                     [sec-ch-ua] => Array
//                         (
//                             [0] => "Google Chrome";v="141", "Not?A_Brand";v="8", "Chromium";v="141"
//                         )

//                     [sec-ch-ua-mobile] => Array
//                         (
//                             [0] => ?0
//                         )

//                     [sec-ch-ua-platform] => Array
//                         (
//                             [0] => "Windows"
//                         )

//                     [upgrade-insecure-requests] => Array
//                         (
//                             [0] => 1
//                         )

//                     [user-agent] => Array
//                         (
//                             [0] => Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/141.0.0.0 Safari/537.36
//                         )

//                     [accept] => Array
//                         (
//                             [0] => text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7
//                         )

//                     [sec-fetch-site] => Array
//                         (
//                             [0] => none
//                         )

//                     [sec-fetch-mode] => Array
//                         (
//                             [0] => navigate
//                         )

//                     [sec-fetch-user] => Array
//                         (
//                             [0] => ?1
//                         )

//                     [sec-fetch-dest] => Array
//                         (
//                             [0] => document
//                         )

//                     [accept-encoding] => Array
//                         (
//                             [0] => gzip, deflate, br, zstd
//                         )

//                     [accept-language] => Array
//                         (
//                             [0] => en-IN,en-GB;q=0.9,en-US;q=0.8,en;q=0.7,te;q=0.6
//                         )

//                     [cookie] => Array
//                         (
//                             [0] => XSRF-TOKEN=eyJpdiI6IjVkdGtib2ZmVWxuK3ppTGg1RFZJNUE9PSIsInZhbHVlIjoiazVlczc5cjhYOEVFZWNqcFFZN1ZYK21QODhNa0MzcTViYmlYNlg4NEFVY1BwZ1VINytRRmZ3SDdXTDk0SmwvWFgzczQwQ0Nsa00xQytKdVlBYUpaNC9LN204bFhvR0V0VXM0U0d2b1pVT3pkNzR0cFFEOHN0VnQ0b1lmdW8xMUUiLCJtYWMiOiI3NjlmZGJjNWM1OWJjNGM0NDAzYWQ2ZDg0YzQ3ZGIxYzA3MTkxNzMzYzlkZGYyMDE0ODU1M2JkM2Y1ZDY2ZTk4IiwidGFnIjoiIn0%3D; laravel-session=eyJpdiI6IkdZZWlPT21kRmtoTnU2V21OQW9oVGc9PSIsInZhbHVlIjoiNU9uOTNLSVMwYW1YaWkxK05Ic3JyL1dZemgwSkZtTnJGdkM3cmw3UE41S1lHREN5emZhK1l4OTk4a1NENXpFYWkyOTJ0MnVxdk9XcFJCWjUwaDJLdkhVbUxYMU1JMVE3ZDUrWWtYVDV2UkJiOXptV0ZGK2JDRlV2YVZuNml4UlYiLCJtYWMiOiJiMjg0ZWJlZTcyNDQ4MzIzMGM0NDgxMzQ0NmUyOWVmZmU4ZDZjNjhmYTEwYjc4OGRlZTk1MDJhYTYyODAxM2QyIiwidGFnIjoiIn0%3D
//                         )

//                 )

//             [cacheControl:protected] => Array
//                 (
//                     [max-age] => 0
//                 )

//         )

//     [content:protected] => 
//     [languages:protected] => 
//     [charsets:protected] => 
//     [encodings:protected] => 
//     [acceptableContentTypes:protected] => 
//     [pathInfo:protected] => /cron/update/ss/
//     [requestUri:protected] => /cron/update/ss/?age=20?name=%22sasank%22
//     [baseUrl:protected] => 
//     [basePath:protected] => 
//     [method:protected] => 
//     [format:protected] => 
//     [session:protected] => 
//     [locale:protected] => 
//     [defaultLocale:protected] => en
//     [preferredFormat:Symfony\Component\HttpFoundation\Request:private] => 
//     [isHostValid:Symfony\Component\HttpFoundation\Request:private] => 1
//     [isForwardedValid:Symfony\Component\HttpFoundation\Request:private] => 1
//     [trustedValuesCache:Symfony\Component\HttpFoundation\Request:private] => Array
//         (
//         )

//     [isIisRewrite:Symfony\Component\HttpFoundation\Request:private] => 
//     [json:protected] => 
//     [convertedFiles:protected] => 
//     [userResolver:protected] => 
//     [routeResolver:protected] => 
// )
// updatess

