{{-- @extends('errors.layout') --}}
@extends('front.layouts.new-layout')
@section('title', __('Error'))
@section('content')
    <style>
        .error-content {
            padding: 50px 0;
            text-align: center;

            & h1 {
                font-size: 10vw
            }

            & p {
                font-size: 1.5vw;
            }
        }

        @media (max-width:500px) {
            .error-content {
                text-align: center;

                & h1 {
                    font-size: 20vw
                }

                & p {
                    font-size: 3.5vw;
                }
            }
        }
    </style>
    <div class="error-content">
        <div class="row align-items-center">
            <div class="col-md-12">
                <h1 class="fw-bold text-uppercase font-zilla text-blue p-0 m-0">OOOps! 404</h1>
        <p class="bg-blue fw-bold w-fit mx-auto px-md-5 m-0 px-3 py-2">WE COULDN'T FIND THE PAGE YOU TRIED. </p>

            </div>

        </div>

    </div>
@endsection
