@extends('layouts.scaffold')

@section('main')

<h1>Edit Page</h1>
{{ Form::model($page, array('method' => 'PATCH', 'route' => array('pages.update', $page->id))) }}
	<ul>
        <li>
            {{ Form::label('name', 'Name:') }}
            {{ Form::text('name') }}
        </li>

        <li>
            {{ Form::label('subtitle', 'Subtitle:') }}
            {{ Form::text('subtitle') }}
        </li>

        <li>
            {{ Form::label('markup', 'Markup:') }}
            {{ Form::textarea('markup') }}
        </li>

		<li>
			{{ Form::submit('Update', array('class' => 'btn btn-info')) }}
			{{ link_to_route('pages.show', 'Cancel', $page->id, array('class' => 'btn')) }}
		</li>
	</ul>
{{ Form::close() }}

@if ($errors->any())
	<ul>
		{{ implode('', $errors->all('<li class="error">:message</li>')) }}
	</ul>
@endif

@stop
