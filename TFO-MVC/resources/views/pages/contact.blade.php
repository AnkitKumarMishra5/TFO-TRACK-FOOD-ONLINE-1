@extends('layouts.app')
@section('Contact Us','active')
@section('content')
            <div class="my-5">
                <div class="py-5">
                    <h2 class="text-center">Contact Us </h2>
                </div>
                <div class="w-50 m-auto contact">
                    <form action="" method="post">
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" name="user" autocomplete="off" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Email Id</label>
                            <input type="email" name="email" autocomplete="off" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Mobile No.</label>
                            <input type="text" name="mobile" autocomplete="off" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Comments</label>
                            <textarea class="form-control" rows="5"></textarea>
                        </div>
                        <button type="submit" class="btn btn-success" style="float:right;"> Submit </button>
                    </form>
                </div>
            </div>
@stop