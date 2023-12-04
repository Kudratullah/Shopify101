<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ \Osiset\ShopifyApp\Util::getShopifyConfig('app_name') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://cdn.shopify.com">
        <link href="https://cdn.shopify.com/static/fonts/inter/inter.css" rel="stylesheet" />

        <!-- Styles -->
        {{--<style>
            /* ! tailwindcss v3.2.4 | MIT License | https://tailwindcss.com */*,::after,::before{box-sizing:border-box;border-width:0;border-style:solid;border-color:#e5e7eb}::after,::before{--tw-content:''}html{line-height:1.5;-webkit-text-size-adjust:100%;-moz-tab-size:4;tab-size:4;font-family:Inter, sans-serif;font-feature-settings:normal}body{margin:0;line-height:inherit}hr{height:0;color:inherit;border-top-width:1px}abbr:where([title]){-webkit-text-decoration:underline dotted;text-decoration:underline dotted}h1,h2,h3,h4,h5,h6{font-size:inherit;font-weight:inherit}a{color:inherit;text-decoration:inherit}b,strong{font-weight:bolder}code,kbd,pre,samp{font-family:ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;font-size:1em}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sub{bottom:-.25em}sup{top:-.5em}table{text-indent:0;border-color:inherit;border-collapse:collapse}button,input,optgroup,select,textarea{font-family:inherit;font-size:100%;font-weight:inherit;line-height:inherit;color:inherit;margin:0;padding:0}button,select{text-transform:none}[type=button],[type=reset],[type=submit],button{-webkit-appearance:button;background-color:transparent;background-image:none}:-moz-focusring{outline:auto}:-moz-ui-invalid{box-shadow:none}progress{vertical-align:baseline}::-webkit-inner-spin-button,::-webkit-outer-spin-button{height:auto}[type=search]{-webkit-appearance:textfield;outline-offset:-2px}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}summary{display:list-item}blockquote,dd,dl,figure,h1,h2,h3,h4,h5,h6,hr,p,pre{margin:0}fieldset{margin:0;padding:0}legend{padding:0}menu,ol,ul{list-style:none;margin:0;padding:0}textarea{resize:vertical}input::placeholder,textarea::placeholder{opacity:1;color:#9ca3af}[role=button],button{cursor:pointer}:disabled{cursor:default}audio,canvas,embed,iframe,img,object,svg,video{display:block;vertical-align:middle}img,video{max-width:100%;height:auto}[hidden]{display:none}*, ::before, ::after{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::-webkit-backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }.relative{position:relative}.mx-auto{margin-left:auto;margin-right:auto}.mx-6{margin-left:1.5rem;margin-right:1.5rem}.ml-4{margin-left:1rem}.mt-16{margin-top:4rem}.mt-6{margin-top:1.5rem}.mt-4{margin-top:1rem}.-mt-px{margin-top:-1px}.mr-1{margin-right:0.25rem}.flex{display:flex}.inline-flex{display:inline-flex}.grid{display:grid}.h-16{height:4rem}.h-7{height:1.75rem}.h-6{height:1.5rem}.h-5{height:1.25rem}.min-h-screen{min-height:100vh}.w-auto{width:auto}.w-16{width:4rem}.w-7{width:1.75rem}.w-6{width:1.5rem}.w-5{width:1.25rem}.max-w-7xl{max-width:80rem}.shrink-0{flex-shrink:0}.scale-100{--tw-scale-x:1;--tw-scale-y:1;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}.grid-cols-1{grid-template-columns:repeat(1, minmax(0, 1fr))}.items-center{align-items:center}.justify-center{justify-content:center}.gap-6{gap:1.5rem}.gap-4{gap:1rem}.self-center{align-self:center}.rounded-lg{border-radius:0.5rem}.rounded-full{border-radius:9999px}.bg-gray-100{--tw-bg-opacity:1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.bg-white{--tw-bg-opacity:1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-red-50{--tw-bg-opacity:1;background-color:rgb(254 242 242 / var(--tw-bg-opacity))}.bg-dots-darker{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(0,0,0,0.07)'/%3E%3C/svg%3E")}.from-gray-700\/50{--tw-gradient-from:rgb(55 65 81 / 0.5);--tw-gradient-to:rgb(55 65 81 / 0);--tw-gradient-stops:var(--tw-gradient-from), var(--tw-gradient-to)}.via-transparent{--tw-gradient-to:rgb(0 0 0 / 0);--tw-gradient-stops:var(--tw-gradient-from), transparent, var(--tw-gradient-to)}.bg-center{background-position:center}.stroke-red-500{stroke:#ef4444}.stroke-gray-400{stroke:#9ca3af}.p-6{padding:1.5rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.text-center{text-align:center}.text-right{text-align:right}.text-xl{font-size:1.25rem;line-height:1.75rem}.text-sm{font-size:0.875rem;line-height:1.25rem}.font-semibold{font-weight:600}.leading-relaxed{line-height:1.625}.text-gray-600{--tw-text-opacity:1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity:1;color:rgb(107 114 128 / var(--tw-text-opacity))}.underline{-webkit-text-decoration-line:underline;text-decoration-line:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.shadow-2xl{--tw-shadow:0 25px 50px -12px rgb(0 0 0 / 0.25);--tw-shadow-colored:0 25px 50px -12px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.shadow-gray-500\/20{--tw-shadow-color:rgb(107 114 128 / 0.2);--tw-shadow:var(--tw-shadow-colored)}.transition-all{transition-property:all;transition-timing-function:cubic-bezier(0.4, 0, 0.2, 1);transition-duration:150ms}.selection\:bg-red-500 *::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white *::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.selection\:bg-red-500::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.hover\:text-gray-900:hover{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.hover\:text-gray-700:hover{--tw-text-opacity:1;color:rgb(55 65 81 / var(--tw-text-opacity))}.focus\:rounded-sm:focus{border-radius:0.125rem}.focus\:outline:focus{outline-style:solid}.focus\:outline-2:focus{outline-width:2px}.focus\:outline-red-500:focus{outline-color:#ef4444}.group:hover .group-hover\:stroke-gray-600{stroke:#4b5563}.z-10{z-index: 10}@media (prefers-reduced-motion: no-preference){.motion-safe\:hover\:scale-\[1\.01\]:hover{--tw-scale-x:1.01;--tw-scale-y:1.01;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}}@media (prefers-color-scheme: dark){.dark\:bg-gray-900{--tw-bg-opacity:1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.dark\:bg-gray-800\/50{background-color:rgb(31 41 55 / 0.5)}.dark\:bg-red-800\/20{background-color:rgb(153 27 27 / 0.2)}.dark\:bg-dots-lighter{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(255,255,255,0.07)'/%3E%3C/svg%3E")}.dark\:bg-gradient-to-bl{background-image:linear-gradient(to bottom left, var(--tw-gradient-stops))}.dark\:stroke-gray-600{stroke:#4b5563}.dark\:text-gray-400{--tw-text-opacity:1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-white{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:shadow-none{--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.dark\:ring-1{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)}.dark\:ring-inset{--tw-ring-inset:inset}.dark\:ring-white\/5{--tw-ring-color:rgb(255 255 255 / 0.05)}.dark\:hover\:text-white:hover{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.group:hover .dark\:group-hover\:stroke-gray-400{stroke:#9ca3af}}@media (min-width: 640px){.sm\:fixed{position:fixed}.sm\:top-0{top:0px}.sm\:right-0{right:0px}.sm\:ml-0{margin-left:0px}.sm\:flex{display:flex}.sm\:items-center{align-items:center}.sm\:justify-center{justify-content:center}.sm\:justify-between{justify-content:space-between}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width: 768px){.md\:grid-cols-2{grid-template-columns:repeat(2, minmax(0, 1fr))}}@media (min-width: 1024px){.lg\:gap-8{gap:2rem}.lg\:p-8{padding:2rem}}
        </style>--}}
        @vite('resources/css/app.css')

        @yield('styles')
    </head>

    <body class="antialiased">
        <div class="app-wrapper relative bg-gray-100 dark:bg-gray-800 selection:bg-red-500 selection:text-white">
            <div class="app-content">
                <header class="bg-gray-300 dark:bg-gray-950">
                    <div class="max-w-screen-xl mx-auto px-4 py-3 items-center justify-between text-white sm:flex md:px-8">
                        <div class="flex gap-x-4">
                            <div class="w-10 h-10 flex-none flex items-center justify-center">
                                <svg id="svg7727" height="48" viewBox="0 0 48 48" width="48" xmlns="http://www.w3.org/2000/svg" xmlns:cc="http://creativecommons.org/ns#" xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns:sodipodi="http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd" xmlns:svg="http://www.w3.org/2000/svg"><pattern id="EMFhbasepattern" height="6" patternUnits="userSpaceOnUse" width="6"/><pattern id="EMFhbasepattern-6" height="6" patternUnits="userSpaceOnUse" width="6"/><pattern id="EMFhbasepattern-9" height="6" patternUnits="userSpaceOnUse" width="6"/><pattern id="EMFhbasepattern-0" height="6" patternUnits="userSpaceOnUse" width="6"/><pattern id="EMFhbasepattern-1" height="6" patternUnits="userSpaceOnUse" width="6"/><pattern id="EMFhbasepattern-2" height="6" patternUnits="userSpaceOnUse" width="6"/><pattern id="EMFhbasepattern-5" height="6" patternUnits="userSpaceOnUse" width="6"/><pattern id="EMFhbasepattern-19" height="6" patternUnits="userSpaceOnUse" width="6"/><pattern id="EMFhbasepattern-17" height="6" patternUnits="userSpaceOnUse" width="6"/><pattern id="EMFhbasepattern-8" height="6" patternUnits="userSpaceOnUse" width="6"/><pattern id="EMFhbasepattern-22" height="6" patternUnits="userSpaceOnUse" width="6"/><pattern id="EMFhbasepattern-60" height="6" patternUnits="userSpaceOnUse" width="6"/><pattern id="EMFhbasepattern-54" height="6" patternUnits="userSpaceOnUse" width="6"/><pattern id="EMFhbasepattern-4" height="6" patternUnits="userSpaceOnUse" width="6"/><pattern id="EMFhbasepattern-48" height="6" patternUnits="userSpaceOnUse" width="6"/><pattern id="EMFhbasepattern-04" height="6" patternUnits="userSpaceOnUse" width="6"/><pattern id="EMFhbasepattern-14" height="6" patternUnits="userSpaceOnUse" width="6"/><pattern id="EMFhbasepattern-18" height="6" patternUnits="userSpaceOnUse" width="6"/><pattern id="EMFhbasepattern-50" height="6" patternUnits="userSpaceOnUse" width="6"/><pattern id="EMFhbasepattern-91" height="6" patternUnits="userSpaceOnUse" width="6"/><pattern id="EMFhbasepattern-05" height="6" patternUnits="userSpaceOnUse" width="6"/><pattern id="EMFhbasepattern-57" height="6" patternUnits="userSpaceOnUse" width="6"/><pattern id="EMFhbasepattern-59" height="6" patternUnits="userSpaceOnUse" width="6"/><pattern id="EMFhbasepattern-11" height="6" patternUnits="userSpaceOnUse" width="6"/><pattern id="EMFhbasepattern-7" height="6" patternUnits="userSpaceOnUse" width="6"/><pattern id="EMFhbasepattern-96" height="6" patternUnits="userSpaceOnUse" width="6"/><pattern id="EMFhbasepattern-95" height="6" patternUnits="userSpaceOnUse" width="6"/><g id="layer1" transform="translate(0 -1004.362)"><g id="g14710" transform="translate(-2008.558 -52.667)"><path id="path14693" d="m2056.5576 1081.0289a24 24 0 0 0 -24-24 24 24 0 0 0 -24 24 24 24 0 0 0 24 24 24 24 0 0 0 24-24z" fill="#ff9800"/><g id="g14708" fill="#fff" fill-rule="evenodd" transform="translate(725.788 -120.083)"><path id="path14696" d="m1295.0742 1187.1122 2.1289 1.2793a.50005.50005 0 0 1 .3164.5254v2.4453h18.5v-2.4336a.50005.50005 0 0 1 .3223-.543l2.123-1.2734z" text-indent="0" text-align="start" text-decoration-line="none" text-decoration-style="solid" text-decoration-color="#000000" text-transform="none" white-space="normal" isolation="auto" mix-blend-mode="normal" solid-color="#000000" solid-opacity="1"/><path id="path14698" d="m1318.5195 1188.2469-1.1933.7149 1.1933 1.1933z" text-indent="0" text-align="start" text-decoration-line="none" text-decoration-style="solid" text-decoration-color="#000000" text-transform="none" white-space="normal" isolation="auto" mix-blend-mode="normal" solid-color="#000000" solid-opacity="1"/><path id="path14700" d="m1296.5195 1190.0692-1.291 1.293h1.291z" text-indent="0" text-align="start" text-decoration-line="none" text-decoration-style="solid" text-decoration-color="#000000" text-transform="none" white-space="normal" isolation="auto" mix-blend-mode="normal" solid-color="#000000" solid-opacity="1"/><path id="path14702" d="m1317.0195 1190.0692v1.293h1.293z" text-indent="0" text-align="start" text-decoration-line="none" text-decoration-style="solid" text-decoration-color="#000000" text-transform="none" white-space="normal" isolation="auto" mix-blend-mode="normal" solid-color="#000000" solid-opacity="1"/><path id="path14704" d="m1294.5 172-.959 22.75h26.457l-.957-22.75zm8.0195 1c.8225 0 1.5.6775 1.5 1.5 0 .64684-.4209 1.19777-1 1.40625v2.34375c0 1.9389 1.5611 3.5 3.5 3.5h.5c1.939 0 3.5-1.5611 3.5-3.5v-2.34375c-.579-.20848-1-.75941-1-1.40625 0-.8225.6775-1.5 1.5-1.5s1.5.6775 1.5 1.5c0 .64684-.4209 1.19777-1 1.40625v2.34375c0 2.4794-2.0206 4.5-4.5 4.5h-.5c-2.4793 0-4.5-2.0206-4.5-4.5v-2.34375c-.579-.20848-1-.75941-1-1.40625 0-.8225.6775-1.5 1.5-1.5zm0 1c-.282 0-.5.218-.5.5 0 .2821.218.5.5.5.2821 0 .5-.2179.5-.5 0-.282-.2179-.5-.5-.5zm8.5 0c-.282 0-.5.218-.5.5 0 .2821.218.5.5.5.2821 0 .5-.2179.5-.5 0-.282-.2179-.5-.5-.5zm-4.7519 10.25h1v9h-1zm-6.9961 1.99219v.004c.8155 0 1.488.676 1.5 1.4961a.50004997.50004997 0 0 1 0 .0117v2c0 .8225-.6775 1.5-1.5 1.5a.50004997.50004997 0 0 1 -.012 0c-.8458-.015-1.5132-.70632-1.4922-1.51172v-1.98828c0-.8225.6775-1.5 1.5-1.5zm11.0019 0v.004c.8155 0 1.488.676 1.5 1.4961a.50004997.50004997 0 0 1 0 .0117v2c0 .8225-.6775 1.5-1.5 1.5a.50004997.50004997 0 0 1 -.012 0c-.8458-.015-1.5132-.70632-1.4922-1.51172v-1.98828c0-.8225.6775-1.5 1.5-1.5zm-7.039.0117a.50005.50005 0 0 1 .016 0 .50005.50005 0 0 1 .5156.49804v3.5h.4922a.50005.50005 0 1 1 0 1h-1.9844a.50005.50005 0 1 1 0-1h.4922v-2.68945l-.2696.13477a.5000966.5000966 0 1 1 -.4472-.89454l.9922-.49804a.50005.50005 0 0 1 .1914-.0508zm11.0019 0a.50005.50005 0 0 1 .016 0 .50005.50005 0 0 1 .5156.49804v3.5h.4922a.50005.50005 0 1 1 0 1h-1.9844a.50005.50005 0 1 1 0-1h.4922v-2.68945l-.2695.13477a.5000966.5000966 0 0 1 -.4473-.89454l.9922-.49804a.50005.50005 0 0 1 .1914-.0508zm-14.9648.99804c-.2821 0-.5.2179-.5.5v2a.50004997.50004997 0 0 1 0 .0137c-.01.23061.196.47243.5039.48243.2789 0 .4961-.2162.4961-.4961v-1.99218c0-.3087-.2097-.50782-.5-.50782zm11.0019 0c-.2821 0-.5.2179-.5.5v2a.50004997.50004997 0 0 1 0 .0137c-.01.23061.196.47243.5039.48243.2789 0 .4961-.2162.4961-.4961v-1.99218c0-.3087-.2097-.50782-.5-.50782z" transform="translate(0 1020.362)" text-indent="0" text-align="start" text-decoration-line="none" text-decoration-style="solid" text-decoration-color="#000000" text-transform="none" white-space="normal" isolation="auto" mix-blend-mode="normal" solid-color="#000000" solid-opacity="1"/><path id="path14706" d="m1295.0195 1188.2469 1.1934.7149-1.1934 1.1933z" text-indent="0" text-align="start" text-decoration-line="none" text-decoration-style="solid" text-decoration-color="#000000" text-transform="none" white-space="normal" isolation="auto" mix-blend-mode="normal" solid-color="#000000" solid-opacity="1"/></g></g></g></svg>
                            </div>
                            <div class="py-2 text-gray-600 dark:text-white font-medium">Shopify 101</div>
                        </div>
                        <ul class="nav flex space-x-5 items-center">
                            <li class="nav-item home font-medium text-gray-600 dark:text-gray-400">
                                <a href="{{ URL::tokenRoute('home') }}">Welcome</a>
                            </li>
                            <li class="nav-item collections font-medium text-gray-600 dark:text-gray-400">
                                <a href="{{ URL::tokenRoute('collections.index') }}">Collections</a>
                            </li>
                            <li class="nav-item products font-medium text-gray-600 dark:text-gray-400">
                                <a href="{{ URL::tokenRoute('products.index') }}">Products</a>
                            </li>
                            <li class="nav-item-mode-switch">
                                <button id="theme-toggle" type="button" class="text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-2.5">
                                    <svg id="theme-toggle-dark-icon" class="w-5 h-5 hidden" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path>
                                    </svg>
                                    <svg id="theme-toggle-light-icon" class="w-5 h-5 hidden" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z" fill-rule="evenodd" clip-rule="evenodd"></path>
                                    </svg>
                                </button>
                            </li>
                            <li class="nav-item-external source font-medium text-gray-600 dark:text-gray-400">
                                <a class="inline-flex" href="https://github.com/Kudratullah/Shopify101" target="_blank" rel="noopener">
                                    <svg class="fill-current w-6 h-6 mr-2" width="16" height="16" aria-hidden="true" viewBox="0 0 16 16" version="1.1">
                                        <path d="M8 0c4.42 0 8 3.58 8 8a8.013 8.013 0 0 1-5.45 7.59c-.4.08-.55-.17-.55-.38 0-.27.01-1.13.01-2.2 0-.75-.25-1.23-.54-1.48 1.78-.2 3.65-.88 3.65-3.95 0-.88-.31-1.59-.82-2.15.08-.2.36-1.02-.08-2.12 0 0-.67-.22-2.2.82-.64-.18-1.32-.27-2-.27-.68 0-1.36.09-2 .27-1.53-1.03-2.2-.82-2.2-.82-.44 1.1-.16 1.92-.08 2.12-.51.56-.82 1.28-.82 2.15 0 3.06 1.86 3.75 3.64 3.95-.23.2-.44.55-.51 1.07-.46.21-1.61.55-2.33-.66-.15-.24-.6-.83-1.23-.82-.67.01-.27.38.01.53.34.19.73.9.82 1.13.16.45.68 1.31 2.69.94 0 .67.01 1.3.01 1.49 0 .21-.15.45-.55.38A7.995 7.995 0 0 1 0 8c0-4.42 3.58-8 8-8Z"></path>
                                    </svg>
                                    Source Code
                                </a>
                            </li>
                        </ul>
                    </div>
                </header>
                <main role="main">
                    @yield('content')
                </main>
            </div>
        </div>

        @if(\Osiset\ShopifyApp\Util::getShopifyConfig('appbridge_enabled') && \Osiset\ShopifyApp\Util::useNativeAppBridge())
            <script src="{{config('shopify-app.appbridge_cdn_url') ?? 'https://unpkg.com'}}/@shopify/app-bridge{{ \Osiset\ShopifyApp\Util::getShopifyConfig('appbridge_version') ? '@'.config('shopify-app.appbridge_version') : '' }}"></script>
            <script
                @if(\Osiset\ShopifyApp\Util::getShopifyConfig('turbo_enabled'))
                    data-turbolinks-eval="false"
                @endif
            >
                var AppBridge = window['app-bridge'];
                // @link https://shopify.dev/docs/api/app-bridge/previous-versions/actions
                var actions = AppBridge.actions;
                var utils = AppBridge.utilities;
                var createApp = AppBridge.default;
                var app = createApp({
                    apiKey: "{{ \Osiset\ShopifyApp\Util::getShopifyConfig('api_key', $shopDomain ?? Auth::user()->name ) }}",
                    host: "{{ \Request::get('host') }}",
                    forceRedirect: true,
                });

                const AppLink = actions.AppLink;
                const NavigationMenu = actions.NavigationMenu;
                const activeRoute = '{{\Request::route()->getName()}}';
                const _routes = {
                    'collections.index': AppLink.create(app, { label: 'Collections', destination: '/collection' }),
                    'products.index': AppLink.create(app, { label: 'Products', destination: '/product' }),
                };
                // create NavigationMenu with no active links
                const navigationMenu = NavigationMenu.create(app, {
                    items: Object.values( _routes ),
                    // active: settingsLink,
                });

                if ( activeRoute ) {
                    if ( 'home' !== activeRoute && _routes.hasOwnProperty( activeRoute ) ) {
                        navigationMenu.set( {active: _routes[activeRoute]} );
                    }

                    document.addEventListener('DOMContentLoaded', function () {
                        const routeClass = activeRoute.split('.').shift();
                        const navItems = document.querySelectorAll( '.nav .nav-item' );
                        const naveActiveClasses = [ 'font-semibold','text-gray-900','dark:text-white' ]
                        navItems.forEach(function( item ){
                            const classList = item.classList;
                            //item.classList.remove( naveActiveClasses );
                            classList.remove.apply( classList, naveActiveClasses );
                            if ( classList.contains( routeClass ) ) {
                                classList.add.apply( classList, naveActiveClasses );
                            }
                        });
                    });
                }

                //console.log( { route: activeRoute} );

                @isset($pageTitle)
                actions.TitleBar.create(app, { title: 'Shopify 101 :: {{ $pageTitle }}' });
                @endisset
            </script>
            <script>

                var themeToggleDarkIcon = document.getElementById('theme-toggle-dark-icon');
                var themeToggleLightIcon = document.getElementById('theme-toggle-light-icon');

                // Change the icons inside the button based on previous settings
                if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
                    themeToggleLightIcon.classList.remove('hidden');
                } else {
                    themeToggleDarkIcon.classList.remove('hidden');
                }

                var themeToggleBtn = document.getElementById('theme-toggle');

                themeToggleBtn.addEventListener('click', function() {

                    // toggle icons inside button
                    themeToggleDarkIcon.classList.toggle('hidden');
                    themeToggleLightIcon.classList.toggle('hidden');

                    // if set via local storage previously
                    if (localStorage.getItem('color-theme')) {
                        if (localStorage.getItem('color-theme') === 'light') {
                            document.documentElement.classList.add('dark');
                            localStorage.setItem('color-theme', 'dark');
                        } else {
                            document.documentElement.classList.remove('dark');
                            localStorage.setItem('color-theme', 'light');
                        }

                        // if NOT set via local storage previously
                    } else {
                        if (document.documentElement.classList.contains('dark')) {
                            document.documentElement.classList.remove('dark');
                            localStorage.setItem('color-theme', 'light');
                        } else {
                            document.documentElement.classList.add('dark');
                            localStorage.setItem('color-theme', 'dark');
                        }
                    }
                });

                // It's best to inline this in `head` to avoid FOUC (flash of unstyled content) when changing pages or themes
                if ( localStorage.getItem( 'color-theme' ) === 'dark' || (
                    !(
                        'color-theme' in localStorage
                    ) && window.matchMedia( '(prefers-color-scheme: dark)' ).matches
                ) ) {
                    document.documentElement.classList.add( 'dark' );
                } else {
                    document.documentElement.classList.remove( 'dark' );
                }
            </script>

            @include('shopify-app::partials.token_handler')
            @include('shopify-app::partials.flash_messages')
            @include('partials.flash_messages')
        @endif

        @yield('scripts')
    </body>
</html>
