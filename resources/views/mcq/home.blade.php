@extends('layout.layout')

@section('content')
    <div class="card" style="width: 100%;">
        <div class="card-body">
            <h5 class="card-title">Q1. In which country The President Changes Regularly?</h5>
            {{-- question --}}
            {{-- <p class="card-text">Q1. In which country The President Changes Regularly?</p> --}}
            {{-- Answers --}}
            <div class="answers">
                {{-- Answer 1 --}}
            <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <input type="radio" name="answer"aria-label="Radio button for following text input">
                        Nepal
                        </div>
                    </div>
                </div>
                {{-- Answer 2 --}}
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <input type="radio" name="answer"aria-label="Radio button for following text input">
                        USA
                        </div>
                    </div>
                </div>
                {{-- answer 3 --}}
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <input type="radio" name="answer" aria-label="Radio button for following text input">
                        Bangla
                        </div>
                    </div>
                </div>
                {{-- answer 4 --}}
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <input type="radio" name="answer" aria-label="Radio button for following text input">
                        Switzerland
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
    <div class="card" style="width: 100%;">
            <div class="card-body">
                <h5 class="card-title">Q1. In which country The President Changes Regularly?</h5>
                {{-- question --}}
                {{-- <p class="card-text">Q1. In which country The President Changes Regularly?</p> --}}
                {{-- Answers --}}
                <div class="answers">
                    {{-- Answer 1 --}}
                <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <input type="radio" name="answer"aria-label="Radio button for following text input">
                            Nepal
                            </div>
                        </div>
                    </div>
                    {{-- Answer 2 --}}
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <input type="radio" name="answer"aria-label="Radio button for following text input">
                            USA
                            </div>
                        </div>
                    </div>
                    {{-- answer 3 --}}
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <input type="radio" name="answer" aria-label="Radio button for following text input">
                            Bangla
                            </div>
                        </div>
                    </div>
                    {{-- answer 4 --}}
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <input type="radio" name="answer" aria-label="Radio button for following text input">
                            Switzerland
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
@endsection