<x-mail::message>
# New Post on {{ $website->name }}

Hello {{ $user->name }},

A new blog post titled "{{ $post->title }}" has been published on {{ $website->name }}.

## {{ $post->title }}

{{ $post->description }}

<x-mail::button :url="'{{ $website->url }}'">
    Read More
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
