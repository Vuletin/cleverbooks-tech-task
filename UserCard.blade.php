{{-- 
    Reusable user card component
    Intended path in a real Laravel app:
    resources/views/components/user-card.blade.php
--}}

@props(['user'])

<div class="card mb-3">
    <div class="card-body">
        <h5 class="font-bold text-gray-800">
            {{ $user->name }}
        </h5>

        <p class="text-gray-500 mb-2">
            {{ $user->email }}
        </p>

        @if(isset($user->role) && $user->role === 'admin')
            <span class="inline-block px-2 py-1 text-xs font-bold text-white bg-red-500 rounded">
                Admin
            </span>
        @endif
    </div>
</div>
