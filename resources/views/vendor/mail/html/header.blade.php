@props(['url'])
<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'Laravel')
<img src="https://laravel.com/img/notification-logo.png" class="logo" alt="Laravel Logo">
@else
{{ $slot }}
<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQSzUzpzCl-b59PnxkvbZWmdwAhkXXxKhe5Yw&s" class="logo" alt="Laravel Logo">
@endif
</a>
</td>
</tr>
