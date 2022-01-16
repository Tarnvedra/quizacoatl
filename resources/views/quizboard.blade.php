@extends('layouts.app')

@include('partials.nav')
@section('content')
       <div class="row">
           <form id="topic-selector" method="#" action="#">
               <div class="col-md-10">
               <div class="card">
                   <div class="card-body">
                       <div class="form-group">
                           @foreach($topics as $topic)
                           <button type="submit" id="{{ $topic->name }}" class="{{ $topic->class }}">{{ $topic->name }}</button>
                           @endforeach
                           <button type="submit" id="random" class="btn-primary btn-lg">Random</button>
                       </div>
                   </div>
               </div>
               </div>
           </form>
       </div>

       <div class="row"><question-component></question-component></div>
       <div class="row"><answer-component></answer-component></div>
    @include('partials.footer')
@endsection

@push('scripts')
<script>
    $(document).ready(function () {

    });
</script>
@endpush

