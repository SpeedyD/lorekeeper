@if($type == 1)
{!! Form::label('Subtype (Optional)') !!}
{!! Form::select('subtype_id', $subtypes, $image->subtype_id, ['class' => 'form-control', 'id' => 'subtype']) !!}
@elseif($type == 2)
{!! Form::label('Subtype Two (Optional)') !!}
{!! Form::select('subtype_id_2', $subtypes, $image->subtype_id_2, ['class' => 'form-control', 'id' => 'subtype_2']) !!}
@elseif($type == 3)
{!! Form::label('Subtype Three (Optional)') !!}
{!! Form::select('subtype_id_3', $subtypes, $image->subtype_id_3, ['class' => 'form-control', 'id' => 'subtype_3']) !!}
@endif
