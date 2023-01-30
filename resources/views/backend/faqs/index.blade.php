@extends('backend.layouts.app')

@section('content')

<div class="aiz-titlebar text-left mt-2 mb-3">
	<div class="row align-items-center">
		<div class="col-md-6">
			<h1 class="h3">{{translate('All Faqs')}}</h1>
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
        <h5 class="mb-0 h6">{{translate('Faqs')}}</h5>
    </div>
    <div class="card-body">
        <table class="table aiz-table">
            <thead>
                <tr>
                    <th width="10%">#</th>
                    <th>{{translate('title')}}</th>
                    <th>{{translate('Detail')}}</th>
                </tr>
            </thead>
            <tbody>
                @foreach($data as $key => $faq)
                    <tr>
                        <td>{{++$key}}</td>
                        <td>
                         {{ $faq->title }}
                        </td>
                        <td>
                         {{ $faq->description }}
                        </td>
                    </tr>
                @endforeach
            </tbody>

        </table>
        <div class="aiz-pagination">
        </div>
    </div>
</div>

@endsection

@section('modal')
    @include('modals.delete_modal')
@endsection
