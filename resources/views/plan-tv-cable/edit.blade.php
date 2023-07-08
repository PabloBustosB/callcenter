@extends('layouts.app')

@section('template_title')
    {{ __('Update') }} Plan Tv Cable
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Update') }} Plan Tv Cable</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('plan-tv-cables.update', $planTvCable->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('plan-tv-cable.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
