<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Trend</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        
        <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Trend') }}
        </h2>
         </x-slot>
        
    </head>
    
    <body>
    <h1>Trends</h1>


    @foreach ($trends['storySummaries']['trendingStories'] as $story)
    <h2>{{ $story['title'] }}</h2>
    <p>{{ $story['shareUrl'] }}</p>
    {{-- その他の要素も表示する場合は適宜追加 --}}
　　@endforeach

    
    </body>
    </x-app-layout>
    
</html>
