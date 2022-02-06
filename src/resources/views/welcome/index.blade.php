<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <link rel="stylesheet" href={{mix('/welcome/index.css')}}>
</head>
<body>
<header>

</header>
<main>
    <section class="first-section">
        <button class="button button_type_svg button_color_white">
            <svg viewBox="0 0 29 23">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M27.9 11.5 17.5 1.1M1 11.5H28 1Zm26.8 0L17.5 21.9l10.4-10.4Z"/>
            </svg>
        </button>
        <button class="button button_type_svg button_color_white-outline">
            <svg viewBox="0 0 29 23">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M27.9 11.5 17.5 1.1M1 11.5H28 1Zm26.8 0L17.5 21.9l10.4-10.4Z"/>
            </svg>
        </button>
        <button class="button button_type_svg button_color_orange">
            <svg viewBox="0 0 29 23">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M27.9 11.5 17.5 1.1M1 11.5H28 1Zm26.8 0L17.5 21.9l10.4-10.4Z"/>
            </svg>
        </button>
        <button class="button button_type_svg button_color_orange-outline">
            <svg viewBox="0 0 29 23">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M27.9 11.5 17.5 1.1M1 11.5H28 1Zm26.8 0L17.5 21.9l10.4-10.4Z"/>
            </svg>
        </button>
    </section>
</main>
<script src={{mix('/welcome/index.js')}}></script>
</body>
</html>
