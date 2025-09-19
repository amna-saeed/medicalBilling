@component('mail::message')
# Client Contact Request

**Service Type:** {{ $data['service_type'] }}  
**Healthcare Type:** {{ $data['healthcare_type'] }}  

**Name:** {{ $data['name'] }}  
**Email:** {{ $data['email'] }}  
**Phone:** {{ $data['phone'] }}  
**Website:** {{ $data['website'] ?? 'N/A' }}

Thanks,<br>
{{ config('app.name') }}
@endcomponent
