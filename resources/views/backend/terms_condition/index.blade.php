@extends('backend.layouts.app')

@section('content')

<div class="aiz-titlebar text-left mt-2 mb-3">
	<div class="row align-items-center">
		<div class="col-md-6">
			<!-- <h1 class="h3">{{translate('Terms & Condition')}}</h1> -->
		</div>
		<!-- <div class="col-md-6 text-md-right">
			<a href="{{ route('roles.create') }}" class="btn btn-circle btn-info">
				<span>{{translate('Add New Role')}}</span>
			</a>
		</div> -->
	</div>
</div>

<div class="card">
    <div class="card-header">
        <h5 class="mb-0 h6">{{translate('Terms & Condition')}}</h5>
    </div>
    <div class="card-body">
                @foreach($data as $key => $term)
                <tr>
                <form  action="{{route('saveTerm')}}" method="POST" enctype="multipart/form-data" id="choice_form">
                        @csrf
                        <div class="form-group row">
                            <label class="col-md-3 col-from-label">{{translate('Description')}}</label>
                            <div class="col-md-8">
                                <textarea class="aiz-text-editor" name="detail">
                                    {{ $term->detail }}
                                </textarea>
                            </div>
                        </div>
                        <div class="btn-group float-right" role="group" aria-label="Second group">
                            <button type="submit" name="button" value="publish" class="btn btn-success action-btn">{{ translate('Save & Publish') }}</button>
                        </div>
                </form>
                </tr>
                @endforeach
        <div class="aiz-pagination">
        </div>
    </div>
</div>

@endsection

@section('modal')
    @include('modals.delete_modal')
@endsection
