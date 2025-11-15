@php $user = auth()->user(); @endphp
<x-sidebar.desktop-sidebar :user="$user" />
<x-sidebar.mobile-sidebar :user="$user" />
