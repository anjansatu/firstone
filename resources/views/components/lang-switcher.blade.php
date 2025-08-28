<div {{ $attributes->merge(['class' => 'flex space-x-2']) }}>
    <a href="{{ route('lang.switch', 'en') }}" class="text-sm {{ app()->getLocale() === 'en' ? 'font-bold underline' : '' }}">English</a>
    <a href="{{ route('lang.switch', 'bn') }}" class="text-sm {{ app()->getLocale() === 'bn' ? 'font-bold underline' : '' }}">বাংলা</a>
</div>
