@extends('layouts.app')

@section('content')
       <div class="row">
           <form>
               <div class="col-sm-5">
               <div class="card">
                   <div class="card-body">
                       <div class="form-group">
                           <button type="submit" id="art" class="btn-dark btn-lg">Art</button>
                           <button type="submit" id="film" class="btn-light btn-lg">Film</button>
                           <button type="submit" id="food-drink" class="btn-success btn-lg">Food & Drink</button>
                           <button type="submit" id="gen-knowledge" class="btn-info btn-lg">General Knowledge</button>
                           <button type="submit" id="geography" class="btn-warning btn-lg">Geography</button>
                       </div>
                   </div>
               </div>
               </div>
               <div class="col-sm-5">
               <div class="card">
                   <div class="card-body">
                       <div class="form-group">
                           <button type="submit" id="history" class="btn-secondary btn-lg">History</button>
                           <button type="submit" id="literature" class="btn-warning btn-lg">Literature</button>
                           <button type="submit" id="music " class="btn-light btn-lg">Music</button>
                           <button type="submit" id="politics" class="btn-success btn-lg">Politics</button>
                           <button type="submit" id="science" class="btn-danger btn-lg">Science</button>
                       </div>
                   </div>
               </div>
               </div>
               <div class="col-sm-5">
               <div class="card">
                   <div class="card-body">
                       <div class="form-group">
                           <button type="submit" id="sport" class="btn-info btn-lg">Sport</button>
                           <button type="submit" id="technology" class="btn-dark btn-lg">Technology</button>
                           <button type="submit" id="travel" class="btn-secondary btn-lg">Travel</button>
                           <button type="submit" id="tv" class="btn-success btn-lg">TV</button>
                           <button type="submit" id="random" class="btn-primary btn-lg">Random</button>
                       </div>
                   </div>
               </div>
               </div>
           </form>
       </div>

       <div class="row">
           <div class="col-sm-8">
           <div class="card text-black bg-light mb-3">
               <div class="card-body">
                   <h5 class="card-title">Question</h5>
                   <p class="card-text" id="question">Where is the original Starry Night by Vincent Van Gogh housed?{{ $question ?? '' }}</p>
               </div>
               <div class="card-footer text-muted">
                   <a href="#" class="btn btn-danger">Reveal Answer</a>
               </div>
           </div>
           </div>
       </div>


       <div class="row">
           <div class="col-sm-8">
           <div class="card text-black bg-white mb-3">
               <div class="card-body">
                   <h5 class="card-title">Answer</h5>
                   <p class="card-text text-muted" id="answer">#Placeholder for answer#{{ $answer ?? '' }}</p>
               </div>
               <div class="card-footer text-muted">
                   <a href="#" class="btn btn-primary">Hide Answer</a>
               </div>
           </div>
           </div>
       </div>
@endsection

@push('scripts')
<script>
    $(document).ready(function () {
        $(document).on('click', '#art', function (e) {
            e.preventDefault();


        });
    });
</script>
@endpush
