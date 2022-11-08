<div class="col-6">
    {!! Form::label('title_en', __('Title').__(' (en)')) !!}
    {!! Form::text('title_en', $data->title_en ?? null, ['class' => 'form-control', 'placeholder' => 'Enter category title in english here']) !!}
</div>

<div class="col-6">
    {!! Form::label('title_bn', __('Title').__(' (bn)')) !!}
    {!! Form::text('title_bn', $data->title_en ?? null, ['class' => 'form-control', 'placeholder' => 'Enter category title in bangla here']) !!}
</div>