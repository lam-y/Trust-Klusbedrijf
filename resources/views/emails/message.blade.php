@component('mail::message')
# Introduction

**From:** {{ $contact->name }} <br>
**Email:** {{ $contact->email }} <br>
**Subject:** {{ $contact->subject }} <br>
**message:** ${{ $contact->message }} <br>

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
