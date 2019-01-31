Cher client,
<br>
@if(count($submessage)>0)
@foreach($submessage as $sub)
    {{$sub->message}}
    @endforeach
    @endif
Cordialement,
<br>
L'équipe de Naturebio.