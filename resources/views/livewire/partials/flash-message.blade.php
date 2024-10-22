<div x-data="{ show: true }" x-init="setTimeout(() => show = false, $timeout)" x-show="show" class="fixed {{ $position }}-0 z-50 flex items-center p-4 mb-4 text-sm font-medium text-white bg-{{ $color }}-600 rounded-lg shadow-md dark:bg-{{ $color }}-700">
    <span>{{ $message }}</span>
</div>
