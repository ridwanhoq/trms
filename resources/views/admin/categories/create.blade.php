@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-12">
            {!! Form::open(['route' => 'categories.store']) !!}

            {{ csrf_token() }}

            <div class="card">
                <div class="card-header">
                    <div class="card-title">
                        <div class="col-6">
                            {{ __('Create ') . __('Category') }}
                        </div>
                        <div class="col-6 pull-right">
                            <a href="{{ url()->previous() }}">{{ __('Back') }}</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">

                    @include('admin.categories.fields')

                </div>
                <div class="card-footer">
                    {!! Form::submit('SAVE', ['class' => 'form-control']) !!}
                </div>

            </div>

            {!! Form::close() !!}

        </div>
    </div>
@endsection
