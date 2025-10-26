@props(['url'])
<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'Laravel')
{{-- <img src="https://hgarciardev.com/mj_glam_width.png" class="logo" width="150" alt="Laravel Logo" > --}}
@else
{!! $slot !!}
@endif
</a>
</td>
</tr>
