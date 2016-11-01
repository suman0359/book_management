@extends('layouts.master')

@section('content')


<div class="row">
    <div class="col-sm-12">
        <div class="panel panel-default">
            <div class="panel-heading"><h3 class="panel-title">Form validationss</h3></div>
            <div class="panel-body">
                <div class="form">
                    <form class="cmxform form-horizontal tasi-form" id="commentForm" method="get" action="form-validation.html#" novalidate="novalidate">
                        <div class="form-group">
                            <label for="cname" class="control-label col-lg-2">Name (required)</label>
                            <div class="col-lg-10">
                                <input class="form-control" id="cname" name="name" type="text" required="" aria-required="true">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="cemail" class="control-label col-lg-2">E-Mail (required)</label>
                            <div class="col-lg-10">
                                <input class="form-control" id="cemail" type="email" name="email" required="" aria-required="true">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="curl" class="control-label col-lg-2">URL (optional)</label>
                            <div class="col-lg-10">
                                <input class="form-control" id="curl" type="url" name="url">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="ccomment" class="control-label col-lg-2">Your Comment (required)</label>
                            <div class="col-lg-10">
                                <textarea class="form-control" id="ccomment" name="comment" required="" aria-required="true"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-lg-offset-2 col-lg-10">
                                <button class="btn btn-success waves-effect waves-light" type="submit">Save</button>
                                <button class="btn btn-default waves-effect" type="button">Cancel</button>
                            </div>
                        </div>
                    </form>
                </div> <!-- .form -->
            </div> <!-- panel-body -->
        </div> <!-- panel -->
    </div> <!-- col -->

</div> <!-- End row -->
@endsection